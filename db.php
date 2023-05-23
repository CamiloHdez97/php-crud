<?php

    $server="localhost";//127.0.0.1
    $db="app";
    $user="root";
    $passwd="";
    try{
        $conexion = new PDO("mysql:host=$server;dbname=$db",$user,$passwd);
    }
    catch(Exception $ex){
        echo $ex->getMessage();
    }
    
?>