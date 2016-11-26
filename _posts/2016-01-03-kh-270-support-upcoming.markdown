---
layout: post
title:  "KH-270 support upcoming"
date:   2016-02-03 19:32:00
categories:
---

## KH-270

Last weekend, we took the chance and visited [Claire Williams](https://xxxclairewilliamsxxx.wordpress.com)
in Brussels. She borrowed a Brother KH-270, which enabled us to have a look into this
rare model.

After two sessions in the evening, we found out all the parameters which were
different from the KH-9xx series and got a working prototype of the AYAB firmware
for this model.

<img src="/assets/posts/kh270_bxl.jpg" width="250">

The connectors are the same as for the  KH-965 (2.5 mm for the solenoids, 2.0 mm for the sensors).<br>
Due to the total amount of 114 needles (instead of 200), Brother decided
to shrink the solenoid group size to 12 (instead of 16). This results in a different pinning of the
solenoid connectors, which has also to be taken into account when setting the current needle.<br>
For the hall sensors, the KH-270 uses the same thresholds as the KH-930, and there is no
belt shift sensor which has to be evaluated during initialization.

So far, these changes are pretty obvious and could easily be implemented into the software.<br>
But for the knitting itself, there was some brain work to be done to find out the
right parameters for correct needle counting in all situations. In the end, we were able
to control the machine with AYAB and everything worked out as expected!

We have not completed integration into the AYAB software yet, as we have to beautify the
engineering prototype of the firmware and do some changes in the user
interface to take the different bed sizes into account.
But probably there will be a release in the next few weeks, including some important
bug fixes (e.g. the broken installation in Linux using pypi).

## What else?

Apart from this development, we are currently collecting issues which have to be fixed
for the upcoming version v0.85. So if you are really annoyed by a certain bug or
have a good idea to improve the functionality of the software, please share
by [Email](mailto:info@ayab-knitting.com) or use [our bugtracker](https://github.com/AllYarnsAreBeautiful/ayab-desktop/issues)

Also, help to fill our [FAQ](/faq) is highly appreciated!
