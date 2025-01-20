<?php
session_start();
require "connection.php";

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$password1 = $_POST["password1"];
$password2 = $_POST["password2"];
$dob = $_POST["dob"];
$district = $_POST["district"];
$gender = $_POST["gender"];

if (empty($firstname)) {
    echo "please enter your first name";
} else if (empty($lastname)) {
    echo "please enter your last name";
} else if (empty($email)) {
    echo "please enter your email";
} else if (empty($phone)) {
    echo "please enter your phone number";
} else if (empty($password1)) {
    echo "please enter your password";
} else if (empty($password2)) {
    echo "confirm your password";
} else if ($password1 != $password2) {
    echo "password mismatch";
} else if (empty($dob)) {
    echo "please enter your dob";
} else if (empty($district)) {
    echo "please enter your address";
} else {
    Database::iud("INSERT INTO  `user` (`email`,`password`,`user_type_type_id`)
         VALUES ('" . $email . "','" . $password1 . "','3')");

    $cus_id = Database::$connection->insert_id;

    Database::iud("INSERT INTO  `passenger` (`f_name`,`l_name`,
    `emaill`,`telephone_number`,`password`,`gender`,`date_of_birth`,`address`,`user_id`)
         VALUES ('" . $firstname . "','" . $lastname . "',
         '" . $email . "','" . $phone . "','" . $password1 . "','" . $gender . "','" . $dob . "','" . $district . "','" . $cus_id . "')");

    echo "done";
}
