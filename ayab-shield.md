---
layout: page
title: AYAB Shield
permalink: /ayab-shield/
---

## Current Version: Shield v1.4TH (Through-Hole)

This shield version works only with **Arduino UNO**.<br>
AYAB **Firmware v0.8** or greater is required for this shield version.
The main difference to the 1.3TH are the additional 2.0mm Connectors for KH-900 and CK-35

<img src="/assets/shields/1_4.jpg" width="50%">

Manufacturing Data:

* [Schematic](https://github.com/AllYarnsAreBeautiful/ayab-hardware/raw/master/Shieldv1x/10_ayab-arduino/through_hole/export/schematic.pdf)
* [Layout](https://github.com/AllYarnsAreBeautiful/ayab-hardware/raw/master/Shieldv1x/10_ayab-arduino/through_hole/export/arduino_shield.pdf)
* [Eagle Files](https://github.com/AllYarnsAreBeautiful/ayab-hardware/tree/master/Shieldv1x/10_ayab-arduino/through_hole)

Helpful documents:

* AYAB Shield Solder Instructions [english](https://github.com/AllYarnsAreBeautiful/ayab-desktop/raw/master/documents/Manuals/soldering/en/soldering_en.pdf)/[german](https://github.com/AllYarnsAreBeautiful/ayab-desktop/raw/master/documents/Manuals/soldering/de/soldering_de.pdf)
* How to solder? [english](http://mightyohm.com/files/soldercomic/FullSolderComic_EN.pdf)/[german](http://ayab-knitting.com/res/manuals/DE_SolderComic.pdf)

<p><a href="/how-to-get-ayab/"><button type="button" class="btn btn-lg btn-primary">How to get this shield?</button></a></p>

### Power connector

For all models except KH-900 and KH-965, Brother used a proprietary power connector.<br>
It is possible to build a replica of this connector using a piece of acrylic and 2.00mm^2 solid copper wire. <br>
The manufacturing data for the connector can be found [here](https://github.com/AllYarnsAreBeautiful/ayab-hardware/raw/master/05_connectors/kh9xx_power.pdf).

## Other Versions

* [Shield v1.3TH](/shield-hardware-1-3/)
* [Shield v1.1 and v1.2 (SMD)](/shield-hardware-1-1/)
* [Shield v1.0 (KH-910 only!)](/shield-hardware-1-0/)

## General Description

Basically, the Arduino shield provides the connectors to interconnect the Knitting Machine with the Arduino. The Arduino has to read the Hall Sensors, the Needle Count signals and the Belt Shift signal. This is done directly by connecting the sensor signals to Arduino input pins. One of the Needle Count signals is attached to an Interrupt-capable pin of the Arduino to be able to process the information about the new position of the carriage in time. \\
The other part controls the actors of the knitting machine, the solenoids. As there are 16 solenoids to control, an Arduino UNO would not provide a sufficient amount of output pins for this purpose. Therefore, the solenoids are controlled using two 8 bit I2C port expanders. \\
Finally, the shield allows you to connect a beeper which will tell you acoustically about the current state of the machine and when you are allowed to proceed knitting. \\
For debug purposes, three LEDs (Power On, Debug 1 and Debug 2) are also located on the shield.

The implementation of the firmware follows the information found in the service manual of the KH-910. This includes the evaluation of the sensor signals and how the solenoids are set into the correct position at the right time.

The connectors of the Knitting Machine have a pin distance of 2.50 mm (respectively 2.0mm for some newer models). \\
Only the power connector (S1) is a pretty special type. As it was not possible to find a compatible connector, it was necessary to use the connector from the original control board of the knitting machine.

## Bill of Materials Base Shield

#### reichelt.de

| **ID**    | **Amount**  | **Order#**      | **Description**
|  R1,R2    |           2 | 1/4W 10K        | I2C Pullups, 10k Ohm
|  R3,R4,R5 |           3 | 1/4W 150        | LED Resistors, 150 Ohm
|  LED1     |           1 | LED 3MM RT      | Power LED red, 3mm
|  LED2     |           1 | LED 3MM GE      | Debug LED yellow, 3mm
|  LED3     |           1 | LED 3MM GN      | Debug LED green, 3mm
|  JP9,ARD  |           1 | SL 1X36G 2,54   | Arduino Connector Pins and I2C
|  IC1,IC2  |           2 | ULN 2803A       | Darlington Array (Driver)
|  JP6      |           1 | PSK 254/2W      | Connector for beeper
|  --       |           1 | PSS 254/2G      | Connector for beeper
|  --       |           1 | PSK-KONTAKTE    | Contacts for beeper
|  --       |           1 | SUMMER 6V       | Beeper

#### rs-online.com

| **ID**    | **Amount**  | **Order#**      | **Description**
|  IC3,IC4  |           2 | 403-563         |  MCP23008-E/P I2C Port-Expander

#### digikey.com

| **ID**    | **Amount**  | **Order#**      | **Description**
|  R1,R2    |           2 | CF14JT10K0CT-ND | I2C Pullups, 10k Ohm
|  R3,R4,R5 |           3 | CF14JT150RCT-ND | LED Resistors, 150 Ohm
|  LED1     |           1 | 754-1218-ND     | Power LED red, 3mm
|  LED2     |           1 | 754-1220-ND     | Debug LED yellow, 3mm
|  LED3     |           1 | 754-1217-ND     | Debug LED green, 3mm
|  ARD1     |           1 | 952-1843-ND     | Arduino Connector Pins 10 pin (*)
|  ARD2,ARD3|           2 | 952-2271-ND     | Arduino Connector Pins  8 pin (*)
|  ARD4     |           1 | 952-2270-ND     | Arduino Connector Pins  6 pin (*)
|  JP9      |           1 | 952-2265-ND     | Optional jumper for color changer 4 pin (*)
|  IC1,IC2  |           2 | ULN2803APGCN-ND | Darlington Array (Driver)
|  IC3,IC4  |           2 | MCP23008-E/P-ND | MCP23008-E/P I2C Port-Expander
|  JP6      |           1 | A1921-ND        | Connector for beeper HEADER VERT 2POS
|  --       |           1 | A31024-ND       | Connector for beeper 2POS 26AWG MTA100
|  --       |           1 | 458-1353-ND     | Beeper
|  *        |             | 952-1943-ND     | breakaway Connector Pins 36 pin


##  Bill of Materials KH910/950 Connectors

| **ID**    | **Amount**  | **Order#**      | **Description**
|  JP1      |          1  | 1/4W 10K        | Power Connector, not orderable online.

#### reichelt.de

| **ID**    | **Amount**  | **Order#**      | **Description**
|  JP2, JP5 |          1  | SL 1X36G 2,54   | Machine-Sensor Connectors
|  JP3, JP4 |          1  | SL 1X36W 2,54   | Solenoid Connectors, angled
|  --       |          1  | AWG 28-10F 3M   | Extension Cable for JP2

#### digikey.com

| **ID**    | **Amount**  | **Order#**      | **Description**
|  JP2      |          1  | 952-2263-ND     | Machine-Sensor Connectors 3pin (*)
|  JP3      |          1  | 952-1997-ND     | Solenoid Connectors, angled  8 pin (+)
|  JP4      |          1  | 952-2250-ND     | Solenoid Connectors, angled 10 pin (+)
|  JP5      |          1  | 952-1843-ND     | Machine-Sensor Connectors 10 pin (*)
|  --       |          1  | MC090M-5-ND     | Extension Cable for JP2 (5ft only need 1, 9 connector only need 3)
|  *        |             | 952-1943-ND     | breakaway Connector Pins 36 pin
|  +        |             | 952-2328-ND     | breakaway Connector Pins 36 pin, angled

##  Bill of Materials KH930 Connectors

| **ID**    | **Amount**  | **Order#**      | **Description**
|  JP1      |          1  | 1/4W 10K        | Power Connector, not orderable online.

#### reichelt.de

| **ID**    | **Amount**  | **Order#**      | **Description**
|  --       |          1  | AWG 28-10F 3M   | Extension Cable for JP2

#### rs-online.com

| **ID**    | **Amount**  | **Order#**      | **Description**
|  JP2,JP7  |           2 | 687-8124        | Molex 5267 Pin Header 2.5 mm 3 Pins
|  JP8      |           1 | 687-8127        | Molex 5267 Pin Header 2.5 mm 5 Pins
|  JP3      |           1 | 720-6700        | Molex 5267 Pin Header 2.5 mm 8 Pins
|  JP4      |           1 | 720-6703        | Molex 5267 Pin Header 2.5 mm 10 Pins

#### digikey.com

| **ID**    | **Amount**  | **Order#**      | **Description**
|  JP2,JP7  |           2 | WM18887-ND      | Molex 5267 Pin Header 2.5 mm 3 Pins
|  JP8      |           1 | WM18889-ND      | Molex 5267 Pin Header 2.5 mm 5 Pins
|  JP3      |           1 | WM18892-ND      | Molex 5267 Pin Header 2.5 mm 8 Pins
|  JP4      |           1 | WM18894-ND      | Molex 5267 Pin Header 2.5 mm 10 Pins
|  --       |           1 | MC090M-5-ND     | Extension Cable for JP2 (5 foot only need 1, 9 connector only need 3)
