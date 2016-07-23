---
layout: post
title:  "Google Summer of Code 2016 Blogpost 2 - Towards a unified digital aproach to knitting"
date:   2016-06-04 00:00:00
categories: FOSSASIA
---

<img src="/assets/posts/Conversion.png" width="250">

Our idea is to create a knitting library for a format that allows conversion of knitting projects, patterns and tutorials. Usually, communities will only focus on the knitting format for their machines. Our approach should be different and be able to support any knitting communities efforts.

Here is our strategy to achieve this:

* We connect to different communities to get a broader view on what their needs are.
* Our knitting format is based on knitting instructions like knit, purl, yarn over, skp. We found a comprehensive list on [Wikipedia](https://github.com/AllYarnsAreBeautiful/ayab-desktop/wiki/2016-05-25---Knitting-pattern).

Other Communities

From time to time we meet with other people who also knit and could use our software.

First, we met with Viktoria from [ETIB Berlin](https://twitter.com/ETIBerlin). She taught us a lot about knitting, how she does it, that almost everything could be created from one peace with the machine. Also, that AYAB is used for lace patterns. We saw examples where she let meshes fall so that larger holes were created. Our goal is to support laces in the file format.  Color patterns should be possible across sewing edges.

We are also in touch with [Valentina Project](http://valentina-project.org/). With their software we would be able to connect to yet another community and use their sewing patterns for custom-fit clothes.

We got in touch with [Kniterate](http://www.kniterate.com/). They and we share a lot of goals. Because they create a startup, they are very cautious what they release. They focus on their open-source knitting machine first and later on the software. They already created an editor much like we imagined ours to be, but as a web application. A way of collaboration could be that we understand their file format and see how we can support it.

Only talking about our GSoC project is worth it as other people may have seen alike at Maker Faires and other hacky places. We have the chance to bring communities and efforts together.
Knitting Format

A universal knitting format has many concerns:

* Languages of users differ
* It should be possible to knit by hand
* Mesh sizes and wool differ
* Different knitting machines with different abilities
* A knitting format for exchange is never complete. A knitting format for machines must be complete.

In contrast to a knitting format for a automatic machine, it is possible, to have machines operate in semi-automatic modes or just to knit by hand. In both cases, meshes could be changed in a way that was never foreseen. This is why we did not base it on meshes and mesh types but rather on instructions – closer to the mental model of the knitters who perform instructions with their hand.

Some of the instructions are understood by the machines, some could be adapted a bit so the machine can do it automatically or faster and some are still necessary to be done by hand. We created a Python module for that, [“knittingpattern“](https://github.com/AllYarnsAreBeautiful/knittingpattern). We work on it in a test-driven way.

--- Nicco Kunzmann
