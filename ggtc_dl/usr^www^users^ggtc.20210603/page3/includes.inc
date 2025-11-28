

<?php

$HOST = $_SERVER['SERVER_NAME'];


if( strpos($HOST,"goldengate") !== false ){

   define("URL_CLUBDAY","http://www.jeung4tennis.appspot.com/clubday");
   define("URL_CLUBDAY_ENTER","http://www.jeung4tennis.appspot.com/enter");

   define("URL_CLUB","http://sfmongoldata.appspot.com/clubday");
   define("URL_ENT(","http://sfmongoldata.appspot.com/enter");

}else{

   define("URL_CLUBDAY","http://localhost:8080/clubday");
   define("URL_CLUBDAY_ENTER","http://localhost:8080/enter");


}



?>