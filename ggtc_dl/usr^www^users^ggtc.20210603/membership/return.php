<?php


include_once("environment.inc");


define("RECIPIENT","ggtc@goldengatetennisclub.com");
define("FROM","ggtc@goldengatetennisclub.com");


session_start();

//Fake();
Welcome();

function Fake()
{

  $_SESSION[FNAME] = "Wendy";
  $_SESSION[LNAME] = "Lee";

}

function Welcome( )
{

$fname = $_SESSION[FNAME];
$lname = $_SESSION[LNAME];

echo '<head><style>';
echo 'body { font-family: serif; font-size:20px;}';
echo '</style>';
//echo '</head><body bgcolor="e6d4e6">';
echo '</head><body bgcolor="80bfff">';


echo '<center>';
echo '<h1>Golden Gate Tennis Club Membership </h1><br><p>';
echo '<h2>';
echo $fname." ".$lname;
echo '</h2>';
echo '<br>';
echo 'Thanks for joining Golden Gate Tennis Club!<p>';


$url = "www.goldengatetennisclub.org/membership/members";
$url = "www.goldengatetennisclub.org/page4/page4.html";
$membership = "ggtc@goldengatetennisclub.org";

$link = "Membership Page";

echo 'Please refer to the <a href="http://'.$url.'">'.$link.' </a> ';
echo '<br>to check for your name in the membership list.<p>';
echo '<p>To return to the <a href="http://www.goldengatetennisclub.org/membership/signup">membership form click here</a>';

echo '<p>';



}


function cancelemail($fname, $lname, $address,$city,$zip)
{


$to = RECIPIENT;
$subject = "GGTC Membership Paypal Attempt (".$fname." ".$lname.")";

$message = "<head>";
$message .= "<style>\n";
$message .= "body { font-family: serif; font-size:24px;}\n";
$message .= "</style>\n</head>";
$message .= '<body bgcolor="ffffff">'."\n";

$message .= "<h1>GGTC Membership PayPal Attempt</h1><br>\n";
$message .= "<p>\n";
$message .= "<h2>\n";
$message .= "$fname $lname<br> \n";
$message .= "$address<br> \n";
$message .= "$city, $zip<p> \n";
$message .= "Attempted to join GGTC, but cancelled out of Paypal \n";
$message .= "</body>\n";

$from = FROM;

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: '.FROM." \r\n";

echo "to = ".$to."<br>";
echo "from = ".$from."<br>";

mail($to,$subject,$message,$headers);

}


function enumeratePost()
{
  echo "POST<br>";
  foreach ( $_POST as $key => $value)
     echo $key." -> ".$_POST[$key]."<br>";
}

?>