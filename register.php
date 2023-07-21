<?php
session_start();
include("inc/conn.php");

if(isset($_POST['button']))
{
  $u = $_POST['u'];
  $pa = $_POST['pa'];
  $e = $_POST['e'];

  $ins = "INSERT INTO `admin`(`Name`, `email`, `password`) VALUES ('$u','$e','$pa')";
  $run = mysqli_query($conn, $ins);

  if($run)
  {
    ?>
    <script>
      alert("Data inserted successfully");
      window.open("account.php","_self");
    </script>
    <?php 
  }
  else
  {
    echo "Error: " . mysqli_error($conn);
  }
}