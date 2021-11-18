<?php
    // Clean form input data 
    function clean_input($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        //echo "In clean_input()";
        return $input;
    }

    // Form entry validation
    function input_error($name) {
        switch ($name) {
            case "username":
            echo '<span style="font-family: Arial, Helvetica, sans-serif;font-size: 1rem;color: red;padding-left: 5px;">Enter your name</span>';
            break;
            case "email":
            echo '<span style="font-family: Arial, Helvetica, sans-serif;font-size: 1rem;color: red;padding-left: 5px;">Enter a valid email address</span>';
            break;
            case "message":
            echo '<span style="font-family: Arial, Helvetica, sans-serif;font-size: 1rem;color: red;padding-left: 5px;">Enter a message</span>';
            break;
        }
    }
?>