<?php
session_start();
include("database.php");

$Unit = $_POST['unit'];
$Renter = $_POST['renter'];

$sqd = "DELETE FROM request_rent WHERE renter='$Renter' AND unit_no='$Unit'";
$result2 = $connect->query($sqd);
if (isset($_SERVER["HTTP_REFERER"])) {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}
?>
