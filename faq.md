---
layout: page
title: Frequently Asked Questions
permalink: /faq/
---

<script language="javascript" type="text/javascript">
function toggleNode(node)
      {
        var nodeArray = node.childNodes;
        for(i=0; i < nodeArray.length; i++)
       {
         node = nodeArray[i];
         if (node.tagName && node.tagName.toLowerCase() == 'div')
           node.style.display = (node.style.display == 'block') ? 'none' : 'block';
       }
     }
</script>

## Operation

<div><span onclick="toggleNode(this.parentNode); return  false;"><a>
        When I want to start knitting, I get a "Wrong API" error
    </a></span>
    <div style="display: none;">
        The firmware version on the Arduino does not match your AYAB GUI version. <br>Please load the appropriate firmware version to the Arduino (AYAB GUI v0.8 -> Arduino Firmware v0.8)
    </div>
</div>

<div><span onclick="toggleNode(this.parentNode); return  false;"><a>
        What do you mean with "initialize the machine"?
    </a></span>
    <div style="display: none;">
    <ul>
    <li>Load picture</li>
    <li>Select the correct Serial-Port</li>
    <li>Set Start- and Stop needle</li>
    <li>Click configure</li>
    <li>Click knit</li>
    <li>Set the carriage on KC</li>
    <li>Pass the left Sensor with the carriage from left to right</li>
    </ul>
    Now you should hear a double-beep from the shield and the Software should start transferring the picture line by line.
    </div>
</div>

<div><span onclick="toggleNode(this.parentNode); return  false;"><a>
        Initialisation went fine, but all needles get set on position D
    </a></span>
    <div style="display: none;">
    <ul>
    <li>Check if the machine is switched on and the power cord is plugged in</li>
    <li>Check if the solenoid connectors are connected properly</li>
    <li>Check the machine main fuse (see Brother service manual)</li>
    </ul>
    </div>
</div>

<div><span onclick="toggleNode(this.parentNode); return  false;"><a>
        There is no beep when passing the carriage to a certain side, and afterwards it just knits a blank line
    </a></span>
    <div style="display: none;">
        Please check your hall sensor connections (bad contact, wrong orientation of the connectors).
    </div>
</div>

<div><span onclick="toggleNode(this.parentNode); return  false;"><a>
        I get a straight vertical line trough the graphic when I'm knitting
    </a></span>
    <div style="display: none;">
        <img src="/assets/faq/faq_straight_line_error.jpg" width="250">
        Please check if the needles which cause the error are able to move freely. If they get stuck, it causes them to stay in one position.
    </div>
</div>

<div><span onclick="toggleNode(this.parentNode); return  false;"><a>
        v0.8 on Mac OS X: I can't flash my Arduino using AYAB GUI
    </a></span>
    <div style="display: none;">
    That's right, it seems that flashing is not possible in this version. Either you are able to flash the firmware hex file manually using another tool (e.g. avrdude) or you use a Windows or Linux computer for flashing with the AYAB GUI.
    </div>
</div>
