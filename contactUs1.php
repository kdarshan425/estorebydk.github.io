<?php
require("includes/common.php");



$email = $_POST['email'];

$contact = $_POST['number'];

$message = $_POST['message'];

$user_registration_query = "INSERT INTO `contact` ( `email`, `number`, `message`) VALUES ( '$email', '$contact', '$message');";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo "Thank You For Your Valuable Responce!!";
?>