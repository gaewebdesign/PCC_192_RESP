<html>
<div align="center">
<h1>USTA / Golden Gate Tennis Club</h1>
</div>

<TABLE align="center" class="sortable" BORDER=1 cellpadding=0 cols=8 cellspacing=0  width="500"  bgcolor="linen">
<TR bgcolor="99ccff">
<TH width="150"><font size="2" >First Name</font></TH>
<TH width="150"><font size="2" >Last Name</font></TH>
<TH width="100"> <font size="2">City </font></TH>
<TH width="100"> <font size="2">Status </font></TH>
</tr>


<?php

define("COLORBLUE" , "DCEAFC");
define("COLORHEADER","99ccff");
define("COLORMEMBER","a9a9f5");
define("COLORWHITE" , "FFFFFF");

define("SKIP","1");
define("FINISH","2");


date_default_timezone_set('America/Los_Angeles');

global $MEMBERS;
global $FILEHANDLE;
global $COUNT;


global $GAEMEMBERS;

$COUNT=1;

$MEMBERS = array();
$UNIQUE  = array();

$SFMONGOLDATA = array();
$GAEMEMBERS = array();


define("URLGAE", "www.sfmongoldata.appspot.com/ggtc");      // GAE
//define("URLGAE", "http://localhost:8080/ggtc");    // GAE

   echo "<center><b>".date("F d, Y ", time())."</b></center><br>" ;

   OpenFile();  //saves handle to $FILEHANDLE

// One time - get members and store in global array

   GetGAEMembers();

   GetTeams( );

?>

</table>
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
        echo $key." ".$val." ";

   }
}



// Get players from DB and store into global array 
function GetGAEMembers()
{

global $GAEMEMBERS;

echo ("URL = ".URLGAE."<br>");


// POST
$data = array( 'year' => 2018 );
$payload = json_encode( $data );


$ch = curl_init(URLGAE);
curl_setopt( $ch  , CURLOPT_POSTFIELDS, $payload );
curl_setopt( $ch  , CURLOPT_RETURNTRANSFER, true );

$response = curl_exec($ch);
curl_close($ch);

$obj = json_decode($response, $assoc= TRUE);

//print("DATA <br>");
//print_r($obj);
//aprint("DATA <br>");

// convert from JSON

$u=1;
foreach( $obj as $row){

       // need  unique first name (add u) for hash table
       // trim white spaces and add $u (counter) to make first name unique

       $fname = trim($row['fname']).$u;
       $lname = trim($row['lname']);
       $GAEMEMBERS[$fname] = $lname;
       $u++;

} 


DEBUG("GAEMEMBERS <br>");
foreach( $GAEMEMBERS as $key=>$value ){
       DEBUG( $key." ".$value."<br>");
}

}



