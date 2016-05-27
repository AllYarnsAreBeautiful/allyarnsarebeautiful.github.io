---
layout: page
title: Shield Hardware
permalink: /shield-hardware/
---

## Current Version: Shield v1.3TH (Through-Hole)

This shield version works only with **Arduino UNO**.<br>
AYAB **Firmware v0.8** is required for this shield version.

<img src="https://shop.thinkstack.de/2-thickbox_default/ayab-shield-loet-kit.jpg" width="50%">

Manufacturing Data:

* [Schematic](https://bitbucket.org/chris007de/ayab-apparat/raw/69e17f18b34db17ec81ac8188030affd33a133bd/hardware/10_ayab-arduino/through_hole/export/schematic.pdf?at=master)
* [Layout](https://bitbucket.org/chris007de/ayab-apparat/raw/69e17f18b34db17ec81ac8188030affd33a133bd/hardware/10_ayab-arduino/through_hole/export/arduino_shield.pdf?at=master)
* [Bill of Materials](https://bitbucket.org/chris007de/ayab-apparat/wiki/english/Hardware/Shield_v1-3TH)

Helpful documents:

* AYAB Shield Solder Instructions [english](https://bitbucket.org/chris007de/ayab-apparat/raw/a4fc476fb1cbce721c3514fe87bee1f4cca2068e/documents/Manuals/soldering/en/soldering_en.pdf)/[german](https://bitbucket.org/chris007de/ayab-apparat/raw/a4fc476fb1cbce721c3514fe87bee1f4cca2068e/documents/Manuals/soldering/de/soldering_de.pdf)
* How to solder? [english](http://mightyohm.com/files/soldercomic/FullSolderComic_EN.pdf)/[german](http://ayab-knitting.com/res/manuals/DE_SolderComic.pdf)

<p><a href="/how-to-get-ayab/"><button type="button" class="btn btn-lg btn-primary">How to get this shield?</button></a></p>

### Power connector

For all models except KH-900 and KH-965, Brother used a proprietary power connector.<br>
It is possible to build a replica of this connector using a piece of acrylic and 2.00mm^2 solid copper wire. <br>
The manufacturing data for the connector can be found [here](https://bitbucket.org/chris007de/ayab-apparat/raw/89ba48587c7d3574e0b1c690726eb17fa9bd0c91/hardware/05_connectors/kh9xx_power.pdf).

## Older Versions
Check [our wiki](https://bitbucket.org/chris007de/ayab-apparat/wiki/english/Hardware#!shield-versions) for more information about the older versions of the AYAB shield.<br>

* Shield v1.2
* Shield v1.1
* Shield v1.0 (KH-910 only!)

## General Description

Basically, the Arduino shield provides the connectors to interconnect the Knitting Machine with the Arduino. The Arduino has to read the Hall Sensors, the Needle Count signals and the Belt Shift signal. This is done directly by connecting the sensor signals to Arduino input pins. One of the Needle Count signals is attached to an Interrupt-capable pin of the Arduino to be able to process the information about the new position of the carriage in time. \\
The other part controls the actors of the knitting machine, the solenoids. As there are 16 solenoids to control, an Arduino UNO would not provide a sufficient amount of output pins for this purpose. Therefore, the solenoids are controlled using two 8 bit I2C port expanders. \\
Finally, the shield allows you to connect a beeper which will tell you acoustically about the current state of the machine and when you are allowed to proceed knitting. \\
For debug purposes, three LEDs (Power On, Debug 1 and Debug 2) are also located on the shield.

The implementation of the firmware follows the information found in the service manual of the KH-910. This includes the evaluation of the sensor signals and how the solenoids are set into the correct position at the right time.

The connectors of the Knitting Machine have a pin distance of 2.50 mm (respectively 2.0mm for some newer models). \\
Only the power connector (S1) is a pretty special type. As it was not possible to find a compatible connector, it was necessary to use the connector from the original control board of the knitting machine.
