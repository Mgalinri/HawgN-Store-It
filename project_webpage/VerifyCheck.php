<?php
 include("database.php") ;
 session_start(); 
$_SESSION['username'] = $_POST['user'];
$password = strval($_POST['pass']);

$sql3 = "SELECT * FROM verified_user WHERE username = '{$_SESSION['username']}' AND password = '$password' ";
$result = $connect->query($sql3);
$result = mysqli_num_rows($result);
if($result != 0) 
	{
	

	header("Location: Manage_request.php");
  

		
	} 
	else 
	{
        unset($_SESSION['username']);
        if (isset($_SERVER["HTTP_REFERER"])) {
		
			header("Location: " . $_SERVER["HTTP_REFERER"]);
			
			
		}
	}
?>