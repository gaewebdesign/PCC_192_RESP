"use strict";

/*
   New Perspectives on HTML5 and CSS3, 8th Edition
   Insert club membefrs
   Author: Roger Okamoto
   Date:   3/6/2022
	
*/

var tableHTML = "<table id='membershipTable'> \
     <caption>2022 Membership List</caption>   \
    <tr>                                 \
        <th>First Name</th>                     \
        <th>Last Name</th>                    \
        <th>NTRP</th>                    \
    </tr>"

    
    var tempHTML = ""    
    var eventHTML = "" 

    var fname="Roger"
    var lname = "Okamoto"
    var ntrp = "M3.5"

    // will read in either via php or javascript from SQL or MongoDB
    var memberArray = Array()
    // FName, LName, Rating, Date (UNIX epoch format)
    memberArray.push(  Array("Roger","Okamoto","M4.5", 212343333) )

    fname = memberArray[0][0]
    lname = memberArray[0][1]
    ntrp  = memberArray[0][2]
    
    

    tempHTML = "<tr>"
    tempHTML += "<td>" + fname + "</td>"
    tempHTML += "<td>" + lname + "</td>"
    tempHTML += "<td>" + ntrp + "</td>"
    tempHTML += "</tr>"

    eventHTML += tempHTML

document.getElementById("memberList").innerHTML = tableHTML + eventHTML