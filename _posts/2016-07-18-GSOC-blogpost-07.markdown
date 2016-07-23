---
layout: post
title:  "Google Summer of Code 2016 Blogpost 7 - How to create a Windows Installer from tagged commits"
date:   2016-07-18 00:00:00
categories: FOSSASIA
---

I working on an open-source Python project, an editor for knit work called the “KnitEditor”. Development takes place at Github. Here, I would like to give some insight in how we automated deployment of the application to a Windows installer.

The process works like this:

1. Create a tag with git and push it to Github.
2. AppVeyor build the application.
3. AppVeyor pushes the application to the Github release.

### (1) Create a tag and push it

Tags should reflect the version of the software. Version “0.0.1” is in tag “v0.0.1”. We automated the tagging with the “setup.py” in the repository. Now, you can run

```
py -3.4 setup.py tag_and_deploy
```

Which checks that there is no such tag already. Several commits have the same version, so, we like to make sure that we do not have two versions with the same name. Also, this can only be executed on the master branch. This way, the software has gone through all the automated quality assurance. Here is the code from the setup.py:

```python
from distutils.core import Command
# ...
class TagAndDeployCommand(Command):

    description = "Create a git tag for this version and push it to origin."\
                  "To trigger a travis-ci build and and deploy."
    user_options = []
    name = "tag_and_deploy"
    remote = "origin"
    branch = "master"

    def initialize_options(self):
        pass

    def finalize_options(self):
        pass

    def run(self):
        if subprocess.call(["git", "--version"]) != 0:
            print("ERROR:\n\tPlease install git.")
            exit(1)
        status_lines = subprocess.check_output(
            ["git", "status"]).splitlines()
        current_branch = status_lines[0].strip().split()[-1].decode()
        print("On branch {}.".format(current_branch))
        if current_branch != self.branch:
            print("ERROR:\n\tNew tags can only be made from branch"
                  " \"{}\".".format(self.branch))
            print("\tYou can use \"git checkout {}\" to switch"
                  " the branch.".format(self.branch))
            exit(1)
        tags_output = subprocess.check_output(["git", "tag"])
        tags = [tag.strip().decode() for tag in tags_output.splitlines()]
        tag = "v" + __version__
        if tag in tags:
            print("Warning: \n\tTag {} already exists.".format(tag))
            print("\tEdit the version information in {}".format(
                    os.path.join(HERE, PACKAGE_NAME, "__init__.py")
                ))
        else:
            print("Creating tag \"{}\".".format(tag))
            subprocess.check_call(["git", "tag", tag])
        print("Pushing tag \"{}\" to remote \"{}\"."
              "".format(tag, self.remote))
        subprocess.check_call(["git", "push", self.remote, tag])
# ...
SETUPTOOLS_METADATA = dict(
# ...
    cmdclass={
# ...
        TagAndDeployCommand.name: TagAndDeployCommad
    },
)
# ...
if __name__ == "__main__":
    import setuptools
    METADATA.update(SETUPTOOLS_METADATA)
    setuptools.setup(**METADATA) # METADATA can be found in several other 
```

Above, you can see a “distutils” command that executed git through the command line interface.

### (2) AppVeyor builds the application

As mentioned above, you can configure AppVeyor to build your application. Here are some parts of the “appveyor.yml” file, that I comment on inline:

```yaml
# see https://packaging.python.org/appveyor/#adding-appveyor-support-to-your-project
environment:
  PYPI_USERNAME: niccokunzmann3
  PYPI_PASSWORD:
    secure: Gxrd9WI60wyczr9mHtiQHvJ45Oq0UyQZNrvUtKs2D5w=

  # For Python versions available on Appveyor, see
  # http://www.appveyor.com/docs/installed-software#python
  # The list here is complete (excluding Python 2.6, which
  # isn't covered by this document) at the time of writing.

  # we only need Python 3.4 for kivy
  PYTHON: "C:\\Python34"


install:
  - "%PYTHON%\\python.exe -m pip install docutils pygments pypiwin32 kivy.deps.sdl2 kivy.deps.glew"
  - "%PYTHON%\\python.exe -m pip install -r requirements.txt"
  - "%PYTHON%\\python.exe -m pip install -r test-requirements.txt"
  - "%PYTHON%\\python.exe setup.py install"
  
build_script:
- cmd: cmd /c windows-build\build.bat

test_script:
  # Put your test command here.
  # If you don't need to build C extensions on 64-bit Python 3.3 or 3.4,
  # you can remove "build.cmd" from the front of the command, as it's
  # only needed to support those cases.
  # Note that you must use the environment variable %PYTHON% to refer to
  # the interpreter you're using - Appveyor does not do anything special
  # to put the Python version you want to use on PATH.
  - windows-build\dist\KnitEditor\KnitEditor.exe /test
  - "%PYTHON%\\python.exe -m pytest --pep8 kniteditor"

artifacts:
  # bdist_wheel puts your built wheel in the dist directory
- path: dist/*
  name: distribution
- path: windows-build/dist/Installer/KnitEditorInstaller.exe
  name: installer
- path: windows-build/dist/KnitEditor
  name: standalone

deploy:
- provider: GitHub
  # http://www.appveyor.com/docs/deployment/github
  tag: $(APPVEYOR_REPO_TAG_NAME)
  description: "Release $(APPVEYOR_REPO_TAG_NAME)"
  auth_token:
    secure: j1EbCI55pgsetM/QyptIM/QDZC3SR1i4Xno6jjJt9MNQRHsBrFiod0dsuS9lpcC7
  artifact: installer
  force_update: true
  draft: false
  prerelease: false
  on:
    branch: master                 # release from master branch only
    appveyor_repo_tag: true        # deploy on tag push only
```

Note that the line

```
  - windows-build\dist\KnitEditor\KnitEditor.exe /test
```

executes the tests in the built application.

These commands are executed to build the application and are executed by this step:

build_script:

```
- cmd: cmd /c windows-build\build.bat
```

```
"%PYTHON%\python.exe" -m pip install pyinstaller
```

The line above installs pyinstaller

```
"%PYTHON%\python.exe" -m PyInstaller KnitEditor.spec
```

The line above uses pyinstaller to create an executable from the specification.

```
"Inno Setup 5\ISCC.exe" KnitEditor.iss
```

The line above uses [Inno Setup](http://www.jrsoftware.org/isinfo.php) to create the Installer for the built application.

### (3) Deploy to Github

As you can see in the “appveyor.yml” file, the resulting executable is listed as an artifact. Artifacts can be downloaded directly from appveyor or used to deploy. In this case, we use the github deploy, which can be customized via the UI of appveyor.

```
- path: windows-build/dist/Installer/KnitEditorInstaller.exe
  name: installer
deploy:
- provider: GitHub
  # http://www.appveyor.com/docs/deployment/github
  tag: $(APPVEYOR_REPO_TAG_NAME)
  description: "Release $(APPVEYOR_REPO_TAG_NAME)"
  auth_token:
    secure: j1EbCI55pgsetM/QyptIM/QDZC3SR1i4Xno6jjJt9MNQRHsBrFiod0dsuS9lpcC7
  artifact: installer
  force_update: true
  draft: false
  prerelease: false
  on:
    branch: master                 # release from master branch only
    appveyor_repo_tag: true        # deploy on tag push only
```

### Summary

Now, every time we push a tag to Github, AppVeyor build a new installer for our application.

--- Nicco Kunzmann