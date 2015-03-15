<?php

    $hostname = 'localhost';
    $database = 'apekama_tmp';
    $username = 'root';
    $pw = '';
    $dbserver;

    function connect_db(){
        $dbserver = mysql_connect($hostname,$username,$pw);
        if(!$dbserver)die("unable to connect to database !!!" . mysql_error()); 
        
        $dbserver = mysql_select_db($database);
        if(!$dbserver)die("database not found !!!". mysql_error());
        
        $quarry = "select * from login";
        $result = mysql_query($quarry);
        if(!$result)die("No data in database!!!".mysql_error());
        
        $rows = mysql_num_rows($result);
    }

    

?>