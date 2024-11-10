<?php

include('config.php');

if(isset($_POST['btn_login'])){
$username = $_POST['username'];
$password = $_POST['password'];

$set_username = 'pat';
$set_password = 'josh';

    $sql = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($conn,$sql);      
    $row = mysqli_num_rows($result);      
    $count = mysqli_num_rows($result);

    if($count == 1) {
    
       // session_register("myusername");
       session_start();
       $_SESSION['username'] = $username;
       header("location: dashboard.php");
    } else {
       echo "Your Login Name or Password is invalid";
    }

    }
