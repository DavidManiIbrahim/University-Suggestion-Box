<?php

include('config.php');

if(isset($_POST['btn_login'])){
$username = $_POST['username'];
$password = $_POST['password'];

$set_username = 'pat';
$set_password = 'josh';



    if($count == 1) {
    
       // session_register("myusername");
       session_start();
       $_SESSION['username'] = $username;
       header("location: dashboard.php");
    } else {
       echo "Your Login Name or Password is invalid";
    }

    }
