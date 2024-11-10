<?php 

include("suggestion.html");


require_once("config.php");

$title = $_POST["title"];
$description = $_POST["description"];
// echo $title;


if (empty($title) && empty($description)) {
    echo "<p class='error'>Please fill in all fields.</p>";
    exit;
}else{

$query = "INSERT INTO `suggestions` (`id`,`title`,`suggestion`) VALUES (NULL,'$title','$description')";
$result =  mysqli_query($conn, $query);

}


if ($result) {
    echo "<p id='success'>Suggestion Submitted successful!</p>";
    exit;
}else{
    echo "<p id='success'>Error please try again.</p>";
}






