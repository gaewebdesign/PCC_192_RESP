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
<p><br>
<div id="title"> Golden Gate Tennis Club</div>
<div id="app"> www.goldengatetennisclub.org</div>
<div id="app"> 2020 Board Vote</div>
</center>

<p>
<center>
<img src = "vote_thanks.jpg">
</center>
<br>


<?php

include("ggtc_side.inc");

define("EMAIL", "email" );

function GATEWAY(){

  $url = "http://localhost:8080";
  $HOST = $_SERVER['SERVER_NAME'];
  if( strpos($HOST,"goldengate") !== false ){
       $url = "http://www.ggtcmongoldata.appspot.com";
  }

  $url = "http://www.sctennisclub.org";

  return $url;

}



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
<body bgcolor="ABCDEF">

<head>
<!--
<link rel="stylesheet" type="text/css" href="tourny.css">
#fd5e00
-->

</head>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>


<style type="text/css">

body {
 background-color: #abcdef
}

.intro{
  font-size: 26px;
  color: blue;

}

.info{
  font-size: 24px;
  color: black;

}


.contact{
  font-size: 26px;
  color: black;

}



.CLASSIC{
   border: 0px solid blue;
   table-layout: fixed;
   width:  80%;
// background: url("pumpkin.png")

}

.twenty{
    width: 25%;

}

.eighty{
    width: 75%;


}

table {
        width:75%;
        border:0px solid #000;
      }
</style>

<center>

<?php


//  getvoters();
  submit();

  function submit()
  {

     $email = $_POST['email']."@".$_POST['url'];
     $vote   =  $_POST['vote'];

     if( !isset($_POST['vote'])  ){

         print("<h1>");
         print("Need to select something!" );

         print("<p>");

         print("Your vote was not recorded! <br>" );

         print("</h1>");

         return;


     }

     if( $vote == "declines"){
         print("<h1>");

         print("You declined to vote at this time <br>" );
         print("You may vote later  <br>" );
         print("Note that you can only vote once " );

         print("</h1>");

         return;
     }

     if( strlen($email) < 5 ){
         print("<h1>");
         echo ("NEED EMAIL ADDRESS <br>" );
         print("</h1>");

         return;
     }



/*
     print("<h1>");
     echo ("Thanks for voting! <br>" );
     echo ($email."  voted $vote <br>");
     print("</h1>");
*/

     $url = "http://localhost/~roger/sc/vote/vote.php";

     if(strstr($_SERVER["SERVER_NAME"],"golden")){

       $url = "http://www.sctennisclub.org/vote/vote.php";

     }

     $email = strtolower( $email );

     $ip =  $_SERVER['REMOTE_ADDR'];
     $fields = array(
       'email' => $email,
       'vote' => $vote,
       'ip' => $ip
    );

    $postvars = http_build_query($fields);
    $ch = curl_init();

    // set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, count($fields));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

 // execute post
    $result = curl_exec($ch);
    curl_close($ch);

    print $result;
    if( $result == "."){
         print(" <p><p> ");
         print("<b><br>");
         print("<h1>");
         print("Thank you for voting for the 2020 Golden Gate Tennis Club Board!<br>");

         print(" <p> ");

         print("$email <br>");
         print("voted $vote <br>");
         print("</h1>");

         print(" <p> ");
         print("</b>");


    }elseif( $result == "*"){
         print("<b><br>");
         print(" <p> ");
         print("<h1>Sorry</h1><br>");
         print("You've either already voted or entered an incorrect email address<br>");
         print("View the instructional video at<p>");

         print("<a href=\"https://www.youtube.com/watch?v=GggijkmUiLo&feature=youtu.be\">You Tube</a>");

         print(" <p> ");
         print("Email <a href=\"mailto:membership@goldengatetennisclub.org\">membership@goldengatetennisclub</a> for further assistance "); 

         print("</b>");
    }

//    getresults();

  }





  function getvoters(){
     $url = "sctennisclub.org/voters";
     $url = "sctennisclub.org/ggtc_/json.php?year=2019";

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

     foreach ( $obj as $row ){

         print($row['email'].$row['vote']."<br>" );
     }


  }

?>


<?php


function sendmail(){

   $email= $_POST[EMAIL]."@".$_POST[URL];
   $vote= $_POST['vote'];


   $to = "tennis.mutt@gmail.com";

   $subject = "GGTC Vote ($email)";

   $message = "Golden Gate Tennis Club";
   $message .= "<p>";
   $message .= "VOTED!<p>";

   $message .= "\nEMAIL:        $email";

   $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   $headers .= "From: membership@goldengatetennisclub.org  \r\n";

// Get all entrants
   $players = getClubDayPlayers();

   $table = "<center><b>VOTE</b><p>";

   $table .= '<table width="60%">';
   $table .= "<thead>";
   $table .= "<tr>";
   $table .= '<th scope="col"> EMAIL</th>';
   $table .= '<th scope="col"> DATE</th>';
   $table .= '</tr>';
   $table .= '</thead>';
   $table .= '<br>';

   $participants = $table;

   foreach  ($players as $key => $value){
  

      $email = $value[0];
      $vote = $value[1];

      $p = "<tr>";
      $p .= "<td>".$email;
      $p .= "<td>".$vote;
      $p .= "<td>".$date;
      $p .= "</tr>";


      $participants .= $p;

   }


   $message .= "<br>";
   $message .= $participants;

   $r=mail($to,$subject,$message,$headers);
   echo "...";

}

function getClubDayPlayers( )
{
  $url = GATEWAY()."/clubday";


  $ch = curl_init();
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_URL, $url);

  $result = curl_exec($ch);
  curl_close($ch);

  $obj = json_decode($result, $assoc= TRUE);

  date_default_timezone_set('America/Los_Angeles');

  if( sizeof($obj) == 0) return;


  $participants = array();
  foreach ( $obj as $row ){
       $fname = $row["fname"];
       $lname = $row["lname"];
       $email = $row["email"];
       $ntrp = $row["ntrp"];
       $member = $row["member"];
       $date = date(" m/d/y",$row["unix"]);

       $p = array($fname, $lname,$email, $ntrp, $member, $date );

       array_push($participants, $p);

  }

    return $participants;

}
?>
