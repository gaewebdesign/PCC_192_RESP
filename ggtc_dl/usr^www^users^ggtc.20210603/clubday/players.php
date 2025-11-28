<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<head>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>

<script language="javascript">


function Initialize()
{


}

function clearParameters(){

}
window.onload = Initialize;

</script>

</head>
<body>

<style>


.title
{

 font-size:20px;

}

.space{ line-height: .25 em;}
p { margin-top: 0.18em;}


body,html{
      margin-top:1;
      margin-left:30;
      margin-right:25;
//     font-size:26 px; 

}

body {
       font-size:19px; 

}


</style>

<center>

<p>
<h2>Club Day Entrants</h2>

<table align="center" class="sortable" width="60%">
<thead>
<tr>
<th scope="col" align="left">First Name</th>
<th scope="col" align="left">Last Name</th>
<th scope="col" align="left">NTRP</th>
<th scope="col" align="left">Email</th>
<th scope="col" align="left">Member</th>
</thead>
<?php

$url = "http://localhost:8080/clubday";
$url = "http://www.jeung4tennis.appspot.com/clubday";


$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);

$result = curl_exec($ch);
curl_close($ch);

$obj = json_decode($result, $assoc= TRUE);

date_default_timezone_set('America/Los_Angeles');

if( sizeof($obj) == 0) return;

foreach ( $obj as $row ){
     print( "<tr>");
     print( '<td align="left">'.$row["fname"] );
     print( "<td>".$row["lname"] );
     print( "<td>".$row["ntrp"] );
     print( "<td>".$row["email"]);

     print( "<td>".$row["member"] );

}

?>



</html>
