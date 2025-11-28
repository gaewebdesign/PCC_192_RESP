# t10-case-2
**Voter Web**

### Summary
**VoterWeb** - Pam Carls is a manager for the website Voter Web, which compiles voting totals and statistics from local and national elections. Pam has the results of recent congressional elections from eight districts in Minnesota stored as multidimensional arrays in a JavaScript file. Pam wants you to create a script displaying these results and calculating the vote percentage for each candidate within each race. A preview of the page is shown in **Figure 10-40**.

![A home page of Voter Web is displayed. Six tabs displayed below the heading, Voter Web are: U.S. Congress, U.S. Senate, State Governors, Presidential, Timeline, and Search. The left pane of the page displays the list of States in U.S. The Sub-heading, Minnesota Congressional Elections is displayed below the tabs at the right pane. Below the sub heading, the voting rate of eight districts is displayed. Each district has three candidates and the voting rates for each district are displayed using a bar graph."](https://cdn.filestackcontent.com/WCFqMGPJSKOSQWhezNUZ)

Figure 10-40

## Document Setup
Open the *vw_election.html* and *vw_results.js* files and enter your **name**and the **date** in the comment section of each file. Next, go to the *vw_election.html* file and directly above the closing ```/head``` tag, insert ```script``` elements to link the page to the *vw_congminn.js* and *vw_results.js* files in that order. 

Defer the loading and running of both script files until after the page has loaded.

Scroll down the file and, directly above the ```footer```, insert an empty ```section``` element. You will write the HTML code of the election report in this element.

Open the *vw_congminn.js* file and study the contents. Note that the file contains the results of 8 congressional elections in Minnesota. The candidate information is stored in multidimensional arrays named ```candidate```, ```party```, and ```votes```. Do not make any changes to this file.

## Calculate the ```totalVotes```
Next, go to the *vw_results.js* file and declare a variable named ```reportHTML``` containing the following HTML text: ```<h1>title</h1>``` where **title** is the value of the ```raceTitle``` variable stored in the *vw_congminn.js* file

Create a ```for``` loop that loops through the contents of the ```race``` array using ```i``` as the counter variable. 
Place the commands specified in *steps 1* through *5* within this program for loop:

1. Create a variable named ```totalVotes``` that will store the total votes cast in each race. Set its initial value to **0**.
2. Calculate the total votes cast in the current race by applying the ```forEach()``` method to ```i```th index of the ```votes``` array using the ```calcSum()```function as the callback function.

3. Add the following HTML text to the value of the ```reportHTML``` variable to write the name of the current race in the program loop:

    ```<table><caption>race</caption><tr><th>Candidate</th><th>Votes</th></tr>```

where **race** is the ```i```th index of the ```race``` array.

4. Call the ```candidateRows()``` function (you will create this function shortly) using the counter variable ```i``` and the ```totalVotes``` variable as parameter values. Add the value returned by this function to the value of the ```reportHTML``` variable.

5. Add the text ```</table>``` to the value of the ```reportHTML``` variable.

After the ```for``` loop has completed, write the value of the ```reportHTML``` variable into the innerHTML of the first (and only) ```section``` element in the document.

## Create the ```candidateRows()``` function
Next, create the ```candidateRows()```function. The purpose of this function is to write individual table rows for each candidate, showing the candidate's name, party affiliation, vote total, and vote percentage. The ```candidateRows()```function has two parameters named ```raceNum``` and ```totalVotes```. Place the commands in *steps 1* through *3* within this function:

1. Declare a local variable named ```rowHTML``` that will contain the HTML code for the table row. Set the initial value of this variable to an empty text string.
2. Create a ```for``` loop in which the counter variable ```j``` goes from **0** to **2** in steps of **1** unit. Within the ```for``` loop do the following:
    - Declare a variable named ```candidateName``` that retrieves the name of the current candidate and the current race.
        - Retrieve the candidate name from the multidimensional candidate array using the reference, ```candidate[raceNum][j]```.
        - Declare a variable named ```candidateParty``` that retrieves the party affiliation of the current candidate in the current race from the multidimensional party array.
        - Declare a variable named ```candidateVotes``` that retrieves the votes cast for the current candidate in the current race from the multidimensional votes array.
        - Declare a variable named ```candidatePercent``` equal to the value returned by the ```calcPercent()``` function, calculating the percentage of votes received by the current candidate in the loop. Use ```candidateVotes```as the first parameter value and ```totalVotes``` as the second parameter value.
        - Add the following HTML code to the value of the rowHTML variable:
        ```
        <tr> <td>name (party)</td> <td>votes (percent)</td></tr>
        ```
        where **name** is the value of ```candidateName```, **party** is the value of ```candidateParty```, **votes** is the value of ```candidateVotes```, and **percent** is the value of ```candidatePercent```. Apply the ```toLocaleString()``` method to ```votes``` in order to display the vote total with a thousands separator. Apply the ```toFixed(1)``` method to ```percent``` in order to display percentage values to **1** decimal place.
        
3. Return the value of the ```rowHTML```variable.

Open the website in the browser preview. Verify that the three candidate names, party affiliations, votes, and vote percentages are shown for each of the eight congressional races.

## Use Bar Charts to Display the Voting Data
Pam also wants the report to display the vote percentages as bar charts with the length of the bar corresponding to the percentage value. Return to the *vw_results.js* file and at the bottom of the file, create a function named ```createBar()``` with one parameter named ```partyType```. Add the commands described in *steps 1* through *2* to the function:

1. Declare a variable named ```barHTML```and set its initial value to an empty text string.

2. Create a switch/case statement that tests the value of the ```partyType``` parameter. If ```partyType``` equals **D** set ```barHTML``` equal to:
    ```
    <td class='dem'></td>
    ```
    If ```partyType``` equals **R** set ```barHTML```equal to:
    ```
    <td class='rep'></td>
    ```
    Finally, if ```partyType``` equals **I** set barHTML to:
    ```
    <td class='ind'></td>
    ```

Return the value of ```barHTML```. Next, add these empty data cells to the race results table, with one cell for every percentage point cast for the candidate.

Scroll up to the ```candidateRows()```function. Directly before the line that adds the HTML code ```</tr>``` to the value of the ```rowHTML``` variable, insert a ```for``` loop with a counter variable ```k``` that goes from **0** up to a value less than ```candidatePercent``` in increments of **1** unit. Each time through the loop call the ```createBar()``` function using ```candidateParty``` and ```candidatePercent``` as the parameter values.

Add comments throughout the file with descriptive information about the variables and functions. Reload *vw_election.html* in your browser. Verify that each election table shows a bar chart with different the length of bars representing each candidate's vote percentage.
