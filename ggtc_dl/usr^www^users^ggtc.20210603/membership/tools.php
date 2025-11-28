<?php

//sendPOST();

writetofile( );

//tools();

//getMembers();

// TRANSFER();
//addGGTC2019();

function writetofile(){

  $el = "<br>";

  $file = "year.txt";
  $w = is_writable( $file);
  print("WRITABLE: ".$w.$el );
  $root = $_SERVER['DOCUMENT_ROOT'];

  print("ROOT: ".$root.$el);

//  $file = $root."/".$file;
  print("FILE: ->".$file );

  $fp = fopen($file, "w");
  fwrite( $fp, "2020 --- yes written to and it works");
  fclose($fp);

}




// send a fake _POST from Paypal to move /PENDING/TWILIGHT to  Member/GGTC 
// www.sfmongoldata.appspot.com/transfer
function TRANSFER()
{


$data = array('key' => 1543481446);

$payload = json_encode( $data );

$url = "http://localhost:8080/transfer";
$url = "http://www.scmongoldata.appspot.com/transfer";


$url = "http://www.sfmongoldata.appspot.com/transfer";

$ch = curl_init( $url );
curl_setopt( $ch  , CURLOPT_POSTFIELDS, $payload );
curl_setopt( $ch  , CURLOPT_RETURNTRANSFER, true );

$response = curl_exec($ch);

curl_close( $ch);
echo $response;

return $response;

}

function sendPOST()
{


//$data = array( 'year' => 2017 );
$data = array( 'year' => 2018 );

$payload = json_encode( $data );

$url = "http://localhost:8080/ggtc";

$url = "http://localhost:8080/test";

$ch = curl_init( $url );
curl_setopt( $ch  , CURLOPT_POSTFIELDS, $payload );
curl_setopt( $ch  , CURLOPT_RETURNTRANSFER, true );

$response = curl_exec($ch);

curl_close( $ch);
echo $response;
return $response;

}


function getMembers()
{

$url = "http://localhost:8080/kotoshi";

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);

$result = curl_exec($ch);
curl_close($ch);

$obj = json_decode($result, $assoc= TRUE);

date_default_timezone_set('America/Los_Angeles');

foreach ( $obj as $row ){
     print( $row["year"]."  ".$row["fname"]." ".$row["lname"]);
     print( $row["ntrp"]." \n " );

//     $DATE = date(" m/d/y",$row["date"]);
//     print( "<td>".$DATE );

//   print("</td>");
//   print("</tr>");

}

}



function tools()
{
echo "tools";

echo gethostname();

}


// Add members from 2018 to 2019 database
function addGGTC2019(){

/*
10/15 Henry Brodkin 45 Graystone Terrace SF 94114 henrybrodkin@sbcglobal.net

10/18 Lynn Little,125 Baltimore AVe,Corte Madera 94925

10/19 Jane Cloniger,75 Sheridan St #102,SF 94103
mailto:jane.cloninger@gmail.com

10/28 Lily Lew,710 11th Ave SF 94118,lily_lew@yahoo.com
10/31 Bryant Fong,2373 Sharon Rd, Menlo Park, 94025

bdbdbd309@yahoo.com

10/32 Patricia Crisea,155 Yerba Buena Ave,
patzcrisera@gmail.com

11/1 Anne Kavanagh, 452 Cavour St,Oakland, 94618,annekava@gmail.com

*/ 

class GGTC {

   public $fname,$lname,$address,$city,$zip;

   public $email,$url,$date;

   public $gender = "";
   public $ntrp = "";

   public $year = 2019;

   function __construct($fname,$lname,$address,$city,$zip, $email,$url,$gender,$ntrp,$date){
         $this->fname = $fname;
         $this->lname = $lname;

         $this->address = $address;
         if($city == "SF") $city = "San Francisco";
         $this->city = $city;

         $this->zip = $zip;

         $this->gender = $gender;

         $this->ntrp = $ntrp;

         $this->email = $email;
         $this->url = $url;

         $t = new DateTime($date);
         $dt = $t->format('U');
         $dt += rand(10000,75000);

         $this->date = $dt;

   }

//   public function fname(){ return $this->fname;}
//   public function lname(){ return $this->lname;}


}



//10/15 Henry Brodkin 45 Graystone Terrace SF 94114

$members = array();

$members[] = new GGTC("Henry", "Brodkin","45 Graystone Terrace","SF",94114,"henrybrodkin","sbcglobal.net","M","3.5","2018-10-15");

$members[] = new GGTC("Lynn", "Little","125 Baltimore Ave","Corte Madera",94925,"lynmlittle","hotmail.com","W","4.0","2018-10-15");

$members[] = new GGTC("Jane", "Cloniger","75 Sheridan St #102","SF",94103,"jane.cloninger","gmail.com","W","3.5","2018-10-19");

$members[] = new GGTC("Lily", "Lew","710 11th Ave","SF",94118,"lily_lew","yahoo.com","W","3.5","2018-10-18");

$members[] = new GGTC("Bryan", "Fong","2373 Sharon Rd","Menlo Park",94025,"bdbdbd309","yahoo.com","M","4.0","2018-10-31");

$members[] = new GGTC("Patricia", "Crisea","155 Yerba Buena","SF",94127,"patzcrisera","gmail.com","W","3.5","2018-10-31");

$members[] = new GGTC("Anne", "Kavanagh","452 Cavour St","Oakland",94618,"annekava","gmail.com","W","4.0","2018-11-01");


$members[] = new GGTC("Kathy", "Raffel","21 Ora Way","SF",94131,"kkraffel","mac.com","W","3.5","2018-11-01");

$members[] = new GGTC("Marilyn", "Esquivel","816 3rd Ave","San Bruno",94006,"mesquivel","sanbrunocable.com","W","3.5","2018-11-01");

$members[] = new GGTC("Ruth", "Fleming","335 2nd Ave","SF",94118,"reflem","rockisland.com","W","","2018-11-01");


$members[] = new GGTC("Henry", "Soong","","Hayward",94618,"h.soong","gmail.com","M","4.0","2018-10-27");




print("#GGTC\n");
print("import webapp2 \n");

print("from datastore import  *\n\n\n");

print("def ggtc2019(selfobj):\n\n");


foreach( $members as $k){

  $time = gmdate("Y-m-d  \TH:i:s \Z", $k->date );

//  print( $k->fname." ". $k->lname."  ".$k->address." ".$k->city." ".$k->zip." ".$k->email."@".$k->url." ".$k->date." :".$time );




  print("\tselfobj.response.write(\"$k->fname $k->lname $k->address $k->email@$k->url $k->gender$k->ntrp\") \n");

  print("\tselfobj.response.write(\"<br>\") \n");

  print("\tg =GGTC(key=ndb.Key(GGTC,\"$k->date\")) " );
  print( "\n");
  print("\tg.fname = \"$k->fname\" \n" );
  print("\tg.lname = \"$k->lname\" \n" );
  print("\tg.address = \"$k->address\" \n" );
  print("\tg.city = \"$k->city\"\n" );
  print("\tg.zip = \"$k->zip\"\n" );

  $ntrp = $k->gender.$k->ntrp;
  print("\tg.ntrp = \"$ntrp\"\n" );

  print("\tg.email = \"$k->email@$k->url\" \n" );
  print("\tg.year = $k->year \n" );

  print("\tg.put() \n" );

  print( "\n");



}

}

?>

