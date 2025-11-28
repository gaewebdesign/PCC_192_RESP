<html>

<!--
https://stackoverflow.com/questions/920635/creating-colored-bars-for-poll-results

-->

 <style>

        .GraphWrapper {
            width:300px;
            border:1px solid #DDDDDD;
        }

        .BlueBar {
            height:30px;
            margin:10px 0px 10px 0px;
            background-color:#3344FF;
        }

        .RedBar {
            height:30px;
            margin:10px 0px 10px 0px;
            background-color:#FF3373;
        }
 </style>

<!--
<div class='GraphWrapper'>
        <div class='BlueBar' style='width:50%;'></div>
       <div class='RedBar' style='width:50%;'></div>
</div>
-->



<center>
<b>RESULTS </b>
</center>

<table>

<tr>
<?php 
    $r = results(); 
    $yes = $r['yes'];
    $no = $r['no'];
    echo("<td> YES ($yes%)</td>");
?>

<td>
<div class='GraphWrapper'>
<?php 

  $yes = $r['yes'];
  echo " <div class=\"BlueBar\" style=\"width:$yes%;\"></div> ";

?>

</div>
</tr>

<tr>

<td> 
<tr>
<?php
    echo("<td> NO ($no%)</td>");
?>
</td>


<td>

<div class='GraphWrapper'>
<?php
   echo("<div class=\"RedBar\" style=\"width:$no%;\"></div> ");
?>

</div>
</td>
</tr>

</div>
</table>


<?php

//include "ggtc_side.inc";
require_once( "ggtc_side.inc");

results();

//getresults();

function results ( ) {

   $url = "http://www.sctennisclub.org/vote/poll.php"; 
   $ch = curl_init();

   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch, CURLOPT_URL, $url);

   $result = curl_exec($ch);
   curl_close($ch);
   $obj = json_decode($result, $assoc= TRUE);

   $members = sizeof($obj);

   if(sizeof($obj) == 0) return;

   $yes = 0 ;
   $no = 0 ;
   foreach ( $obj as $row ){
         $vote = $row['vote'];
         if( $vote == "yes") $yes += 1;
         if( $vote == "no") $no += 1;
   }

    $pwin = ($yes *100)/($yes + $no );
    $pwin = round( $pwin,0 );
    $pno = 100-$pwin;
   
   $results = array("yes"=>$pwin,"no"=>$pno);

   return $results;

}

function display(){
   $w="15%";
   $l="85%";

   $url = "http://www.sctennisclub.org/vote/poll.php"; 

   $ch = curl_init();

   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch, CURLOPT_URL, $url);

   $result = curl_exec($ch);
   curl_close($ch);
   $obj = json_decode($result, $assoc= TRUE);

   $members = sizeof($obj);

   if(sizeof($obj) == 0) return;

   $yes = 0 ;
   $no = 0 ;
   foreach ( $obj as $row ){
         $vote = $row['vote'];
         if( $vote == "yes") $yes += 1;
         if( $vote == "no") $no += 1;
   }

   $win_ = $yes/($yes + $no );
   $lose_ = $no/($yes + $no );

   print("w = $yes  l = $no <br>");

   echo( "<div align=\"left\" class='RedBar' style='width:$l;'></div> " );
   echo( "<div align=\"left\" class='BlueBar' style='width:$w;'></div>" );

//   echo("<span style='position:absolute; bottom:0px;'>A Text</span>");



}


function getRandomColor()
{
   $r = rand(128,255); 
   $g = rand(128,255); 
   $b = rand(128,255); 
   $color = dechex($r) . dechex($g) . dechex($b);
   echo "$color";
}



?>

