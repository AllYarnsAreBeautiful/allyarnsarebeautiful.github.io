---
layout: page
title: Shield Hardware 1.1 and 1.2
permalink: /shield-hardware-1-1/
---

## This is not the current Version. See [Shield v1.4TH (Through-Hole)](/shield-hardware/) for current Version.

This Shield is the latest SMD Version. Not usable for self-soldering
It works with Arduino UNO and MEGA (both tested)

<img src="/assets/shields/1_1.jpg" width="50%">

Manufacturing Data:

* [Schematic](https://github.com/AllYarnsAreBeautiful/ayab-hardware/raw/v1.2/10_ayab-arduino/export/schematic.pdf)
* [Layout](https://github.com/AllYarnsAreBeautiful/ayab-hardware/raw/v1.2/10_ayab-arduino/export/arduino_shield.pdf)
* [GERBER](https://github.com/AllYarnsAreBeautiful/ayab-hardware/raw/v1.2/10_ayab-arduino/arduino_shield.zip)
* [Eagle Files](https://github.com/AllYarnsAreBeautiful/ayab-hardware/tree/v1.2/10_ayab-arduino)

### Power connector

For all models except KH-900 and KH-965, Brother used a proprietary power connector.<br>
It is possible to build a replica of this connector using a piece of acrylic and 2.00mm^2 solid copper wire. <br>
The manufacturing data for the connector can be found [here](https://github.com/AllYarnsAreBeautiful/ayab-hardware/raw/master/05_connectors/kh9xx_power.pdf).

## Other Versions

* [Shield v1.4TH](/shield-hardware/)
* [Shield v1.3TH](/shield-hardware-1-3/)
* [Shield v1.0 (KH-910 only!)](/shield-hardware-1-0/)

## General Description

Basically, the Arduino shield provides the connectors to interconnect the Knitting Machine with the Arduino. The Arduino has to read the Hall Sensors, the Needle Count signals and the Belt Shift signal. This is done directly by connecting the sensor signals to Arduino input pins. One of the Needle Count signals is attached to an Interrupt-capable pin of the Arduino to be able to process the information about the new position of the carriage in time. \\
The other part controls the actors of the knitting machine, the solenoids. As there are 16 solenoids to control, an Arduino UNO would not provide a sufficient amount of output pins for this purpose. Therefore, the solenoids are controlled using two 8 bit I2C port expanders. \\
Finally, the shield allows you to connect a beeper which will tell you acoustically about the current state of the machine and when you are allowed to proceed knitting. \\
For debug purposes, three LEDs (Power On, Debug 1 and Debug 2) are also located on the shield.

The implementation of the firmware follows the information found in the service manual of the KH-910. This includes the evaluation of the sensor signals and how the solenoids are set into the correct position at the right time.

The connectors of the Knitting Machine have a pin distance of 2.50 mm (respectively 2.0mm for some newer models). \\
Only the power connector (S1) is a pretty special type. As it was not possible to find a compatible connector, it was necessary to use the connector from the original control board of the knitting machine.

Dimensions: 2.7 inch (6,86 cm) x 2.1 inch (5,3 cm)

## Bill of Materials Base Shield

#### reichelt.de 

|**ID**            |**Amount** |**Order**        |**Description
|  LED1            |         1 | SMD-LED 0805 RT | Power on LED
|  LED2            |         1 | SMD-LED 0805 GE | Debug LED
|  LED3            |         1 | SMD-LED 0805 GN | Debug LED
|  --              |         1 | SUMMER 6V       | Beeper
|  IC1,IC2         |         2 | ULN 2803A       | Driver module
|  IC3,IC4         |         2 | PCF 8574 T      | I2C Port Expander
|  R1,R2           |         2 | SMD-0805 10K    | I2C Pullups
|  R3,R4,R5        |         3 | SMD-0805 150    | LED Resistors
|  --              |         1 | PSS 254/2G      | Connector for beeper
|  JP6             |         1 | PSK 254/2W      | Connector for beeper
|  --              |         1 | PSK-KONTAKTE    | Contacts for beeper
|  --              |         2 | GS 18           | Socket for ULN2803A
|  --              |         1 | SL 1X36G 2,54   | Connectors for Arduino
|  S1              |         1 | TASTER 9314     | Reset button (optional)
|  JP2,JP3,JP4,JP5 |         1 | SL 1X36G 2,54   | Connectors for KH-910


#### rs-online.com (Connectors for KH-930)

|**ID**  |**Amount** |**Order**        |**Description
|  J2,J7 |    2      | 687-8124        | Molex 5267 Pin Header 2.5 mm 3 Pins
|  J8    |         1 | 687-8127        | Molex 5267 Pin Header 2.5 mm 5 Pins
|  J3    |         1 | 720-6700        | Molex 5267 Pin Header 2.5 mm 8 Pins
|  J4    |         1 | 720-6703        | Molex 5267 Pin Header 2.5 mm 10 Pins