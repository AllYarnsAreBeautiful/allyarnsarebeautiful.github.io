---
layout: page
title: Quick Start
permalink: /quick-start/
---

For details, refer to the [full-length AYAB manual](https://manual.ayab-knitting.com/).

### 1. Install the Hardware into your Machine

#### AYAB-Shield

[Installation Video](https://vimeo.com/99870358)

#### AYAB-Interface

[AYAB-Interface](/ayab-interface/)

### 2. Download and Install AYAB Software

[Information about this in the Software Section](/ayab-software/)

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

1. Make sure that the Arduino is connected to the computer via the USB cable and Port <br>
**(Advice: If this is the first-time installation of the firmware, the beeper might beep continuously. To prevent this, just unplug the beeper until the firmware has been uploaded for the first time)**
2. Start AYAB GUI
3. Menu **Tools -> Load AYAB Firmware**
4. Choose the port the Arduino is connected to <br>
  (probably **COM4** (Windows) or **/dev/ttyACM0** (Linux))
5. Choose your Arduino model (**UNO** or **MEGA**)
6. Choose the latest firmware version (**latest**)
7. Klick the **Flash** Button, wait 10 seconds
8. Close the Firmware Flashing Utility
9. The Arduino should now be ready to knit!

**Important for Linux Users:** \\
Before trying to flash the firmware, you have to make sure that your user has got sufficient rights to use the USB port:
```
sudo usermod -a -G tty [userName]
```

```
sudo usermod -a -G dialout [userName]
```

### 4. Knitting

Here is a [Video Tutorial by Zaubermerline](https://youtu.be/TTIm8ezC0HY) (german text):

1. Prepare your machine to knit patterns (knit some rows)
2. Make sure that the Arduino is connected to the computer via USB
3. Start AYAB GUI
4. Use **Load File** to open the image file with your pattern from the hard disk
5. Choose the port the Arduino is connected to <br>
  (probably **COM4** (Windows) or **/dev/ttyACM0** (Linux))
6. Configure the knitting parameters
  * Amount of colours (2 - 6, more than 2 are experimental currently)
  * Start Line
  * Start Needle/Stop Needle
  * Pattern position (left, centered, right)
  * Machine Type (Singlebed or Doublebed)
7. Click **Configure**
8. Click **Knit!**
9. Follow the instructions on the screen


<p><a href="https://github.com/AllYarnsAreBeautiful/ayab-desktop/issues"><button type="button" class="btn btn-lg btn-primary">Report a Problem!</button></a></p>
