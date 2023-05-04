<?php
session_start();

$Unit = $_POST['unit'];
$Cost = $_POST['cost'];
$Renter = $_POST['renter'];
$Phone = $_POST['phone'];
$Date = $_POST['date'];

if($Renter == "")
	echo "Invalid Name";
else if($Unit == "")
	echo "Invalid Unit Number";
else if($Phone == "")
	echo "Invalid number";
	
else
	include("database.php");

	$sq2 = "INSERT INTO rented_tab (unit_no, cost, renter, renter_phone, date_of_start)
			VALUES ('$Unit', '$Cost', '$Renter', '$Phone', '$Date')";
	$result = $connect->query($sq2);
	

	if($result == FALSE)
	{
		echo "ERROR: ". $connect->error;
	}
	else
	{
	$sqd = "DELETE FROM request_rent WHERE renter='$Renter' AND unit_no='$Unit'";
	$result2 = $connect->query($sqd);
	$squ = "UPDATE unit_tab SET availability='0' WHERE unit_no='$Unit'";
	$result3 = $connect->query($squ);
	if (isset($_SERVER["HTTP_REFERER"])) {
		header("Location: " . $_SERVER["HTTP_REFERER"]);
	}
	}
?>