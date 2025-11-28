# t3-code-2
## Summary

*Figure 3-80* shows a proposed layout for a new web page. At this point the final content is not ready for the web page, so the layout is shown using lorem ipsum text. You've been given the HTML code for the page and your challenge is to create the page layout using CSS grid styles.

![A layout of a webpage with grid items outlined. The page header is at the top and six grids for navigation links are given below the header. Below the navigation links, the content of information is given in three columns in which the third column further divided into two grids as side 1 and side 2. The footer is displayed at the bottom of each column.](https://cdn.filestackcontent.com/lnq5g1OqSLysDUVzWpA5)

*Figure 3-80*
        
Do the following:

## Tasks
Save code3-2_txt.html as code3-2.html. Save code3-2_layout_txt.css as code3-2_layout.css. Open the file *code3-2.html*
and *code3-2_layout.css* and in the comment section enter your **name** (First + Last) and the **date** (MM/DD/YYYY) into the```Author:``` and```Date:``` fields of the file.

Go to the *code3-2.html* file and within the head section insert a ```link``` element linking the page to the *code3-2_layout.css* file. Study the contents of the file, taking note of the structure, element names, and element ids.
Go to the *code3-2_layout.css* file. Create a style rule for the ```header```, ```footer```, ```aside```, ```article```, and ```a``` (hyperlink) elements to set the padding space to **10** pixels and add a **3-pixel** **gray** dashed outline.

Create a style rule for the ```body``` element that:
1. Sets the ```width``` to **90%** of the browser window, ranging from a minimum width of **640** pixels up to a maximum width of **1024** pixels.
2. Sets the top/bottom margin to **30** pixels and the left/right margin to **auto**.
3. Displays the ```body``` as a CSS grid.
4. Creates six grid columns each with a ```width``` of **1fr**.
5. Creates five grid rows with widths of **50** pixels, **30** pixels, **1fr**, **1fr**, and **100** pixels.
6. Adds a grid gap of **15** pixels

Set the size of the grid items as follows:
1. Have the ```header``` element span from **gridline 1** to **gridline -1**.
2. Have the ```article#intro``` element span two rows and two columns.
3. Have the ```article#main``` element two rows and three columns.
4. Have the ```footer``` element span two columns.

Open the webpage in the browser preview and verify the layout of the page resembles that shown in *Figure 3-80*.
