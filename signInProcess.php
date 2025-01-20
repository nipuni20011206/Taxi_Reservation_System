<?php
session_start();
require "connection.php";

$email = $_POST["email"];
$password = $_POST["password"];

if (empty($email) && empty($password)) {
    echo "please enter your username and password";
} else if (empty($email)) {
    echo "please enter your username";
} else if (empty($password)) {
    echo "please enter your password";
} else {
    $p_resultset = Database::search("SELECT * FROM `user` 
        WHERE `email`='" . $email . "' 
        AND `password` ='" . $password . "'");

    $p_n = $p_resultset->num_rows;

    if ($p_n == 1) {

        $p_resultset = Database::search("SELECT * FROM `user` 
        WHERE `email`='" . $email . "' 
        AND `password` ='" . $password . "'");

        $d = $p_resultset->fetch_assoc();
        $_SESSION["u"] = $d;
        echo $d['user_type_type_id'];
    } else {
        echo "Invalid username or password";
    }
}
