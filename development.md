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

### Serial Communication

115200 baud \\
Line Ending: \n\r (10 13)

#### Sequence Chart
<img src="/assets/serial_communication.png">

#### Message identifier format

0b"**AB**rr **CCCC**"

|A   | message source     | *0 = host*    | *1 = hardware*
|B   | message type       | *0 = request* | *1 = confirm*
|r   | reserved           |
|CCCC| message identifier |

#### Message definitions (API v5)

|**name**  |**source**|**id**|**parameters** | |**length incl id**|**description**
| reqStart | host     | 0x01 | 0xaa 0xbb 0xcc | *aa = machine type (see below)*<br>*bb = startNeedle (Range: 0..198)*<br>*cc = stopNeedle (Range: 1..199)*    | 4 | -
| cnfStart | hardware | 0xC1 | 0x0a           | *a = success (0 = false, 1 = true* | 2  | -
| reqLine  | hardware | 0x82 | 0xaa           | *aa = lineNumber (Range: 0..255*   | 2  | -
| cnfLine  | host     | 0x42 | 0xaa 0xbb[24] 0xbb[..] 0xbb[0] 0xcc 0xdd | *aa = lineNumber (Range: 0..255*<br>*bb[] = binary pixel data*<br>*cc = flags (bit 0: lastLine*<br>*dd = CRC8 Checksum* | 29 | -
| reqInfo  | host     | 0x03 | -              |                                         | 1 | -
| cnfInfo  | hardware | 0xC3 | 0xaa 0xbb 0xcc | *aa = Version identifier*<br>*bb = Major Version*<br>*cc = Minor Version* | 4 | -
| indInit | hardware | 0x84 | 0x0a            | *a = initialized (0,1)*             | 2 | -
| 
| debug   | hardware | 0xFF | debug_string    |                                         | var | -

|**ID**|**Machine Type**
|
| 0    | undefined/none
| 1    | KH-910, KH-950(i)
| 2    | KH-900, KH-930, KH-965(i), CK-35
| 3    | KH-270
| 255  | Diagnostic Mode

#### Message definitions (API v4)

|**name**|**source**|**id**|**parameters**||**length incl id**|**description**
| reqStart | host     | 0x01 | 0xaa 0xbb | *aa = startNeedle (Range: 0..198)*<br>*bb = stopNeedle (Range: 1..199)| 3 | -
| cnfStart | hardware | 0xC1 | 0x0a      | *a = success (0 = false, 1 = true)* | 2 | -
| reqLine  | hardware | 0x82 | 0xaa      | *aa = lineNumber (Range: 0..255)* | 2 | -
| cnfLine  | host     | 0x42 | 0xaa 0xbb[24] 0xbb[..] 0xbb[0] 0xcc 0xdd | *aa = lineNumber (Range: 0..255)*<br>*bb[] = binary pixel data*<br>*cc = flags (bit 0: lastLine)*<br>*dd = CRC8 Checksum*| 29 | -
| reqInfo  | host     | 0x03 | -         | | 1 | -
| cnfInfo  | hardware | 0xC3 |0xaa 0xbb 0xcc | *aa = Version identifier*<br>*bb = Major Version*<br>*cc = Minor Version*| 4 | -
| indInit  | hardware | 0x84 | 0x0a | *a = initialized (0,1)* | 2 | -
|
| debug    | hardware | 0xFF | debug_string || var | -

#### Message definitions (API v3)

|**name**|**source**|**id**|**parameters**||**length incl id**|**description**
| reqStart | host     | 0x01 | 0xaa 0xbb | *aa = startNeedle (Range: 0..198)*<br>*bb = stopNeedle (Range: 1..199)* | 3 | -
| cnfStart | hardware | 0xC1 | 0x0a | *a = success (0 = false, 1 = true)* | 2 | -
| reqLine  | hardware | 0x82 | 0xaa | *aa = lineNumber (Range: 0..255)* | 2 | -
| cnfLine  | host     | 0x42 | 0xaa 0xbb[24] 0xbb[..] 0xbb[0] 0xcc 0xdd | *aa = lineNumber (Range: 0..255)*<br>*bb[] = binary pixel data*<br>*cc = flags (bit 0: lastLine)*<br>*dd = CRC8 Checksum//| 29 | -
| reqInfo  | host     | 0x03 | - || 1 | -
| cnfInfo  | hardware | 0xC3 | 0xaa | *aa = Version identifier*| 2 | -
| debug    | hardware | 0xFF | debug_string || var | -