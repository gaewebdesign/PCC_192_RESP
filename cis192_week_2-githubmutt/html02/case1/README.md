# t2-case-1
**Philip Henslowe Classic Theatre**

## Summary
**Philip Henslowe** - Classic Theatre Randall Chen is the media director for the Philip Henslowe Classic Theatre, a regional classical theatre in Coeur d'Alene, Idaho. You've been asked to work on the website design for the company. The first page you'll manage lists the plays for next summer's repertoire. A preview of the page is shown in *Figure 2-59*.

![A screenshot displays the list of plays at the Philip Henslowe Classic Theater. Six navigation links, home, plays, ticket, calendar, about P H C T, support are present at the top of the page. The list of plays is displayed with a navigation bar along with the content of the plays.](https://cdn.filestackcontent.com/U9n3nTLaSatGqoVeH1e0)

*Figure 2-59*

The content and layout of the page has already been created for you. Your job will be to create a style sheet for the typography of the page.

## Document Setup
Save ph_plays_txt.html as ph_plays.html. Save ph_styles_txt.css as ph_styles.css. Open the *ph_plays.html* and *ph_styles.css* files and enter your **name** and the **date** in the comment section of each file.

Next, go to the *ph_plays.html* file and within the document ```head``` create links to the *ph_layout.css* and *ph_styles.css* style sheet files. Take some time to study the content and structure of the document and then close the file.

Go to the *ph_styles.css* file in your editor, and at the top of the file before the comment section, define the character encoding used in the document as **utf-8**.

Randall has several web fonts that he wants used for the titles of the plays produced by the company. Add the following web fonts to the style sheet, using ```@font-face``` rules before the comment section:

1. The **Champagne** font using the *cac_champagne.woff* and *cac_champagne.ttf* files.
2. The **Grunge** font using the *1942.woff* and *1942.ttf* files.
3. The **Dobkin** font using the *DobkinPlain.woff* and *DobkinPlain.ttf* files.

## Structural Styles
Go to the "Structural Styles" section, creating a style rule that sets the background color of the ```html``` element to the value **hsl(91, 8%, 56%)**.

Add a style rule for the ```body``` element to set the background color to the value **hsl(58, 31%, 84%)** and the font of the ```body``` text to the font stack: **'Palatino Linotype'**, **'Book Antiqua'**, **Palatino**, **serif**.

Create a style rule for the ```header``` element that sets the background color to **black**.

Create a style rule for every paragraph that sets the margin space to **0** pixels and the padding space to **5** pixels on top and **25** pixels on the right, bottom, and left. For paragraphs that are direct children of the ```body``` element, create a style rule that sets the font size to **1.1em** and horizontally centers the paragraph text.

Create a style rule for the ```address``` element that sets the font style to **normal** with a font size of **0.9em**, horizontally centered on the page. Set the top and bottom padding to **10** pixels.

## Navigation Styles
Next, you'll format the appearance of navigation lists on the page. Go to the "Navigation Styles" section and create a style rule for the ```nav a``` selector that displays the hypertext links using the font stack: **'Trebuchet MS'**, **Helvetica**, **sans-serif**. Set the top and bottom padding to **10** pixels.

For every unvisited and previously visited hypertext link within a ```nav``` element, set the text color to **white**, remove underlining from the link text, and set the background color to the semitransparent value **hsla(0, 0%, 42%, 0.4)**.

For every ```active``` or ```hovered``` link in a ```nav``` element, set the text color to the semi-transparent value **hsla(0, 0%, 100%, 0.7)** and set the background color to the semi-transparent value **hsla(0, 0%, 42%, 0.7)**.

## Section Styles
Go to the "Section Styles" section of the style sheet. In this section, you'll define the appearance of the four playbills. You'll start with the ```h1``` headings from the sections.

Create a style rule for the ```section.playbill h1```selector that sets the font size to **3em** and the font weight to **normal**. Set the margin space around the ```h1``` headings to **0** pixels. Set the padding space to **20** pixels on top, **0** pixels on the right, **10** pixels on the bottom, and **20** pixels on the left.

Each playbill section is identified by a different ID value ranging from ```play1``` to ```play4```. Create style rules that set a different background color for each playbill using the following background colors:

- ID: ```play1``` set to **hsl(240, 100%, 88%)**
- ID: ```play2``` set to **hsl(25, 88%, 73%)**
- ID: ```play3``` set to **hsl(0, 100%, 75%)**
- ID: ```play4``` set to **hsl(296, 86%, 86%)**

Each playbill section heading will also have a different font. For the ```h1``` headings within the four different playbills, create style rules to apply the following font stacks:

- ID: ```play1``` set to **Champagne**, **cursive**
- ID: ```play2``` set to **Grunge**, **'Times New Roman'**, **Times**, **serif**
- ID: ```play3``` set to **Impact**, **Charcoal**, **sans-serif**
- ID: ```play4``` set to **Dobkin**, **cursive**

## Description List Styles
Randall has put the author and the director of each play within a description list. Format these description lists now by going to the "Description List Styles" section and creating a style rule for the ```dt``` element that sets the font size to **1.3em**, the font weight to **bold**, and the font color to the semi-transparent value **hsla(0, 0%, 0%, 0.4)**.

Create a style rule for every ```dd``` element to set the font size to **1.3em**, the left margin space to **0** pixels, and the bottom margin space to **10** pixels.
