<html>
<head>
</head>

<style type = "text/css"> 
<!--
@import url("assets/css/table.css");')
@import url("assets/css/library.css");')
-->
</style>

<script language="JavaScript" src="assets/javascript/sorttable.js"></script>

<body>

<center>
<h2>Golden Gate Tennis Club Membership Roster</h2>
<table cellpadding="2">
<th>

</table>

<!--
<a style=text-decoration:none href="./glist.php?year=2016">2016</a>
<a style=text-decoration:none href="./glist.php?year=2017">2017</a>
-->
<a style=text-decoration:none href="./glist.php?year=2018">2018</a>

<center>Click on top row to sort</center>
<table align="center" class="sortable" width="80%">

<thead>
<tr>
<th scope="col">Year</th>
<th scope="col">First Name</th>
<th scope="col">Last Name</th>
<!--
<th scope="col">Address</th>
<th scope="col">TYPE</th>
<th scope="col">City</th>
-->
<th scope="col">Email</th>
<th scope="col">NTRP</th>
<th scope="col">DATE</th>

</thead>


<?php


//  pending();

/*
   postmembers( );
   getpost();
*/

//  $resp = postyear();
  $resp = GetCurrentGGTC();

function GetCurrentGGTC(){

      $url = "http://localhost:8080/current";
      print("$url ");

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_URL, $url);

      $result = curl_exec($ch);
      curl_close($ch);

      $obj = json_decode($result, $assoc= TRUE);

      date_default_timezone_set('America/Los_Angeles');

//    print_r( $obj) ;

// Enumerate through the members  
   $MEMBER="";
/*
   foreach ( $obj as $row ){
     $MEMBER =$row["fname"].$row["lname"];
     break;
   }
*/
   foreach ( $obj as $row ){

//      $next = next($row);
//      print($next);

      if( $row["fname"].$row["lname"]  == $MEMBER  )
       print('<tr style="color:red" >');
      else
       print('<tr>');

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

      print("<td>");

      print( date( 'm/d/Y', $row["date"] ) );

      $MEMBER = $row["fname"].$row["lname"];

    }

}


function process( $obj){

//   $obj = json_decode($resp, $assoc= TRUE);

// Enumerate through the members  
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


/*
 what works with SCTC
 http://localhost:8080/address 

*/

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


print("YEAR = ".$_GET["year"]." <------");


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


function pending( )
{

   $key = 22422322;
   $year = 2018;
   $fname = "Caroline";
   $lname = "Wozniacki";
   $address = " 2142 Hollenbeck";
   $city    = "Cupertino";
   $zip    = "95014";

   $mtype = "NRS";

   $email = "caroline.wozniacki@gmail.com";
   $date  = " ";

//   $con = DBMembership();
//  $query = "select * paypal where year=2018 order by lname limit 5";
   

$url = "http://localhost:8080/pending";
date_default_timezone_set('America/Los_Angeles');
$data = array ( 'year' => 2019, 
               'fname' => 'Caroline',
               'lname' => 'Wozniacki',
               'address' => '2142 Hollenbeck',
               'city' => 'Cupertino',
               'zip' => '95014',
               'email' => 'caroline.wozniacki@gmail.com',
               'ntrp' => 'W7.0',
               'mtype' => 'NRS',
               'date' => time()

);

 $payload = json_encode (  $data  );
//print_r($data );


$ch = curl_init( $url ) ;
curl_setopt($ch , CURLOPT_POSTFIELDS, $payload );
curl_setopt($ch , CURLOPT_RETURNTRANSFER, $true );

$result = curl_exec($ch);
curl_close($ch);

print_r( $result );



}



?>

</table>
