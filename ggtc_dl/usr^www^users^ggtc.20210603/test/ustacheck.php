<html>
<div align="center">
<h1>USTA / Golden Gate Tennis Club Membership Check </h1>
</div>

<TABLE align="center" class="sortable" BORDER=1 cellpadding=0 cols=8 cellspacing=0  width="500"  bgcolor="linen">
<TR bgcolor="99ccff">
<TH width="150"><font size="2" >First Name</font></TH>
<TH width="150"><font size="2" >Last Name</font></TH>
<TH width="100"> <font size="2">City </font></TH>
<TH width="100"> <font size="2">Status </font></TH>
</tr>


<?php

/*

define("COLORMEN","D2D2FF");
define("COLORRED" , "FFFFFF");
define("COLORYELLOW","FFFF33");
define("COLORGREEN","77ff77");
define("TABLE","sctc12");
define("YEAR","2013");

*/

define("COLORBLUE" , "DCEAFC");
define("COLORHEADER","99ccff");
define("COLORMEMBER","a9a9f5");
define("COLORWHITE" , "FFFFFF");



define("OK","1");
define("SKIP","2");
define("FINISH","3");

date_default_timezone_set('America/Los_Angeles');


global $MEMBERS;
global $UNIQUE;

$MEMBERS = array();
$UNIQUE = array();

   echo "<center><b>".date("F d, Y ", time())."</b></center><br>" ;

// One time - get members and store in global array
   GetMembers();

//   ListMembers(MEMBERS);

   GetTeams( );


?>

</table>

<?php

global $UNIQUE;

//FIGURE # UNIQUE PLAYERS

  print("<br>");
  print("<center><b>");
  print( sizeof($UNIQUE)." Unique Players " );
  print("</b></center>");

/*
  foreach($UNIQUE as $key=>$value){
     print($key."  ".$value);
     print("<br>");
  }
*/




?>

<html>

<?php

function DEBUG($t)
{

//      echo( $t );

}

function ListMembers()
{
   global $MEMBERS;

   foreach( $MEMBERS as $key => $val){
        echo $key." ".$val." <br>";

   }
}


// Get members from GAE
function GetMembers()
{
global $MEMBERS;

      $SERVER = $_SERVER['SERVER_NAME'];

//      echo ("<center><b> $SERVER </b></center>" );

      $url = "http://localhost:8080/current";
      $url = "www.sfmongoldata.appspot.com/current";

      if( strpos( $SERVER, "golden" ) )
        $url = "www.sfmongoldata.appspot.com/current";

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_URL, $url);

      $result = curl_exec($ch);
      curl_close($ch);

      $obj = json_decode($result, $assoc= TRUE);

      date_default_timezone_set('America/Los_Angeles');

//      print_r( $obj) ;


// Enumerate through the members  
   print( "<br>" );

   $u=1;
   foreach( $obj as $row ){

      $FNAME = $row["fname"];
      $LNAME = $row["lname"];
      $EMAIL = $row["email"];
      $DATE = $row["date"];

/*
      print( "$FNAME  $LNAME  $EMAIL " );
      print( date( 'm/d/Y', $row["date"] ) );
      print( "<br>" );
*/
      $fname = trim($FNAME)." ".$u;
      $MEMBERS[$fname] = $LNAME;
      $u++;
//      print("$MEMBERS[$fname] ,  $row[LNAME] <br>" );;

    }


}


// Get players from DB and store into global array 
function ____GetMembersMYSQLDB()
{

global $MEMBERS;
global $KOTOSHI;

$YEAR = $KOTOSHI; //MEMBERSHIP_YEAR;


$query = 'select * from '.TABLE_PAYPAL.' where year>='.$YEAR;
$query .= ' union ';
$query .= 'select * from '.TABLE_CHECK.' where  year>='.$YEAR;
$query .= ' order by lname';

echo $query;

//$con = DBMembership( ); 


//$query_results=mysqli_query($con,$query);
//$numrows = mysqli_num_rows($query_results);
//$u=1;
while ($row = mysqli_fetch_assoc($query_results) ) {
       $fname = trim($row[FNAME])." ".$u;
       $MEMBERS[$fname] = $row[LNAME];
//      echo $fname.strlen($fname)." ". $MEMBERS[$fname]." <br>";
       $u++;
  }
}




