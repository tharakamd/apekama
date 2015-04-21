<?php
    function sanitizeString($in){
        $in  = stripslashes($in);
        $in = htmlentities($in);
        $in = strip_tags($in);
        return $in;
    }
    function sanitizeSql($conncetion, $in){
        $in =  $conncetion->real_escape_string($in);
        $in = sanitizeString($in);
        return $in;
    }
?>