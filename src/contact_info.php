<?php
    //Load environment variables
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__."/..");
    $dotenv->safeLoad();

    $myEmail = $_ENV["MY_EMAIL"];
    $myPass = $_ENV["MY_PASS"];
    $myPhone = $_ENV["MY_PHONE"];
?>