# t7-code-2

## Summary
You've been asked to create a survey web form for use in a seminar conference website. Some of the questions from the form are shown in *Figure 7-60*. Use your knowledge of HTML form elements to create the form elements and labels.

![A webpage displays 5 survey questions. Options for the first three questions are assigned with radio option buttons. The fourth question is assigned with a range slider and the last question is assigned with a text area.](https://cdn.filestackcontent.com/5Un8gkUT0ykzb7N9PBfW)

*Figure 7-60*
                            
Do the following:

## Tasks
Open the file *code7-2.html* and in the comment section enter your **name** (First + Last) and the **date** (MM/DD/YYYY) into the ```Author:``` and ```Date:``` fields of the file.

Open the *code7-2.html* file and within the ```head```
section insert a ```link``` element linking the page to the *code7-2_forms.css* style sheet.

Immediately after the ```h1``` tag create the form by enclosing the list of questions within opening and closing ```<form>``` tags. Give the form the ```action``` *submit-survey.php* using the **post** method.

The survey questions are marked as an ordered list. The first three questions include a nested list of options. For the first question do the following:

1. Mark the text from **Very Satisfied** to **Very Dissatisfied** as form labels.
2. Before each ```label``` insert a radio button belonging to the ```q1``` field with default values of **a** through **d**. Assign the radio button controls the ids```q1a``` through ```q1d```.
3. Use the ```for``` attribute to associate each ```label``` with its radio button control.

Repeat the previous task ("Create the first survey question") for questions 2 and 3, naming the fields for those radio buttons ```q2``` and ```q3``` respectively and assigning the radio button controls the ids ```q2a``` through ```q2d``` for the second question and ```q3a``` through ```q3d``` for the third question.

Within the ```div``` element with the id ```newRow``` insert a range slider that ranges from **1** to **10** in steps of **1**, with a default value of **5**. Insert the text **very unlikely** before the range slider and the text **very likely** after the range slider. Assign the range slider the field name ```q4```.

Mark the text **Provide any suggestions for the next conference** as a form ```label``` and use the ```for``` attribute to attach the ```label``` to the input control with the id ```q5text```.

Below the label, insert a ```textarea``` control with the id ```q5text``` and the field name ```q5```. Add the placeholder text **enter your suggestions here**.

Verify that the layout of form matches that shown in *Figure 7-60*.