// Search on LNAME, then check for FNAME
function findMember($fname,$lname)
{
   global $GAEMEMBERS;

   $search = 0;
   $retval=0;

   $fname =  trim($fname);
   $lname = trim($lname);


   $pattern=  "/".$lname."/i";
   $pattern=  "/^".$lname."/i";

   $found = preg_grep( $pattern , $GAEMEMBERS) ;

   if(empty($found)){
              $retval=0;       // Didn't find last name
              DEBUG( "didnt find ".$lname." ( last name) <br>" );

   }else{
//              if($search){
                DEBUG( "found ".$lname."(last name)  now looking for ".$fname."(first name)<br>");
//              }

              // Look for first name (first 3 characters)
              $pattern = "/".rtrim(substr($fname,0,2))."/i";

              foreach ($found as $first => $last){

//                 if($search==1)  echo "looking for ".$pattern."<br>";
                   if($search){
                     DEBUG( "now looking for ".$pattern." in ".$first."<br>");
                   }


                  if( preg_match( $pattern, $first,$matches)) {
                            $retval= 1;
//                            if($search){
                             DEBUG( "found ".$pattern." in ".$first." (first name ) <br>");
//                            DEBUG( "return ".$retval."<br>");
                             return $retval;
//                             }                     

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

// SCTC
$url = 'http://ustanorcal.com/organization.asp?id=663';   // SJSW


$url = 'https://ustanorcal.com/organization.asp?id=3483';   // Santa Clara at Central Park

// GGP
$url = 'https://www.ustanorcal.com/organization.asp?id=1787';

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
        $find=0;

        if( $teamid >= 81013) $find=SKIP;   // everything before Combo season

        if( $teamid == 74357) $find=SKIP;   // W4.0 Akash
        if( $teamid == 79240) $find=SKIP;   // M4.0 Akash
        if( $teamid == 79227) $find=SKIP;   // M4.5 Akash
        if( $teamid == 79241) $find=SKIP;   // M5.0 Akash

        if( $teamid == 82324) $find=SKIP;
        if( $teamid == 82325) $find=SKIP;
        if( $teamid == 82326) $find=SKIP;

        if( $teamid == 80371) $find=FINISH;   // M55AM8.0A Rasmussen

//        if( $teamid == 81306) $find=FINISH;   // Quickie Finish
//        if( $teamid == 81788) $find=FINISH;   // Coffee & Donuts
//        if( $teamid == 81013) $find=FINISH;   // Open teams Combo/Mx

        if( $teamid == 79634) $find=FINISH;   // Open teams Combo/Mx

        if( $find == 0 ){
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

 $ch = curl_init($url);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 $curl_scraped_page = curl_exec($ch);
 curl_close($ch);


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
//            DEBUG( "NAME:  ".$fname." ".$lname."<br>");
            $found = findMember($fname,$lname);
  	    if($found != 0) $bgColor =  COLORMEMBER;

            MCell($bgColor , trim($fname));
            MCell($bgColor , trim($lname));

//            MCell($bgColor , trim($f));
//            MCell($bgColor , trim($l));

            MCell($bgColor , $city);
            MCell($bgColor , "&nbsp;".$record."&nbsp;");

// Create GAE Data(use to create test database of names )
           $address = "351 Parker St";
           $zip = "94120";
           $phone = "(650) 232-1232";     
           $email = strtolower($fname.".".$lname."@gmail.com");
           GAEData( 2018, $fname, $lname ,$address, $city, $zip, $phone, $email , $gender, $rating);
// Create GAE Data(use to create test database of names )
           echo "</tr>\r\n";

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


function OpenFile ()
{

   global $FILEHANDLE;

/*
   $dir = "assets";

   if( !file_exists($dir) )
   { 
      $oldmask = umask(0);
      mkdir( $dir, 0744);
   }
//   file_put_contents($dir,  '/test.txt', 'GAE');

*/

   $f = "member_gae.txt";

   $FILEHANDLE = fopen($f , 'w');

   fwrite( $FILEHANDLE ,  "#GAE data \n");


}


// A FUNCTION TO RETURN ISO-8601 FORMATTED DATE WITH MICROSECONDS APPENDED
function date_usec($microtime=FALSE, $pat='Y-m-d H:i:s')
{
    // http://php.net/manual/en/function.microtime.php
    if (!$microtime)
        $microtime = microtime(TRUE);
    $dat = date($pat, $microtime);
    $usc = '000000';
    $str = (string)$microtime;
    if (strpos($str, '.'))
        $usc = str_pad( end(explode('.', $str)), 6, '0', STR_PAD_RIGHT);
    return $dat . '.' . $usc;
}


function GAEData($year, $fname, $lname ,$address, $city, $zip, $phone, $email, $gender, $rating )
{

   global $FILEHANDLE;
   global $COUNT;
   global $UNIQUE;
  
//   $t = microtime(true)*10000;
//   $r = rand(5000 , 20000);

   $space = "       ";
   $KEY = $fname."".$lname;
   $KEY = preg_replace('/-/','', $KEY);
   $KEY = preg_replace('/\'/','', $KEY);
   $KEY = "\"".$KEY."\"";

   $KEY = time() + rand(60*60 , 60*60*48);

   $txt = "#".$COUNT;
   fwrite( $FILEHANDLE, $txt."\r\n");
   $COUNT += 1;


   if( array_key_exists($fname.$lname, $UNIQUE)) {
       $txt = "#".$space."SKIPPING $fname $lname";
       fwrite( $FILEHANDLE, $txt."\r\n");
       return;
   }

   $txt = $space."self.response.write(\"$fname $lname <br>\")"; 
   fwrite( $FILEHANDLE, $txt."\r\n");


   $txt = $space."g = GGTC(key=ndb.Key(GGTC,\"$KEY\"))";
   fwrite( $FILEHANDLE, $txt."\r\n");

   $txt = $space."g.year=$year";
   fwrite( $FILEHANDLE, $txt."\r\n");

   $txt = $space."g.fname=\"$fname\"";
   fwrite( $FILEHANDLE, $txt."\r\n");

   $txt = $space."g.lname=\"$lname\"";
   fwrite( $FILEHANDLE, $txt."\r\n");

   $txt = $space."g.address=\"$address\"";
   fwrite( $FILEHANDLE, $txt."\r\n");

   if(  strpos($city,"San Francisco") !== false) $city = "SF";
   $txt = $space."g.city=\"$city\"";
   fwrite( $FILEHANDLE, $txt."\r\n");

   $txt = $space."g.zip=\"$zip\"";
   fwrite( $FILEHANDLE, $txt."\r\n");

   $txt = $space."g.phone=\"$phone\"";
   fwrite( $FILEHANDLE, $txt."\r\n");

   $txt = $space."g.email=\"$email\"";
   fwrite( $FILEHANDLE, $txt."\r\n");

   if( $gender == "W") $gender="F";
   $ntrp = $gender.$rating;

   $txt = $space."g.ntrp=\"$ntrp\"";
   fwrite( $FILEHANDLE, $txt."\r\n");


   $txt = $space."g.put()";
   fwrite( $FILEHANDLE, $txt."\r\n");

   fwrite( $FILEHANDLE,""."\r\n");
   fwrite( $FILEHANDLE,""."\r\n");


   $UNIQUE[ $fname.$lname ] = $fname.$lname;



}



/*
             g=Member( key=ndb.Key(Member, "1513044174" ))  
             g.year = 2018    
             g.fname = "Valerie"  
             g.lname = "McCarthy"  
             g.address = "471 Tanoak Drive"  
             g.phone = "(408) 355-4095"  
             g.city = "Santa Clara"  
             g.zip = "95051"  
             g.email = "valeriebays@gmail.com"  
             g.ntrp = "F3.0"  
             g.mtype = "RF"  
             g.src = "PP"  
             g.custom = ""  
             g.zknt = 0  
             g.ztra = ""  
             g.put()  


*/

?>
