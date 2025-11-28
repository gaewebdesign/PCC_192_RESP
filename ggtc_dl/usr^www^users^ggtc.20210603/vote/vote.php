<?php

include "vote.inc";
//include "ggtc_side.inc";

define(PAYPAL , "paypal");
define(VOTE_TABLE,"vote");

define(EMAIL , "email");
define(VOTE , "vote");

$email   = $_POST[EMAIL];
$vote   = $_POST[VOTE];

//$email   = $_GET[EMAIL];
//$vote   = $_GET[VOTE];

$FIRST = "";
$LAST  = "";

date_default_timezone_set('America/Los_Angeles');

$con = DB();

$ret = FIND($con , $email);


if( $ret >0) {
   $unix=time();

   $fname = $FIRST;
   $lname = $LAST;

   VOTE( $con, $unix, $year, $fname,$lname, $email, $vote );
   echo ".";
}else{
   echo "*";
}

//  echo $email."<br>";
//echo $vote."<br>";


//TEST_ONE( );
//TEST_EVERYONE( $con );

function TEST_ONE( )
{

     $unix = time();
     $year = 2019;
     $fname = "roger";
     $lname = "okamoto";
     $email = "tennis.mutt@gmail.comt";
     $vote = "*^* ";

     $email = "marcela.anongos@gmail.com";
     $email = "jaabels@yahoo.com";
     $email = "aquinochat@gmail.com";



}

function TEST_ALREADY( $con)
{

   $query = "select fname,lname,email,unix from paypal where year=2019 order by lname limit 5";

//   echo $query."<br>";

   $qr = mysqli_query($con, $query );
   while ($row = mysqli_fetch_assoc($qr)) {  


     $unix = $row['unix'];
     $DATE = date(" m/d/y",$unix );

     $fname = $row['fname'];
     $lname = $row['lname'];
     $email   = $row['email'];
     $vote   = $row['vote'];

     echo $DATE."(".$unix.") \t".$fname." \t".$lname." \t".$email." \t".$vote."<br> ";

   }



}

function TEST_EVERYONE( $con){


   $query = "select fname,lname,email from PAYPAL where year=2019 " ;

//   echo $query."<br>";

   $qr = mysqli_query($con, $query );
   while ($row = mysqli_fetch_assoc($qr)) {  
//     echo $row['fname']." ".$row['lname']." ".$row['email']."<br> ";

     $unix = time();
     $year = 2019;
     $fname = $row['fname'];
     $lname = $row['lname'];


     $email   = $row['email'];
     $vote   = "*^*";


     VOTE( $con, $unix, $year, $fname,$lname, $email, $vote );


   }

}


function add($p)
{
   return ',"'.$p.'"';

}

/*

12/31/69 Jessica Abels (Socias) jaabels@yahoo.com *^*
12/31/69 Ren Agarwal sendtoren-ggtc@opayq.com *^*
12/31/69 Tom Alaimo thomasalaimo7@gmail.com *^*
12/31/69 Meg Andrews mandrewsemail@yahoo.com *^*
12/31/69 Marcela Anongos marcela.anongos@gmail.com *^*
12/31/69 Charito Aquino aquinochat@gmail.com *^*
12/31/69 Danny Archibald archibald.design@gmail.com *^*
12/31/69 Bixente Arlas bixente@protonmail.com *^*
12/31/69 Janet Arnesty jarnesty@gmail.com *^*
12/31/69 Carlo Asteggiano asteggianocarlo@gmail.com *^*
12/31/69 Christine Baird bairdchris@hotmail.com *^*
12/31/69 Jessica Baker jessicabaker010@gmail.com *^*
12/31/69 Jerry Ball jerry_sf@hotmail.com *^*
12/31/69 INGRID BALLUS ARMET ingridballus@gmail.com *^*

*/

function FIND( $con, $email){

   global $FIRST,$LAST;

// Make lower case
   $email = strtolower( $email );
   $email = "'".$email."'";


   $query = "select fname,lname,email from ".PAYPAL." where year=2019 and $email=email";

//    echo $query."<br>";

   $qr = mysqli_query($con, $query );
   $count = mysqli_num_rows($qr);

// count = 0 (zero) if person has voted (year becomes 8 if voted )
// count = 0 if the email address is incorrect
// count = 1 if the email address found in 2019
   while ($row = mysqli_fetch_assoc($qr)) {  
        $FIRST = $row['fname'];
        $LAST  = $row['lname'];

   }

   return $count;

// not needed
   while ($row = mysqli_fetch_assoc($qr)) {  
      echo $row['fname']." ".$row['lname']." ".$row['email']."<br> ";
   }


}

function VOTE( $con , $unix,$year,$fname,$lname,$email,$vote )
{

   $email = strtolower($email);


   $q = "insert into ".VOTE_TABLE.'(_id,year,unix,fname,lname,email,vote) values ';
   $query = $q.'(NULL'.add($year).add($unix).add($fname).add($lname).add($email);
   $query = $query.add($vote);
   $query .= ")";

   echo $query."<br>";

   $qr = mysqli_query($con, $query );

// THIS PERSON HAS VOTED so set YEAR to 8
   $query = "update paypal set year=8 where email=\"$email\" limit 1";

   echo ($query."<br>");

   $qr = mysqli_query($con, $query );



}


/*

DROP TABLE IF EXISTS `vote`;
CREATE TABLE `vote` (
  `_id` int(10) NOT NULL AUTO_INCREMENT,
  `year` int(32) DEFAULT NULL,
  `unix` int(32) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `vote` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`_id`)
)

*/


?>