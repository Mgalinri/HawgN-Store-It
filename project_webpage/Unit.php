<?php include("TopMenu.php") ?>
<?php include("database.php") ?>
<?php session_start(); ?>
<html>
	<head>
	<link rel="stylesheet" href="css/myStyles.css">
	</head>
	<body>
	<center>
	<h1>Available Units</h1>
	<p>Here are all of the currently available units</p>
<?php
	$sql2="SELECT * FROM unit_tab WHERE availability=1";
	$result2=$connect->query($sql2);
	$count=1;
	echo "<table>";
	echo "<tr>";
	while($row2 = $result2->fetch_assoc())
	{
		echo "<form name='rent-request' method='POST' action='Request.php'>";
		echo "<td align='center'>";
		echo "Unit Number: ";
		echo $row2['unit_no']."<br>";
		echo "Size: ";
		echo $row2['unit_size']."<br>";
		echo "Door Size: ";
		echo $row2['door_size']."<br>";
		echo "Cost ";
		echo "$".$row2['cost']."<br>";
		?>
		<input type="hidden" value="<?php echo $row2['unit_no']; ?>" name="unit" />
		<input type="hidden" value="<?php echo $row2['cost']; ?>" name="cost" />
		<input type="submit" value="Submit"/> <br>
		<?php
		echo "</form>";
		echo "</td>";
		$count++;
		if($count==5)
		{
			echo "</tr><tr>";
			$count=1;
		}
	}
	echo "</table>"
?>
	</center>
	</body>
</html>
<?php include("Footer.php") ?>