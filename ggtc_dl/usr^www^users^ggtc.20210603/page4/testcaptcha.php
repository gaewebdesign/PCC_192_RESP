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
<div id="title"> Golden Gate Tennis Club</div>
<div id="app"> www.goldengatetennisclub.org</div>
</center>



<html>
<meta content="text/html; charset=UTF-8" http-equiv="content-type" />
<body bgcolor="ABCDEF">

<head>

</head>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>


<style type="text/css">


</style>

<center>

<?php

  $response = $_POST["g-recaptcha-response"] ;


  $secretKey = '6LdWfYEUAAAAAA2ooi82eRgkynjXrpW8N7VWGjc6';
  $captcha = $_POST["g-recaptcha-response"] ;

  $ch = curl_init();

  curl_setopt_array($ch, [
    CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => [
        'secret' => $secretKey,
        'response' => $captcha,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    ],
    CURLOPT_RETURNTRANSFER => true
]);

$output = curl_exec($ch);
curl_close($ch);


$captcha_success = json_decode($output);


  if ($captcha_success->success==false) {

               echo '<div style="font-size:24px">';

 	       echo "<p>---</p>";
 	       echo "<p><b>Please fill out the reCAPTCHA information</p>";
 	       echo "<p>";
 	       echo "<p>to verify that you are not a spam robot</p>";
 	       echo "<p>";
 	       echo "<p>in order to enter the August 2019 Club Day Event</p>";
 	       echo "<p></b>---</p>";
               echo "</div>";
               return;

	     } else if ($captcha_success->success==true) {
	       echo "<p>***</p>";

       }



?>

&nbsp;
<p height="10">

<div class="intro">


<div class="contact">
<p height="20">
Thank you for entering the August  Club Day event<br>
If you have any questions --- if you need to change your information or withdraw from the event
<p>
Contact: Lois Anne at <a href="loisanne7@goldengatetennisclub.org">loisanne7@goldengatetennisclub.org</a> 
<p>
</div>

<p>

<span id="_ENTRANTS" "style=display:none">

<table>

<tr><p><p><p><p><td height="75"></td><td> </td></tr>

<tr><td class="info">Name </td><td class="info"><?php echo($_POST[FNAME]." ".$_POST[LNAME]) ?></td><td></td></tr>
<tr><td class="info">NTRP </td><td class="info"><?php echo($_POST[GENDER].$_POST[NTRP]) ?></td><td></td></tr>
<tr><td class="info">Email </td><td class="info"><?php echo($_POST[EMAIL]."@".$_POST[URL]) ?></td><td></td></tr>
<tr><td class="info">GGTC Member </td><td class="info"><?php echo($_POST[MEMBER]) ?></td><td></td></tr>


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

   $potluck =   $_POST['potluck'];

   $extra =   "" ; //$_POST['potluck'];

// SANITIZE
   $fname = filter_var($fname, FILTER_SANITIZE_STRING);
   $lname = filter_var($lname, FILTER_SANITIZE_STRING);
// SANITIZE


   $data = array(
      'fname' => $fname,
      'lname' => $lname,
      'gender' => $gender,
      'ntrp' => $ntrp,
      'email' => $email,
      'url' => $url,
      'member' => $member,

      'potluck' => $potluck,
      'extra' => $extra

   );



  $url = GATEWAY()."/enter";;

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
   $to = "clubday@goldengatetennisclub.org";

   $subject = "GGTC Club Day ($name)";

   $message = "Golden Gate Tennis Club";
   $message .= "<p>";
   $message .= "Signed up to August Club Day<p>";

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
   $headers .= "From: membership@goldengatetennisclub.org  \r\n";

// Get all entrants
   $players = getClubDayPlayers();

   $table = "<center><b>CURRENT PARTICIPANTS</b><p>";

   $table .= '<table width="60%">';
   $table .= "<thead>";
   $table .= "<tr>";
   $table .= '<th scope="col"> Name </th>';
   $table .= '<th scope="col"> NTRP</th>';
   $table .= '<th scope="col"> EMAIL</th>';
   $table .= '<th scope="col"> MEMBER</th>';
   $table .= '<th scope="col"> DATE</th>';
   $table .= '</tr>';
   $table .= '</thead>';
   $table .= '<br>';

   $participants = $table;

   foreach  ($players as $key => $value){
  

      $fname = $value[0];
      $lname = $value[1];
      $email = $value[2];
      $ntrp = $value[3];
      $member = $value[4];
      $date = $value[5];

//     $potluck = $value[6];
      $potluck = "-";

//      print("<<< -------------------- >>>");
//      print("<<< ".$fname."  ->>>");

      $p = "<tr>";
      $p .= "<td>".$fname." ".$lname;

      $p .= "<td>".$ntrp;
      $p .= "<td>".$email;
      $p .= '<td align="center">'.$member;
      $p .= "<td>".$date;
      $p .= "<td>".$potluck;
      $p .= "</tr>";


      $participants .= $p;
//      $participants .= "<tr>".$fname."</tr>"; 

   }


   $message .= "<br>";
   $message .= $participants;

//   echo $to."<br>";
//   echo $message."<br>";

//   $r=mail($to,$subject,$message,$headers);
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
