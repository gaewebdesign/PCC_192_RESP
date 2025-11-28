<?php


include "environment.inc";


   $KEY = $_POST[CUSTOM];
   SendGAEEmail($KEY);


   TransferPendingToMember( $KEY );


function TransferPendingToMember( $KEY)
{

     $data = array ( 'key' => $KEY  );
     $payload = json_encode (  $data  );


     $url = URLTRANSFER;

     $ch = curl_init( $url );
     curl_setopt($ch , CURLOPT_POSTFIELDS, $payload );
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

     $response = curl_exec($ch);

     curl_close($ch);

     echo( $response );


}


function SendGAEEmail($theKEY , $verbose=false)
{

   $to = "ggtcwebmaster@gmail.com";
   $subject = "GGTC Membership ";

// Put Paypal POST values into message
   $message = "notification.php called <br>";
   $message .= "Paypal Parameters <br>";
   foreach ( $_POST as $key => $value)
      $message .= $key." -> ".$_POST[$key]."<br>";  

//  echo $message;

   $headers = 'From: ggtcwebmaster@gmail.com' . "\r\n" .
    'Reply-To: ggtcwebmaster@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Use this header

   $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   $headers .= "From: ggtcwebmaster@gmail.com.org  \r\n";


/*
// Can pick either ->custom or ->transaction_subject
   $transaction = $_POST['custom'];

   $theTable= TABLE_PAYPAL;
   if( !empty($_GET["transaction"])){
        $transaction = $_GET["transaction"];
        $theTable= TABLE_CHECK;
        if($verbose) echo "INSERT into ".$theTable."<br>\n";
   }
*/
//   cp($transaction, $theTable,$verbose);


   $name = " - ";
   if( isset($_POST["first_name"]) ){
     $name = " (".$_POST["first_name"]." ".$_POST["last_name"]." )";
   }


   $subject .= $name;
   $subject .= "  (".$theKEY.")";


   $r=mail($to,$subject,$message,$headers);
   if($verbose) echo "mail=".$r;



}


//function SendEmail($verbose=false)
function SendEmail($theKEY, $verbose=false)
{

   $to = "ggtcwebmaster@gmail.com";
   $subject = "GGTC Membership (".$theKEY.")";

// Put Paypal POST values into message
   $message = "notify.php called <br>";
   $message .= "Paypal Parameters <br>";
   foreach ( $_POST as $key => $value)
      $message .= $key." -> ".$_POST[$key]."<br>";  

//  echo $message;

   $headers = 'From: ggtcwebmaster@gmail.com' . "\r\n" .
    'Reply-To: ggtcwebmaster@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Use this header

   $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   $headers .= "From: ggtcwebmaster@gmail.com \r\n";


// Can pick either ->custom or ->transaction_subject
/*
   $transaction = $_POST['custom'];

   $theTable= TABLE_PAYPAL;
   if( !empty($_GET["transaction"])){
        $transaction = $_GET["transaction"];
        $theTable= TABLE_CHECK;
        if($verbose) echo "INSERT into ".$theTable."<br>\n";
   }

*/


//   cp($transaction, $theTable,$verbose);

   $name = " - ";
   if( isset($_POST["first_name"]) ){
     $name = " (".$_POST["first_name"]." ".$_POST["last_name"]." )";
   }


   $subject .= $name;

   $r=mail($to,$subject,$message,$headers);
   if($verbose) echo "mail=".$r;

}





?>