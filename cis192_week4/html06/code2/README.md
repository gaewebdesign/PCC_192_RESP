# t6-code-2
<div class="custom-markdown steps-contents">
    <div class="step-block-outer step-block--not-last">
        <div class="step-block-header" role="heading" aria-level="2">
            <div class="custom-markdown steps-contents">
                <div class="custom-markdown steps-contents">
                    <h2>Summary</h2>
                    <p>You&rsquo;ve been tasked to create a crossword puzzle web page. The first step is to create the layout of the crossword puzzle table, including the numbering of the clues and the shading of the blank spaces. <em>Figure 6&ndash;49</em> shows a preview of the completed table.</p>
                    <p>&nbsp;</p>
                    <figure>
                        <a class="markdown-image-link" title="Open image in a new tab" href="https://cdn.filestackcontent.com/hhZxxUlLRsKXIUYMqv5u" target="_blank" rel="noopener">
                            <img src="https://cdn.filestackcontent.com/hhZxxUlLRsKXIUYMqv5u" alt="A webpage displays a crossword puzzle with 9 rows and 8 columns. " />
                        </a>
                    </figure>
                    <sup><em>Figure 6-49</em></sup>
                    <p>&nbsp;</p>
                    <p>Do the following:</p>
                </div>
                <div class="step-block-outer step-block--not-last">
                    <div class="step-block-header" role="heading" aria-level="2">Tasks</div>
                    <div class="step-block-header" role="heading" aria-level="2">
                        <br />
                        <span>Open the files </span><em>code6-2.html</em>
                        <span> and </span><em>code6-2_table.css</em>
                        <span> and in the comment section enter your </span><strong>name</strong>
                        <span> (First + Last) and the </span><strong>date&nbsp;</strong>
                        <span>(MM/DD/YYYY) into the </span><code>Author:</code>
                        <span>and </span><code>Date:</code>
                        <span> fields of each file.</span>
                    </div>
                    <div class="step-block-header" role="heading" aria-level="2">
                        <br />
                        <span>Go to the </span><em>code6-2.html</em>
                        <span> file and within the </span><code>head</code>
                        <span> section insert </span><code>link</code>
                        <span> elements linking the page to the </span><em>code6-2_layout.css</em>
                        <span> and </span><em>code6-2_table.css</em>
                        <span> files.</span>
                    </div>
                    <div class="step-block-header" role="heading" aria-level="2">
                        <br />
                        <span>Within the </span><code>page body</code>
                        <span> insert a </span><code>table</code>
                        <span> element and add a table header row group containing one row. Within that row insert a table heading cell that spans </span><strong>8</strong>
                        <span> columns and contains the text </span><strong>Daily Crossword</strong>
                        <span>.</span>
                    </div>
                    <div class="step-block-header" role="heading" aria-level="2">
                        <br />
                        <p>Add the table body section and within the table body, create the layout of the crossword puzzle subject to the following conditions:</p>
                        <ol>
                            <li>The table will contain <strong>9</strong> rows and <strong>8</strong> columns.</li>
                            <li>Within each row will be a number of table data cells. If the cell is a blank cell shown in <em>Figure 6&ndash;49</em>, assign it the class name <code>blank</code>. If a blank cell covers multiple rows and/or columns, make that cell a spanning cell and adjust the number of cells in subsequent rows and columns accordingly to preserve the table layout.</li>
                            <li>Several cells contain numbers that will be used as crossword puzzle clues. Number the appropriate cells from <strong>1</strong> up to <strong>26</strong> to match the layout in <em>Figure 6&ndash;49</em>.</li>
                        </ol>
                        <p>Open <em>code6-2_table.css</em> and create the following style rules for the indicated elements:</p>
                        <ol>
                            <li>For the <code>table</code> element: Add a <strong>20</strong> pixel margin around the table and collapse the table borders.</li>
                            <li>For the <code>th</code> element nested within the table row of the table header row group: Set the font color to <strong>white</strong>, the background color to <strong>red</strong>, and the font size to <strong>1.5em</strong>. Add a <strong>1</strong>pixel <strong>solid gray</strong> border around the element.</li>
                            <li>For every <code>td</code> element: Set the <code>width</code> and <code>height</code> to <strong>50</strong> pixels, the font size to <strong>0.7em</strong>, the border to a <strong>1</strong> pixel <strong>solid gray</strong>, and align the text with the top-left corner of the cell.</li>
                            <li>For every <code>td</code> element of the blank class: Change the background to a linear gradient going toward the bottom-right corner of the element and transitioning from <strong>red</strong> to <strong>gray</strong>.</li>
                        </ol>
                        <p>
                            <span>Verify that the layout of the crossword puzzle resembles that shown in </span><em>Figure 6&ndash;49</em>
                            <span>.</span>
                        </p>
                    </div>
                </div>
            </div>
