<?php
    function openconn()
     {
     $dbhost = "localhost";
     $dbuser = "root";
     $dbpass = "";
     $db = "hotel";
     $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
     return $conn;
     }
    function closeconn($conn)
     {
     $conn -> close();
     }
       
?>