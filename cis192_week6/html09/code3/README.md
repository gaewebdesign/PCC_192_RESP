# t9-code-3

## Summary
*Figure 9-42*
shows a preview of a page containing an analog clock with moving second, minute, and hour hands.

![A screenshot of an H T M L page displays the image of an analog clock with second, minutes, and hour&rsquo;s hands.](https://cdn.filestackcontent.com/C1JVL5W3RXWtlX550fkl)

*Figure 9-42*

Do the following:
## Tasks
Open the files *code9-3.html* and *clockface9-3.js* and in the comment section enter your **name** (First + Last) and the **date** (MM/DD/YYYY) into the ```Author:``` and ```Date:``` fields of each file.

Go to the *code9-3.html* file and within the ```head``` section insert a ```script``` element connecting the page to the *clockface9-3.js* file. Add the ```defer``` attribute to the ```script``` element.

Open the *clockface9-3.js* file and below the initial comment section insert the ```moveHands()``` function that moves the three hands of the analog clock. Add the following to the function:

1. Create a variable named ```nowTime``` that contains the current date and time.

2. Create the ```nowSeconds```, ```nowMinutes```, and ```nowHours``` variables containing the seconds, minutes, and hours values from the ```nowTime``` variable.

3. Calculate the angle that the second hand makes on the clock face by multiplying the ```nowSeconds``` value by **6**. Store the result in the ```secondsAngle``` variable.

4. Determine the angle that the minute hand makes on the clock face by calculating the following expression: ```(nowMinutes + nowSeconds/60)*6```. Store the calculated value in the ```minutesAngle``` variable.

5. Determine the angle that the hour hand makes on the clock face by calculating the following expression: ```(nowHours + nowSeconds/3600 + nowMinutes/60)*30```. Store the calculated value in the ```hoursAngle``` variable.

6. Call the ```rotateHand()``` function using ```secondsAngle``` and **seconds** as the argument value to rotate the image of the second hand. Call the ```rotateHand()``` function again using the ```minutesAngle``` and **minutes** as the argument values. Call the ```rotateHand()``` function one last time using the ```hoursAngle``` and **hours** as the argument values.

Directly below the ```moveHands()``` function insert a command to run the ```moveHands()``` function and then use the ```setInterval()``` method to run the ```moveHands()``` method every second.

Open the website in the browser preview. Verify that the page shows an analog clock face with the current time and that the hands of the clock move as the time changes. 
