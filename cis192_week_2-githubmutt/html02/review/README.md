# t2-review
**Tri and Succeed Sports**

## Summary
Alison has created another page for the Tri and Succeed Sports website providing biographies of the coaches at the club. She has already written the page content, acquired image files, and created a style sheet for the page layout. She wants you to finish the design of the page by developing a style sheet for the page's color scheme and typography. A preview of the page you'll design is shown in *Figure 2-58*.

![A webpage of T S S coaches profile page. A pane at the left, displays the list of options and the pane at the right titled, &ldquo;meet our coaches&rdquo; displays about the biographies with the photos of the coaches.](https://cdn.filestackcontent.com/PDinBD46QjiNfBRueY3C)
*Figure 2-58*

## Document Setup
Save tss_coach_txt.html as tss_coach.html. Save coach_styles_txt.css as coach_styles.css. Open the *tss_coach.html* and *coach_styles.css* files and enter your **name** and the **date** in the comment section of each file.

Next, go to the *tss_coach.html* file and within the document ```head```, create links to the *coach_layout.css*and *coach_styles.css* style sheets.
Close the *tss_coach.html* file and open the *coach_styles.css* file and at the top of the file and before the comment section do the following:

1. Insert an ```@charset``` rule to set the character encoding for the file to ```utf-8```.
2. Use the ```@font-face``` rule to define a web font named **Nobile**, which is based on the *nobile-webfont.woff* file and, if that format is not supported, on the *nobile-webfont.ttf* file.

## Main Structural Styles
Go to the "Main Structural Styles" section in the *coach_styles.css* file and do the following:

1. Change the background color of the browser window by creating a style rule for the ```html``` element that sets the background color to the value **hsl(27, 72%, 72%)**.
2. For the ```body``` element, create a style rule to set the text color to the value **rgb(91, 91, 91)**, the background color to **ivory**, and body text to the font stack: **Verdana**, **Geneva**, **sans-serif**.

Create a style rule for the ```body > footer address``` selector containing the following styles:

1. The background color set to the value **rgb(222, 128, 60)**.
2. The font color to **white** and then to the semi-transparent value **rgba(255, 255, 255, 0.6)**.
3. The font style to **normal** displayed in bold small capital letters with a font size of **0.9em** and a line height of **3em** using the font stack: **Nobile**, **Verdana**, **Geneva**, **sans-serif**.
4. The text horizontally centered on the page.

## Heading Styles
Go to the "Heading Styles" section and create a style rule for every ```h1``` heading that displays the text with a **normal** font weight from the font stack: **Nobile**, **Verdana**, **Geneva**, **sans-serif**. Set the letter spacing to **0.2em** and the margins to **0** pixels.

Alison wants you to format the main ```h1``` heading at the top of the page. Create a style rule for the ```section#tss_coaches h1``` selector that sets the font size to **2.5em** with a color value of **hsl(27, 82%, 85%)** and background color of **hsl(27, 6%, 21%)**. Set the left padding space to **10** pixels.

Alison also wants you to format the ```h2``` headings for each coach. Create a style rule for the ```article.coach_bio h2``` selector that sets the font size to **1.6em** with **normal** weight and the font color to **rgb(240, 125, 0)**.

## Blockquote Styles
Alison has inserted a comment from an athlete about the coaches. Format this comment by going to the "Blockquote Style" section and creating a style rule for the ```aside blockquote``` selector to do the following:

1. Set the font size to **0.95em** using the font stack: **'Comic Sans MS'**, **cursive**.
2. Set the font color to **rgb(222, 128, 60)** and use a semi-transparent background color with the value **rgba(255, 2555, 255, 0.75)**.
3. Set the padding space to **10** pixels. Define opening and closing quotes for the element using the Unicode character ```201C``` and ```201D``` respectively.

Format the appearance of the opening quotes by creating a style rule for the ```aside blockquote::before``` selector to write a boldfaced open quote before the block quote with the font size set to **1.6em** from the font stack: **'Times New Roman'**, **Times**, **serif**.

Format the appearance of the closing quotes by creating a style rule for the ```aside blockquote::after``` selector to write a boldfaced close quote after the block quote with the font size once again set to **1.6em** from the font stack: **&lsquo;Times New Roman'**, **Times**, **serif**.

## Navigation Styles
Next, you'll format the appearance of the navigation list by going to the "Navigation Styles" section and creating a style rule for ```body > nav``` selector that sets the text of the navigation list in a **0.8em** font size with a line height of **2em**.

Create a style rule for the ```nav > ul``` selector that removes the list marker and sets the left padding to **5** pixels.

Alison wants to break up the long list of links in the navigation list. Create style rules for the 6th and 16th ```li``` elements within the ```nav > ul``` selector that sets the size of the top margin of those items to **20** pixels.

For every previously visited or unvisited hypertext link within the ```nav > ul > li``` selector, set the text to the RGB color value **rgb(151, 151, 151)** and remove the underlining from the text link.

For every hovered or active hypertext link within the ```nav > ul > li``` selector, set the text color to RGB value **rgb(222, 128, 60)** and underline the hypertext link.

## Paragraph Styles
Go to the "Paragraph Styles" section and insert a style rule that sets the top margin and bottom margin to **10** pixels, the right margin to **30** pixels, and the left margin to **0** pixels for every paragraph in the document.

## List Styles
Every coach has a list of accomplishments. Go to the "List Styles" section and insert a style rule for the ```article.coach_bio > header > ul``` selector that displays the check.png file as the list marker and sets the margin space to **0** pixels, except for the bottom margin, which should be set to **10** pixels.
