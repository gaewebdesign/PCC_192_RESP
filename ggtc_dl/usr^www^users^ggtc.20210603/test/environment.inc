<?php


//$KOTOSHI =  "2019";

define("KOTOSHI", "2021");

define("RS", "40");    // Resident Single

// TEST FEES
//define("RS", "1");    // Resident Family


$HOST = gethostname();
$HOST = $_SERVER['SERVER_NAME'];

//echo $HOST;

if( strpos($HOST,"goldengate") !== false ){

   define("URLPENDING","http://sfmongoldata.appspot.com/twilight");
   define("URLGGTC","http://sfmongoldata.appspot.com/ggtc");
   define("URLTRANSFER","http://sfmongoldata.appspot.com/transfer");


   define("RETURN_URL","http://www.goldengatetennisclub.org/membership/done");
   define("CANCEL_URL","http://www.goldengatetennisclub.org/membership/cancel");
   define("NOTIFY_URL","http://www.goldengatetennisclub.org/membership/notify");

}elseif( strpos($HOST, "sctennisclub") !== false) {


   define("URLPENDING","http://scmongoldata.appspot.com/pending");
   define("URLMEMBER","http://scmongoldata.appspot.com/member");
   define("URLTRANSFER","http://scmongoldata.appspot.com/transfer");

   define("RETURN_URL","http://www.sctennisclub.org/membership/done");
   define("CANCEL_URL","http://www.sctennisclub.org/membership/cancel");
   define("NOTIFY_URL","http://www.sctennisclubo.org/membership/notify.php");

}else{

   define("URLPENDING","http://localhost:8080/twilight");      
   define("URLMEMBER","http://localhost:8080/member");      
   define("URLTRANSFER","http://localhost:8080/transfer");      

   define("RETURN_URL","http://localhost/ggtc_/membership/done");
   define("CANCEL_URL","http://localhost/ggtc_/membership/cancel");
   define("NOTIFY_URL","http://localhost/ggtc_/membership/notifification.php");


}

function whereami(){
   echo URLPENDING."<br>";
   echo URLTRANSFER."<br>";
   echo RETURN_URL."<br>";
   echo CANCEL_URL."<br>";
   echo NOTIFY_URL."<br>";

}

//whereami();


define("YEAR", "year" );

define("RENEW", "renew" );

define("FNAME", "fname" );
define("LNAME", "lname" );
define("GENDER", "gender" );
define("NTRP", "ntrp" );

define("ADDRESS", "address" );
define("CITY", "city" );
define("ZIP", "zip" );

define("CODE", "code" );
define("PHONEPRE", "phonepre" );
define("PHONEPOST", "phonepost" );

define("PHONE", "phone" );   // used in check.php (Phone()to get $_SESSION[PHONE]

define("EMAIL", "email" );
define("URL", "url" );
define("PAID", "paid" );
define("MTYPE", "mtype" );
define("DATE", "date" );
define("PAYMENT", "payment" );
define("OTHER", "other" );
define("CUSTOM", "custom" );
define("PRIMARYMEMBER", "primarymember" );


define("HELP", "help" );
define("OTHER", "other" );
define("IP", "ip" );


define("TEAM", "team" );
define("CAPTAIN", "captain" );


//define("PHONEPOST", "phonepost" );

define("MEMBERSHIP", "membership" );

define("FEE", "membershipfee" );

define("PLAYERNAME", "playername" );

define("TIMESTAMP", "timestamp" );

define("WAITLIST", "waitlist" );

$members_all = 0;
$members_res = 0;
$members_non = 0;


$URL = "http://jeung4tennis.appspot.com/"; 
$URL = "http://localhost/"; 


function CalculateMembers()
{
    global $members_all;
    global $members_res;
    global $members_non;

//  from includes.inc
//    global $KOTOSHI;
//  from includes.inc

    $con = DBMembership();


    $YEAR= KOTOSHI; //MEMBERSHIP_YEAR;


// Query get get members, from the year 
   $query = 'select * from '.TABLE_PAYPAL.' where year= "'.$YEAR.'" ';
// Add this to get from bycheck table
   $query .= ' union select * from '.TABLE_CHECK.' where year =  "'.$YEAR.'"';

   $query .= ' order by lname';
// ---- Calculate the Residents/Non-Residents

  $qr = mysqli_query($con,$query);
  $total=$res=$non=0;

  while ($row = mysqli_fetch_assoc( $qr)) {  

      $total +=1;
      if( preg_match("/santa|clara/i",$row[CITY])) 
          $res +=1;
      else
          $non +=1;
  }

// CALCULATE MEMBERSHIP (ALL , RESIDENTS, NON-RESIDENTS) into global 
   $members_all = $total;
   $members_res = $res;
   $members_non = $non;


}


