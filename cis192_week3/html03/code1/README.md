# t3-code-1

## Summary
Figure 3-79 shows an example page containing two applications of floating objects. In the first line of Lincoln's second inaugural speech a drop capital is created by floating the first letter of the first paragraph next to the surrounding text. The text of the speech is wrapped around the image of Lincoln using an irregular line wrap. This effect is created by cutting the Lincoln image into separate strips which are floated and stacked on top of each other. In this Coding Challenge you will explore how to create both effects.
    
![A webpage titled, Lincoln's second inaugural displays three paragraphs of content with an image of Lincoln at the right of the page.](https://cdn.filestackcontent.com/FRTes321Qt2WWm1JDhgs)

*Figure 3-79*
    
Do the following:

## Tasks
Save code3-1_txt.html as code3-1.html. Save code3-1_float_txt.css as code3-1_float.css. Open the files *code3-1.html* and *code3-1_float.css* and in the comment section enter your **name** (First + Last) and the **date** (MM/DD/YYYY) into the ```Author:``` and ```Date:``` fields of the file.

Go to the *code3-1.html* file in your editor. Within the ```head``` section insert a ```link``` element linking the page to the *code3-1_float.css* style sheet file. Take some time to study the content of the page.

Open the file *code3-1_float.css*, and for all ```img``` elements create a style rule to set the height of the image to **3.3em**. Float all ```img``` elements on the right margin, but only when the right margin is first cleared of any floats. (Hint: ```clear: right```).
        
To create a drop cap insert a style rule for the selector ```p:first-of-type::first-letter``` and add the following styles:

1. Float the element on the left margin.</li>
2. Set the font size to **4em** and the line height to **0.8em**.
3. Set the size of the right margin and padding space to **0.1em**. Set the bottom padding to **0.2em**.

Display the first line of the speech in small caps by adding a style rule for the selector ```p:first-of-type::first-line``` that changes the font variant to small-caps and the font size to **1.4em**.
        
Open the page in the browser preview and verify the layout of the page resembles that shown in *Figure 3-79*.
