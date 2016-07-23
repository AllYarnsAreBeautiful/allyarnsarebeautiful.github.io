---
layout: post
title:  "Google Summer of Code 2016 Blogpost 4 - Knitting Pattern Conversion"
date:   2016-06-21 00:00:00
categories: FOSSASIA
---

## Knitting Pattern Conversion

<div class="container">
    <div style="float:left;width:20%">
        <img src="/assets/posts/conversion_2.png">
    </div>
    <div style="float:left;width:20%">
        <img src="/assets/posts/conversion_2a.png">
    </div>
    <div style="float:left;width:20%">
        <img src="/assets/posts/conversion_2b.jpg">
    </div>
</div>



We can convert knitting patterns to svg (middle) which proves the concept but is still a different from the original (right)

Our goal is to create a knit-work exchange format. This includes the conversion to a scematic view of the knittting pattern as svg – to make it endlessly scalable and allow conversions to png, pdf and paper.

This week we ended the prototype of the SVG conversion. The positions are a bit off and instructions are placed above eachother. Most of the work is done.

We are also able to load and save knitting patterns a png files.

(1)<img src="/assets/posts/band1.png"> 
(2)<img src="/assets/posts/band2.png">
(3)<img src="/assets/posts/band3.png">

We loaded them (1), converted them to a knitting pattern and then saved them again as png (2). This way we path our way towards using the ayab software and actually knitting the pattern. Also we can convert the knitting pattern to an svg consisting all of knit instructions (3). Here is the code for it in version 0.0.8.

```python
>>> import knittingpattern
>>> from knittingpattern.convert.image_to_knittingpattern import *
>>> convert_image_to_knitting_pattern.path("head-band.png").temporary_path(".json")
"head-band.json"
>>> k = knittingpattern.load_from_path("head-band.json")
>>> k.to_svg(10).temporary_path(".svg")
"head-band.svg"
```

Here you can see a proof of concept video:

<iframe width="420" height="315" src="https://www.youtube.com/embed/AsiQeYG8J90" frameborder="0" allowfullscreen></iframe>

--- Nicco Kunzmann