<?php include("database.php") ?>
<?php session_start(); 

$Unit = $_GET['unit'];
$Cost = $_GET['cost'];
$_SESSION['UNIT'] = $Unit;
$_SESSION['Cost'] = $Cost;
?>
<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

        <meta charset="UTF-8">
        <title>Hawg'N Store It</title>
        <script type="text/javascript" src="main.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css\rental_form.scss"></link>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@300&family=Sansita+Swashed:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<?php include("menu.php") ?>


<div class="container-fluid con">
<div class="menu_container">
      
      </div>
    <h1>Rent Form</h1>
	<center>
       
	

	<form name="rent-request" method="POST" action="Request_Process.php">
	<table>
	<tr>
	<td>Name: </td> <td><input type="text" name="renter" id="renter" placeholder="Jane Doe" required /></td>
	</tr> 
	<tr>
	<td>Phone Number: </td> <td><input type="text" name="phone" id="phone" placeholder="4789987878"  pattern="[0-9]{3}[0-9]{7}"required/></td>
	</tr> 
	<tr>
	<td>Unit Selected: </td> <td><p><?php echo $Unit ?></p></td>
	</tr> 
	<tr>
	<td>Monthly Cost: </td> <td><p>$<?php echo $Cost ?></p></td>
	</tr> 
	<tr>
	<td>Enter Desired Start Date: </td> <td><input type="Date" name="date" id="date" required  /></td>
	</tr> 
	<tr>
	<td>Enter any Extra Necessary Information: </td> <td><input type="text" name="ExtraInfo" id="ExtraInfo" /></td>
	</tr>
	<tr>
	<td align="center" colspan=2> <input type="submit" value="Add Request" c/> </td>
	</tr>
	</table>
	</form>

	</center>

</body>
</html>