// LOOK for address in membership database

function FindAddress_($ADDRESS)
{

// POST
        $data = array ( 'address' => $ADDRESS);

        $payload = json_encode (  $data  );

	$url = "http://localhost:8080/address";

	$ch = curl_init( $url );
        curl_setopt($ch , CURLOPT_POSTFIELDS, $payload );
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//      curl_setopt($ch , CURLOPT_POSTFIELDS, "cal=CaliforniaBears&address=$ADDRESS" );

//	curl_setopt($ch, CURLOPT_VERBOSE, true);
//	curl_setopt($ch, CURLOPT_HEADER, true);

	$response = curl_exec($ch);

/*
        var_dump (json_decode ($response , true ) );
        $header_size = curl_getinfo($ch , CURLINFO_HEADER_SIZE);
        $header = substr($response, 0 , $header_size);
        $body = substr( $response, $header_size );
*/

	curl_close($ch);

//        print("RSP == ".$response);

        return $response;



}


// *****************************
function OnLocalHost()
{

   $ret=0;
   if(strstr($_SERVER["SERVER_NAME"],"local")) $ret = 1;
   
   return $ret;

}


// Save session data 
// Called at beginning of check.php
// Saves everything from membership form
function SaveSession()
{

  $_SESSION[RENEW] = $_POST[RENEW];    // "N": new member "": renwal


  $_SESSION[FNAME] = $_POST[FNAME];
  $_SESSION[LNAME] = $_POST[LNAME];
  $_SESSION[GENDER] = $_POST[GENDER];

  $_SESSION[NTRP]    =  $_POST[NTRP];

  $_SESSION[ADDRESS]  =  $_POST[ADDRESS];
  $_SESSION[CITY]     =  $_POST[CITY];
  $_SESSION[ZIP]      =  $_POST[ZIP];

  $_SESSION[EMAIL]   =  $_POST[EMAIL];
  $_SESSION[URL]     =  $_POST[URL];

  $_SESSION[TEAM]     =  $_POST[TEAM];
  $_SESSION[CAPTAIN]     =  $_POST[CAPTAIN];


  $_SESSION[CODE]    =  $_POST[CODE];
  $_SESSION[PHONEPRE]    =  $_POST[PHONEPRE];
  $_SESSION[PHONEPOST]    =  $_POST[PHONEPOST];

  $_SESSION[MEMBERSHIP]    =  $_POST[MEMBERSHIP];

  $_SESSION[OTHER] = "";
  if( !empty($_POST[OTHER])){
      $_SESSION[OTHER] = $_POST[OTHER];
  }

  $_SESSION[HELP] = "";
  if( !empty($_POST[HELP])){
          foreach( $_POST[HELP] as $check )  // $POST[HELP] is array of {"T","R","S"]
             $_SESSION[HELP] .= $check;      // but $_SESSION[HELP] is string of "TRS"

  }



  $_SESSION[IP] = $_SERVER['SERVER_ADDR'];  
  $_SESSION[IP] = $_SERVER['REMOTE_ADDR'];  


//  from ggtc.php can only get the type of member
    $_SESSION[FEE]    =  $_POST[FEE];  //  see check.php for calculation of fee


}


