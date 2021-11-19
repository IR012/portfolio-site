<?php
    //Load environment variables
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/..');
    $dotenv->load();
    
    $myEmail = $_SERVER["MY_EMAIL"];
    $myPass = $_SERVER["MY_PASS"];
    $myPhone = $_SERVER["MY_PHONE"];
?>