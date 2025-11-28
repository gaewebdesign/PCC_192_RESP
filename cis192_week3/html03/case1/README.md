# t3-case-1

## Summary
**Slate & Pencil Tutoring** - Karen Cooke manages the website for Slate & Pencil Tutoring, an online tutoring service for high school and college students. Karen is overseeing the redesign of the website and has hired you to work on the layout of the site's home page. *Figure 3-84* shows a preview of the page you'll create for Karen.

![A webpage of slate and pencil tutoring. The page header displays the heading Slate and Pencil Tutoring with a photo. The left of the header shows 8 navigation links, Home, Our Tutors, Pricing, Testimonials, Your Account, Chat Online, Error Reporting, and Instructor Portal are given. Below the header, 8 links for the subjects, Math, Science, English, Languages, history, Sociology, Art, and Other are given. Below the links, four images with info are displayed. Six reviews of students are displayed below the images.](https://cdn.filestackcontent.com/D010jfNQS82p116MfMyH)

*Figure 3-84*
    
Karen has supplied you with the HTML file and the graphic files. She has also given you a base style sheet to initiate your web design and a style sheet containing several typographic styles. Your job will be to write up a layout style sheet according to Karen's specifications.

## Document Setup
Save sp_home_txt.html as sp_home.html. Save sp_layout_txt.css as sp_layout.css. Open the *sp_home.html* and *sp_layout.css* files and enter your **name** and the **date** in the comment section of each file. Next, go to the *sp_home.html* file and within the document ```head```, create links to the *sp_base.css*, *sp_styles.css*, and *sp_layout.css* style sheet files.

## Window and Body Styles
Open the *sp_layout.css* file. Go to the "Window and Body Styles" section. Create a style rule for the ```html``` element that sets the ```height``` of the browser window at **100%**. Create a style rule for the page ```body``` that sets the ```width``` to **95%** of the browser window ranging from **640** pixels up to **960** pixels. Horizontally center the page ```body``` within the browser window. Karen wants to ensure that the height of the page body is always at least as high as the browser window itself. Set the minimum height of the browser window to **100%**. Finally, add a style rule to display all inline images as blocks.

## CSS Grid Styles
Within the "CSS Grid Styles" section create a style rule that displays the ```body``` element as a grid with four columns of ```length``` **1fr**. Create a style rule for the ```img``` element with id ```logo``` so that the logo image spans three columns and has a ```width``` of **100%**. For the horizontal navigation list and the ```footer``` element create a style rule so that those elements span four columns. Create a style for the ```aside``` element to span two columns.

## Horizontal Navigation List Styles
Within the "Horizontal Navigation List Styles" section create a style rule for ```li``` elements nested within the horizontal navigation list that display each element as a block with a ```width``` of **12.5%** and floated on the left margin.

## Section Styles
Within the "Section Styles" section create a style rule for inline images within the ```section``` element that sets the ```width``` of the image to **50%** and centers the image using a top/bottom margin of **0** and a left/right margin of **auto**.

Create a style rule for paragraphs within the ```section``` element that sets the ```width```of the paragraph to **70%** and centers the paragraph using a top/bottom margin of **0** and a left/right margin of **auto**.

## Customer Comment Styles
Go to the "Customer Comment Styles" section and create a style rule for the ```aside``` element setting the ```width``` to **75%** and the bottom padding to **30** pixels. The six ```aside``` elements will be displayed in two columns. For odd-numbered aside elements, use the ```justify-self``` grid property to place the element on the end (right) margin.

Use the ```nth-of-type(odd)``` pseudo-class to select the odd-numbered ```aside``` elements.

Float inline images nested within the ```aside``` element on the left with a ```width``` of **20%** and float paragraphs nested within the ```aside``` element on the left with a ```width``` of **75%** and a left margin of **5%**.
