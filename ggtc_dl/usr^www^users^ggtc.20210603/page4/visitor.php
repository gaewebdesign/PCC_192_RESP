<?php

$r  = Ukraine();



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

      $subject = "GGTC Visitor Stats: ".$city."  ".$region." ".$country;
      $message = $subject." <br>";

      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= "From: membership@sctennisclub.org  \r\n";

      $to = "tennis.mutt@gmail.com";

      $r=mail($to,$subject,$message,$headers);

      $r = "NO";
      if( $details['country'] == "US")
               $r = "YES";


      return $r;


}

function email(  $city, $region , $country)
{

   $to = "tennis.mutt@gmail.com";

   $subject = "GGTC Visitor Stats: ".$city."  ".$region." ".$country;

   $message = $subject." <br>";

   $headers = 'From: memb@sctennisclub.org' . "\r\n" .
    'Reply-To: roger@goldengatennisclub.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Use this header



   print("SUBJECT ".$subject );

   $r=mail($to,$subject,$message,$headers);


}



?>