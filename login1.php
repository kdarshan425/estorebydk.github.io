<?php
require 'includes/common.php';
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$password = MD5($password);
$con = mysqli_connect("localhost", "root", "", "estore");
        $select_query = "SELECT * FROM users where email='$email' and password='$password'";
        $select_query_result = mysqli_query($con, $select_query);        
        $result = mysqli_fetch_array($select_query_result);        
         if (!$result[0] ) {
             echo "Not Autheticated !!!";
             exit();
         }
         else {  
             echo "Autheticated !!";              
             $_SESSION['email'] = $email;
             $_SESSION['id'] = $result['id'];
             header("location: product.php");            
         }
?>