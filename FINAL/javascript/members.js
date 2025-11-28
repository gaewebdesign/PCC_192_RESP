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
        <th>DATE</th>                    \
    </tr>"


    var tempHTML = ""    
    var eventHTML = "" 
    var fname,lname,ntrp,epoch

    // read in via php/javascript from SQL/MongoDB

    var memberArray = Array()
    // FName, LName, Rating, Date (UNIX epoch format)
    memberArray.push( Array("Jennifer","Adams","F4.0",1646369991))
    memberArray.push( Array("Alok","Aggarwal","M3.5",1645821456))
    memberArray.push( Array("Nancy","Andersen","F3.0",1640590999))
    memberArray.push( Array("Kaddie","Ashley","F3.0 C",1641235695))
    memberArray.push( Array("Orhan","Baser","M4",1638807315))
    memberArray.push( Array("Carrie","Bell","F4.0",1638254029))
    memberArray.push( Array("Randy","Bell","M",1645487308))
    memberArray.push( Array("Ike","Bunanta","F4.5",1641969610))
    memberArray.push( Array("Theresa","Campbell","F3.0",1641430953))
    memberArray.push( Array("Lisa","Cesario","F3.0",1644288995))
    memberArray.push( Array("Jose","Contreras","M3.0",1639346254))
    memberArray.push( Array("Onofre","de Souza","M",1637651959))
    memberArray.push( Array("Ginger","Furuta-Sera","F4.0",1641112781))
    memberArray.push( Array("Zelda","Grover","F3.5",1638751787))
    memberArray.push( Array("Jeanette","Hoggatt","F3.5",1640048641))
    memberArray.push( Array("Diane","Hudson","F4.0",1641262187))
    memberArray.push( Array("Mark","Isaacson","M",1644644024))
    memberArray.push( Array("Julie","Johnson","F3.0",1641337185))
    memberArray.push( Array("David","Kohls","M",1638741957))
    memberArray.push( Array("Haruko","Kurata","F4.5",1642013500))
    memberArray.push( Array("Mariana","Lazarovici","F4.5",1644644277))
    memberArray.push( Array("Vicky","Leong-Ping","F4.0",1644644778))
    memberArray.push( Array("Weiwan","Liu","M4.0",1640473241))
    memberArray.push( Array("Elizabeth","Martinez","F3.5",1640467487))
    memberArray.push( Array("Valerie","McCarthy","F3.0",1638644498))
    memberArray.push( Array("Huimin","McKinlay","F3.0",1641083221))
    memberArray.push( Array("Gayle","Moore","F3.0",1637652179))
    memberArray.push( Array("Joseph","Nuniz","M3.5",1645147567))
    memberArray.push( Array("Roger","Okamoto","M3.5",1641926955))
    memberArray.push( Array("Noriko","Osawa","F4.5",1641891081))
    memberArray.push( Array("Janice","Passarello","F3.0",1643673681))
    memberArray.push( Array("Aditya","Rawat","M3.5",1641319973))
    memberArray.push( Array("Phyllis","Seeger","F4.0",1645487562))
    memberArray.push( Array("Arren","Smoot","M4.0",1641500215))
    memberArray.push( Array("Thomas","Stuckey","M3.0",1637652514))
    memberArray.push( Array("Kirsten","Tasker","F4.5",1646323328))
    memberArray.push( Array("Craig","Tibbetts","M",1641967594))
    memberArray.push( Array("Shashank","Verma","M3.5",1643143761))
    memberArray.push( Array("Rich","Wilder","M2.5",1640629377))

    var e,t,year,month,day
    for(var i=0; i< memberArray.length ; i++){

        fname = memberArray[i][0]
        lname = memberArray[i][1]
        ntrp  = memberArray[i][2]
        t = new Date( memberArray[i][3]*1000 )
        year = t.getMonth() + 1 + "/" + t.getDate() + "/" + t.getFullYear()
        
        tempHTML = "<tr>"
        tempHTML += "<td>" + fname + "</td>"
        tempHTML += "<td>" + lname + "</td>"
        tempHTML += "<td>" + ntrp + "</td>"
        tempHTML += "<td>" + year + "</td>"
        tempHTML += "</tr>"

        eventHTML += tempHTML
   }

    document.getElementById("memberList").innerHTML = tableHTML + eventHTML