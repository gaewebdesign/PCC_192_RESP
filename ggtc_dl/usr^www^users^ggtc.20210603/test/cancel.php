<?php

//include_once('paypal/paypal.inc.php');
include "environment.inc";

define("RECIPIENT","rogerusta2003@yahoo.com");
define("FROM","membership@sctennisclub.org");

session_start();

//Fake();
Cancel();

function Fake()
{

  $_SESSION[FNAME] = "Wendy";
  $_SESSION[LNAME] = "Lee";

}

function Cancel()
{


   $fname = $_SESSION[FNAME];
   $lname = $_SESSION[LNAME];
//   $address  = $_SESSION[ADDRESS];
//   $city  = $_SESSION[CITY];
//   $zip  = $_SESSION[ZIP];

  
   echo '<html>';
   echo '<head><style>';
   echo 'body { font-family: serif; font-size:20px;}';
   echo '</style>';
   echo '</head><body bgcolor="e6d4e6">';

   echo '<center>';
   echo '<h1>Golden Gate Tennis Club Membership </h1><br><p>';
   echo '<h2>';
   echo $fname." ".$lname;
   echo '</h2>';
   echo '<br>';
   echo '<h2>';
   echo 'Paypal cancelled, next time!<p>';
   echo '</h2>';
   echo '</html>';

}
?>