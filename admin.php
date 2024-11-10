<?php

include('admin.html');

include('config.php');

// if(isset($_POST['signup'])){
$username = $_POST['user'];
$password = $_POST['password'];
// echo $username."<br>";
// echo $password;

$user_id = "pat";
$pwd = "josh";

    if (($username === $user_id) && ($password && $pwd ) ){
        echo "<span class='success'>Login Successful</span>";
    //    header("location: dashboard.html");
    }else{
        echo "<span class='error'>Invalid user id and password </span>";
    }
    


