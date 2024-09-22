<?php

    $database= new mysqli("localhost","root","","schedulux");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>