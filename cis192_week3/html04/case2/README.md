# t4-case-2
## Summary
**Chupacabra Music Festival** - Debra Kelly is the director of the website for the Chupacabra Music Festival, which takes place every summer in San Antonio, Texas. Work is already underway on the website design for the 15th annual festival and Debra has approached you to work on the design of the home page. Debra envisions a page that uses semi-transparent colors and 3D transformations to make an attractive and eye-catching page. A preview of her completed design proposal is shown in *Figure 4-71*.

![A home page preview of Chupacabra 15 website.](https://cdn.filestackcontent.com/HG5r0rh8QFWHwOeotRuj)

*Figure 4-71*

Debra has provided you with the HTML code and the layout and reset style sheets. Your job will be to finish her work by inserting the graphic design styles.

## Document Setup
Open the *cf_home.html* and *cf_effects.css*files and enter your **name** and the **date** in the comment section of each file. Next, go to the *cf_home.html* file and within the document ```head```, create a link to the *cf_reset.css*, *cf_layout.css*, and *cf_effects.css* style sheets. Take some time to study the content and structure of the document. Pay special note to the nested ```div``` elements in the center section of the page; you will use these to create a 3D cube design.

## HTML Styles
Return to the *cf_effects.css* file in your editor and go to the "HTML Styles" section. Debra wants a background displaying a scene from last year&rsquo;s festival. Add a style rule for the ```html``` element that displays the *cf_back1.png* as a fixed background, centered horizontally and vertically in the browser window and covering the entire window.

## Body Styles
Go to the "Body Styles" section and set the background color of the page ```body``` to **rgba(255, 255, 255, 0.3)**.

## Body Header Styles
Go to the "Body Header Styles" section and change the background color of the ```body header``` to **rgba(51, 51, 51, 0.5)**.

## Aside Styles
Debra has placed useful information for the festival in ```aside``` elements placed within the left and right ```section``` elements. Go to the "Aside Styles" section and create a style rule for the ```section aside``` selector that adds a **10** pixel double border with color **rgba(92, 42, 8, 0.3)** and a border radius of **30** pixels.

Debra wants a curved border for every ```h1``` heading within an ```aside``` element. For the selector ```section aside h1```, create a style rule that sets the border radius of the top-left and top-right corners to **30** pixels.

Define the perspective of the 3D space for the left and right sections by creating a style rule for those two sections that sets their perspective value to **450** pixels. Create a style rule that rotates the ```aside```elements within the left section **25&deg;** around the y-axis. Create another style rule that rotates the ```aside``` elements within the right section **-25&deg;** around the y-axis.

## Cube Styles
Go to the "Cube Styles" section. Here you&rsquo;ll create the receding cube effect that appears in the center of the page. The cube has been constructed by creating a ```div``` element with the id ```cube``` containing five ```div``` elements belonging to the ```cube_face``` class with the ids ```cube_bottom```, ```cube_top```, ```cube_left```, ```cube_right```, and ```cube_front```. (There will be no back face for this cube.) 

Currently the five faces are superimposed upon each other. To create the cube you have to shift and rotate each face in 3D space so that they form the five faces of the cube. First, position the cube on the page by creating a style rule for the ```div#cube``` selector containing the following styles:

1. Place the element using relative positioning.
2. Set the top margin to **180** pixels, the bottom margin to **150** pixels, and the left/right margins to **auto**.
3. Set the ```width``` and ```height``` to **400** pixels.
4. Set the perspective of the space to **450** pixels.

For each ```div``` element of the ```cube_face```class, create a style rule that places the faces with absolute positioning and sets their ```width``` and ```height``` to **400** pixels.

Finally, you'll construct the cube by positioning each of the five faces in 3D space so that they form the shape of a cube. Add the following style rules for each of the five faces to transform their appearance.

1. Translate the ```cube_front div``` element **-50** pixels along the z-axis.
2. Translate the ```cube_left div``` element **-200** pixels along the x-axis and rotate it **90&deg;** around the y-axis.
3. Translate the ```cube_right div``` element **200** pixels along the x-axis and rotate it **90&deg;** counter-clockwise around the y-axis.
4. Translate the ```cube_top div``` element **-200** pixels along the y-axis and rotate it **90&deg;** counter-clockwise around the x-axis.
5. Translate the ```cube_bottom div``` element **200** pixels along the y-axis and rotate it **90&deg;** around the x-axis.
