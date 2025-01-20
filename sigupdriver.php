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
$nic = $_POST["nic"];
$district = $_POST["district"];
$vmodel = $_POST["vmodel"];
$vno = $_POST["vno"];
$chassis_no = $_POST["chassis_no"];

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
} else if (empty($nic)) {
    echo "please enter your NIC number";
} else if (empty($district)) {
    echo "please enter your address";
} else if (empty($vmodel)) {
    echo "please enter your Vehicle Model";
} else if (empty($vno)) {
    echo "please enter your Vehicle No";
} else if (empty($chassis_no)) {
    echo "please enter Chassis No";
} else {
    Database::iud("INSERT INTO  `user` (`email`,`password`,`user_type_type_id`)
         VALUES ('" . $email . "','" . $password1 . "','2')");

    $cus_id = Database::$connection->insert_id;

    Database::iud("INSERT INTO  `driver` (`name`,`emaill`,
    `mobile`,`birth_day`,`address`,`licence`,`vehicle_id`,`work_id`,`user_id`)
         VALUES ('" . $firstname . "','" . $email . "',
         '" . $phone . "','" . $dob . "','" . $district . "','" . $vno . "','1','2','" . $cus_id . "')");

    echo "done";
}
