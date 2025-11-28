<?php

//  session_start();
// <script language="JavaScript" src="./assets/javascript/sorttable.js" ></script>
// @import url("./assets/css/table.css")
// @import url("./assets/css/library.css")

?>


<html>
<head>
</head>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
 <script language="JavaScript" src="./assets/javascript/sorttable.js" ></script>

<style type = "text/css"> 



@media print {
 * {
     -webkit-print-color-adjust: exact !important;
   }

}

table{
	font-family: "Tahoma", Verdana, Arial, Helvetica, sans-serif;
	font-size:  75%;
	border-collapse: collapse;
}

caption{
	background: url(title.png) no-repeat 50px;
	font-size: 400%;
	text-indent: -10000px;
}


thead tr{
      background-color: #8296E9;
      border-top: 1px solid black;
      border-bottom: 1px solid black;
}

tfoot tr{
      background-color: #FFFFFF;

}

thead th{
      padding: 0.5em;
      white-space: nowrap;
}

tfoot th{
      font-size: 110%;
      text-align: right;
      padding-right: 0.5em;
      letter-spacing: 1px;
      background:  
}

tfoot td{
      padding-left: 0.5em;
	background-color: #EAFDFF;  /* roger  added   */
/*
      color: red;
      font-size: 110%;
      font-weight: 600;
*/

}

tfoot td:hover{
      background-color: red;
      background-color: #FFCCCC;

      color: white;
}

tr{

	background-color: #EAFDFF;
	background-color: #d1e8ff;

}

tr.odd{
	background-color: #FFFFFF;
}

tbody tr:hover{
      background-color: #FFCCCC;
      background-color: #d1ffff;
}

td, th{
    border: 1px dotted #CCCCCC;
}

tbody td
{
	padding: 0.5em;
}

td a:link, th a:link{
   color: black;
}

td a:visited, th a:visited{
   color: black;
   text-decoration: line-through;
}

td a:hover, th a:hover{
   color: purple;
   text-decoration: underline;
}

td:last-child a:hover{
	      color: red;
	      text-decoration: underline overline;
}

</style>

<script>


// use $ajax to set $_SESSION[GYEAR]
function JYEAR( year ){

   var url = document.location.href

   var request = $.post(
              "ajax_year.php",
              { GYEAR: year }
   )

   request.done(
         function(msg){
//             location.reload( true )
             $('#GLIST').load( document.URL + ' #GLIST' )
         }

   );


}

</script>

<body>

<center>

<table cellpadding="2">
<th>

</table>

<?php

function DIRECTORY($y)
{

    $YEAR = $y ; //$_GET["year"];
    $DIR = "http://www.goldengatetennisclub.org/membership/members/$YEAR";
    if (strpos($_SERVER['SERVER_NAME'], 'localhost') !== false){
        $DIR = "http://localhost/~roger/ggtc_/membership//members/$YEAR";
     }

     echo $DIR;
}

?>

<?php


//      echo ("<center><b> $SERVER </b></center>" );
      $SERVER = $_SERVER['SERVER_NAME'];
      echo('<div style="font-size:18px;">'." $SERVER</div> <br>" );

?>

<p>
<a style="text-decoration:none; font-size:19px;" onclick=JYEAR(2018) >2018</a>
&nbsp;
<a style="text-decoration:none; font-size:20px;" onclick=JYEAR(2019) >2019</a>

<!--
<a style="text-decoration:none; font-size:20px;" onclick=JYEAR(2017) >2017</a>
-->


<?php

//echo $_SERVER['SERVER_NAME'] ."<br>";
//echo $_SERVER['REQUEST_URI'];
?>
<!-- <center>Click on top row to sort</center> -->

<table align="center" class="sortable" width="50%">

<thead>
<tr style="font-size:16px">
<th scope="col">Year</th>
<th scope="col">First Name</th>
<th scope="col">Last Name</th>
<th scope="col">NTRP</th>
<th scope="col">Date</th>
</thead>


<?php

include "environment.inc";

/*
@import url("assets/css/table.css");')
@import url("assets/css/library.css");')
*/


  $resp = GetCurrentGGTC();

function GetCurrentGGTC(){

//      echo $SERVER;
//      echo( strpos( $SERVER, "gate" ) );

      $url = "http://localhost:8080";
      if( strpos( $SERVER, "gate" ) )
        $url = "www.sfmongoldata.appspot.com";

      $url = "www.sfmongoldata.appspot.com";
      $Y = 2019;  // default year
      if( isset( $_SESSION["GYEAR"])){
        $Y = $_SESSION["GYEAR"];   // ($.post) $AJAX 

      }

      if( $Y == KOTOSHI){
            $url = $url."/current";
      }elseif($Y < KOTOSHI ){
            $url = $url."/previous";

      }


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


function process( $obj){

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

print("getmembers() ");

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
