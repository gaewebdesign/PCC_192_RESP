# t7-code-1
##Summary##
Use your knowledge of HTML form elements to create the user account login form shown in *Figure 7-59*.

![A screenshot of 'Enter User Account' dialog box. The dialog box displays Enter Account Information section listing the following options below: Account type with the dropdown box, Username, and Password. A Login button is displayed at the bottom of the dialog box. ](https://cdn.filestackcontent.com/bQPcHk90SYCJMBpTwVE5)

*Figure 7-59*

Do the following:
                    
## Tasks
Open the file *code7-1.html* and in the comment section enter your **name** (First + Last) and the **date** (MM/DD/YYYY) into the ```Author:``` and ```Date:``` fields of the file.

Go to the *code7-1.html* file and within the ```head``` section insert a ```link``` element linking the page to the *code7-1_forms.css* style sheet. Also insert a ```script``` element that opens the *formsubmit.js* JavaScript file for handling the form submissions.

Within the ```body``` of the web page insert a ```form``` element with the value of the ```action``` attribute set to *login-script.php* and the method value set to **post**.
    
Within the web form create a field set with the id ```login```. 

Within the field set insert a legend with the text **Enter Account Information**.

Within the field set insert a ```label``` containing the text **Account Type**. After the ```label``` add a selection list with the id ```acctype``` and the field name **accounttype**. 

Set the value of the size attribute of the selection list to **3** and add the following three options: **administrator**, **member**, and **guest**. Set the value of the three options to **type1**, **type2**, and **type3** respectively. 

Link the ```label``` to the selection list using the ```for``` attribute with a value of **acctype**.

Add a ```label``` to the field set containing the text **Username** followed by a text input box with the id ```username``` and the field name **user**. Use the ```for``` attribute to link the ```label``` to the input box control.

Add another ```label``` to the field set containing the text **Password**followed by a password input box with the id ```password``` and the field name **pwd**. Use the ```for``` attribute to link the ```label``` to the password input box.

Below the field set insert a submit button displaying the text **Login**.

Verify that the layout of the table resembles that shown in *Figure 7&ndash;59* and that when you click each label, the control associated with that label becomes selected. Further verify that clicking the Login button submits the form for processing.
