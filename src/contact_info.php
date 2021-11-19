<?php
    //Load environment variables
    echo "\n\nBefore Dotenv\Dotenv::createImmutable(...)";
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__."/..");
    echo "\n\nBefore dotenvload->load";
    $dotenv->load();
    echo "\n\nAfter dotenvload->load";

    $myEmail = $_ENV["MY_EMAIL"];
    echo "\n\nAfter env variable assignment";
    $myPass = $_ENV["MY_PASS"];
    $myPhone = $_ENV["MY_PHONE"];
?>