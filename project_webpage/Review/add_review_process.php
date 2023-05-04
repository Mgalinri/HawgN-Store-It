<?php

$formerRenter = $_POST['renter'];
$Unit = $_POST['unit'];
$Date = date("Y/m/d");
$Review = $_POST['review'];

if($formerRenter == "")
	echo "Invalid Name";
else if($Unit == "")
	echo "Invalid Unit Number";
else if($Review == "")
	echo "Invalid Review";
	
else
	include("database.php");

	$sql = "INSERT INTO reviews (unit_no, renter, date_of_review, review)
			VALUES ('$Unit', '$formerRenter', '$Date', '$Review')";
	$result = $connect->query($sql);

	if($result == FALSE)
	{
		echo "ERROR: ". $connect->error;
	}
	else
	{
		if (isset($_SERVER["HTTP_REFERER"])) {
			header("Location: " . $_SERVER["HTTP_REFERER"]);
		}
	}
?>
