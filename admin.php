<?php 

include("config.php");

$query = "SELECT * FROM suggestions";
$result = mysqli_query($conn, $query);

echo"<table><tr>";
while($row = mysqli_fetch_array($result)){ 
    ?>
 <td><?php echo $row['title']."<br>"?></td>
 <td><?php echo $row['suggestion']."<br>"?></td>
 
<?php 

}

?>