// Search on LNAME, then check for FNAME
function findMember($fname,$lname)
{
   global $MEMBERS;
   $search = 0;

   $retval=0;

   $fname =  trim($fname);
   $lname = trim($lname);


   $search=1;    

   $pattern=  "/".$lname."/i";
   $pattern=  "/^".$lname."/i";


   $found = preg_grep( $pattern , $MEMBERS) ;

   if(empty($found)){
              $retval=0;       // Didn't find last name
              DEBUG( "didnt find ".$lname);

   }else{
              if($search){
                DEBUG( "found ".$lname." now looking for ".$fname."<br>");
              }

              // Look for first name (first 3 characters)
              $pattern = "/".rtrim(substr($fname,0,2))."/i";


              foreach ($found as $first => $last){

//                 if($search==1)  echo "looking for ".$pattern."<br>";
                   if($search){
                     DEBUG( "now looking for ".$pattern." in ".$first."<br>");
                   }


                  if( preg_match( $pattern, $first,$matches)) {
                            $retval= 1;
                            if($search){
                             DEBUG( "found ".$pattern." in ".$first."<-------------<br>");
                             DEBUG( "return ".$retval."<br>");
                             return $retval;
                             }                     

                  }
              }
   }   
   



   return $retval;


}

function Table( )
{
  echo '<TABLE align="center" class="sortable" BORDER=1 cellpadding=0 cols=8 cellspacing=0  width="500"  bgcolor="linen">';
}

function EndTable( )
{
  echo '</table><br>';
}

function GetTeams( )
{

// http://www.oooff.com/php-scripts/basic-php-scrape-tutorial/basic-php-scraping.php


$url = 'http://ustanorcal.com/organization.asp?id=663';   // SJSW

$url = 'https://ustanorcal.com/organization.asp?id=3483';   // Santa Clara at Central Park

$url = "https://ustanorcal.com/organization.asp?id=1787";   // GGTC
$url = "https://ustanorcal.com/Organization.asp?id=1787&archive=Y"; // GGTC Archive


//$output = file_get_contents($url);
//echo $output;
//echo "parsing";

$ch = curl_init($url);


// http://www.oooff.com/php-scripts/basic-curl-scraping-php/basic-scraping-with-curl.php
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$curl_scraped_page = curl_exec($ch);
curl_close($ch);



// Get Santa Clara TennisClub 
// changed (Santa Clara [^<])< to ([^<])<  (get everything except <)
preg_match_all( '/href=teaminfo.asp\?id=([\d]*)>([^<]*)<[ .\w\d\/<>=#]*?align=left>([-\w]*)[ ,]*([-\w]*)/i', $curl_scraped_page , $_teaminfo , PREG_PATTERN_ORDER);

// Pull in ID, Team Name </td> <td Area </td><td Captain</td>
$regexp = '/href=teaminfo.asp\?id=([\d]*)>([^~]*?)<\/a><\/td>';  // ID, Team Name
$regexp .= '<td [^~]*?<\/td>';      // Area (not used)
$regexp .= '<td ([^~]*?)<\/td>';    // Captain 
$regexp .= '/i';

preg_match_all( $regexp, $curl_scraped_page , $_teaminfo , PREG_PATTERN_ORDER);

//print_r($_teaminfo);


$regCaptain = '/align=left>([^,]*?)[ ,]*([^,]*?)$/i';
for($j=0 ; $j < count($_teaminfo[0]) ; $j++){

        $teamid   =  $_teaminfo[1][$j];
        $teamlink =  $_teaminfo[2][$j];

// Extract the Captain from this column
        preg_match_all( $regCaptain, $_teaminfo[3][$j] , $_captain, PREG_PATTERN_ORDER );
        $lname = $_captain[1][0];
        $fname = $_captain[2][0];
        $captain = $fname." ".$lname;

        $teamlink = '<a style=text-decoration:none href="https://ustanorcal.com/teaminfo.asp?id='.$teamid.'">'.$teamlink."</a>";


//      Cut off parsing
        $find=SKIP;   

//        if( $teamid == 77142) $find=FINISH;  // beginning of 2018

/*
        if( $teamid == 82012) $find=OK;   
        if( $teamid == 81306) $find=OK;   
        if( $teamid == 81377) $find=OK;   
        if( $teamid == 81612) $find=OK;   
        if( $teamid == 81925) $find=OK;   
        if( $teamid == 81707) $find=OK;   
        if( $teamid == 80794) $find=OK;   
        if( $teamid == 80218) $find=OK;   
        if( $teamid == 79104) $find=OK;   
        if( $teamid == 78934) $find=OK;   
        if( $teamid == 78990) $find=OK;   
*/



        if( $teamid == 78429) $find=OK;   // 40W4.0 Janet Broude

        if( $teamid == 77675) $find=OK;   // 40W3.5 Lennihan / Pam Miller

        if( $teamid == 77848) $find=OK;   // 40M4.0 Tuck Wong

        if( $teamid == 78554) $find=OK;   // 40W3.5 Susan Spires

        if( $teamid == 77593) $find=OK;   // 40W3.0a C Tejada
        if( $teamid == 78843) $find=OK;   // 65+ W7.0 Linda Lennihan
        if( $teamid == 79424) $find=OK;   // 18M4.0 A Kringstein

        if( $teamid == 77594) $find=OK;   // 40_W3.5B C Takeda

        if( $teamid == 79337) $find=OK;   // 18M4.0 Korenman
        if( $teamid == 79890) $find=OK;   // 18W3.5 Susan Spires
        if( $teamid == 80257) $find=OK;   // 55+W8.0 LA Indorf

        if( $find == OK ){
		Table( );

		TripleCell( COLORBLUE ,  $teamlink." <br>Captain ".$captain." " );
		echo "<tr>";
		GetTeamPlayers( 'https://ustanorcal.com/teaminfo.asp?id='.$teamid );
		EndTable( );
		echo "<tr>";

	}elseif( $find == SKIP){

        }elseif( $find == FINISH ){
		break;

	}

        $count ++;
        $find=0;



}


}



