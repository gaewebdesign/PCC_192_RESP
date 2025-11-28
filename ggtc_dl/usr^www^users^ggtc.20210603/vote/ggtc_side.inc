<?php

// Taken from getpollresults.php

  function getresults( ){


      $url = "http://www.sctennisclub.org/vote/poll.php";


      $ch = curl_init();
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_URL, $url);

      $result = curl_exec($ch);
      curl_close($ch);

      $obj = json_decode($result, $assoc= TRUE);

      date_default_timezone_set('America/Los_Angeles');

      $members = sizeof($obj);

      if(sizeof($obj) == 0) return;


      print("<center>");     
      print("<table>");     

      foreach ( $obj as $row ){

         $fname = $row['fname'];
         $lname = $row['lname'];
         $email = $row['email'];
         $ip = $row['ip'];
         $city = $row['location'];


         $unix = $row['unix'];
         $DATE = date(" m/d/y : h:i A",$unix );

         $vote = $row['vote'];

         print("<tr style='font-size:1.1em'>");     
         print("<td height='0.3em'>");     
         print(" $DATE ");
         print("<td>");     
         print(" $ip ");
         print("<td>");     

         print(" $city ");
         print("<td>");     

         print(" $fname ");
         print("<td>");     
         print(" $lname ");
         print("<td>");     
         print(" $email ");
         print("<td>");     
         print(" $vote" );
  }

   print("</table>");     



  }

?>