// requires active SESSION  (session_star()
function sessiontoTWILIGHT( )
{

//   global $KOTOSHI;


   $fname= $_SESSION[FNAME];
   $lname= $_SESSION[LNAME];
   $gender =   $_SESSION[GENDER] ;
   $ntrp =   $_SESSION[NTRP];
   $email =   $_SESSION[EMAIL];
   $url =   $_SESSION[URL];

   $code =   $_SESSION[CODE] ;
   $phone =   $_SESSION[PHONEPRE]."-".$_SESSION[PHONEPOST] ;

   $email = $email."@".$url ;


   if( strlen($phone) > 7  && strlen($code) == 3){
       $phone = "(".$code.") ".$phone;

   }else{
       $phone = "";
   }


   $address = trim($_SESSION[ADDRESS]) ;
   $city =   trim($_SESSION[CITY]) ;
   $zip =   trim($_SESSION[ZIP]) ;

   $capt =   $_SESSION[CAPTAIN] ;
   $team =   $_SESSION[TEAM] ;


   $mtype =  $_SESSION[MEMBERSHIP] ;
   $other =   $_SESSION[OTHER] ;
   $help =   $_SESSION[HELP] ;

   $other =   $_SESSION[OTHER] ;

   $payment = $_SESSION[FEE] ;

   $renew = $_SESSION[RENEW];    // "N": new member "R": renewal
   $team  =  $_SESSION[TEAM];
   $capt  =  $_SESSION[CAPTAIN];


   $help  =  $_SESSION[HELP];
   $other  =  $_SESSION[OTHER];

   $ip  =  $_SESSION[IP];

   $primarymember  = $_SESSION[PRIMARYMEMBER] ;
   $custom = "";

   $e = $renew."/".$team."/".$capt."(".$help.")" ;
   $f = $renew.$team.$capt.$help ;


   if( strlen($renew.$team.$capt.$help) == 0 ) 
         $ztra = "-" ;
   elseif( strlen($e) > 4 ) 
         $ztra .= $e ;

   $timestamp  =  $_SESSION[CUSTOM];

   $waitlist  =  $_SESSION[WAITLIST];

   date_default_timezone_set('America/Los_Angeles');


// ************ PENDING  ******************
   $url = URLPENDING;

$data = array (

    'year' => (int)KOTOSHI,  // this is define() from this file
    'fname' => $fname,
    'lname' => $lname,
    'address' => $address,
    'city' => $city,
    'zip' => $zip,
    'phone' => $phone,
    'email' => $email,
    'ntrp' => $gender.$ntrp,
    'mtype' => $mtype,
    'src' => 'PP',

    'custom' => $timestamp,      

    'help' => $help,
    'other' => $other,

    'ip' => $ip

/*  not necessary for ggtc
    'zknt' => $primarymember,
    'ztra' => $ztra,
    'waitlist'  => $waitlist
*/

  );

  $payload = json_encode (  $data  );
  $ch = curl_init( $url ) ;
  curl_setopt($ch , CURLOPT_POSTFIELDS, $payload );
  curl_setopt($ch , CURLOPT_RETURNTRANSFER, $true );

  $result = curl_exec($ch);
  curl_close($ch);

//  print_r( $payload );
//  print( $result);


}



// Copy member from pending table to paypal table and mark 'other' as done
// $transaction value is stored in 'other'
function cp($transaction, $theTable,$verbose=false){

// This is the basic command to copy from pending into paypal table
//insert into pending(fname,lname,address,city,zip) select fname,lname,address,city,zip from paypal where fname="Cori";


$query = "insert into ".$theTable."(fname,lname,email,url,gender,ntrp,code,phone,address,city,zip,state,year,capt,team,mtype,help,other,date,insignia,payment,custom)";
$query .= " select fname,lname,email,url,gender,ntrp,code,phone,address,city,zip,state,year,capt,team,mtype,help,other,date,insignia,payment,custom ";
$query .= " from pending where ";
$query .= "custom=".'"'.$transaction.'"';


if($verbose) echo $query;

$con=DBMembership();
$query_results=mysqli_query($con, $query);
if($verbose){ 
        echo $query."<p>";
        echo "query_results = ".$query_results."<br>";
}

$query = "update pending set custom=\"done\" where custom=\"$transaction\" limit 1";
$query_results=mysqli_query($con,$query);
if($verbose){
	echo $query."<br>";
	echo "<br>";
	echo "query_results = ".$query_results."<br>";
}

}

// DELETE and move to trash table
function trash($uniqueID, $theTable){

  date_default_timezone_set('America/Los_Angeles');
  $con =  DBMembership();

  $query = "select * from $theTable where _id = $uniqueID";
  $qr=mysqli_query($con,$query);
  echo "<center>";

    $row = mysqli_fetch_assoc($qr); 

     echo "deleting   ";
     echo $row[FNAME]." ".$row[LNAME]."(".$row[YEAR].")";
     echo "<br>";

// COPY to the trash table
     $query = "insert into trash select * from $theTable where _id = $uniqueID";
     $k=mysqli_query($con,$query);
     echo $query."<br>";

// DELETE 
     $query = "delete from $theTable where _id = $uniqueID";
     echo $query."<br>";    
     $k=mysqli_query($con,$query);



}


// from library.php
/*
function add ($p)
{
   return ',"'.$p.'"';
}


function perror( $v)
{
    echo $v;

}
*/

?>