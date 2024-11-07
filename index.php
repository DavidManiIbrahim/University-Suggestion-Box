<?php 

include("index.html");

require_once("config.php");

$data = $_POST["input"];
// echo $data;

if (empty($data)) {
    echo "Please fill in all fields.";
    exit;
}else{

$query = "INSERT INTO `suggestions` (`id`,`suggestion`) VALUES (NULL,'$data')";
$result =  mysqli_query($conn, $query);

}


if ($result) {
    echo "Suggestion Submitted successful!";
    exit;
}else{
    echo "Error please try again.";
}






