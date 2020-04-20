<?php

require("includes/common.php");
session_start();
if (!isset($_SESSION['email'])) {
    header('location:index.php');
}

$old_pass = $_POST['old-password'];
$old_pass = MD5($old_pass);

$new_pass = $_POST['new-password'];
$new_pass = MD5($new_pass);

$new_pass1 = $_POST['re-type_new-password'];
$new_pass1 = MD5($new_pass1);

$s = $_SESSION['email'];

$con = mysqli_connect("localhost", "root", "", "estore");

$select_query = "SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
        
        $select_query_result = mysqli_query($con, $select_query);
        
        $num = mysqli_fetch_array($select_query_result);
        
        if($num>0 and ($old_pass==$password))
        {
            $con= mysqli_query($con,"UPDATE  users SET password = '$new_pass' WHERE email = '$s'");
            echo "password changed successfully!!";
            header('location:index.php');
        }
 else {
            echo "old Password doesnt match!!";
            header('location:index.php');
 }
 ?>