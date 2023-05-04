<?php include("TopMenu.php") ?>
<?php include("database.php") ?>
<?php session_start(); 

$Unit = $_GET['unit'];
$Cost = $_GET['cost'];
$_SESSION['UNIT'] = $Unit;
$_SESSION['Cost'] = $Cost;

?>

<html>
	<head>
	</head>
	<body>
	<link rel="stylesheet" href="css/myStyles.css">
	<center>
	<h1>Rent Form </h1>
	
	<form name="rent-request" method="POST" action="Request_Process.php">
	<table>
	<tr>
	<td>Enter your Name: </td> <td><input type="text" name="renter" id="renter" /></td>
	</tr> 
	<tr>
	<td>Enter your Phone Number: </td> <td><input type="text" name="phone" id="phone" /></td>
	</tr> 
	<tr>
	<td>Unit Selected: </td> <td><p><?php echo $Unit ?></p></td>
	</tr> 
	<tr>
	<td>Monthly Cost: </td> <td><p>$<?php echo $Cost ?></p></td>
	</tr> 
	<tr>
	<td>Enter Desired Start Date: </td> <td><input type="Date" name="date" id="date" /></td>
	</tr> 
	<tr>
	<td>Enter any Extra Necessary Information: </td> <td><input type+"text" name="ExtraInfo" id="ExtraInfo" /></td>
	</tr>
	<tr>
	<td align="center" colspan=2> <input type="submit" value="Add Request"/> </td>
	</tr>
	</table>
	</form>
	</center>
	</body>
</html>
<?php include("Footer.php") ?>
