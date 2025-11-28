<?php


$URL = "www.sctennisclub.org/membership/json22";

  $ch = curl_init( $URL );
//   curl_setopt( $ch  , CURLOPT_POSTFIELDS, $payload );
   curl_setopt( $ch  , CURLOPT_RETURNTRANSFER, true );

   $response = curl_exec($ch);
   curl_close($ch);

   $obj = json_decode($response, $assoc= TRUE);

   $total=$res=$non=0;
   $inc=0;
   foreach ($obj as $row){
    
       $inc++;
       if( $inc%3 != 0 )   continue;
       
       $fname = trim($row['fname']);
       $lname = trim($row['lname']);
       $gender = trim($row['gender']);
       $ntrp = trim($row['ntrp']);
       $rating = $gender.$ntrp;
       $date = $row['date'] ;
//       echo "memberArray.push( Array('$fname.",".$lname.",".$gender."$ntrp \n";
       echo "memberArray.push( Array(";
       echo '"'.$fname.'",';
       echo '"'.$lname.'",';
       echo '"'.$rating.'",';
       echo $date."))";

       echo "\n";


   }



