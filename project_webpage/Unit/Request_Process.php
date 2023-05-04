<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

        <meta charset="UTF-8">
        <title>Hawg'N Store It</title>
        <script type="text/javascript" src="main.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css\Request_Process.css"></link>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@300&family=Sansita+Swashed:wght@500&display=swap" rel="stylesheet">
</head>
<body>

<div class="container section1 vh-100 d-flex-columns justify-content-center align-items-center d-flex">

<?php
session_start();


$Unit = $_SESSION['UNIT'];
$Cost = $_SESSION['Cost'];
$Renter = $_POST['renter'];
$Phone = $_POST['phone'];
$Date = $_POST['date'];
$Extra = $_POST['ExtraInfo'];

if($Renter == "")
	echo "Invalid Name";
else if($Unit == "")
	echo "Invalid Unit Number";
else if($Phone == "")
	echo "Invalid number";
	
else
	include("database.php");

	$sq2 = "INSERT INTO request_rent (unit_no, cost, renter, renterPhone, start_date)
			VALUES ('$Unit', '$Cost', '$Renter', '$Phone', '$Date')";
	$result = $connect->query($sq2);

	if($result == FALSE)
	{
		echo "ERROR: ". $connect->error;
	}
	else
	{?>
	<p>Your request has been submitted!</p>
<button onclick="window.location.href='main.php'"> Go Back to the Main Page</button>

<?php
	}
?>



	

</div>
	</div>
</body>
</html>
