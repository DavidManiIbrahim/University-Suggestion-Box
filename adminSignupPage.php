<?php

include('adminSignupPage.html');

include('config.php');

if(isset($_POST['btn_signup'])){
$username = $_POST['username'];
$password = $_POST['password'];


$query = "INSERT INTO `user`(`id`,`user id`,`password`,) VALUES (NULL,'$username','$password')";
$result = mysqli_query($conn, $query);

            if($result){
                echo "Sign Up Succcessful";
            }else{
                echo "Sign Up fail";
            }
}


