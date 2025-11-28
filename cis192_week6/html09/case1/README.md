# t9-case-1
Bridger College
<h2>Summary</h2>
<p><strong>Bridger College Student Union</strong> - Sean Baris manages the website for the student union at Bridger College in Bozeman, Montana. The student union provides daily activities for the students on campus. As website manager, part of Sean&rsquo;s job is to keep the site up to date on the latest activities sponsored by the union. At the beginning of each week, he revises a set of seven web pages detailing the events for each day in the upcoming week. Sean would like the website to display the current day&rsquo;s schedule within an aside element. To do this, the page must determine the day of the week and then load the appropriate HTML code into the element. He would also like the Today at the Union page to display the current day and date. <em>Figure 9&ndash;45</em> shows a preview of the page he wants you to create.</p>
<p>&nbsp;</p>
<figure>
    <a class="markdown-image-link" title="Open image in a new tab" href="https://cdn.filestackcontent.com/hqostqEDTGioenvZFfT2" target="_blank" rel="noopener">
        <img style="display: block; margin-left: auto; margin-right: auto;" src="https://cdn.filestackcontent.com/hqostqEDTGioenvZFfT2" alt="A homepage preview of &ldquo;Bridger College Student Union&rdquo; website displays the current day&rsquo;s schedule and daily events." />
    </a>
</figure>
<h2 style="text-align: center;"><sup><em>Figure 9-45</em></sup></h2>
<h2>Document Setup</h2>
<p>Open the <em>bc_union.html</em> and <em>bc_today.js</em>files and enter your <strong>name</strong> and the <strong>date</strong> in the comment section of each file. Next, go to the <em>bc_union.html</em> file and directly above the closing <code>&lt;/head&gt;</code> tag, insert a <code>script</code> element that links the page to the <em>bc_today.js</em> file. Defer the loading of the script until after the rest of the page is loaded by the browser.</p>
<p>Study the contents of the file, then go to the <em>bc_today.js</em> file and at the top of the file, insert a statement indicating that the code will be handled by the browser assuming strict usage. Note that within the file is the <code>getEvent()</code> function, which returns the HTML code for the daily events at the union given a day number ranging from 0 (Sunday) to 6 (Saturday).</p>
<h2>Complete the JavaScript File</h2>
<p>Declare the <code>thisDate</code> variable containing the <code>Date</code> object for the date <strong>October 12, 2022</strong>. Declare the <code>dateString</code> variable containing the text of the <code>thisDate</code> variable using local conventions. Declare the <code>dateHTML</code> variable containing the following text string <code>&lt;h2&gt;date&lt;/h2&gt;</code>where <code>date</code> is the value of the <code>dateString</code> variable.</p>
<p>Create the <code>thisDay</code> variable containing the day of the week number from the <code>thisDate</code> variable.</p>
<blockquote class="info">
    <p>Use the <code>getDay()</code> method.</p>
</blockquote>
<p>Using the <code>thisDay</code> variable as the parameter value, call the <code>getEvent()</code>function to get the HTML code of that day&rsquo;s events and store that value in a variable named <code>eventHTML</code>. Applying the <code>insertAdjacentHTML()</code> method to the <code>page</code> element with the ID <code>unionToday</code>, insert the value of the <code>dateHTML</code> plus the <code>eventHTML</code> variables before the end of the element contents.</p>
<p>Document your code with descriptive comments.</p>
<p>Open the bc_union.html file in the browser preview and verify that the sidebar shows both the date <strong>10/12/2022</strong> formatted as an <code>h2</code> heading and the daily events for that date formatted as a description list. Your content should resemble that shown in <em>Figure 9&ndash;45</em>.</p>
<p>Return to the <em>bc_today.js</em> file and test your code by changing the date in the <code>thisDate</code> variable from <strong>10/13/2022</strong> up to <strong>10/19/2022</strong>. Verify that a different set of events is listed for each date when you refresh the page in the browser preview.</p>
<p>Return once more to the <em>bc_today.js</em> file and change the value of the <code>thisDate</code>variable so that it uses the current date and time.</p>
<p>Reload the <em>bc_union.html</em> file in the browser preview to show the date and the events for the current day of the week.</p>
