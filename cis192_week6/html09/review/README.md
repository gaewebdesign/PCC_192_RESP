# t9-review
Tulsa's Summer Party

## Summary
Hector wants you to create a countdown clock page for the Tulsa Summer Party held on July 4th of every year. He wants the page to show the current date and time and to include a timer that counts down to the start of the fireworks at 9 p.m. on the 4th. Hector has already completed the page content and needs you to write the JavaScript code. A preview of the completed page for a sample date and time is shown in *Figure 9-44*.

![A homepage preview of &ldquo;Tulsa&rsquo;s Summer party&rdquo; website displays the countdown clock.](https://cdn.filestackcontent.com/OtTOJgjsQayPmoMmBXbP)

*Figure 9-44*
## Document Setup
Open the *tny_july.html* and *tny_timer.js* files and enter your **name** and the **date** in the comment section of each file. Next, go to the *tny_july.html* file and directly above the closing ```</head>``` tag, insert a ```script``` element that links to the *tny_timer.js* file. Defer the loading of the script file until the web page loads. Take some time to study the content and structure of the file, paying close attention to the id attributes applied to different page elements.

## Complete the ```showClock()``` Function
Go to the *tny_timer.js* file and at the top of the file, insert a statement to tell the browser to apply strict usage of the JavaScript code in the file. Directly above the ```nextJuly4()``` function, insert a function named ```showClock()``` that has no parameters. Within the ```showClock()```function, complete *steps 1* through *7* listed below:

1. Declare a variable named ```thisDay``` that stores a ```Date``` object containing the date **May 19, 2021** at **9:31:27 a.m.**
2. Declare a variable named ```localDate``` that contains the text of the date from the ```thisDay``` variable using local conventions. Declare another variable named ```localTime``` that contains the text of the time stored in the ```thisDay``` variable using local conventions.
3. Within the inner HTML of the page element with the ID ```currentTime```, write the following code ```datetime``` where ```date``` and ```time``` are the values of the ```localDate``` and ```localTime``` variables.
3. Hector has supplied you with a function named ```nextJuly4()``` that returns the date of the next 4th of July. Call the ```nextJuly4()``` function using ```thisDay``` as the parameter value and store the date returned by the function in the ```j4Date``` variable.
4. The countdown clock should count down to **9 p.m.** on the **4th of July**. Apply the ```setHours()``` method to the ```j4Date``` variable to change the hours value to **9 p.m.**

Express the value for 9 p.m. in 24-hour time.

6. Create variables named ```days```, ```hrs```, ```mins```, and ```secs``` containing the days, hours, minutes, and seconds until **9 p.m.** on the next **4th of July**.
7. Change the text content of the elements with the IDs ```dLeft```, ```hLeft```, ```mLeft```, and ```sLeft``` to the values of the ```days```, ```hrs```, ```mins```, and ```secs``` variables rounded down to the next lowest integer.

## Call the ```showClock()```Function
Directly after the opening comment section in the file, insert a command to call the ```showClock()``` function. After the command that calls the ```showClock()``` function, insert a command that runs the ```showClock()``` function every second.

Document your work in this script file with comments. Then open the *tny_july.html* file in the browser preview. Verify that the page shows the date and time of **May 19, 2021 at 9:31:27 a.m.**, and that the countdown clock shows that **Countdown to the Fireworks 46 days, 11 hours, 28 minutes, and 33 seconds**. The countdown clock will not change because the script uses a fixed date and time for the ```thisDay``` variable.

Return to the *tny_timer.js* file and change the statement that declares the ```thisDay``` variable so that it contains the current date and time rather than a specific date and time, then reload the *tny_july.html* file in the browser preview. Verify that the countdown clock changes every second as it counts down the time until the start of the fireworks at 9 p.m. on the 4th of July.
