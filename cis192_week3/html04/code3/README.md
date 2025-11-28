# t4-code-3

## Summary
*Figure 4-66* shows a web page in which five faces of the cube are displayed in a 3D view. You can create this effect using the CSS 3D transformation styles. The page also contains CSS styles for box shadows and text shadows that you will have to add.

![A webpage displays an image titled &ldquo;Classical Sketches.&rdquo; The image shows the inner surface of a cube on which five sketches are displayed with one sketch each on the back, top, bottom, left and right faces.](https://cdn.filestackcontent.com/zTAkG16TgSBYlgdwvche)

*Figure-66*
    
Do the following:

**Tasks**

Open the file *code4-3.html* and *code4-3_cube.css* and in the comment section enter your **name** (First + Last) and the **date** (MM/DD/YYYY) into the ```Author:``` and ```Date:``` fields of each file.
    
Go to the *code4-3.html* file and within the ```head```section insert a ```link``` element that links the page to the *code4-3_cube.css* style sheet file. Note that within the web page the five images are contained with a ```div``` element with the ID value ```cube```. The images are given ID values of ```img1``` through ```img5```.
        
Open to the *code4-3_cube.css* file and create a style rule for the ```h1``` element that changes the font color to **white** and adds a text shadow with horizontal and vertical offsets of **0** pixels, a blur radius of **20** pixels and a shadow color value of **rgb(120, 85, 0)**.

Create a style rule for a ```div``` element with the id  ```cube``` that sets the perspective size of the 3D space to **500** pixels. Use the ```transform-style``` property to preserve the 3D setting for the children of this element so that the cube and its children exist in the same 3D space.

For all ```img``` elements create a style rule that applies a **sepia**filter with a value of **1**. Add a **black** box shadow with horizontal and vertical offsets of **0** pixels and a blur radius of **20** pixels.

Create the following style rules for the five image elements:

1. For the ```img1``` image, translate the image **-150**pixels along the z-axis.
2. For the ```img2``` image, rotate the image **90** degrees around the x-axis and translate the image **-150** pixels along the z-axis.
3. For the ```img3``` image, rotate the image **-90** degrees around the y-axis and translate the image **150**pixels along the z-axis.
4. For the ```img4``` image, rotate the image **90** degrees around the y-axis and translate the image **150** pixels along the z-axis.
5. For the ```img5``` image, rotate the image **-90** degrees around the x-axis and translate the image **-150**pixels along the z-axis.
     
Open the page in your browser and verify that the design resembles that shown in *Figure 4-66*.
        