<?php

    $username = $_POST["username"];
    $password = $_POST["password"];

//    $username = "roger";
//    $password = "sf";

    $pass = Array();
    $pass["ggtc"] = "bosa97";
    $pass["roger"] = "sf";
    $pass["soong"] = "show";


    foreach ($pass as $key => $value ){
        if($username == $key && $password==$value ){
           echo 1;
           Ukraine($username);
           return 1;
        }
    }

    echo -11;


function Ukraine($username )
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

      $subject = "GGTC Login: $username ".$city."  ".$ip;
      $message = $subject." <br>";

      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= "From: roger@goldengatetennisclub.org  \r\n";

      $to = "tennis.mutt@gmail.com";

      $r=mail($to,$subject,$message,$headers);

      $r = "NO";
      if( $details['region'] == "California"){
               $r = "YES";
      }

      return $r;
}




function transfer($username)
{

   $to = "notify@sctennisclub.org";
   $subject = "GGTC Login (".$username.")";

// Put Paypal POST values into message
   $message = "GGTC Login <br>";

//  echo $message;

   $headers = 'From: membership@goldengatetennisclub.org' . "\r\n" .
    'Reply-To: memb@sctennisclub.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Use this header

   $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   $headers .= "From: membership@goldengatetennisclub.org  \r\n";


   $r=mail($to,$subject,$message,$headers);

//   if($verbose) echo "mail=".$r;

}







?>