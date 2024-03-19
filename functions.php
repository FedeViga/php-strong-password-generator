<?php

if(isset($_GET['characters-number'])) {

    $passwordLength = $_GET['characters-number'];
}

function passwordGenerator($length) {

    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz@#$&*";
    $generatedPassword = '';
    for($i = 0; $i < $length; $i++) {
        $generatedPassword .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $generatedPassword;
}