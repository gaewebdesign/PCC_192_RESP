# t6-case-2
<h2>Summary</h2>
<p><strong>The Lyman Hall Theater</strong> - Lewis Kern is an events manager at the Lyman Hall Theater in Brookhaven, Georgia. The theater is in the process of updating its website, and Lewis has asked you to work on the pages detailing events in the upcoming year. He&rsquo;s asked you to create a calendar page that lists the upcoming events for September. A list of the events is stored in the lht_schedule.txt file. Lewis wants a responsive design so that the calendar is readable for both mobile and desktop users. In addition to the calendar, Lewis wants the article describing the September events displayed in column layout. He suggests that you set the width of the columns, allowing the number of columns to be determined based on the width of the display screen. <em>Figure 6&ndash;54</em> shows a preview of the page you will create for the theater viewed using mobile and desktop devices.</p>
<p>&nbsp;</p>
<figure>
    <a class="markdown-image-link" title="Open image in a new tab" href="https://cdn.filestackcontent.com/bHHjLeBITTCJG9boQmlP" target="_blank" rel="noopener">
        <img src="https://cdn.filestackcontent.com/bHHjLeBITTCJG9boQmlP" alt="A homepage of Lyman Hall Theater September Calendar website opened in mobile and desktop versions. In mobile version, the event schedule for upcoming year September is displayed in two columns. In the desktop version, content of five paragraphs is displayed in three columns and the event for upcoming year September is scheduled as a table of 7 columns and 5 rows." />
    </a>
</figure>
<h2><sup><em>Figure 6-54</em></sup></h2>
<h2>Document Setup</h2>
<p>Open the <em>lht_sept.html</em>, <em>lht_tables.css</em>, and <em>lht_columns.css</em> files and enter your <strong>name&nbsp;</strong>and the <strong>date</strong> in the comment section of each file. Next, go to the <em>lht_sept.html</em> file and add links to the <em>lht_tables.css</em> and <em>lht_columns.css</em> files to the document <code>head</code>.</p>
<h2>Creating the Calendar</h2>
<p>Directly below the <code>article</code> element, insert a web table using the ID <code>calendar</code>. Add a caption with the text <strong>September 2021 Calendar</strong>. Also add a column group containing two <code>col</code> elements. Give the first <code>col</code> element the class name <code>weekdays</code> and have it span five columns. Give the second <code>col</code> element the class name <code>weekends</code> and have it span 2 columns.</p>
<p>Add the table header row group with a single row with seven heading cells containing the three letter day abbreviations <strong>Sun</strong> through <strong>Sat</strong>. Add the table body row group with five rows and seven data cells within each row. Within each table cell, add the following code to create an <code>h1</code> heading and description list:</p>
<pre class="cmh-pre light"><code class="cmh" data-language="html"><span><span class="mtk1">&lt;</span><span class="mtk15">h1</span><span class="mtk1">&gt;day&lt;/</span><span class="mtk15">h1</span><span class="mtk1">&gt;</span></span><br /><span><span class="mtk1">&nbsp;&nbsp;&nbsp;&nbsp;&lt;</span><span class="mtk15">dl</span><span class="mtk1">&gt;</span></span><br /><span><span class="mtk1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;</span><span class="mtk15">dt</span><span class="mtk1">&gt;event&lt;/</span><span class="mtk15">dt</span><span class="mtk1">&gt;</span></span><br /><span><span class="mtk1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;</span><span class="mtk15">dd</span><span class="mtk1">&gt;time&lt;/</span><span class="mtk15">dd</span><span class="mtk1">&gt;</span></span><br /><span><span class="mtk1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;</span><span class="mtk15">dd</span><span class="mtk1">&gt;price&lt;/</span><span class="mtk15">dd</span><span class="mtk1">&gt;</span></span><br /><span><span class="mtk1">&nbsp;&nbsp;&nbsp;&nbsp;&lt;/</span><span class="mtk15">dl</span><span class="mtk1">&gt;</span></span><br /></code></pre>
<p>where <code>day</code> is the day of the month, <code>event</code> is the name of an event occurring on that day, <code>time</code> is the time of the event, and <code>price</code> is the admission price, using the days, events, times, and prices shown in the <em>lht_schedule.txt</em> file. If there is no event scheduled for the day, insert only the code for the <code>h1</code> heading. Start your calendar with <em>August 29</em> and conclude it with <em>October 2</em>.</p>
<p>For each data cell you create in the table body, add an attribute in the opening <code>td</code>tab named <code>data-date</code> containing the date associated with the cell. For example, in the first table cell, enter <code>data-date</code>value <strong>Sun, Aug 29, 2021</strong>, the second cell will have the <code>data-date</code> value <strong>Mon, Aug 30, 2021</strong> and so forth.</p>
<p>
    <span>This code will be used to display the date information in the mobile layout.</span>
</p>
<h2>Mobile Styles</h2>
<p>Open <em>lht_tables.css</em> file and within the "Mobile Styles" section, insert a media query for screen devices with a maximum <code>width</code> of <strong>640</strong> pixels. You want mobile devices to display the calendar information in two columns. To create this layout, add the style rules that:</p>
<ol>
    <li>displays <code>table</code>, <code>tbody</code>, <code>tr</code>, <code>td</code>, <code>th</code>, and <code>caption</code> elements as blocks,</li>
    <li>does not display the <code>thead</code> <code>h1</code>element, and</li>
    <li>displays the <code>table caption</code> in <strong>white</strong>on a <strong>medium gray</strong> (<strong>rgb(51, 51, 51)</strong>) background with a font size of <strong>1.5em</strong>and a line <code>height</code> of <strong>2em</strong>.</li>
