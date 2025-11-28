"use strict"

/*
   New Perspectives on HTML5 and CSS3, 8th Edition
   Tutorial 9
   Coding Challenge 1

   Clock
   Author: Roger Okamoto   
   Date:   2/28/2022

   function getWeekday(dayNum)
      Returns the text of the day of the week where dayNum
      is the number of the week from 0 (Sunday) to 6 (Saturday)
*/

runClock()
setInterval(runClock, 1000)

function runClock(){


   var thisDay = new Date()

   var thisDate = thisDay.toLocaleDateString()
   var thisDayNum = thisDay.getDay()
   var thisWeekDay = thisDay.getWeekday

   var thisTime = thisDay.toLocaleTimeString()


   document.getElementById("date").textContent = thisDate;
   document.getElementById("wday").textContent = thisWeekDay;
   document.getElementById("time").textContent = thisTime;




}




function getWeekday(dayNum) {
   var wDays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
   return wDays[dayNum];
}
