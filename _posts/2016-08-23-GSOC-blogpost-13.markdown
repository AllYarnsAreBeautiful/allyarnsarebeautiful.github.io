---
layout: post
title:  "Google Summer of Code 2016 Blogpost 13 - Involving to the end-user"
date:   2016-08-23 00:00:00
categories: FOSSASIA
---

The [Knit Editor](http://fossasia.github.io/kniteditor) software aims to be installable and usable by end-users. In the whole summer of code, we focused on development and code documentation from the perspective of a developer. In this blog post we will discuss how the Knit Editor is presented to the end user. So, you reading this blog: Please comment with your thoughts on the sketches.

Currently, a site is in the making that shall present the Knit Editor software as is state of the art. The inspiration came from the [talk by Tracy Osborn at PyCon 2016: “Web Design for Non Designers”](https://www.youtube.com/watch?v=uKpfO331DY4). The site is currently in the making at [fossasia.github.io/kniteditor](http://fossasia.github.io/kniteditor). If you click on the following images, you get redirected to the implementation of the concept.

### The Main Page

First thing that comes into view is the download button. This leads to the download site. Then, wen can see three popular use-cases of the knit editor. At the bottom, new developers can see that they can contribute.

End users are knitters of all ages. As tested with my mom, they expect the language to be at the top-right of the page.

<img src="/assets/posts/P1040128-1.jpg">

Both, the download and the start developing button are highlighted in a different color to make certain that they are an action the user is expected to perform.

When you access the site you get automatically redirected to your browsers configured language.

### The Download Site

When you click the download button on the main page, you reach the download site. Depending on the operating system information the browser sends, your download starts automatically, below, this is  sketched for Windows.

<img src="/assets/posts/P1040129-1.jpg">

Next to the download page, you may want to find other versions of the software or not. This is to be evaluated. Maybe a slightly less visible button is right for that or it can be left out. Usually, no-one uses the old software.

At the bottom, you can see that there is a predecessor of the software which is called “AYAB-Apparat”. Some people may expect to find this software, too.

### The Developer Site

If you clicked “Start Developing” on the main page, you will be confronted with the site for development.

There are two ways main flavors of contributing. Either you translate or you write program code. Therefore, we have two buttons that skip to the corresponding sections.

<img src="/assets/posts/P1040130-1.jpg">

At the bottom, you can see that there are tutorials on how to set up the environment for development. Videos for this can be found under this [Youtube playlist](https://www.youtube.com/playlist?list=PL_bQhtrnWFA8skye4GpQ2Y8kEHxLwQKHY).

### Summary

At the end of GSoC we should document the code. Since we did documentation-driven development, there was already a focus on the developers from the start. End-user involvement fell short during the development phase. “Documentation is the way of informing people.” – this is something I learned from a [talk](http://niccokunzmann.github.io/blog/2016-06-10/Documentation-Driven-Development). Thus, I create the new site for the knit editor as a documentation about the project fit for non-developers.

--- Nicco Kunzmann