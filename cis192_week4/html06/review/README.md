# t6-review
DLR Morning Schedule

## Summary
Kyle has reviewed your work on the DLR nightly schedule page. He wants you to make a few changes to the layout and apply those changes to a new page that describes the DLR morning schedule. Kyle already has entered much of the web page content and style. He wants you to complete his work by creating and designing the web table listing the times and programs for the morning schedule. *Figure 6-52* shows a preview of the morning schedule page.

![A webpage displays a D L R Morning Schedule. The first column displays the Time, the other columns displays the weekdays. The row element displays the time and names of the different D L R programs from 5:00 a.m. to 12:00 p.m.](https://cdn.filestackcontent.com/OxQauoWmS7KEbyBZRPIB)
    
*Figure 6-52*

## Document Setup
Open the *dlr_mornings.html*, *dlr_tables2.css*and *dlr_columns2.css* files and enter your **name** and the **date** in the comment section of each file. Next, go to the *dlr_mornings.html* file and insert links to the *dlr_tables2.css* and *dlr_columns2.css* style sheets.

## Create the Web Table
Scroll down the file and directly below the paragraph element, insert a web table and do the following:

- Set the class name of the web table to ```programs```.
- Add a table caption containing the text **All Times Central**.
- insert a ```colgroup``` element containing three columns below the caption.

    - set the first ```col``` element should have the class name ```timeColumn```.
    - set the second ```col``` element should have the class name ```wDayColumns``` and span five columns in the table that will contain the weekday programs.
    - set the last ```col``` element should have the class name ```wEndColumns``` and span the last two columns containing the weekend programming.

- Add the ```thead``` row group element containing a single table row with ```th``` elements containing the text shown in *Figure 6-52*.
- Add the ```tbody``` row group element containing the times and names of the different DLR programs from 5:00 a.m. to 12:00 p.m., Monday through Sunday, in half-hour intervals. The times should be placed in ```th``` elements and the program names in ```td``` elements.
- Create row and column spanning cells to match the layout of the days and times shown in *Figure 6-52*.
- Add the ```tfoot``` row group element containing a single row with a single ```td``` element that spans 8 columns and contains the text **Support your Public Radio Station**.

## Table Styles
Close the *dlr_mornings.html* file and open the *dlr_tables2.css* and go to the "Table Styles" section. Create a style rule for the ```programs``` table that:

1. Set the ```width``` of the table to **100%**.
2. Add a **15** pixel outset border with a color value of **rgb(151, 151, 151)**.
3. Defines the borders so that they are collapsed around the table.
4. Set the font family to the font stack: **Arial**, **Verdana**, and **sans-serif**.

Create a style rule that sets the ```height``` of every table row to **25** pixels and add a style rule for every ```th``` and ```td``` element that:

1. adds a **1** pixel solid gray border,
2. aligns the cell content with the top of the cell, and
3. sets the padding space **5** pixels.

## Table Caption Styles
Go to the "Table Caption Styles" section and create a style rule that places the ```caption``` element at the bottom of the table and centered horizontally.

## Table Column Styles
Go to the "Table Column Styles" section. For ```col``` elements belonging to the ```timeColumn``` class, create a style rule that sets the column ```width``` to **10%** and the background color to the value **rgb(215, 205, 151)**.

For ```col``` elements of the ```wDayColumns```class, create a style rule that sets the column ```width``` to **11%** and the background color to **rgb(236, 255, 211)**. For ```col```elements of the ```wEndColumns``` class, create a style rule that sets the column ```width``` to **17%** and the background color to **rgb(255, 231, 255)**.

## Table Header Styles
Kyle wants you to format the table heading cells from the table header row. Go to the "Table Header Styles" section and create a style rule to set the font color of the text within the ```thead``` element to **white** and the background color to a **medium green**with the value **rgb(105, 177, 60)**.

The different cells in the table header row should be formatted with different text and background colors. Using the ```first-of-type``` pseudo-class, create a style rule that changes the background color of the first ```th``` element with the ```thead``` element to **rgb(153, 86, 7)**.

Using the ```nth-of-type``` pseudo-class, create style rules that change the background color of the **7**th and **8**th ```th``` elements within the ```thead``` element to **rgb(153, 0, 153)**.

## Table Footer Styles
Kyle wants the table footer to be formatted in a different text and background color from the rest of the table. Go to the "Table Footer Styles" section. Create a style rule for the ```tfoot``` element that sets the font color to **white** and the background color to **black**.

## Column Styles
Return to the *dlr_columns2.css* file. Kyle wants the introductory paragraph to appear in a three column layout for desktop devices. Within the "Column Styles" section, create a media query for screen devices with minimum widths of **641** pixels. Within the media query, create a style rule for the paragraph element that:

1. sets the column count to **3**,
2. sets the column gap to **20** pixels, and
3. adds a **1** pixel **solid black** dividing line between columns.

Open the *dlr_mornings.html* file in your browser and verify that the table layout and design resemble that shown in *Figure 6-52*.
