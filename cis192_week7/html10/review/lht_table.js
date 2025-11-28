"use strict";

/*
   New Perspectives on HTML5 and CSS3, 8th Edition
   Tutorial 10
   Review Assignment

   Author: Roger Okamoto
   Date:   2/28/2022

	
*/
// https://stackoverflow.com/questions/563406/how-to-add-days-to-date
Date.prototype.addDays = function(days) {
   var date = new Date(this.valueOf());
   date.setDate(date.getDate() + days);
   return date;
}

var eventDates = new Array()
var eventDescriptions = new Array()
var eventPrices = new Array()
var thisDay = new Date()

var eventDescriptions2 = new Array()      // 2D ARRAY

var tableHTML = "<table id='eventTable'> \
     <caption>UpcomingEvents</caption>   \
    <tr>                                  \
        <th>Date</th>                     \
        <th>Event</th>                    \
        <th>Price</th>                    \
    </tr>"


var endDate = thisDay.addDays( 14)


var newTime 
var now = new Date()

for(var i=0 ; i<80 ; i++){
      // 22 days ahead   (but only 14 days get listed --- later )
      newTime = new Date( now.getTime() + getRandom(22*24*60*60*1000) )

      // ONLY if between 8 am and 10 pm
      if( newTime.getHours() >= 8 && newTime.getHours() <= 21 )      
           eventDates.push( newTime )
   
}

var eventDate, eventDay,eventDate, eventTime
var description = "" , price=""


// Initialize a bunch of  events
eventDescriptions.push("Cabaret")
eventDescriptions.push("San Diego Blues")
eventDescriptions.push("Visions of Light and Dreams")
eventDescriptions.push("Exit Stage Left")
eventDescriptions.push("Classics Cinema")


eventDescriptions2.push( ["San Diego Blues", 27 ] )
eventDescriptions2.push( ["Visions of Light and Dreams", 32 ] )
eventDescriptions2.push( ["Exit Stage Left" , 53 ] )
eventDescriptions2.push( ["Classics Cinema", 78 ] )




// Build out each table row
var tempHTML="",eventHTML = ""
var r
for(var i=0 ; i< eventDates.length ; i++){

       eventDate = eventDates[i] 
       eventDay = eventDate.toDateString()
       eventTime = eventDate.toLocaleTimeString()
              
       
              
       // extra guard against array overflow
       price = getRandom(32) + 12      // make up a price 
       description =  eventDescriptions[ getRandom( eventDescriptions.length) % eventDescriptions.length]
       price  =  eventDescriptions[ getRandom( eventDescriptions.length) % eventDescriptions.length]
       
       // OVERIDE THE ABOVE

       // use 2D array so same event has same price
       r = getRandom( eventDescriptions2.length )
       description = eventDescriptions2[r][0]
       price = eventDescriptions2[r][1 ]


       // between now and 14 days out
       if( thisDay <= eventDate && eventDate <= endDate){

            tempHTML = "<tr>"
            tempHTML += "<td>" + eventDay +  " @" +eventTime + "</td>"
            tempHTML += "<td>" + description + "</td>"

            tempHTML += "<td>$" + price + "</td>"
            tempHTML += "</tr>"

            eventHTML += tempHTML
       }

}

// Inject table & table rows into div id="eventList"
document.getElementById("eventList").innerHTML = tableHTML + eventHTML

/*
debug dates added to array
console.log("JAVSCRIPT CONSOLE * debugging code *")
for(var i=0 ; i<20 ; i++){
      console.log( eventDates[i] )   
}
*/

/*
var now = new Date()
var next = new Date( now.getTime() + getRandom(10*24*60*60*1000) )

console.log( "now = " + now)
console.log( "next = " + next)
*/

function getRandom( max ){

   return Math.floor( Math.random() * max)

}