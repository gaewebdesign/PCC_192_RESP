<?php

#include "includes.inc"

// foreach ( $_POST as $key => $value)    echo $key." -> ".$_POST[$key]."<br>";

define("FNAME", "fname" );
define("LNAME", "lname" );
define("EMAIL", "email" );
define("URL", "url" );
define("GENDER", "gender" );
define("NTRP", "ntrp" );
define("MEMBER", "member" );


function err($t)
{
    echo $t."<br>";
}


function CheckForErrors()
{

  $err=0;

  if( strlen( $_POST[FNAME])<3)     {  $err |= ERR_NAME; err("fname ");}
  if( strlen( $_POST[LNAME])<2)     {  $err |= ERR_NAME; err("lname".$_POST[LNAME] ); }

  return $err;

}

function span( $_TAG, $val )
{

// <span id="_TAG"> value </span>

   echo '<span id="'.$TAG.'>"'.$val."</span>";

}

function Styles()
{
   p( '<style type="text/css">');
   p( ".MiniTable {");
   p( "width:70%;");
   p( "border:1px solid #000;");
   p( "}");
   p( "</style>");


}


?>

<html>
<meta content="text/html; charset=UTF-8" http-equiv="content-type" />
<body bgcolor="EB4203">
<head>
<!--
<link rel="stylesheet" type="text/css" href="tourny.css">
#fd5e00
-->
</head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
<script language="javascript">

</script>

<style type="text/css">

body {
 background-color: #fd5e00

}

.intro{
  font-size: 26px;
  color: blue;

}

.love{
  font-size: 24px;
  color: blue;

}

.contact{
  font-size: 24px;
  color: black;

}

.fourty{
  font-size: 24px;
  color: black;

}

.CLASSIC{
   border: 0px solid blue;
   table-layout: fixed;
   width:  80%;
   background: url("halloween.png")
   background: url("pumpkin.png")
}

.twenty{
    width: 25%;
//    background: tomato
}

.eighty{
    width: 75%;
//    background: turquoise

}

table {
        width:75%;
        border:0px solid #000;
        background: url("pumpkins.jpg")

      }
</style>

<center>

<?php
/*
$_POST[FNAME] = "George";
$_POST[LNAME] = "Bush";
$_POST[NTRP] = "M4.5";
$_POST[EMAIL] = "george.bush";
$_POST[URL] = "whitehouse.gov";
$_POST[MEMBER] = "Y";
*/
?>

&nbsp;
<p height="10">

<div class="intro">

<br>Golden Gate Tennis Club </br>
<p height="20" class="love">

Thank you for entering the October Club Day event<br>
If you have any questions --- if you need to change your information or withdraw from the event

<p class="contact">

Contact: Ken Tse at <a href="rcyclops@goldengatetennisclub.org">rcyclops@goldengatetennisclub.org</a> 
<p>
</div>

<p>


<span id="_ENTRANTS" "style=display:none">

<table>

<tr><p><p><p><p><td height="75"></td><td> </td></tr>

<tr><td class="love">Name </td><td class="fourty"><?php echo($_POST[FNAME]." ".$_POST[LNAME]) ?></td><td></td></tr>
<tr><td class="love">NTRP </td><td class="fourty"><?php echo($_POST[GENDER].$_POST[NTRP]) ?></td><td></td></tr>
<tr><td class="love">Email </td><td class="fourty"><?php echo($_POST[EMAIL]."@".$_POST[URL]) ?></td><td></td></tr>
<tr><td class="love">GGTC Member </td><td class="fourty"><?php echo($_POST[MEMBER]) ?></td><td></td></tr>


<tr><p><p><p><p><td height="300"></td><td> </td></tr>

</table>

<p>



</span>

<?php

sessionToGAE();

function sessiontoGAE()
{
   $fname= $_POST[FNAME];
   $lname= $_POST[LNAME];
   $gender =   $_POST[GENDER] ;
   $ntrp =   $_POST[NTRP];
   $email =   $_POST[EMAIL];
   $url =   $_POST[URL];
   $member =   $_POST[MEMBER];

   $data = array(
      'fname' => $fname,
      'lname' => $lname,
      'gender' => $gender,
      'ntrp' => $ntrp,
      'email' => $email,
      'url' => $url,
      'member' => $member,
   );


  $url = "http://localhost:8080/enter";
  $url = "www.jeung4tennis.appspot.com/enter";

  $payload = json_encode (  $data  );
  $ch = curl_init( $url ) ;
  curl_setopt($ch , CURLOPT_POSTFIELDS, $payload );
  curl_setopt($ch , CURLOPT_RETURNTRANSFER, $true );

  $result = curl_exec($ch);
  curl_close($ch);

// Send Email
   sendmail();

}


function sendmail(){

   $name = $_POST[FNAME]." ".$_POST[LNAME];
   $email= $_POST[EMAIL]."@".$_POST[URL];
   $ntrp= $_POST[GENDER].$_POST[NTRP];
   $member= $_POST[MEMBER];


   $to = "tennis.mutt@gmail.com";
   $subject = "GGTC Club Day ($name)";


   $message = "Golden Gate Tennis Club";
   $message .= "<br>";
   $message .= "<br>";

   $message .= "NAME:         $name";
   $message .= "\r\n<br>";
   $message .= "\nEMAIL:        $email";
   $message .= "\r\n<br>";
   $message .= "\nNTRP:          $ntrp";
   $message .= "\r\n<br>";
   $message .= "\nGGTC MEMBER:  $member";
   $message .= "\r\n<br>";



   $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   $headers .= "From: roger@goldengatetennisclub.org  \r\n";

//   echo $subject;
//   echo $headers;

   $r=mail($to,$subject,$message,$headers);
   echo "...";

}




?>

