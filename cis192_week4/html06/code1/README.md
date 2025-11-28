# t6-code-1
## Summary
The Orangeville Public Library has four conference rooms that it makes available for public use daily. You&rsquo;ve been asked to create a web page showing the room reservations for February 5, 2021. Use HTML table elements and CSS table styles to create the table shown in *Figure 6&ndash;48*.

![A webpage displays the conference room reservation table for February 5, 2021. The table has 10 columns and 4 rows. The column headers read, Conference room, 8.00 a m, 9.00 a m, 10.00 a m, 11.00 a m, 12.00 a m, 1.00 p m, 2.00 p m, 3.00 p m, and 4.00 p m. The row element contains the names of the different conference rooms and names of the classes.](https://cdn.filestackcontent.com/9wpoB0JKQeWulU3R497P)

*Figure 6-48*

Do the following:
## Tasks

Open the files *code6-1.html* and *code6-1_table.css* and in the comment section enter your **name** (First + Last) and the **date** (MM/DD/YYYY) into the ```Author:``` and ```Date:``` fields of each file.

Go to the *code6-1.html* file and within the ```head``` section insert ```link``` elements linking the page to the *code6-1_layout.css* and *code6-1_table.css* files.

Below the ```body header```, create a table using the ```table``` element. Add the following features to the table:

1. Insert a ```caption``` containing the text **February 5, 2021**.
2. Insert a column group containing a column with the id ```firstCol``` and a column with the id ```hourCols``` that spans **9** columns.
3. Insert a table head group that contains a single row with ```th``` elements containing the text **Conference Room** and the times **8:00am** through **4:00pm** in one-hour increments.
4. Insert a table body group that contains the four rows shown in *Figure 6&ndash;48* for each of the four conference rooms. Within each row insert a ```th``` element containing the name of the conference room. Following that ```th``` cell insert the groups reserving the room in ```td``` elements. If a group has reserved a room for longer than an hour, have the ```td``` cell span the number of columns for that reservation.

Open the *code6-1_table.css* file and create the following style rules for the indicated elements:

1. For the ```table``` element: Add a **20** pixel **grooved gray** border and collapse the table borders.
2. For the ```th``` and ```td``` elements: Add a **1** pixel **solid gray** border, set the padding space to **5** pixels, and align the cell content with the top-left corner of the cell.
3. For the ```caption``` element, set the display the caption at the top-left of the table and set the font size of the caption text to **1.5em**.
4. For ```col``` element with the id ```firstCol```, change the background color to **yellow** and set the column ```width``` to **150** pixels.
5. For ```col``` element with the id ```hourCols```, set the column ```width``` to **75** pixels.
6. Change the background color of the ```thead``` element to **aqua**.

Verify that the layout of the table resembles that shown in *Figure 6&ndash;48*.
