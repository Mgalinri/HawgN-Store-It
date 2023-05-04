<!Doctype html>
<?php
session_start();
?>
<html>
	<head>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="css/admin.css">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta charset="UTF-8">
        <title>Hawg'N Store It</title>
	</head>
	<body>
	<link rel="stylesheet" href="css/admin.css">
   <div class="container-fluid container">
	<div class="form">
	<center>
	<h1>Verify Identity </h1>
	
	<form name="rent-request" method="POST" action="VerifyCheck.php">
	<table>
	<tr>
	<td>Enter Username: </td> <tr><td><input class="input" placeholder="Jane Doe" type="text" name="user" id="user" required/></td></tr>
	</tr> 
	<tr>
	<td>Enter Password: </td> <tr><td><input class="input" placeholder="787cfc" type="password" name="pass" id="pass" required /></td></tr>
	</tr> 	
	<tr>
	<td align="center" colspan=2> <input type="submit" value="Verify"/> </td>
	</tr>
	</table>
	</form>
	</center>
</div>
</div>
	</body>
</html>
