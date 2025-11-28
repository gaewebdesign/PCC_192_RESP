/*
   New Perspectives on HTML5 and CSS3, 8th Edition
   Tutorial 9
   Review Assignment

   Event Timer
   Author: Roger Okamoto
   Date:   2/28/2022

*/

// Create countdown clock
showClock()
setInterval("showClock()", 1000)

function showClock(){

   var thisDay = new Date()
   var localDate = thisDay.toLocaleDateString()
   var localTime = thisDay.toLocaleTimeString()
   
   const innerHTML= "<span>" + localDate + "</span><span>" + localTime + "</span>" 

   document.getElementById("currentTime").innerHTML = innerHTML

   var j4Date = nextJuly4( thisDay)
   j4Date.setHours(21)


   // Days,hours, minutes,secconds until July 4
   var days = (j4Date - thisDay)/(1000*60*60*24)
   var hrs = (days - Math.floor(days))*24
   var mins = (hrs - Math.floor(hrs))*60
   var secs = (mins - Math.floor(mins))*60

   // Display the time left until July 4 at 9 pm
   document.getElementById("dLeft").textContent = Math.floor( days)
   document.getElementById("hLeft").textContent = Math.floor( hrs )
   document.getElementById("mLeft").textContent = Math.floor( mins )
   document.getElementById("sLeft").textContent = Math.floor( secs )


}


function nextJuly4(currentDate) {
   var cYear = currentDate.getFullYear();
   var jDate = new Date("July 4, 2022");
   jDate.setFullYear(cYear);
   if ((jDate - currentDate) < 0) jDate.setFullYear(cYear + 1);
   return jDate;
}