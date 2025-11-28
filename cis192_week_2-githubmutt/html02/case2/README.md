# t2-case-2
**The Civil War and Reconstruction**

## Summary
**The Civil War and Reconstruction** - Peter Craft is a professor of military history at Mountain Crossing University. The university is offering a series of online courses, one of which is The Civil War and Reconstruction taught by Professor Craft. He has developed the online content and has had a colleague help with the page layout. You've been asked to complete the project by creating text and color styles. A preview of the sample page is shown in *Figure 2-60*.

![A screenshot shows an online course web page of Mountain Crossing Online. Six navigation links, home, courses, about, terms of use, feedback, and help are present at the top of the page. A pane at the left, displays a section with the heading, Course outline. Below the heading, four outlines including the subheadings are displayed. An image is displayed at the right with the title, The Civil war, and Reconstruction which is followed by three descriptive paragraphs. The biography about the Peter Craft along with the photo is displayed at the right of the page.](https://cdn.filestackcontent.com/oT5H3W5SDaIIPNlHEP81)

*Figure 2-60*

## Document Setup
Save cw_class_txt.html as cw_class.html. Save cw_styles_txt.css as cw_styles.css. Open the *cw_class.html* and *cw_styles.css* files and enter your **name** and the **date** in the comment section of each file.
Next, go to the *cw_class.html* file and within the document ```head```, create a link to the *cw_styles.css* style sheet file.

Using the Google Fonts website, locate the **Limelight** font. Copy the code for the ```link``` element to use this font and paste the copied code to the document ```head``` in the *cw_class .html* file.
Study the content and structure of the *cw_class.html* file and then close the file.

Open to the *cw_styles.css* file. At the top of the file, define the character encoding as **utf-8**. On the next line, use the ```@import``` rule to import the contents of the *cw_layout.css* file into the style sheet.

## Structural Styles
Go to the "Structural Styles" section. Within that section create a style rule to set the background color of the browser window to **rgb(151, 151, 151)**.

Create a style rule to set the background color of the page ```body``` to **rgb(180, 180, 223)** and set the ```body``` text to the font stack: **Verdana**, **Geneva**, **sans-serif**.

Display all ```h1``` and ```h2``` headings with **normal** weight.
Create a style rule for every hypertext link nested within a navigation list that removes underlining from the text.

Create a style rule for the ```footer``` element that sets the text color to **white** and the background color to **rgb(101, 101, 101)**. Set the font size to **0.8em**. Horizontally center the ```footer``` text, and set the top/bottom padding space to **1** pixel.

## Header Styles
Next, you'll format the ```body header``` that displays the name of the university. Go to the "Body Header Styles" section and, for the ```body > header``` selector, create a style rule that sets the background color to **rgb(97, 97, 211)**.

The university name is stored in an ```h1``` heading. Create a style rule for the ```h1``` heading that is a direct child of the ```body header``` that sets the font size to **4vw** with the color value **rgba(255, 255, 255, 0.8)**. 

Display the text with the font stack: **Limelight**, **cursive**. 

Set the margin space to **0** pixels, the top and bottom padding to **10px** and the right and left padding to **20px**.

The last word of the ```h1``` heading text is enclosed within a ```span``` element. Create a style rule for the ```span``` element nested within the ```h1``` heading that is nested within the ```body header```, setting the text color to **rgba(255, 255, 255, 0.4)**.

## Navigation Styles
Go the "Navigation Styles" section. In this section, you format the navigation list that has the ID ```mainLinks```. For hypertext links within this navigation list, set the top and bottom padding space to **5** pixels.

For previously visited and unvisited links within the ```mainLinks``` navigation list, create a style rule that displays the hypertext links in a **white** font.

For hovered or active links within the ```mainLinks``` navigation list, create a style rule that displays the hypertext links in **white** with an opacity of **0.8** and set the background color to the value **rgba(51, 51, 51, 0.5)**.

## Outline Styles
Go to the "Outline Styles" section. In this section, you'll format the course outline that appears on the page's left column. The navigation list in this outline has the ID ```outline```. Create a style rule for this navigation list that sets the text color to **rgb(51, 51, 51)** and the font size to **0.8em**.

Horizontally center the ```h1``` headings within the outline navigation list. For the first level ```ol``` elements that are a direct child of the ```outline``` navigation list, create a style rule that sets the line height to **2em**, the top/bottom margin to **0** pixels and the left/right margin to **5** pixels. Display the list marker as an upper-case Roman numeral.

Display the second level of ```ol``` elements nested within the outline navigation list with an uppercase letter as the list marker.

Display all previously visited and unvisited links in the outline navigation list using the color value **rgb(101, 101, 101)**.

Display hovered and active links in the outline navigation list using the color value **rgb(97, 97, 211)** with the text underlined.

## Section Styles
Go to the "Section Styles" section. In this section, format the description of the course. Create a style rule that sets the background color of the ```section``` element to **rgb(220, 220, 220)**.
Format the heading of this section by creating a style rule for the section header ```h1``` selector that sets the font size of **2.2em** and the left padding space to **10** pixels.

## Article Styles
Go to the "Article Styles" section and create a style rule for ```h2``` headings within the ```article``` element that sets the font size to **1.4em**. Display the first letter of the first paragraph within the ```article``` element with a font size of **2em** and vertically aligned with the baseline of the surrounding text.

Use the ```first-of-type``` pseudo-class and the first-letter pseudo-element.

## Aside Styles
Information about Peter Craft has been placed in an ```aside``` element. Go to the "Aside Styles" section and create a style rule that sets the font size of text in the ```aside``` element to **0.9em**.

For ```h1``` headings nested within the ```aside``` element, create a style rule that sets the font size to **1.4em** and horizontally centers the text.