</ol>
<p>Create a style rule for every data cell that:</p>
<ol>
    <li>adds a <strong>1</strong> pixel <strong>dotted gray</strong> border,</li>
    <li>changes the text color to <strong>rgb(11, 12, 145)</strong>,</li>
    <li>places the cell using relative positioning,</li>
    <li>sets the left padding to <strong>40%</strong>, and</li>
    <li>sets the minimum <code>height</code> to <strong>40</strong> pixels.</li>
</ol>
<p>Create a style rule that uses the <code>nth-of-type</code> pseudo-class to display every odd-numbered table row with a background color of <strong>rgb(255, 235, 178)</strong>and a <strong>2</strong> pixel <strong>solid gray</strong> border.</p>
<p>Create a style rule that inserts the text of the <code>data-date</code> attribute before every data cell. Place the attribute text using absolute positioning at the coordinates <strong>(0, 0)</strong> with a <code>width</code> of <strong>40%</strong> and padding space of <strong>5</strong> pixels.</p>
<h2>Tablet and Desktop Styles</h2>
<p>Next, you design the layout of the calendar for tablet and desktop devices. Go to the "Tablet and Desktop Styles" section and insert a media query for screen devices with a minimum <code>width</code> of <strong>641</strong> pixels. Next, create a style rule for the <code>table</code> element that:</p>
<ol>
    <li>displays the background image <em>lht_photo1.png</em> with no tiling in the bottom-right corner of the table with a <code>width</code> of <strong>40%</strong>,</li>
    <li>adds a <strong>6</strong> pixel double border with color value <strong>rgb(154, 64, 3)</strong>,</li>
    <li>collapses the table borders,</li>
    <li>centers the table by setting the top/bottom margins to <strong>20</strong> pixels and the left/right margins to <strong>auto</strong>,</li>
    <li>uses a fixed layout for the table content, and</li>
    <li>sets the <code>width</code> of the table to <strong>85%</strong>.</li>
</ol>
<p>For every heading and data cell, create a style rule that:</p>
<ol>
    <li>adds a <strong>1</strong> pixel <strong>solid gray</strong> border,</li>
    <li>sets the font size to <strong>0.85em</strong> and with normal weight,</li>
    <li>adds a <strong>5</strong> pixel padding space,</li>
    <li>aligns the cell text with the top of the cell,</li>
    <li>sets the <code>width</code> to <strong>14.28%</strong>, and</li>
    <li>allows the browser to wrap cell text within individual words.</li>
</ol>
<p>
    <span>Use the </span><code>word-wrap</code>
    <span> property.</span>
</p>
<p>For every data cell, create a style rule that:</p>
<ol>
    <li>applies a semi-transparent background color with the value <strong>rgba(171, 171, 171, 0.6)</strong> and</li>
    <li>sets the text color to <strong>rgb(11, 12, 145)</strong>.</li>
</ol>
<h2>Tablet and Desktop Styles Continued...</h2>
<p>Lewis wants the September dates to appear in a different format from the August and October dates. Create a style rule for data cells whose <code>data-date</code> attribute contains the text <strong>Sep</strong> that:</p>
<ol>
    <li>changes the background color to the semi-transparent value <strong>rgba(232, 214, 148, 0.6)</strong> and</li>
    <li>adds a <strong>gray</strong> inset box shadow with horizontal and vertical offsets of <strong>0&nbsp;</strong>pixels and a blur of <strong>20</strong> pixels.</li>
</ol>
<p>Create a style rule for the <code>table</code> <code>caption</code> that:</p>
<ol>
    <li>displays the caption at the top of the <code>table</code>,</li>
    <li>centers the caption text,</li>
    <li>adds <strong>10</strong> pixels to the bottom padding space, and</li>
    <li>sets the font size to <strong>1.2em</strong> and the letter spacing to <strong>3</strong> pixels.</li>
</ol>
<p>For heading cells within the <code>table</code> <code>header</code>, create a style rule to change the background color to <strong>rgb(154, 64, 3)</strong> and the text color to <strong>white</strong>.</p>
<h2>Column Styles</h2>
<p>Lastly, open <em>lht_columns.css</em> file and within the "Column Styles" section, create a style rule for the <code>article</code> element that:</p>
<ol>
    <li>sets the column <code>width</code> to <strong>260</strong> pixels,</li>
    <li>sets the column gap to <strong>20</strong> pixels,</li>
    <li>adds a <strong>1</strong> pixel solid dividing line between columns with color value <strong>rgb(154, 64, 31)</strong>, and</li>
    <li>sets the minimum size of widows and orphans to <strong>2</strong> lines.</li>
</ol>
<p>Create a style rule for the <code>h1</code> heading with the <code>article</code> element that extends the heading across all columns.</p>
<p>Verify that for desktop widths, the table appears as shown in right image of <em>Figure 6&ndash;54</em> and the number of columns used in the introductory article changes from 2 to 3 based on the page width. Reduce the page width to below <strong>640</strong> pixels and verify that the calendar information is displayed in two columns as shown in the left image in <em>Figure 6&ndash;54</em>.</p>
