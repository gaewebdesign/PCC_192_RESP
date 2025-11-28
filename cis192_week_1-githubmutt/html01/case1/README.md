# t1-case-1
## Jedd's Tree Care
### Summary
**Jedds Tree Care** - Carol Jedds is the owner and operator of Jedds Tree Care and tree removal and landscaping company in Lansing, Michigan. She has asked for your help in developing her company's website. She has already written some of the text for a few sample pages and wants you to write the HTML code. *Figure 1-51* shows a preview of the company's home page that you'll create.

![A home page preview of Jedds tree care. Two navigation links, home, and services are present at the top right of the page. A pane at the left, displays a section with the heading, Comments. Below the heading, three reviewers' comments including the text of the quote and the name of the review are displayed. An image is displayed at the right with the title, Jedds Tree Care which is followed by two descriptive paragraphs. The contact information of Jedds Tree Care including address, email address, and phone number are displayed at the bottom of the page.](https://cdn.filestackcontent.com/ccWbBmwQSheSHXyVeTM7)

Figure 1-51

The style sheets and graphic files have already been created for you. Your job is to write the HTML markup.

## Document Setup
Save jtc_index_txt.html as jtc_index.html. Save jtc_services_txt.html as jtc_services.html.

Open the *jtc_index.html* and *jtc_services.html* files and enter your **name** and the **date** in the comment section of each file
Next, go to the *jtc_index.html* file and within the document ```head```, do the following:

1. Use the ```meta``` element to set the character encoding of the file to ```utf-8```.
2. Set the document ```title``` to **Jedds Tree Care**.
3. Link the document to the *jtc_base.css* and *jtc_layout.css* style sheet files.

Within the document ```body```, insert a ```header``` element, an ```aside``` element, and an ```article``` element.
Within the ```header``` element, insert a navigation list containing an unordered list with links to *jtc_index.html* and *jtc_services.html* file. The text of the links should be **home** and **services** respectively.

## Create the Homepage
Go to the *jtc_pages.txt* file in your text editor. The first section in the file contains comments made by Jedds Tree Care customers. Copy the text of the three reviews including the reviewer names. Then, go to the *jtc_index.html* file in your HTML editor and paste the copied text within the ```aside``` element.
Within the ```aside``` element, add the following content and markup:

1. Directly after the opening ```&lt;aside&gt;``` tag, insert an inline image for the *jtc_comments.png* file. Specify **Comments** as the alternate text.
2. Enclose each of the three reviewer comments within a ```blockquote```element, including both the text of the quote and the name of the review.
3. Within each of the three ```blockquote``` elements:
    - mark the review as a paragraph,
    - mark the line containing the reviewer name as a ```cite``` element,
    - replace the "---" text with the ```em``` dash character (&mdash;) using the character reference ```&mdash;```.

Go to the ```article``` element and insert a ```header``` element containing the inline image file *jtc_ photo1.png* with the alternate text **Jedds Tree Care**.
Return to the *jtc_pages.txt* file in your text editor and copy the second section of text containing the description of the company and its contact information. Then, go to the *jtc_index.html* file in your HTML editor and paste the copied text in the ```article``` element, directly below the ```article``` ```header```.
Mark up the content of the page ```article``` as follows:

1. Mark the first two paragraphs using the ```<p>``` tag.
2. Enclose the five lines of the contact information within an address element. Insert a line break element at the end of the first four lines so that each part of the address appears on a new line in the rendered page.
3. Mark the text **Jedds Tree Care** in the first line of the address as a strong element.
4. Mark the email address as a hypertext link. Make the telephone number a telephone link, including the international access code.

## Verify Your Progress
Pause and verify that the layout and appearance of the page resemble that shown in *Figure 1-51*. Note that under the smaller screen widths associated with mobile devices, the text of the reviewer comments is not displayed.

## Create the Services Page
Go to the *jtc_services.html* file in your HTML editor. Insert the same metadata in the document head to match what you did for the *jtc_index.html* file except name the page ```title``` **Jedds Tree Care Services**.

Go to the *jtc_index.html* file in your HTML editor and copy the ```body``` ```header```. Then, go to the *jtc_services.html* file and paste the copied ```header``` into the document ```body``` so that both files share a common ```header``` design.

Return to the *jtc_pages.txt* file in your text editor and copy the content of the third section, which contains information on the services offered by Jedds Tree Care. Be sure to copy the heading as well. Then, go to the *jtc_services.html* file in your HTML editor and paste the copied text directly after the header.
Mark the content describing Jedds Tree Care services as follows:

1. Mark the heading **Jedds Tree Care Services** as an ```h1``` heading.
2. Directly after the ```h1``` element, insert an inline image file for the *jtc_photo2.png*with the alternate text set to an empty text string ("").
3. Mark each of the headings associated with individual services as ```h2``` headings.
4. Mark each service description as a paragraph. Directly after the text of the last service, insert a ```footer``` element containing the following text: **Jedds Tree Care &diams; 201 Edward Ave. &diams; Lansing, MI 48930** where the &diams; symbol is inserted using the character reference ```&#9830;```.
    