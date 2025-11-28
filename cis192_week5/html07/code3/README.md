# t7-code-3

## Summary
You've been asked to complete a web form containing credit card payment information. Part of your task will be to include validation test to ensure that required data is entered correctly into the form. *Figure 7-61* shows the completed form.

![A screenshot of a "Payment Information" dialog box is displayed. The dialog box lists the following fields: Dropdown box for selecting credit card, card name field, card number field, dropdown box for selecting card month, dropdown box for selecting card year, and C S C number field. A Submit Payment button is displayed at the bottom of the dialog box. The card number field is shown highlighted in red.](https://cdn.filestackcontent.com/54k4AtSKWywLzZFC80Xw)

*Figure 7-61*

Do the following:

Tasks

Open the files *code7-3.html* and *code7-3_valid.css* and in the comment section enter your **name** (First + Last) and the **date**
(MM/DD/YYYY) into the ```Author:``` and ```Date:``` fields of each file.

Go to the *code7-3.html* file and within the ```head``` section insert ```link``` elements linking the page to the *code7-3_forms.css* and *code7-3_valid.css* files. Insert a ```script``` element to load the *formsubmit.js* JavaScript file.

Within the ```creditcard``` selection list add the following options and values: **Credit Card Type** (leave the value as an empty text string), **American Express (value="amex")**, **Discover (value="disc")**, **MasterCard (value="master")**, and **Visa (value="visa")**.
Make the selection list and ```cardname``` field required.

Make the ```cardnumber``` field required and add the regular expression pattern indicated in the comment section of the HTML file to help ensure that a valid card number is used.

Within the ```cardmonth``` selection list add options for each month starting with the text **Month** and a value of a blank text string followed by the option text **January (01)** through **December (12)** with the corresponding values **01** through **12**. Make the selection list required.

Within the ```cardyear``` selection list add options for each year starting with the text **Year** and a value of a blank text string followed by the option text **2021** through **2025** with the corresponding values **2021** through **2025**.

Make the ```cardcsc``` field required with a maximum character length of **3** characters following the regular expression pattern: ```^\d{3}$```

Open the *code7-3_valid.css* file and add the following style rules to the file:

1. Display any input or select element that has the focus with a **yellow** background color.
2. Display any input element with invalid data in a **red** font, surrounded by a **red** border, and **red** box shadows that are offset **0** pixels horizontally and vertically with a shadow blur of **5** pixels.

View the page the browser preview to verify the contents match than shown in *Figure 7-61*. 

Test your payment form by trying to submit the form data with missing values or with incorrect values. Attempt to submit the form using the invalid credit card number 412345678901 and then with the valid card number 4123456789012.
