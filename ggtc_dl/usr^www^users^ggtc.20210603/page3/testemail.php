<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<head>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>

<script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body>

<style>
p { margin-top: 0.18em;}


body,html{
      margin-top:1;
      margin-left:30;
      margin-right:25;
      font-size:17 px; 

}

body {
       font-size:16px; 
       background-color: #78B3FB;


}

</style>

<center>

<p>
<p>
<div id="title"> Golden Gate Tennis Club</div>
<div id="app"> www.goldengatetennisclub.org</div>
<div id="app"> 2019 August Club Day</div>
</center>

<p>

<br>


<html>

<?php

   sendEmail(1, true);

function SendEmail($theKEY, $verbose=false)
{

   $to = "ggtcwebmaster@gmail.com";
   $to = "tennis.mutt@gmail.com";
   $to = "roger@goldengatetennisclub.org";
   $to = "rogero.tennis@gmail.com";


   $subject = "GGTC Membership (".$theKEY.")";

// Put Paypal POST values into message
   $message = "2019 August Club Day <br>";


   $headers = 'From: membership@goldengatetennisclub.org' . "\r\n" .
    'Reply-To: membership@goldengatetennisclub.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Use this header

   $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   $headers .= "From: membership@goldengatetennisclub.org \r\n";


   $name = " - ";

   $subject .= $name;

   $r=mail($to,$subject,$message,$headers);


   print("from:  $headers <br>");
   print("to:  $to  <br>");

   print("subject $subject <br>");
   print("message $subject <br>");
   print("<br>");
   if($verbose) echo "mail=".$r;

}


function sendmail_old(){

   $to = "rogero.tennis@gmail.com";
   $subject = "GGTC Club Day ($name)";

   $message = "Golden Gate Tennis Club";


   $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   $headers .= "From: roger@goldengatetennisclub.org  \r\n";

   echo $to."<br>";
   echo $message."<br>";

   $r=mail($to,$subject,$message,$headers);
   echo "RESULT: $r <br>";


}




?>


</html>
