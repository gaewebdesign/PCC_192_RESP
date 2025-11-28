# t3-review
## Summary
Anne wants you to work on another page for the Pandaisia Chocolates website. This page will contain information on some of the specials offered by the company in March; it will also display a list of some awards that the company has won. As you work on the page, you will use clip art images as placeholders until photographs of the awards are available. A preview of the completed page is shown in *Figure 3-83*.

![A Homepage of Pandaisia Chocolates. The page header displays the heading, Pandaisia Chocolates with the restaurant logo at the top right. Six links, Home, The Store, My Account, Special, Review, and Contact us are presented below the page header. At the left pane below the links, the subheading titled, March specials displays a descriptive paragraph. Below the paragraph, three nested grids show photos of different chocolates along with info are outlined. The awards of the store are displayed at the right pane.](https://cdn.filestackcontent.com/OyOtTydQ5SwOBZZUaD0j)

*Figure 3-83*

Anne has already created the page content and some of the design styles to be used in the page. Your job will be to come up with the CSS style sheet to set the page layout.

## Document Setup
Save pc_specials_txt.html as pc_specials.html. Save pc_specials_txt.css as pc_specials.css. Open the *pc_specials.html* and *pc_specials.css* files and enter your **name** and the **date** in the comment section of each file.

Next, open to the *pc_specials.html* file and within the document ```head```, create links to the *pc_reset2.css*, *pc_styles4.css*, and *pc_specials.css* style sheets.

## Page Body Styles
Go to the *pc_specials.css* file and within the "Page Body Styles" section, add a style rule for the ```body``` element that sets the ```width``` of the page body to **95%** of the browser window width within the range of **640** to **960** pixels. Horizontally center the page body within the window by setting the left and right margins to **auto**.

## Image Styles
Go to the "Image Styles" section and create a style rule that displays all ```img```elements as blocks with a ```width``` of **100%**.

## Horizontal Navigation Styles
Anne wants the navigation list to be displayed horizontally on the page. Go to the "Horizontal Navigation Styles" section and create a style rule for every list item within a horizontal navigation list that displays the list item as a block floated on the left margin with a ```width``` of **16.66%**.
Display every hypertext link nested within a navigation list item as a block.

## Grid Styles
Next, you will create the grid styles for the March Specials page. Go to the "Grid Styles" section and create a style rule for the ```body``` element that displays the element as a grid with two columns in the proportion of 2:1 (using **fr** units) with a column grid gap of **20** pixels.

Create a style rule for the ```header``` and ```footer``` elements that has both elements span the grid columns from the gridline number **1** to gridline number **-1**.

Create a style rule for the ```section```element with the id ```sub``` that displays that element as a grid consisting of three columns of equal width by repeating the column width **1fr** three times.

## Special Styles
Go to the "Specials Styles" section. In this section, you will create styles for the monthly specials advertised by the company. Create a style rule for all ```div``` elements of the ```specials``` class that sets the minimum height to **400** pixels and adds a **1** pixel dashed outline around the element with a color value of **rgb(71, 52, 29)**.

## Award Styles
Go to the "Award Styles" section. In this section, you will create styles for the list of awards won by Pandaisia Chocolates. Information boxes for the awards are placed within an ```aside``` element.

Create a style rule for the ```aside``` element that places it using relative positioning, sets its ```height``` to **650** pixels, and automatically displays scrollbars for any overflow content.

Every information box in the ```aside```element is stored in a ```div``` element. Create a style rule that places these elements with absolute positioning and sets their ```width``` to **30%**.

Position the individual awards within the awardList box by creating style rules for the ```div``` elements with id values ranging from ```award1``` to ```award5``` at the following (top, left) coordinates:

1. ```award1``` **(80px, 5%)**,
2. ```award2``` **(280px, 60%)**,
3. ```award3``` **(400px, 20%)**,
4. ```award4``` **(630px, 45%)**,
5. ```award5``` **(750px, 5%)**.

In the *pc_specials.html* file, the five awards have been placed in a ```div ``` element belonging to the ```awards``` class with id values ranging from ```award1``` to ```award5```.
