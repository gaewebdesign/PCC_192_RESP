# t8-code-2

## Summary
Transitions with the hover effect can be used in image galleries to display large versions of thumbnail images. *Figure 8-60* shows an image gallery of Renaissance sketches that are enlarged in response to the hover event. Use your knowledge of CSS transitions to complete this web page.

![A web page of image gallery. The page titled Artist Sketchpad consists of five Renaissance sketches. Four sketches are displayed on the left of the page in thumbnail size. The fifth sketch is enlarged and displayed on the right with a text below the sketch, &ldquo;Head of a Maid - Pontomo&rdquo;.](https://cdn.filestackcontent.com/SHNuiAbYSSuwyMCIX1oB)
                            
*Figure 8-60*
Do the following:
## Tasks

Open the file *code8-2.html* and *code8-2_trans.css* and in the comment section enter your **name** (First + Last) and the **date**
(MM/DD/YYYY) into the ```Author:``` and ```Date:``` fields of each file.

Go to the *code8-2.html* file and within the ```head```section insert a ```link``` element linking the page to the *code8-2_trans.css* file. Study the contents of the file.
                                
Go to the *code8-2_trans.css* file and at the bottom of the file create a style rule for the ```figure``` element during the hover event that:

1. Sets the ```width``` to **400** pixels,
2. Sets the ```z-index``` value to **2**, and
3. Applies the transition for the change in the ```width``` property over a **2**-second interval.

Create a style rule for ```img``` elements within hovered figure elements that:

1. Sets the ```width``` to **100%**
2. Applies the ```drop-shadow(offset-x offset-y blur-radius color)``` and ```grayscale(0)``` filter functions,
3. Sets the drop shadow offset to **10** pixels in the horizontal and vertical directions and the blur radius to **20** pixels,
4. Sets the color value to **black**, and
5. Applies a transition to the change in the filter property over a **2**-second interval.

Create a style rule for ```figcaption``` elements within the hovered ```figure``` element, that sets the font size to **1.2em**, and applies the change in font size over a **2**-second transition.

Create a style rule for the ```#fig1``` through ```#fig6``` elements which are hovered, that rotates the elements to **0** degrees using the transform property, and applies a **2**-second transition to all properties of those figures.

Open the website in the browser preview and verify that when you hover your mouse pointer over any of the six images, the figures are rotated to 0 degrees, increased in size, moved on top of the other figure images, and the figure captions appear below the figures.
