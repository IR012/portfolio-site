<?php
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $myEmail = $_ENV["MY_EMAIL"];
    $myPass = $_ENV["MY_PASS"];
    $myPhone = $_ENV["MY_PHONE"];
?>