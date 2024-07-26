<?php
    if(isset($_POST['length'])) {
        $lenght = intval($_POST['length']);
        $lowercase = isset($_POST['lowercase']);
        $uppercase = isset($_POST['uppercase']);
        $symbols = isset($_POST['symbols']);
        $numbers = isset($_POST['numbers']);

        if(!$lowercase && !$uppercase && !$symbols && !$numbers) {
            echo "Failed to generate password. Choose at least 1 type";
        }

        $lowercase_chars = "abcdefghijklmnopqrstuvwxyz";
        $uppercase_chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $symbols_chars = "!\#$%&'()=?";
        $numbers_chars = "0123456789";

        $password ="";
        $valid_options = "";

        if($lowercase) {
            $valid_options .= $lowercase_chars;
        }

        if($uppercase) {
            $valid_options .= $uppercase_chars;
        }
        if($symbols) {
            $valid_options .= $symbols_chars;
        }
        if ($numbers) {
            $valid_options .= $numbers_chars;
        }

        for($k = 0; $k < $lenght; $k++) {
            $random_number = rand(0, strlen($valid_options) - 1);
            $password .= $valid_options[$random_number];
        }
    }
?>