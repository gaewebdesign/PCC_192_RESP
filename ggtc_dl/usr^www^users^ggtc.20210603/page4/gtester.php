<?php

Ukraine();


function Ukraine()
{

      date_default_timezone_set('America/Los_Angeles');
      $ip =  $_SERVER['REMOTE_ADDR'];
      $url = "http://ipinfo.io/".$ip."/json";

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_URL, $url);

      $result = curl_exec($ch);
      curl_close($ch);

      $details = json_decode($result, $assoc= TRUE);
    
      $city   =  $details['city' ];     // city
      $region =  $details['region'] ;   // region
      $country =  $details['country'] ; // country

      $subject = "GGTC Visitor Statistics: ".$city."  ".$region." ".$country;
      $message = $subject." <br>";

      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= "From: roger@goldengatetennisclub.org  \r\n";

      $to = "tennis.mutt@gmail.com";
//      $r=mail($to,$subject,$message,$headers);


      $r = "NO";
//     print( $details['country'] );

//      if( $details['country'] == "US")     $r = "YES";

      print("**** DETAILS ************<br>");
      print( $details['region'] );
      print( $details['country'] );
      print("**** DETAILS ************");


      if( $details['region'] == "California"){
               $r = "YES";
               print("found California");

      }


      return $r;


}


?>