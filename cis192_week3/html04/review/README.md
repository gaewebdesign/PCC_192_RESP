# t4-review

Kevin wants you to work on another family page for the Tree and Book website. The page was created for the Ferris family with content provided by Linda Ferris-White. Kevin is examining a new color scheme and design style for the page. A preview of the design you'll create is shown in *Figure 4-68*.

![A home page preview of Tree and Book website. In the page content, the title &ldquo;The Ferris Family&rdquo; is centered with a photo below. Three paragraphs of content about the Ferris family are described below the photo.](https://cdn.filestackcontent.com/4p7QCzTDTLSlC62g3ZMc)

*Figure 4-68*
    
All of the HTML content and the typographical and layout styles have already been created for you. Your task will be to complete the work by writing the visual style sheet to incorporate Kevin's suggestions.

## Document Setup
Open the *tb_visual3.css*, *tb_visual4.css*, *tb_ferris.html* and *tb_kathleen.html* files and enter your **name** and the **date** in the comment section of each file. Next, go to the *tb_ferris.html* file and add links to the *tb_base.css*, *tb_styles3.css*, and *tb_visual3.css* style sheets in the order listed.
    Scroll down and, within the ```main``` element header and after the ```h1``` heading, insert a figure box containing:

1. The *tb_ferris.png* inline image with the alternate text **Ferris Family** using the image map named ```portrait_map```.
2. A figure caption with the text **Kathleen Ferris and daughter Linda (1961)**.

Directly below the figure box, create the ```portrait_map``` image map containing the following hotspots:

1. A rectangular hotspot pointing to the *tb_kathleen.html* file with the left-top coordinate **(10, 50)** and the right-bottom coordinate **(192, 223)** and alternate text, **Kathleen Ferris**
2. A circular hotspot pointing to the *tb_linda.html* file with a center point at **(264, 108)** and a radius of **80** pixels and the alternate text, **Linda Ferris-White**.

## HTML Styles
Open the *tb_visual3.css* file in order to create the graphic design styles for the page. Go to the "HTML Styles" section and create a style rule for the ```html``` element to use the image file *tb_back5.png* as the background.

## Page Body Styles
Go to the "Page Body Styles" section and create a style rule for the ```body``` element that:

1. Adds a left and right **3** pixel solid border with color value **rgb(169, 130, 88)**
2. Adds a box shadow to the right border with a horizontal offset of **25** pixels, a vertical offset of **0** pixels and a **35** pixel blur and a color value of **rgb(53, 21, 0)**, and then adds the mirror images of this shadow to the left border.

## Main Styles
Go to the "Main Styles" section. Create a style rule for the ```main``` element that:

1. Applies the *tb_back7.png* file as a background image with a size of **100%**covering the entire background with no tiling and positioned with respect to the padding box
2. Adds two inset box shadows, each with a **25** pixel blur and a color value of **rgb(71, 71, 71)**, and then one with offsets of **-10** pixels in the horizontal and vertical direction and the other with horizontal and vertical offsets of **10** pixels.

Create a style rule for the ```h1``` heading within the ```main``` header that adds the following two text shadows:

1. A shadow with the color value **rgb(221, 221, 221)** and offsets of **1** pixels and no blurring
2. A shadow with the color value **rgba(41, 41, 41, 0.9)** and offsets of **5**pixels and a **20** pixel blur.

## Figure Box Styles
Go to the "Figure Box Styles" section. Create a style rule for the ```figure``` element that sets the top/bottom margin to **10** pixels and the left/right margin to **auto**. Set the ```width``` of the element to **70%**.

Next, you'll modify the appearance of the figure box image. Create a style rule for the image within the figure box that:

1. Sets the border width to **25** pixels.
2. Sets the border style to **solid**.
3. Applies the *tb_frame.png* file as a border image with a slice size of **60**pixels stretched across the sides.
4. Displays the image as a block with a ```width``` of **100%**.
5. Applies a **sepia** tone to the image with a value of **80%** (include the WebKit browser extension in your style sheet).

Create a style rule for the figure caption that:

1. Displays the text using the font stack **Palatino Linotype**, **Palatino**, **Times New Roman**, **serif**.
2. Sets the style to **italic**.
3. Sets the top/bottom padding to **10**pixels and the left/right padding to **0**pixels.
4. Centers the text.

## Article Styles
Go to the "Article Styles" section. Here you'll create borders and backgrounds for the ```article``` that Linda Ferris-White wrote about her mother. Create a style rule for the ```article``` element that:

1. Displays the background image file *tb_back6.png* placed at the bottom-right corner of the element with a size of **15%** and no tiling.
2. Add an **8** pixel double border with color value **rgb(147, 116, 68)** to the right and bottom sides of the ```article```element.
3. Creates a curved bottom-right corner with a radius of **80** pixels.
4. Add an interior shadow with horizontal and vertical offsets of **-10** pixels, a **25**pixel blur, and a color value of **rgba(184, 154, 112, 0.7)**.

## Footer Styles
Kevin wants a gradient background for the page ```footer```. Go to the "Footer Styles" section and create a style rule for the ```footer``` that adds a linear gradient background with an angle of **325&deg;**, going from the color value **rgb(180, 148, 104)** with a color stop at **20%** of the gradient length to the value **rgb(40, 33, 23)** with a color stop at **60%**.

Next, you will create the design styles for individual pages about Kathleen Ferris and Linda Ferris-White. A preview of the content of the Kathleen Ferris page is shown in *Figure 4-69*.

![A webpage of Kathleen Ferris displays three images. The first image is displayed at the top, the second image displayed at the bottom left is rotated to negative 50 degree along the y axis.  The third image displayed at the bottom right is rotated 50 degree along the y axis.](https://cdn.filestackcontent.com/ldrQZfoGTFm7GWlN1tgV)

*Figure 4-69*

Go to the *tb_kathleen.html* file and create links to the *tb_base.css*, *tb_styles4.css*, and *tb_visual4.css* files. Study the contents of the file and then close it.

## Transformation Styles
Go to the *tb_visual4.css* file and scroll down to the "Transformation Styles" section and add a style rule for the ```article``` element to set the size of the perspective space to **800** pixels.

Create a style rule for the ```figure1``` figure box to translate it **-120** pixels along the z-axis. Create a style rule for the ```figure2``` figure box to translate it **-20** pixels along the y-axis and rotate it **50&deg;** around the y-axis. Create a style rule for the ```figure3``` figure box to translate it **-30** pixels along the y-axis and rotate it **-50&deg;** around the y-axis.

## Filter Styles
Next, go to the "Filter Styles" section to apply CSS filters to the page elements. Create a style rule for the ```figure1``` figure box that applies a saturation filter with a value of **1.3**. Create a style rule for the ```figure2``` figure box that sets the brightness to **0.8** and the contrast to **1.5**. Create a style rule for the ```figure3``` figure box that sets the hue rotation to **170&deg;**, the saturation to **3**, and the brightness to **1.5**.
