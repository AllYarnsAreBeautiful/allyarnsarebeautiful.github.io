---
layout: page
title: Development
permalink: /development/
---

## Development Information

### Hardware
For information about the KH-9xx hardware prerequisites and the Arduino shield, see [Hardware](/shield-hardware)

### Software
We tried to keep the communication between the knitting machine/controller and the host computer as simple as possible. Information about the API and the communication can be found at [Software](/shield-software).
With this knowledge it should be easy for you to code your own AYAB client software.

### Hardware emulation

To be able to develop a client-software without the access to a knitting machine and an AYAB Shield, there is the possibility of using this mode to mockup carriage operation only using your Arduino.

This mode is enabled by setting ```DBG_NOMACHINE``` to ```1``` in the file ```settings.h```

Additionally, you have to connect the following peripherals to your Arduino:

<img src="/assets/no_machine.png" width="50%">

```

 5V   +-----+             
            |             
          +-+-+           
          |   |           
          |   | 10k       
          |   |           
          +-+-+           
            |             
Pin7  +-----+ 
            |            
            + +           
              |           
              +--+        
            + + Pushbutton
            |             
GND   +-----+             

```
When this mode is enabled, pressing the button has the same effect as when the carriage reaches the end of a line. At the beginning of the operation, the button press intitializes the machine.

### Lost your carriage lock?

Maybe your Carriage Lock gets lost, with this you may create your own.

<img src="/assets/carriage_lock.jpg" width="50%">

### Internal Connectors

#### KH-910 Internal Connectors

**Very Important: You have to isolate the USB of the Arduino from the Power Connector to prevent short circuits!!**

|**Pin**|**Color**|**Description**
|
| **S1**
| 1     | orange | 16 V
| 2     | black  | GND
| 3     | black  | GND
| 4     | red    | 5 V
|
| **S2**
| 1     | green  | 16 V
| 2     | blue   | 16V
| 3     |        | solenoid 
| 4     |        | solenoid
| 5     |        | solenoid 
| 6     |        | solenoid
| 7     |        | solenoid 
| 8     |        | solenoid
| 9     |        | solenoid 
| 10    |        | solenoid
|
| **S3**
| 1     |        | solenoid
| 2     |        | solenoid
| 3     |        | solenoid 
| 4     |        | solenoid
| 5     |        | solenoid 
| 6     |        | solenoid
| 7     |        | solenoid 
| 8     |        | solenoid
|
|**S5**
| 1     | white  | 5 V
| 2     | black  | GND
| 3     | -      | - 
| 4     | red    | V2 - Needle counter (right fast)
| 5     | blue   | V1 - Needle counter (right slow)
| 6     | green  | Belt shift signal
| 7     | yellow | GND (?)
| 8     | black  | Hall sensor right
| 9     | red    | Scanner clock
| 10    | blue   | Scanner color (high: black, low: white)
|
| **S7**
| 1     | red    | Hall sensor left 
| 2     | black  | GND
| 3     | white  | 5 V

#### KH-930 Internal Connectors

|**Pin**|**Color**|**Description**
| **S1**
| 1     | orange  | >12 V (V_solenoid)
| 2     | black   | GND
| 3     | black   | GND
| 4     | red     | 5 V (V_logic)
| 5     | blue    | >10 V (V_help)
|
| **S2**
| 1     | white   | 5 V
| 2     | black   | GND
| 3     | red     | Hall sensor left (EOL_left)
|
| **S3**
| 1     | white   | V_logic
| 2     | grey    | GND
| 3     | brown   | V1
| 4     | blue    | V2
| 5     | green   | Belt shift signal
|
| **S4**
| 1     |         | solenoid F
| 2     |         | solenoid E
| 3     |         | solenoid D
| 4     |         | solenoid C
| 5     |         | solenoid B
| 6     |         | solenoid A
| 7     |         | solenoid 9
| 8     |         | solenoid 8
|
| **S5**
| 1     |         | solenoid 7
| 2     |         | solenoid 6
| 3     |         | solenoid 5
| 4     |         | solenoid 4
| 5     |         | solenoid 3
| 6     |         | solenoid 2
| 7     |         | solenoid 1
| 8     |         | solenoid 0
| 9     |         | V_solenoid
| 10    |         | V_solenoid
|
| **S6**
| 1     | white   | 5 V
| 2     | black   | GND
| 3     | red     | Hall sensor right (EOL_right)