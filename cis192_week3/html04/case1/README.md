# t4-case-1
## Summary
**Save your Fork** - Amy Wu has asked for your help in redesigning her website, Save your Fork, a baking site for people who want to share dessert recipes and learn about baking in general. She has prepared a page containing a sample dessert recipe and links to other pages on the website. A preview of the page you'll create is shown in *Figure 4-70*.

![A home page preview of Save your Fork sample recipe website. Seven tabs listed below the heading, are: recipes, menus, holidays, market, shopping, columns and messages. The categories and related recipes are displayed at the left pane and the reviews of the page are displayed on the right pane.  At center pane, a photo of the dish with the title &ldquo;Apple Bavarian Torte&rdquo; by Lemking is displayed along with the description of the dish. Below, Ingredients, recipe box, and directions are given.](https://cdn.filestackcontent.com/VzZY2iq0RKu76mZH8crO)

*Figure 4-70*

Amy has already created a style sheet for the page layout and typography, so your work will be focused on enhancing the page with graphic design styles.

## Document Setup
Open the *sf_torte.html* and *sf_effects.css*files and enter your **name** and the **date** in the comment section of each file. Next, go to the *sf_torte.html* file in your editor. Within the document ```head``` create links to the *sf_base.css*, *sf_layout.css*, and *sf_effects.css* style sheet files in that order. Take some time to study the structure of the document and then close the document.

## Body Header Styles
Go to the *sf_effects.css* file and within the "Body Header Styles" section, create a style rule for the ```body``` element to add drop shadows to the left and right border of the page body with an offset of **10** pixels, a blur of **50** pixels, and the color **rgb(51, 51, 51)**. Note that the right border is a mirror image of the left border.

## Navigation Tabs List Styles
Go to the "Navigation Tabs List Styles" section. Amy has created a navigation list with the class name ```tabs``` that appears at the top of the page with the ```body header```. Create a style rule for the ```body > header nav.tabs``` selector that changes the background to the image file *sf_back1.png* with no tiling, centered horizontally and vertically within the element and sized to cover the entire navigation list.

Amy wants the individual list items in the tabs navigation list to appear as tabs in a recipe box. She wants each of these &ldquo;tabs&rdquo; to be trapezoidal in shape. To create this effect, you&rsquo;ll create a style rule for the ```body > header nav.tabs li``` selector that transforms the list item by setting the perspective of its 3D space to **50** pixels and rotating it **20&deg;** around the x-axis.

As users hover the mouse pointer over the navigation tabs, Amy wants a rollover effect in which the tabs appear to come to the front. Create a style rule for the ```body > header nav.tabs li``` selector that uses the pseudo-element ```hover``` that changes the background color to **rgb(231, 231, 231)**.

## Left Section Styles
Go to the "Left Section Styles" section. Referring to *Figure 4&ndash;70*, notice that in the left section of the page, Amy has placed two vertical navigation lists. She wants these navigation lists to have rounded borders. For the vertical navigation lists in the left section, create a style rule for the ```section#left nav.vertical``` selector that adds a **1** pixel solid border with color value **rgb(20, 167, 170)** and has a radius of **25** pixels at each corner.

The rounded corner also has to apply to the ```h1``` heading within each navigation list. Create a style rule for ```h1``` elements nested within the left section vertical navigation list that sets the top-left and top-right corner radii to **25** pixels.

## Center Article Styles
Go to the "Center Article Styles" section. The ```article``` element contains an image and brief description of the Apple Bavarian Torte, which is the subject of this sample page. Create a style rule for the ```section#center article``` selector that adds the following:

1. A radial gradient to the background with a **white** center with a color stop of **30%** transitioning to **rgb(151, 151, 151)**.
2. A **1** pixel solid border with color value **rgb(151, 151, 151)** and a radius of **50** pixels.
3. A box shadow with horizontal and vertical offsets of **10** pixels with a **20** pixel blur and a color of **rgb(51, 51, 51)**.

## Blockquote Styles
Go to the "Blockquote Styles" section. Amy has included three sample reviews from users of the Save your Fork website. Amy wants the text of these reviews to appear within the image of a speech bubble. For every ```blockquote``` element, create a style rule that does the following:

1. Set the background image to the *sf_speech.png* file with no tiling and a horizontal and vertical size of **100%** to cover the entire block quote.
2. Use the ```drop-shadow``` filter to add a drop shadow around the speech bubble with horizontal and vertical offsets of **5** pixels, a blur of **10** pixels and the color **rgb(51, 51, 51)**.

Amy has included the photo of each reviewer registered on the site within the citation for each review. She wants these images to appear as circles rather than squares. To do this, create a style rule for the selector ```cite img``` that sets the border radius to **50%**.