function GetTeamPlayers( $url )
{


global $UNIQUE;


// echo "get playaers from ".$url;


 $ch = curl_init($url);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 $curl_scraped_page = curl_exec($ch);
 curl_close($ch);

# Original matcher
//preg_match_all( '/href=playermatches.asp\?id=([\d]*)>([ -\w]*)[ ,]*([ -\w]*)[ <>\w=#\d\/]*?nowrap>([ \w]*)/', $curl_scraped_page , $_players , PREG_PATTERN_ORDER);


/*
<a href=playermatches.asp?id=114612>Adams, Jennifer A </a></td>
<td bgcolor=white align=left nowrap>San Jose</td>
<td bgcolor=white align=center>F</td>
<td align=center bgcolor=white>4.5C</td>
<td align=center bgcolor=white></td>
<td align=center bgcolor=white>3/31/2016</td>
<td bgcolor=white align=center>2 / 1</td
*/

  $pattern = "/href=playermatches.asp\?id=([\d]*)>";     // ID

  $pattern .= "([ ,\'\-\w]*)<\/a><\/td>";  //  name

  $pattern .= "<td bgcolor=[#\d\w]* align=left nowrap>([ \w\d]*)<\/td>";   // city

  $pattern .= "<td bgcolor=[#\d\w]* align=center>([MF]{1})<\/td>";   // gender

  $pattern .= "<td align=center bgcolor=[#\d\w]*>([\d\w\.]*)<\/td>";   // rating

  $pattern .= "<td align=center bgcolor=[#\d\w]*>([\w]*)<\/td>";   // national

  $pattern .= "<td align=center bgcolor=[#\d\w]*>([\d\/]*)<\/td>";   // expire

//  $pattern .= "<td bgcolor=[#\d\w]* align=center>([ \d\/\(\)\>\<b]*)<\/td>";   // record

   $pattern .= "<td bgcolor=[#\d\w]* align=center>([ \d\/]*)([\d\w\<\>\/]*)<\/td>";   // record


  $pattern .= "/";

  preg_match_all($pattern , $curl_scraped_page, $_player,PREG_PATTERN_ORDER);
  $players = count( $_player[0] );

  for ( $j = 0 ; $j < $players ; $j++){
            $id = $_player[1][$j];
            $name = $_player[2][$j];
            $city = $_player[3][$j];
            $gender = $_player[4][$j];
            $rating = $_player[5][$j];
            $nat = $_player[6][$j];
            $expire = $_player[7][$j];

            $record = $_player[8][$j];

            $record = str_replace(' ', '', $record);
            $record = str_replace('/', ' / ', $record);

   	    $bgColor =  COLORWHITE;

            
//    SPLIT INTO FIRST AND LAST NAMES
            $s = explode(',',trim($name),2);
            $lname = trim($s[0]);
            $fname = trim($s[1]);

            $l=$lname;
            $f = $fname;
            DEBUG( "TEAM ".$fname." ".$lname."<br>");
            $found = findMember($fname,$lname);
  	    if($found != 0) $bgColor =  COLORMEMBER;

            MCell($bgColor , trim($fname));
            MCell($bgColor , trim($lname));

//            MCell($bgColor , trim($f));
//            MCell($bgColor , trim($l));

            MCell($bgColor , $city);
            MCell($bgColor , "&nbsp;".$record."&nbsp;");

           echo "</tr>\r\n";

//  ADD unique members
           $u = trim($fname).trim($lname);

           if( array_key_exists($u , $UNIQUE)   ){
              $UNIQUE[ $u ] = $UNIQUE[ $u ] + 1;

//            echo( $u." exists ");

           }else{
              $UNIQUE[ $u ] =  1;

           }

  }


}


function Center( $color , $data )
{
  
	echo "<td valign='middle' height=15 ALIGN=CENTER bgcolor=".$color." ><font size='3'>".$data."&nbsp</td>";

}


function MCell( $color , $data )
{
  
	echo "<td valign='middle' height=15 ALIGN=LEFT bgcolor=".$color." ><font size='3'>".$data."&nbsp</td>";

}


function TripleCell( $color , $data )
{
  
	echo "<td valign='middle' height=15 colspan=4 ALIGN=LEFT bgcolor=".$color." ><font size='3'>".$data."&nbsp</td>";

}




?>
