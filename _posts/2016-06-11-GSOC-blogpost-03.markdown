---
layout: post
title:  "Google Summer of Code 2016 Blogpost 3 - A look into the knitting pattern format"
date:   2016-06-11 00:00:00
categories: FOSSASIA
---

We are currently working on a format that allows to exchange instructions for knitting independent of how it is going to be knit: by a machine like Brother, Pfaff, or by hand.

For this to be possible we need the format to be as general as possible and have no ties to a specific form of knitting. At some point the transition to a format specifically designed for a certain machine is necessary. However, we believe that it is possible to have a format so general that instructions for all types of machines and for hand knitting could be generated from it.

We have decided to use JSON as the language to describe the format, because it is machine readable and human readable at the same time.
The structure of our format follows the rows in knitting.

Our first thought was about creating a format that would describe how meshes are connected and how the thread travels. This would allow for great flexibility and it should be possible to represent everything like this. However, we have decided against it, because we think this format would be quite complicated (different orientations and twists of meshes possible, different threads for multiple colors…) and would get quite big very quickly, because of all the different properties for each mesh and because of all the meshes. Furthermore, and this point is probably more important, knitters do not think this way. If we had a format like that, it would not be easy to understand what was happening for human beings.

Whenever I knit by hand, I never think about how all the meshes are connected by this single thread I am using. I always think about which operations I am performing when knitting in each row. Instructions for creating patterns in knitting are also written this way. They give the knitter a set of knitting instructions to do and possibly repeat. We have concluded, that most knitters think in knitting operations performed rather than connections between meshes.

<img src="/assets/posts/17-diag.jpg">
Knitting instructions from [Garnstudio’s Café](http://www.garnstudio.com/pattern.php?id=7350&cid=9).

Therefore we have decided to base our format on knitting instructions/operations. The most common instructions probably are: knit, purl, cast on, bind off, knit two together, yarn over. Of course for increases and decreases there are many different operations which work in a similar way but have slight differences (e.g. skp, k2tog).
Since in knitting many things are possible and it is unlikely that we ever manage to create a complete list of all the possible operations you can perform in knitting we have decided to have a very open format, that allows the definition of new instructions.

Instructions are also defined in JSON format. Here is an example, the “k2tog” instruction:

```json
[
    {
        "type" : "k2tog",
        "title" : {
            "en-en" : "Knit 2 Together"
        },
        "number of consumed meshes" : 2,
        "description" : {
            "wikipedia" : {
                "en-en" : "https://en.wikipedia.org/wiki/Knitting_abbreviations#Types_of_knitting_abbreviations"
            },
            "text" : {
                "en-en" : "Knit two stitches together, as if they were one stitch."
            }
        }
    }
]
``` 

Knitting patterns consist of multiple rows, which consist of multiple instructions. Furthermore we want to define the connections between rows. This is important, so we can express gaps or slits which are multiple rows long. For example when knitting pants the two legs will be separate. They will be knit separately and their combined width will be increased in comparison to the width of the hip.
Here is an example for a pattern which specifies a cast on in the first row, then a row where all stitches are knit, then the last row is bound off.

```json
{
  "type" : "knitting pattern",
  "version" : "0.1",
  "comment" : {
    "content" : "cast on and bind off",
    "type" : "markdown"
    },
  "patterns" : [
    {
      "id" : "knit",
      "name" : "cobo",
      "rows" : [
        {
          "id" : 1,
          "instructions" : [
            {"id": "1.0", "type": "co"},
            {"id": "1.1", "type": "co"},
            {"id": "1.2", "type": "co"},
            {"id": "1.3", "type": "co"}
          ]
        },
        {
          "id" : 2,
          "instructions" : [
            {"id": "2.0"},
            {"id": "2.1"},
            {"id": "2.2"},
            {"id": "2.3"}
          ]
        },
        {
          "id" : 3,
          "instructions" : [
            {"id": "3.0", "type": "bo"},
            {"id": "3.1", "type": "bo"},
            {"id": "3.2", "type": "bo"},
            {"id": "3.3", "type": "bo"}
          ]
        }
      ],
      "connections" : [
        {
          "from" : {
            "id" : 1
          }, 
          "to" : {
            "id" : 2
          }
        },
        {
          "from" : {
            "id" : 2
          }, 
          "to" : {
            "id" : 3
          }
        }
      ]
    }
  ]
}
```

Connections are defined “from” one row “to” another.  The ids identify the rows. The optional attribute start defines the mesh where the connection starts. If start is not defined, the first mesh of the row is assumed. When indexing the list of meshes in a row the first index is 1. The optional attribute “meshes” describes how many meshes will be connected, starting from the mesh defined in “start”.

The resulting parsed Python object structure looks like this:

<img src="/assets/posts/row-model.png">
The Python object structure for working with the parsed knitting pattern.

Each row has a list of instructions. Each instruction produces a number of meshes and consumes a number of meshes. These meshes are also the meshes that are consumed/produced by the rows.

--- Kirstin Heidler
