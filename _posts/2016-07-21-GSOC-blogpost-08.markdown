---
layout: post
title:  "Google Summer of Code 2016 Blogpost 8 - The new AYABInterface module"
date:   2016-07-21 00:00:00
categories: FOSSASIA
---

One create knit work with knitting machines and the AYAB shield. Therefore, the computer communicates with the machine. This communication shall be done, in the future, with this new library, the [AYABInterface](https://pypi.python.org/pypi/AYABInterface).

Here are some design decisions:

### Complete vs. Incomplete

The idea is to have the AYAB seperated from the knittingpattern format. The knittingpattern format is an incomplete format that can be extended for any use case.  In contrast, the AYAB machine has a complete instruction set. The knittingpattern format is a means to transform these formats into different complete instruction sets. They should be convertible but not mixed.

### Desciptive vs. Imperative

The idea is to be able to pass the format to the AYABInterface as a description. As much knowledge about the behavior is capsuled in the AYABInterface module. With this striving, we are less prone to intermix concerns across the applications.

### Responsibilty Driven Design

I see these separated responsibilities:

* A communication part focusing on the protocol to talk and the messages sent across the wire. It is an interpreter of the protocol, transforming it from bytes to objects.
* A configuration that is passed to the interface
* Different Machines types supported.
* Actions the user shall perform.

### Different Representations

I see these representations:

* Commands are transferred across the wire. (PySerial)
* For each movement of a carriage, the needles are used and put into a new position, B or D. (communication)
* We would like to knit a list of rows with different colors. (interface)
* Holes can be described by a list of orders in which meshes are moved to other locations, i.e. on needle 1 we can find mesh 1, on needle 2 we find mesh 2 first and then mesh 3, so mesh 2 and mesh 3 are knit together in the following step
* The knitting pattern format.

### Actions and Information for the User

The user should be informed about actions to take. These actions should not be in the form of text but rather in the form of an object that represents the action, i.e. [“move”, “this carriage”, “from right to left”]. This way, they can be adequately represented in the UI and translated somewhere central in the UI.

### Summary

The new design separates concerns and allows testing. The bridge between the machine and the knittnigpattern format are primitive, descriptive objects such as lists and integers.

--- Nicco Kunzmann