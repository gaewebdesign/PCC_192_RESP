<?php


        $year = $_GET["year"];
        $file = "year.txt";

        $fp = fopen($file,"w");
        fwrite( $fp , $year );
        fclose($fp);


?>