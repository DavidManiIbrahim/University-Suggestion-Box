<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="./dashboard.css">
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
   <!-- Add jQuery -->
  <style>
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
  }

  body {
    display: flex;
    height: 100vh;
    overflow-y: auto;
    background-color: #f0f0f5;
    /* width: 100vw; */
  }


.container{
  /* border: 1px solid; */
  overflow: hidden;
  width: 90%;
}


.title{
  width: 300px;
}



.head{
    text-align: center;
    color: #4e2a8e;
}

.txt1{
    margin-top: 5px;
}




  /* Sidebar */
  .sidebar {
    width: 200px;
    background-color: #d8b4f1;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
  }

  .sidebar a {
    text-decoration: none;
    color: #000;
    font-weight: bold;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    font-size: 18px;
  }


  .sidebar a:hover {
    color: #4e2a8e;
  }

  .sidebar a svg {
    margin-right: 10px;
  }

  /* Main content */
  .content {
    flex: 1;
    padding: 20px;
  }

  /* Statistics box */
  .stats-box {
    background-color: #e3c6f6;
    padding: 20px;
    border-radius: 8px;
    margin: 5px;
    width: 99%;
    color: #000;
    font-weight: bold;
    font-size: 18px;
  }

  .stats-box p {
    margin: 10px 0;
  }

.head{
    text-align: center;
    color: #4e2a8e;
}

.txt1{
    margin-top: 5px;
}


.btn1{
  background: transparent;
}
</style>
</head>

<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <a href="./admin.php" class="logout"> <img src="./src/assets/logout.png" alt=""> Logout</a>
  </div>

  


</body>
</html>


<?php
include('config.php');
// include('dashboard.html');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Dashboard</title>

</head>

<body>

  <div class="container">
  
<div class="stats-box">
    <p>Total submission :  
      <span>4365</psp
    </p>
    <p>Recent submission :

      <span>23</span>
    </p>
  </div>
  

  
  <?php


$query = "SELECT * FROM suggestions";
$result = mysqli_query( $conn, $query);
// echo '<tr>';
while($row=mysqli_fetch_array($result)){
  ?>
  <div class="box">

<span class="head"><b><?php echo $row['title']?></b></span>
<button class="btn1"> 
            <img src="./src/assets/Vector.png" alt="">    
        </button>
<p class="txt1"><?php echo $row['suggestion'];?></p>

</div>    

<?php
}
?>
</div>
<script src="./jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $('.btn1').click(function(){
        $('.txt1').slideToggle()

    })

})
  

const day = document.querySelector('.date');
        day.textContent = d;
        // day.textContent = date('d/m/y');
        const d = new Date();

</script>
</body>
</html>