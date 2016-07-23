---
layout: post
title:  "Google Summer of Code 2016 Blogpost 9 - Deploying a Kivy Application with PyInstaller for Mac OSX with Travis CI to Github"
date:   2016-07-21 00:00:00
categories: FOSSASIA
---

In this sprint for the [kniteditor library](https://pypi.python.org/pypi/kniteditor) we focused on automatic deployment for Windows and Mac. The idea: whenever a tag is pushed to Github, a new travis build is triggered. The new built app is uploaded to Github as an “.dmg” file.

### Travis

Travis is configured with the “.travis.yml” file which you can see here:

```yaml
language: python

# see https://docs.travis-ci.com/user/multi-os/
matrix:
  include:
    - os: linux
      python: 3.4
    - os: osx
      language: generic
  allow_failures:
    - os: osx

install:
  - if [ "$TRAVIS_OS_NAME" == "osx"   ] ; then   mac-build/install.sh ; fi

script:
  - if [ "$TRAVIS_OS_NAME" == "osx"   ] ; then   mac-build/test.sh ; fi

before_deploy:
  - if [ "$TRAVIS_OS_NAME" == "osx"   ] ; then cp mac-build/dist/KnitEditor.dmg /Users/travis/KnitEditor.dmg ; fi

deploy:
  # see https://docs.travis-ci.com/user/deployment/releases/
  - provider: releases
    api_key:
      secure: v18ZcrXkIMgyb7mIrKWJYCXMpBmIGYWXhKul4/PL/TVpxtg2f/zfg08qHju7mWnAZYApjTV/EjOwWCtqn/hm2CfPFo=
    file: /Users/travis/KnitEditor.dmg
    on:
      tags: true
      condition:  "\"$TRAVIS_OS_NAME\" == \"osx\""
      repo: AllYarnsAreBeautiful/kniteditor
```

Note that it builds both Linux and OSX. Thus, for each step one must distinguish. Here, only the OSX parts are shown. These steps are executed:

1. Installation. The app and dmg files are built.
2. Testing. The tests are shipped with the app in our case. This allows us to execute them at many more locations – where the user is.
3. Before Deploy. Somehow Travis did not manage to upload from the original location. Maybe it was a bug. Thus, a absolute path was created for the use in (4).
4. Deployment to github. In this case we use an API key. One could also use a password.

Installation:

```bash
#!/bin/bash
#
# execute with --user to pip install in the user home
#
set -e

HERE="`dirname \"$0\"`"
USER="$1"
cd "$HERE"

brew update

echo "# install python3"
brew install python3
echo -n "Python version: "
python3 --version
python3 -m pip install --upgrade pip

echo "# install pygame"
python3 -m pip uninstall -y pygame || true
# locally compiled pygame version
# see https://bitbucket.org/pygame/pygame/issues/82/homebrew-on-leopard-fails-to-install#comment-636765
brew install sdl sdl_image sdl_mixer sdl_ttf portmidi
brew install mercurial || true
python3 -m pip install $USER hg+http://bitbucket.org/pygame/pygame

echo "# install kivy dependencies"
brew install sdl2 sdl2_image sdl2_ttf sdl2_mixer gstreamer

echo "# install requirements"
python3 -m pip install $USER -I Cython==0.23 \
                       --install-option="--no-cython-compile"
USE_OSX_FRAMEWORKS=0 python3 -m pip install $USER kivy
python3 -m pip uninstall -y Cython==0.23
python3 -m pip install $USER -r ../requirements.txt
python3 -m pip install $USER -r ../test-requirements.txt
python3 -m pip install $USER PyInstaller

./build.sh $USER
```

The first step is to update brew. It cost me 4 hours to find this bug, 2 hours to work around it before. If brew is not updated, Python 3.4 is installed instead of Python 3.5.

Then, Python, Pygame as the window provider for Kivy is installed, and the other requirements. It goes on with the build step. While installation is executed once on a personal Mac, the build step is executed several times, when the source code is changed.

```bash
#!/bin/bash
#
# execute with --user to make pip install in the user home
#
set -e

HERE="`dirname \"$0\"`"
USER="$1"
cd "$HERE"

(
  cd ..

  echo "# removing old installation of kniteditor"
  python3 -m pip uninstall -y kniteditor || true

  echo "# build the distribution"
  python3 -m pip install $USER wheel
  python3 setup.py sdist --formats=zip
  python3 setup.py bdist_wheel
  python3 -m pip uninstall -y wheel

  echo "# install the current version from the build"
  python3 -m pip install $USER --upgrade dist/kniteditor-`linux-build/package_version`.zip

  echo "# install test requirements"
  python3 -m pip install $USER --upgrade -r test-requirements.txt
)

echo "# build the app"
# see https://pythonhosted.org/PyInstaller/usage.html
python3 -m PyInstaller -d -y KnitEditor.spec

echo "# create the .dmg file"
# see http://stackoverflow.com/a/367826/1320237
KNITEDITOR_DMG="`pwd`/dist/KnitEditor.dmg"
rm -f "$KNITEDITOR_DMG"
hdiutil create -srcfolder dist/KnitEditor.app "$KNITEDITOR_DMG"

echo "The installer can be found in \"$KNITEDITOR_DMG\"."
```

In the first steps we install the kniteditor from the built “sdist”  zip file. This way we can uninstall it with pip. Also, the dependencies are installed. Then, PyInstaller is invoked with a spec and then the .dmg file is created.

The spec looks like this:

```
# -*- mode: python -*-

import sys
site_packages = [path for path in sys.path if path.rstrip("/\\").endswith('site-packages')]
print("site_packages:", site_packages)

from kivy.tools.packaging.pyinstaller_hooks import get_deps_all, \
    hookspath, runtime_hooks

block_cipher = None

added_files = [(site_packages_, ".") for site_packages_ in site_packages]

kwargs = get_deps_all()
kwargs["datas"] = added_files
kwargs["hiddenimports"] += ['queue', 'unittest', 'unittest.mock']


a = Analysis(['_KnitEditor.py'],
             pathex=[],
             binaries=None,
             win_no_prefer_redirects=False,
             win_private_assemblies=False,
             cipher=block_cipher,
             hookspath=hookspath(),
             runtime_hooks=runtime_hooks(),
             **kwargs)
pyz = PYZ(a.pure, a.zipped_data,
             cipher=block_cipher)
exe = EXE(pyz,
          a.scripts,
          exclude_binaries=True,
          name='KnitEditorX',
          debug=False,
          strip=False,
          upx=True,
          console=True )
coll = COLLECT(exe,
               a.binaries,
               a.zipfiles,
               a.datas,
               strip=False,
               upx=True,
               name='KnitEditor')
app = BUNDLE(coll,
             name='KnitEditor.app',
             icon=None,
             bundle_identifier="com.ayab-knitting.KnitEditor")
```

Note, that all files in all site-packages are included. This way, we do not need to cope with missing modules. Also, there are three different names for

* the entry script “_KnitEditor.py”
* the executable “KnitEditorX”
* the library “kniteditor”


While on the command line, OSX is case sensitive, it is not sensitive on the file system. Thus, if one of the names is the same, we can get errors durig the PyInstaller build.

### Lessons learned

Do “brew update” on travis.

Use absolute paths for deployment on Mac OSX travis.

Never use the same names in PyInstaller for the main script, a library and the executable. Otherwise you get a “not a directory” or “not a file” error.

Travis OSX build max out from time to time. It is much faster to have a Mac computer there, to create the scripts.

--- Nicco Kunzmann