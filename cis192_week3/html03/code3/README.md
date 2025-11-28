# t3-code-3
## Summary

You can use the CSS positioning and overflow styles to create a scrolling slideshow.*Figure 3-81*
shows an example of a slideshow consisting of nine sketches by Renaissance masters. You've been given the HTML code for this document and you've been asked to write the style rules to generate the slideshow.

![A page titled, Artist Sketchbook displays three arts with their portraitist names as follows: Head of a Maid by Peter Paul Rubens, Women's Portrait by Andre del Sarto, and Shepherd Boy by Giovanni Battista Piazzetta.](https://cdn.filestackcontent.com/VLrlzEVXQWDxlUUYpDGC)            
            
*Figure 3-81*
            
Do the following:

**Tasks**

Save code3-3_txt.html as code3-3.html. Save code3-3_scroll_txt.css as code3-3_scroll.css. Open the file *code3-3.html* and *code3-3_scroll.css* and in the comment section enter your **name** (First + Last) and the **date** (MM/DD/YYYY) into the ```Author:``` and```Date:```  fields of each file.

Go to the *code3-3.html* file and within the ```head``` section insert the ```link``` element linking the *code3-3_scroll.css* style sheet file. Review the contents of the file.

Go to the *code_scroll.css* file and create a style rule for the ```section``` element with the id ```container``` with the following styles:
               

1. Set the ```width``` of the element to **900** pixels and the ```height``` to **370** pixels.
2. Horizontally center the element by adding a **10** pixel top/bottom margin and set the left/right margin to **auto**.
3. Place the element with relative positioning, setting the top value to **30** pixels and the left value to **0** pixels.
4. Add a **2** pixel solid brown outline to the element.
5. Have the browser automatically display scrollbars for any overflow content.
               
Create a style rule for every ```div``` element, setting the ```width``` to **300** pixels and the ```height``` to **330** pixels. Position the element with ```absolute``` positioning. There are nine```div``` elements with ids ranging from ```slide1``` to ```slide9```. Set the left position of the elements in **300** pixel increments starting with **0** pixels for ```slide1```, **300** pixels for ```slide2```, **600** pixels for ```slide3```, and so forth up to **2400** pixels for```slide9```.

Display every inline image as a block-level element with a ```width``` and ```height``` of **300** pixels.

Open the page in your browser. Verify that the nine images are displayed within a scroll box and that you can using a horizontal scrollbar to scroll through the image list.
