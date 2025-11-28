# t6-case-1
Marlin Internet
<h2>Summary</h2>
<p><strong>Marlin Internet</strong> - Luis Amador manages the website for Marlin Internet, an Internet service provider located in Crystal River, Florida. You have recently been hired to assist in the redesign of the company&rsquo;s website. Luis has asked you to complete work he&rsquo;s begun on a page describing different pricing plans offered by Marlin Internet. A preview of the page is shown in <em>Figure 6&ndash;53</em>.</p>
<p>&nbsp;</p>
<figure>
    <a class="markdown-image-link" title="Open image in a new tab" href="https://cdn.filestackcontent.com/KNm63wQKQhOroKi1bXyJ" target="_blank" rel="noopener">
        <img src="https://cdn.filestackcontent.com/KNm63wQKQhOroKi1bXyJ" alt="A homepage preview of Marlin Internet Pricing website. The header of the webpage displays the background image and five tabs listed below the heading, Marlin Internet are: Internet, Home Networking, My Account, Shop and Support.  The sub-heading, Accelerate with No Speed Traps is shown below the tabs accompanied by a descriptive paragraph. The internet plan is displayed in a table with 6 rows and 5 columns. " />
    </a>
</figure>
<h2><sup><em>Figure 6-53</em></sup></h2>
<p>&nbsp;</p>
<p>Luis has already finished most of the page design. Your job will be to add a web table describing the different service plans and to write the CSS code to format the table&rsquo;s appearance.</p>
<h2>Document Setup</h2>
<p>Open the <em>mi_pricing.html</em> and <em>mi_tables.css</em>files and enter your <strong>name</strong> and the <strong>date</strong> in the comment section of each file. Next, go to the <em>mi_pricing.html</em> file and add a link to the <em>mi_tables.css</em> style sheet file to the document <code>head</code>.</p>
<h2>Create the Web Table</h2>
<p>Directly after the paragraph in the <code>article</code> element insert a web table with the ID <code>pricing</code>. Add a <code>colgroup</code> element to the web table containing two <code>col</code> elements. The first <code>col</code> element should have the ID <code>firstCol</code>. The second <code>col</code> element should belong to the class <code>dataCols</code> and span <strong>4</strong> columns.</p>
<p>Add a <code>thead</code> row group element containing two rows. In the first row, insert five <code>th</code> elements containing the text shown in <em>Figure 6&ndash;53</em>. The first heading cell should span two rows. In the second row, add four headings cells containing the prices of the plans shown in <em>Figure 6&ndash;53</em>. Use a <code>br</code> element to display the price information on two separate lines.</p>
<p>Add a <code>tbody</code> row group element. In each row within the row group, add a <code>th</code>element containing the text shown in <em>Figure 6&ndash;53</em> and four <code>td</code> elements containing the data values for each plan.</p>
<p>Add a <code>tfoot</code> row group element containing a single table row with a heading <code>th</code> element displaying the text <strong>Summary</strong>. Add four data <code>td</code> elements containing a description of each of the service plans.</p>
<p>
    <span>You can copy the summary text for each service plan from the </span><em>mi_data.txt</em>
    <span> file.</span>
</p>
<h2>Table Styles</h2>
<p>Open the <em>mi_tables.css</em> file and go to the "Table Styles" section and add a style rule for the <code>table</code> element that:</p>
<ol>
    <li>sets the background color to a linear gradient that goes to the bottom of the table background starting from <strong>rgb(190, 215, 255)</strong> and ending in <strong>black</strong>, and</li>
    <li>adds a <strong>5</strong> pixel <strong>solid gray</strong> border.</li>
</ol>
<p>For every <code>th</code> and <code>td</code> element in the table, create a style rule that:</p>
<ol>
    <li>adds a <strong>3</strong> pixel <strong>solid gray</strong> border,</li>
    <li>sets the line height to <strong>1.4em</strong>, and</li>
    <li>sets the padding space to <strong>8</strong> pixels.</li>
</ol>
<p>For every <code>th</code> element, create a style rule that:</p>
<ol>
    <li>sets the background color to <strong>black</strong>,</li>
    <li>sets the font color to <strong>rgb(130, 210, 255)</strong>, and</li>
    <li>sets the font <code>weight</code> to <strong>normal</strong>.</li>
</ol>
<p>For every <code>td</code> element, create a style rule that:</p>
<ol>
    <li>sets the font color to <strong>white</strong>,</li>
    <li>sets the font size to <strong>0.9em</strong>, and</li>
    <li>aligns the cell text with the top of the cell.</li>
</ol>
<h2>Column Styles</h2>
<p>Go to the "Column Styles" section. Create a style rule for <code>col</code> elements with the ID <code>firstCol</code> that sets the column <code>width</code> to <strong>24%</strong>. Create a style rule for <code>col</code>elements belonging to the <code>dataCols</code> class that sets the column <code>width</code> to <strong>19%</strong>.</p>
<h2>Table Header Styles</h2>
<p>Go to the "Table Header Styles" section. Create a style rule for the table header row group including every row within that row group that sets the row <code>height</code> to <strong>60</strong>pixels.</p>
<p>For the first <code>th</code> element in the first row of the table header row group, create a style rule that sets its font size to <strong>2em</strong>.</p>
<blockquote class="info">
    <p>Use the <code>first-of-type</code> pseudo-class to select the first table row and first heading cell.</p>
</blockquote>
<p>For <code>th</code> elements in the first row of the table header row group that are not the first heading cell, create a style rule that sets the background color to <strong>transparent</strong>and the font color to <strong>black</strong>.</p>
<blockquote class="info">
    <p>Use the <code>not</code> selector with the <code>first-of-type</code> pseudo-class to select headings that are not first in the table row.</p>
</blockquote>
<p>Open the <em>mi_pricing.html</em> file in your browser and verify that the table layout and design resemble that shown in <em>Figure 6&ndash;53</em>.</p>
