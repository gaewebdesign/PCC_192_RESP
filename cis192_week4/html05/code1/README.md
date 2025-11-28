# t5-code-1

## Summary
Use media queries to create a responsive design for the menu shown in *Figure 5-57*. You will need to create three menu layouts: one for screen widths **500** pixels or less, another for screen widths of **501** pixels to **710** pixels, and a third for screen widths greater than **710** pixels.

![An image shows the web page of &quot;The Ridgewood Herald Tribune in mobile view, tablet view, and desktop view. In the mobile view, the header is followed by the menu and the main article. In the tablet view, the main article is displayed beside the menu, under the header. In the desktop view, the header is followed by the menu and the main article.](https://cdn.filestackcontent.com/TqhU2kA8SYWD6XCyfMJ3)
*Figure 5-57*
        
Do the following:


Open the file *code5-1.html* and *code5-1_media.css* and in the comment section enter your **name** (First + Last) and the **date** (MM/DD/YYYY) into the <code>Author:</code> and <code>Date:</code> fields of each file.

            
Go to the *code5-1.html* file and within the <code>head</code> section insert <code>link</code> elements linking the page to the *code5-1_layout.css* and *code5-1_media.css* files.
            
Add a <code>viewport meta</code> tag to the document <code>head</code> to set the <code>width</code> of the layout <code>viewport</code> equal to the <code>width</code> of the device and set the initial scale of the <code>viewport</code> to **1.0**.

Open *code5-1_media.css* file and create a media query for devices with a maximum width of **500** pixels. Within the query do the following:

1. Set the display of the <code>img</code> element within the <code>article</code> element to **none**.
2. Center the text contained within the <code>ul</code> element belonging to the <code>submenu</code> class.

Create a media query for devices with a minimum width of **501**pixels. Within the query do the following:

1. Float the <code>nav</code> element on the left page margin.
2. Set the <code>width</code> of the <code>nav</code> element to **130** pixels and the <code>height</code> to **400** pixels.
3. Set the top margin of the <code>nav</code> element to **30** pixels, the right margin to **25** pixels, and the bottom and left margins to **0** pixels.

Create a media query for devices with a minimum width of **710**pixels. Within the query do the following:

1. Set the <code>float</code> property of the <code>nav</code> element to **none**, its <code>width</code> to **100%** and its <code>height</code> to **auto**. Set the <code>nav</code> element margins to **0**.
2. Set the <code>display</code> of <code>ul</code> elements of the <code>mainmenu</code> class to flex with the flex flow in the row direction with no wrapping; justify the contents of the flexbox in the center.
3. Set the flex property of <code>li</code> elements with the <code>ul.mainmenu</code> element to have a growth factor of **0**, a shrink factor of **1**, and a basis value of **120** pixels.
