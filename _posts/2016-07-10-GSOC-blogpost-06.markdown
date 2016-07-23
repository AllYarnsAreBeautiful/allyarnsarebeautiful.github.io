---
layout: post
title:  "Google Summer of Code 2016 Blogpost 6 - DesignaKnit"
date:   2016-07-10 00:00:00
categories: FOSSASIA
---

I started a conversation on [strickforum.de](http://strickforum.de/forum) and was inspired to take a closer look at DesignaKnit 8.

A free Demo version of DesignaKnit is available which cannot save changes to patterns or shapes and cannot connect to a knitting machine. Otherwise all functionality is available.

DesignaKnit contains:

* an editor for color patterns
* an editor for shapes or sewing patterns
* a shape library
* a tool for converting images to patterns
* interactive knitting

Patterns can be applied to shapes.

I did not look very closely at the editors because I do not know much about pattern generation, especially shape or sewing patterns. And the editor for the color patterns did not work for me.

### Interactive Knitting:

I took a look at some of the features available in the interactive knitting. There are some interesting features we would also like to implement.

I was not able to take in all the functions available. I could not connect it to a machine and I am still a beginner with knitting machines, which is why I am probably missing some features which make life easier.

The interactive knitting support has several views:

* overview of knit piece which also shows the position of the carriage
* view for next row to be knit, some rows around for context
* view for yarn colors in use and visualization that shows which yarn is currently in the carriage and being knit
* view for instructions to the human, which also contains
** row counter as it should be on the machine
** counter for row in the piece being knit
** counter for row in pattern
** information on start and stop needle on machine

<img src="/assets/posts/DesignaKnit.jpg">

DesignaKnit can be configured to play sounds when an action, like decreasing the number of meshes, needs to be taken. Voice cuing is also possible. Furthermore, the view for the instructions for the human can flash yellow and displays what step needs to be completed by the human next. In the image above the number of meshes should be decreased by 6 on the right side.

### Ideas for our interactive knitting support:

The idea of extra audio and visual cuing is very interesting and we are considering also having this option in our interface. We are not yet sure how we will organize all the information, but the information we will show to the user will be similar to what is shown in DesignaKnit.

The interface for DesignaKnit serves its purpose well. However, we think we can create something that is a little more appealing to the eye.
To keep our Design of the user interface clean and simple we are designing for mobile devices first.

--- Kirstin Heidler