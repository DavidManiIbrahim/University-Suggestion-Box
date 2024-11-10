<?php

include('signup.html');

include('config.php');

// if(isset($_POST['signup'])){
$username = $_POST['user'];
$password = $_POST['password'];
// echo $username."<br>";
// echo $password;

$user_id = "pat";
$pwd = "josh";

    if (($username === $user_id) && ($password && $pwd ) ){
        echo "Login Successful";
       header("location: dashboard.html");
    }else{
        echo "Invalid user id and password";
    }
    
// $query = "INSERT INTO `admin`(`id`,`user`,`password`,) VALUES (NULL,'$username','$password')";
// $result = mysqli_query($conn, $query);

//             if($result){
//                 echo "Sign Up Succcessful";
//             }else{
//                 echo "Sign Up fail";
//             }



        // }


