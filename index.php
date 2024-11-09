<?php 

include("suggestion.html");
// include("index.html");

require_once("config.php");

$title = $_POST["title"];
$description = $_POST["description"];
// echo $title;

// if ($title == "" || $description == "") {
if (empty($title) && empty($description)) {
    echo "Please fill in all fields.";
    exit;
}else{

$query = "INSERT INTO `suggestions` (`id`,`title`,`suggestion`) VALUES (NULL,'$title','$description')";
$result =  mysqli_query($conn, $query);

}


if ($result) {
    echo "Suggestion Submitted successful!";
    exit;
}else{
    echo "Error please try again.";
}






