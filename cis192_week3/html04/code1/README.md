# t4-code-1
<div class="custom-markdown steps-contents">

## Summary 

*Figure 4-64* shows a web page containing text from a Shakespearean sonnet. In this Coding Challenge you will augment the text of the poem with background colors and images and add a graphic border.

![A webpage displays a poem in four paragraphs titled, &ldquo;Sonnet 116&rdquo; with an image of William Shakespeare at the bottom right of the page.](https://cdn.filestackcontent.com/kOCwWduQqCbaZM9WUaQk)

*Figure 4-64*

Do the following:

**Tasks**

Open the file *code4-1.html* and *code4-1_back.css* and in the comment section enter your **name** (First + Last) and the **date** (MM/DD/YYYY) into the ```Author:``` and ```Date:``` fields of each file.
        
Go to the *code4-1.html* file and within the ```head``` section insert a ```link``` element linking the page to the *code4-1_back.css* style sheet file.
        
Enclose the content of the sonnet within a ```figure``` element. At the top of the ```figure``` element and before the first ```p``` element, insert a ```figcaption``` containing the HTML code **Sonnet 116 ```<cite>``` by William Shakespeare ```</cite>```**.

Open the *code4-1_back.css* file and create a style rule for the ```figure``` element that:

1. Sets the padding space to **20** pixels.
2. Adds a **20**-pixel border in the ridge style with the color value **rgb(52, 52, 180)**.
3. Has a background consisting of the image file *ws.png*placed in the bottom right corner of the ```figure``` box and set to **45%** of the ```width``` of the ```figure``` box with no tiling. Be sure to separate the position of the image and its size with the / character. Add a second background containing the color **rgba(52, 52, 180, 0.3)**. Enter both background properties within a single style rule separated by a comma.
4. Has a black box shadow that is **5** pixels to the right, **10**pixels down with a blur size of **15** pixels.

Within the *code4-1_back.css* file create a style rule for the ```figcaption``` that:

1. Sets the font size to **1.8em**.
2. Centers the text of the caption.
3. Adds a **2** pixel bottom solid bottom border of the color value **rgb(52, 52, 180)**.
     
Open the page in the browser preview and verify that the design resembles that shown in *Figure 4-64*.
