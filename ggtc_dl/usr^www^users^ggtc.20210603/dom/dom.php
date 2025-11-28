
<?php

include "environment.inc";


  GetCurrentGGTC();



function GetCurrentGGTC(){

      $url = "www.ggtcmongoldata.appspot.com";

      $Y = 2019;
      $url = $url."/short";


      $ch = curl_init();
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_URL, $url);

      $result = curl_exec($ch);
      curl_close($ch);

      $obj = json_decode($result, $assoc= TRUE);

      date_default_timezone_set('America/Los_Angeles');

      echo("<br>" );
      $members = sizeof($obj);

      echo('<div style="font-size:18px;">'.$members."  MEMBERS($Y) </div> <br>" );

      if(sizeof($obj) == 0) return;

// Enumerate through the members  
   $MEMBER="";

   foreach ( $obj as $row ){

// Enumerate through the members  


//      print($next);

      if( $row["fname"].$row["lname"]  == $MEMBER  )
       print('<tr style="color:red; font-size:14px;" >');
      else
       print('<tr style="font-size:14px;">');

      print("<td>");
      print( $row["year"]);

      print("<td>");
      print( $row["fname"]);
      print("<td>");
      print( $row["lname"]);

      print("<td>");
      print( $row["ntrp"] );

      print("<td>");

      print( date( 'm/d/Y', $row["date"] ) );

      $MEMBER = $row["fname"].$row["lname"];

    }

}


function process_( $obj){

//   $obj = json_decode($resp, $assoc= TRUE);


   foreach ( $obj as $row ){
       print("<tr>");

      print("<td>");
      print( $row["year"]);

      print("<td>");
      print( $row["fname"]);
      print("<td>");
      print( $row["lname"]);

      print("<td>");
      print( $row["email"]);

      print("<td>");
      print( "-" );

      print("</td>");
      print("</tr>");
  
   }

}


function postyear( )
{

// SEND REQUEST

$url = "http://localhost:8080/post";
$url = "http://localhost:8080/ggtc";

$data = array( 'year' => 2018 );
$payload = json_encode (  $data  );

$ch = curl_init( $url ) ;
curl_setopt($ch , CURLOPT_POSTFIELDS, $payload );
curl_setopt($ch , CURLOPT_RETURNTRANSFER, $true );

$response = curl_exec($ch);
curl_close($ch);

return $response;

}// function end



// get members via JSON (WORKS)
function getmembers()
{

print("getmembers() ");

print("_YEAR = ".$_GET["year"]." <------");

echo json_encode($_GET);

$url = "http://localhost:8080/kotoshi";
if(  $_GET["year"] == "2018")
  $url = "http://localhost:8080/kyonen";
else if(  $_GET["year"] == "2018")
  $url = "http://localhost:8080/otoshi";

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);

$result = curl_exec($ch);
curl_close($ch);

$obj = json_decode($result, $assoc= TRUE);


foreach ( $obj as $row ){
     print("<tr>");
     foreach ($row as $key=>$value ){
         print("<td>");
         print( $value );
     }

   print("</td>");
   print("</tr>");

}



}


// get members via JSON (WORKS)
function getpost()
{


$url = "http://localhost:8080/data";
print("get data from ".$url );


$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);

$result = curl_exec($ch);
curl_close($ch);

$obj = json_decode($result, $assoc= TRUE);

print("DATA");
print($obj);
print("DATA");


foreach ( $obj as $row ){
     print("<tr>");
     foreach ($row as $key=>$value ){
         print("<td>");
         print( $value );
     }

   print("</td>");
   print("</tr>");

}

}



?>


