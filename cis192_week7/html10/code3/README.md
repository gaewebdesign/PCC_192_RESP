# t10-code-3

## Summary
You can use the switch/case statement to apply different possible values to the same variable. *Figure 10-36* shows a web page that displays different banner image on each day of the week. You will write the code to generate this page.

![A cartoon titled, &ldquo;Day of the Week&rdquo; depicts a penguin knitting a cloth. The text above the penguin reads, Tired Thursday.](https://cdn.filestackcontent.com/otpTDayQcOYhqNRybkn6)

*Figure 10-36*

Do the following:
## Tasks
Open the files *code10-3.html* and *days10-3.js* and in the comment section enter your **name** (First + Last) and the **date** (MM/DD/YYYY) into the ```Author:``` and ```Date:``` fields of each file.

Open the *code10-3.html* file and within the ```head``` section insert a ```script``` element connecting the page to the *days10-3.js* file. Add the ```defer``` attribute to the ```script``` element.

Next, open the *days10-3.js* file and below the initial comment section, create a variable named ```thisDay``` containing the date object for the current date.

Use the ```getDay()``` method to extract the day of the week from the ```thisDay``` variable, storing the value in the ```wDay``` variable

Declare a variable named ```imgSrc``` setting its initial value to an empty text string.

Create a switch/case statement that tests values of the ```wDay``` variable from **0** to **6**

If ```wDay``` equals **0** set ```imgSrc``` to the text string **sunday.png**; 

if ```wDay``` equals **1**, set ```imgSrc``` to **monday.png**; and so forth.

Store the text string ```<img src='imgsrc' alt='' />``` in the ```htmlCode``` variable where ```imgsrc``` is the value of the ```imgSrc``` variable.

Store the value of the ```imgSrc```variable in the inner HTML of the element with the ID **banner**.

Open the website in the browser preview and verify that the page shows the banner image for the current day.
