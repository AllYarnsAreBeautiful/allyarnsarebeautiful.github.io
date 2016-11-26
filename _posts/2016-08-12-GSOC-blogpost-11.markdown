---
layout: post
title:  "Google Summer of Code 2016 Blogpost 11 - AYABInterface – a Python Module for the AYAB shield"
date:   2016-08-12 00:00:00
categories: FOSSASIA
---

In the Google Summer of Code effort on knitting machines with [AYAB](http://ayab-knitting.com/), we created the [AYABInterface](https://pypi.python.org/pypi/AYABInterface/0.0.7) module. This module allows us to control machines like the Brother KH-910. [Click here](http://blog.fossasia.org/kniteditor-first-success/) to see it in action.

The development process for small changes worked like this:

  1. Talk about uncertainty in the [issue](https://github.com/AllYarnsAreBeautiful/ayab-desktop/issues/17).
  2. Write the [specification](http://ayabinterface.readthedocs.io/en/latest/communication/index.html).
  3. Write the [tests](https://github.com/fossasia/AYABInterface/tree/master/AYABInterface/communication/test).
  4. Write the [code](https://github.com/fossasia/AYABInterface/tree/master/AYABInterface/communication).

Of cause these steps were mixed but the objective is clear to first specify and then let the implementation follow.

From my perspective this made sure that other people can implement this protocol, too. After all, it should be specific enough now, to write source code for it.

The underlying Communication relies on a byte stream to communicate. This abstracts from the serial protocol and enables us to plug in e.g. sockets if someone wants to communicate via WIFI or LAN.

The communication walks through several states. They are documented in the states module. Here you can see an overview over the different states:

 <a href="http://pythonhosted.org/AYABInterface/_static/CommunicationStateDiagram.html">
     <img src="/assets/posts/CommunicationStateDiagram.png" width="400">
 </a> 

If you click it, you are redirected to an interactive documentation web page where you can click the different states and messages to view their implementation.

### Summary

After all, communication is important, not only between the shield and the computer but also for the developers. Since the Shield is around for a while, this protocol is now documented in a way that allows us to use it also for other applications. A specification driven implementation allows us both:

* a complete specification where we know what is possible to implement
* an implementation that follows the specification and as such is exchangeable and a reference for other library developers.


--- Nicco Kunzmann