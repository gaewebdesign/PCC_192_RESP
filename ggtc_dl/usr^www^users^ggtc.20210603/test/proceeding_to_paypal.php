<?php


include_once('paypal/paypal.inc.php');
include_once("environment.inc");

/*
define("RETURN_URL","http://www.sctennisclub.org/membership/done");
define("CANCEL_URL","http://www.sctennisclub.org/membership/cancel");
define("NOTIFY_URL","http://www.sctennisclub.org/membership/notify.php");

*/

/*
RewriteRule ^notify$ notify.php  [NC,QSA,L]
RewriteRule ^notify/([\d]*)$ notify.php?transaction=$1  [NC,QSA,L]
RewriteRule ^transfer/([\d]*)$ notify.php?transaction=$1  [NC,QSA,L]
*/


define("HOME_URL","http://www.goldengatetennisclub.org");

//define("PAYPAL_MAIL","treasurer@sctennisclub.org");
define("PAYPAL_MAIL","goldenga@goldengatetennisclub.org");

session_start();


$paypal = new paypal();

$price = $_SESSION[FEE];     // this is calculated in check.php
$paypal->price = $price;

$paypal->ipn = HOME_URL."/membership/pipn.php";

$paypal->enable_payment();

$paypal->add("currency_code","USD");

$paypal->add("business",PAYPAL_MAIL);
//$paypal->add("business",HOME_URL);

$paypal->add("item_name","Golden Gate Tennis Club Membership");
$paypal->add("quantity",1);


$paypal->add("return",RETURN_URL);
$paypal->add("cancel_return",CANCEL_URL);
$paypal->add("notify_url",NOTIFY_URL);


$_SESSION[CUSTOM] = time(); //rand(1,10000000) ;

//$paypal->add("PLAYERNAME",$_SESSION[FNAME." ".LNAME]);
$paypal->add("item_number",$_SESSION[FNAME]." ".$_SESSION[LNAME] );

$paypal->add("custom",$_SESSION[CUSTOM]);

sessiontoTWILIGHT();

$paypal->output_form();




/*
1)paying.. on return goes to  cancel.php  SITE_URL
2)not paying  click cancel goes to pipn.php   PIPN_URL


<input type="hidden" name="return" value="http://www.dawncraftmc.com/index.html">
 <input type="hidden" name="cancel_return" value="http://www.dawncraftmc.com/index.html">
*/


?>