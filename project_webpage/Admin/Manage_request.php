
<?php include("database.php") ?>
<?php session_start(); 
if (!isset($_SESSION['username']))
{
    header("Location: admin.php");
    die();
}
?>
<!DOCTYPE html>
<html>
	<head>

	<link rel="stylesheet" href="css/myStyles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta charset="UTF-8">
        <title>Admin Overview</title>
		<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/overview.css"></link>

	</head>
	<body>
		<div class="container-md main">
			<h1> Overview</h1>
			<a href="Logout_process.php">Log Out</a>
	<center>
	
	<div class='current'>
	<h1>Current Requests</h1>
	
<?php
	$sql2="SELECT * FROM request_rent";
	$result2=$connect->query($sql2);

    echo "<div class='element-holder'>";
	while($row2 = $result2->fetch_assoc())
	{
		echo "<form name='manage-request' method='POST' action='Accept.php'>";
		echo "<div class='element'>";
		echo "Unit Number: ";
		echo $row2['unit_no']."<br>";
		echo "Renter: ";
		echo $row2['renter']."<br>";
		echo "Renter Phone: ";
		echo $row2['renterPhone']."<br>";
		echo "Cost: ";
		echo "$".$row2['cost']."<br>";
		echo "Requested Date:  ";
		echo $row2['start_date']."<br>";
		?>
		<input type="hidden" value="<?php echo $row2['unit_no']; ?>" name="unit" />
		<input type="hidden" value="<?php echo $row2['renter']; ?>" name="renter" />
		<input type="hidden" value="<?php echo $row2['renterPhone']; ?>" name="phone" />
		<input type="hidden" value="<?php echo $row2['cost']; ?>" name="cost" />
		<input type="hidden" value="<?php echo $row2['start_date']; ?>" name="date" />
		<div class="button-holder">
		<input class="button" type="submit" value="Accept"/>
		</form>
		<form name='manage-request' method='POST' action='Decline.php'>
		<input type="hidden" value="<?php echo $row2['unit_no']; ?>" name="unit" />
		<input type="hidden" value="<?php echo $row2['renter']; ?>" name="renter" />
		<input class="button" type="submit" value="Decline"/> <br>
	     </div>
		</form>
		<?php
		echo "</div>";
	
	}

?>
</div>
</div>
<div class="current">
	<h1>Rented Units</h1>
	<?php
	$sql2="SELECT * FROM rented_tab";
	$result2=$connect->query($sql2);
	$count=1;
	echo "<div class='element-holder'>";
	while($row2 = $result2->fetch_assoc())
	{
		echo "<form name='manage-request' method='POST' action='Delete.php'>";
		echo "<div class='element_2'>";
		echo "Unit Number: ";
		echo $row2['unit_no']."<br>";
		echo "Renter: ";
		echo $row2['renter']."<br>";
		echo "Renter Phone: ";
		echo $row2['renter_phone']."<br>";
		echo "Cost: ";
		echo "$".$row2['cost']."<br>";
		echo "Requested Date:  ";
		echo $row2['date_of_start']."<br>";
		?>
		<input type="hidden" value="<?php echo $row2['unit_no']; ?>" name="unit" />
		<input type="hidden" value="<?php echo $row2['renter']; ?>" name="renter" />
		<input class="button" type="submit" value="Delete"/> <br>
		</form>
		<?php
		echo "</div>";
	
	}

?>
	
	</div>
</div>	
</div>
	</body>

</html>
<?php include("Footer.php") ?>
