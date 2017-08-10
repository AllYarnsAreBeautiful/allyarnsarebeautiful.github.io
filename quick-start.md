---
layout: page
title: Quick Start
permalink: /quick-start/
---

## Quick Start

or you have a look at this [nice tutorial by Claire Williams](http://xxxclairewilliamsxxx.wordpress.com/hack-ta-machine-a-tricoter/hack-your-knitting-machine-tutorial/)

### 1. Install the Hardware into your Machine

#### AYAB-Shield

[Installation Video](https://vimeo.com/99870358)

#### AYAB-Interface

[AYAB-Interface](/ayab-interface/)

### 2. Download and Install AYAB Software
Windows:
<p><a href="http://andz.net/ayab/res/ayab-0.80-windows.exe" target="_blank"><button type="button" class="btn btn-lg btn-primary">AYAB 0.80 (Windows)</button></a></p>

Run the downloaded file and install to the proposed folder.

Linux:

<p><a href="https://pypi.python.org/pypi/ayab/0.80" target="_blank"><button type="button" class="btn btn-lg btn-primary">AYAB 0.80 (Linux)</button></a></p>

Follow the installation instructions described on PyPi.

### 3. Installation of the Arduino Driver
**Windows:** \\
In the case you do NOT have the [Arduino IDE](http://www.arduino.cc) on the computer already: \\
To install the Arduino Driver, run the following for 64 bit Windows:\\
```
C:\ayab-windows\drivers\dpinst-amd64.exe
```

or this for 32 bit Windows: \\
```
C:\ayab-windows\drivers\dpinst-x86.exe
```

**Linux:** \\
not necessary, it is assumed that avrdude is available in the PATH

### 4. Running the AYAB Software
**Windows:** \\
Run `ayab.exe` from the installation folder

**Linux:** \\
```
ayab
```

### 5. Flashing (loading) the AYAB Firmware into the Arduino (necessary first time only – unless you have loaded other software recently!)

(find a video tutorial [https://vimeo.com/105064325](here))

* Make sure that the Arduino is connected to the computer via the USB cable and Port <br>
**(Advice: If this is the first-time installation of the firmware, the beeper might beep continuously. To prevent this, just unplug the beeper until the firmware has been uploaded for the first time)**
* Start AYAB GUI
* Menu **Tools -> Load AYAB Firmware**
* Choose the port the Arduino is connected to <br>
  (probably **COM4** (Windows) or **/dev/ttyACM0** (Linux))
* Choose your Arduino model (**UNO** or **MEGA**)
* Choose the latest firmware version (**latest**)
* Klick the **Flash** Button, wait 10 seconds
* Close the Firmware Flashing Utility
* The Arduino should now be ready to knit!

**Important for Linux Users:** \\
Before trying to flash the firmware, you have to make sure that your user has got sufficient rights to use the USB port:
```
sudo usermod -a -G tty [userName]
```

```
sudo usermod -a -G dialout [userName]
```


### 6. Knitting

Here is a [Video Tutorial by Zaubermerline](https://youtu.be/TTIm8ezC0HY) (german text):

* Prepare your machine to knit patterns (knit some rows)
* Make sure that the Arduino is connected to the computer via USB
* Start AYAB GUI
* Use **Load File** to open the image file with your pattern from the hard disk
* Choose the port the Arduino is connected to <br>
  (probably **COM4** (Windows) or **/dev/ttyACM0** (Linux))
* Configure the knitting parameters
  * Amount of colours (2 - 6, more than 2 are experimental currently)
  * Start Line
  * Start Needle/Stop Needle
  * Pattern position (left, centered, right)
  * Machine Type (Singlebed or Doublebed)
* Click **Configure**
* Click **Knit!**
* Follow the instructions on the screen


<p><a href="http://issues.ayab-knitting.com"><button type="button" class="btn btn-lg btn-primary">Report a Problem!</button></a></p>
