<?php
session_start();
include("database.php");

$Unit = $_POST['unit'];
$Renter = $_POST['renter'];

$sqd = "DELETE FROM rented_tab WHERE renter='$Renter' AND unit_no='$Unit'";
$result2 = $connect->query($sqd);

$squ = "UPDATE unit_tab SET availability='1' WHERE unit_no='$Unit'";
$result3 = $connect->query($squ);
if (isset($_SERVER["HTTP_REFERER"])) {
			header("Location: " . $_SERVER["HTTP_REFERER"]);
		}
?>
