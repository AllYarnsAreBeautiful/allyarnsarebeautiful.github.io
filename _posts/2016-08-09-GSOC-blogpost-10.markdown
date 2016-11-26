---
layout: post
title:  "Google Summer of Code 2016 Blogpost 10 - Deploying a Kivy Application with PyInstaller for Mac OSX with Travis CI to Github"
date:   2016-08-09 00:00:00
categories: FOSSASIA
---

With AYAB we are working on an editor which also has the ability to control a knitting machine. Here is the progress we made: one can control the needles and get some instructions on what to do:

<iframe width="560" height="315" src="https://www.youtube.com/embed/38JN2JdNnMY" frameborder="0" allowfullscreen></iframe>

### Views of the Editor

The editor has several view. To begin with, you can either load or save patterns as knitting patterns or images:

<img src="/assets/posts/1.png">

This is the incomplete editor view, where you are able to add and remove instructions and rows and build your knit work:

<img src="/assets/posts/2.png">

Once, your pattern is done, you go over to the knit settings. Currently, there is only one ability to knit, knitting with the AYAB hack. You can choose your machine type and the connection and start knitting.

<img src="/assets/posts/3.png">

After you started knitting, you see the pattern which you want to knit.

<img src="/assets/posts/4.png">

Right next to the pattern, you can see the instructions for you. You can follow these to create the knit peace.

<img src="/assets/posts/5.png">

You can also open the settings menu by pressing F1. There you can choose your language:

<img src="/assets/posts/6.png">

At the current state, all this is rather sketchy. The basics work. For the best user experience, there is still a lot to do.


--- Nicco Kunzmann