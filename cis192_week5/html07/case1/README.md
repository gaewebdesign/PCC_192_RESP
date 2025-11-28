# t7-case-1
ACGIP Registration Form
<h2>Summary</h2>
<p><strong>ACGIP Conference</strong> - Professor Darshan Banerjee is the project coordinator for the annual conference of the Association of Computer Graphics and Image Processing (ACGIP), which takes place this year in Sante Fe, New Mexico. Darshan has asked you to work on the conference&rsquo;s website, starting with the registration form for conference attendees. The initial form will collect contact information for people attending the conference. <em>Figure 7&ndash;65</em>shows a preview of the form you will create for Darshan.</p>
<p>&nbsp;</p>
<figure>
    <a class="markdown-image-link" title="Open image in a new tab" href="https://cdn.filestackcontent.com/5FPwXLaTeyhgf47nbiNA" target="_blank" rel="noopener">
        <img src="https://cdn.filestackcontent.com/5FPwXLaTeyhgf47nbiNA" alt="A screenshot of a webpage displays a registration form for the A C G I P Conference. " />
    </a>
</figure>
<h2><sup><em>Figure 7-65</em></sup></h2>
<p>&nbsp;</p>
<p>Professor Banerjee has already written the HTML code for the page and the styles for the form elements. He wants you to write the HTML code for the web form and the CSS validation styles.</p>
<h2>Document Setup</h2>
<p>Open the <em>cg_register.html</em> and <em>cg_validate.css</em> files and enter your <strong>name</strong>and the <strong>date</strong> in the comment section of each file. Return to the <em>cg_register.html</em> file and add a link to the <em>cg_forms.css</em> and <em>cg_validate.css</em> style sheet files to the document <code>head</code>. Add a <code>script</code> element to the document <code>head</code> that loads the <em>cg_script.js</em> file.</p>
<h2>Create the Web Form</h2>
<p>Scroll down to the <code>section</code> element and after the nested <code>p</code> element insert a web form element that employs the action at <code>http://www.example.com/cg/register</code> via the <code>post</code> method. Add the labels, input controls, and textarea boxes shown in <em>Figure 7&ndash;65</em> and described in <em>Figure 7&ndash;66</em>. Place the input boxes directly after the labels and associate each <code>label</code> with its form control. You do not need to enclose these elements within <code>div</code> elements. Note that the address field should be entered within a <code>textarea</code> box.</p>
<p>&nbsp;</p>
<figure>
    <a class="markdown-image-link" title="Open image in a new tab" href="https://cdn.filestackcontent.com/I6ifoI4GRqt7Lb9tFnQP" target="_blank" rel="noopener">
        <img src="https://cdn.filestackcontent.com/I6ifoI4GRqt7Lb9tFnQP" alt="Table of fields and controls from the registration form. The table has 8 rows and 6 columns. The column headings from left to right are Label, Data Field, Control ID, Type, Required, and Placeholder. The row details are as follows. Row 1: Label, Title; Data Field, title; Control ID, titleBox; Type, text; Required, no; Placeholder, empty cell. Row 2: Label, First Name asterisk; Data Field, firstName; Control ID, fnBox; Type, text; Required, yes; Placeholder, empty cell. Row 3:  Label, Last Name asterisk; Data Field, lastName; Control ID, lnBox; Type, text; Required, yes; Placeholder, empty cell. Row 4:  Label, Address asterisk; Data Field, address; Control ID, addBox; Type, empty cell; Required, yes; Placeholder, empty cell. Row 5:  Label, Company or University; Data Field, group; Control ID, groupBox; Type, text; Required, no; Placeholder, empty cell. Row 6:  Label, Email asterisk; Data Field, email; Control ID, mailBox; Type, email; Required, yes; Placeholder, empty cell. Row 7:  Label, Phone Number asterisk; Data Field, phoneNumber; Control ID, phoneBox; Type, tel; Required, yes; Placeholder, parentheses nnn parentheses nnn dash nnnn. Row 8:  Label, ACGIP Membership Number; Data Field, acgipID; Control ID, idBox; Type, text; Required, no; Placeholder, acgip dash nnnnnn." />
    </a>
</figure>
<p><sup><em>Figure 7-66</em></sup></p>
<h2>Create the Form Continued...</h2>
<p>Create a data list named <code>titleList</code> containing the suggestions: <strong>Mr.</strong>, <strong>Mrs.</strong>, <strong>Ms.</strong>, <strong>Prof.</strong>, <strong>Dr.</strong>, <strong>Assist. Prof.</strong>, and <strong>Assoc. Prof</strong>. Apply the <code>titleList</code> data list to the <code>titleBox</code> control.</p>
<p>Apply the regular expression pattern <code>^\d{10}$|^(\(\d{3}\)\s*)?\d{3}[\s-]?\d{4}$</code>to the <code>phoneNumber</code> field. Apply the regular expression pattern <code>^acgip\-\d{6}$</code> to the <code>acgipID</code> field.</p>
<blockquote class="info">
    <p>You can copy the regular expression code for the <code>phoneNumber</code> field from the <em>cg_regex.txt</em> file.</p>
</blockquote>
<p>Add the <strong>Registration Category</strong> <code>label</code>associated with the <code>regList</code> control. Add a selection list with the ID <code>regList</code> that stores values in the <code>registerType</code> field. Populate the selection list with the option text: <strong>ACGIP Member ($695)</strong>, <strong>Non-Member ($795)</strong>, <strong>Student ($310)</strong>, <strong>Poster ($95)</strong>, and <strong>Guest ($35)</strong>. Make the corresponding option values equal to <strong>member</strong>, <strong>nonmember</strong>, <strong>student</strong>, <strong>poster</strong>, and <strong>guest</strong>.</p>
<p>Within the form, add a paragraph containing a submit button with the text <strong>continue</strong>.</p>
<h2>Validation Styles</h2>
<p>Return to the <em>cg_validate.css</em> file and create styles for validating data entry. Within the "Validation Styles" section, add the following style rules:</p>
<ol>
    <li>Display all <code>input</code>, <code>select</code>, and <code>textarea</code> elements that have the focus with a background color of <strong>rgb(245, 245, 140)</strong>.</li>
    <li>When the <code>fnBox</code>, <code>lnBox</code>, <code>mailBox</code>, <code>phoneBox</code>, and <code>idBox</code> controls have the focus and are valid, change the background color to <strong>rgb(220, 255, 220)</strong> and display the <em>cg_valid.png</em>image with no tiling in the right side of the background contained within the box.</li>
    <li>When the <code>fnBox</code>, <code>lnBox</code>, <code>mailBox</code>, <code>phoneBox</code>, and <code>idBox</code> controls have the focus and are not valid, change the background color to <strong>rgb(255, 232, 232)</strong>and display the image <em>cg_invalid.png</em>with no tiling in the right side of the background contained within the box.</li>
</ol>
<p>Lastly, open <em>cg_register.html</em> in the browser preview. Verify that the content and layout of the form resemble that shown in <em>Figure 7&ndash;65</em>. Verify that you must enter all required field values in the proper format for the form to be submitted successfully. Confirm that the browser performs inline validation on the <code>firstName</code>, <code>lastName</code>, <code>address</code>, <code>email</code>, <code>phoneNumber</code>, and <code>acgipID</code> fields.</p>
