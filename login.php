<?php
session_start();
include("inc/conn.php");

if (isset($_POST['submit'])) {
    $Name = $_POST['Name'];
    $password = $_POST['password'];

    $sel = "SELECT * FROM `admin` WHERE Name='$Name' AND password='$password' ";
    $run = mysqli_query($conn, $sel);
    $row = mysqli_num_rows($run);

    if ($row < 1) {
		?>
		<script>
			alert("Username and password incorrect");
			window.open("account.php","_self");
		</script>
		<?php 
	}
	else
	{
		$data = mysqli_fetch_assoc($run);
		$id = $data['id'];
		$_SESSION['id'] = $id;
		header("location: home.php");
		exit();
	}
}