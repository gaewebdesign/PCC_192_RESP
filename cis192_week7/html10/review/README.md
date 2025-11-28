# t10-review

![A home page of The Lyman Hall Theater website is displayed with a photo of a woman mime artist at the top left corner. Six tabs listed below the heading The Lyman Hall Theater is: home, events, box office, facilities, directions, and contact. The sub heading, At the Theater is shown below the tabs at the left accompanied by four descriptive paragraphs. The schedule of the upcoming events is displayed at the right of the description in the form of table.](https://cdn.filestackcontent.com/Wooqdq9xToqtx43Hzpra)

## Summary
Lewis wants you to write another script that shows a table of events at the Lyman Hall Theater over the next two weeks from the current date. He has already created three arrays for use with the script:

1. The **eventDates** ```array``` containing a list of dates and times at which theater events are scheduled.
2. The **eventDescriptions** ```array``` containing the description of those events.
3. The **eventPrices** ```array``` containing the admission prices of those events.

Lewis has already written the page content and provided style sheets for use with the page. Your job will be to write a script that selects the events that occur in the two-week window from the current date and display them in the web page.

A preview of the home page is shown above.
The style sheets and graphic files have already been created for you. Your job is to write the HTML markup.

## Setup
Enter ***your name*** and ***the date*** in the comment section of **lht_events.html** and **lht_table.js**.

## Link JS Files
Open the **lht_events.html** file and directly above the closing ```</head>``` tag, insert script elements that link the page to the **lht_list.js** and **lht_table.js** files in that order. Defer the loading and running of both script files until after the page has loaded.

## Event List
Scroll down the document and directly after the closing ```</article>``` tag insert a ```div``` element with the ID **eventList**. It is within this element that you will write the HTML code for the table of upcoming theater events.

(*Hint : Be sure to review this file and all the support files, noting especially the names of variables that you will be using in the code you create.*)

## Variables
Go to the **lht_table.js** file and below the comment section, declare a variable named **thisDay** containing the date **October 1, 2021**. You will use this date to test your script.
Create a variable named **tableHTML** that will contain the HTML code of the events table. Add the text of the following HTML code to the initial value of the variable:

```html
<table id='eventTable'>
    <caption>UpcomingEvents</caption>
        <tr>
            <th>Date</th>
            <th>Event</th>
            <th>Price</th>
        </tr>
```
Lewis only wants the page to list events occurring within 14 days after the current date. Declare a variable named **endDate** that contains a ```Date``` object that is 14 days after the date stored in the **thisDay** variable.

*(Hint : Use the ```new Date()``` object constructor and insert a time value that is equal to ```thisDay.getTime() + 14 x 24 x 60 x 60 x 1000```.)*

## For Loop
Create a ```for``` loop that loops through the length of the **eventDates** array. Use ```i``` as the counter variable.
Within the ```for``` loop insert the following commands in a command block:

- Declare a variable named **eventDate** containing a ```Date``` object with the date stored in the ```i``` entry in the **eventDates** array.
- Declare a variable named **eventDay** that stores the text of the **eventDate** date using the ```toDateString()``` method.
- Declare a variable named **eventTime** that stores the text of the **eventDate** time using the ```toLocaleTimeString()```method.
- Insert an ```if``` statement that has a conditional expression that tests whether **thisDay** is **&le;** **eventDate** and **eventDate** **&le;** **endDate**. If so, the event falls within the two-week window that Lewis has requested and the script should add the following HTML code text to the value of the tableHTML variable.

```html
        <tr>
            <td>eventDay @ eventTime</td>
            <td>description</td>
            <td>price</td>
        </tr>
```

- Where **eventDay** is the value of the **eventDay** variable, **eventTime** is the value of the **eventTime** variable, description is the ```i``` entry in the **eventDescriptions** array, and price is the ```i``` entry in the **eventPrices** array.

## HTML Table Code
After the ```for``` loop, add the text of the HTML code ```</table>``` to the value of the **tableHTML** variable.

Insert the value of the **tableHTML** variable into the inner HTML of the ```page``` element with the ID **eventList**.

Verify that the page shows theater events over a two-week period starting with **October 1, 2021** and concluding with **October 14, 2021**.
