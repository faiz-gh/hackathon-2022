<?php 
include "includes/dbconnection.php";

$sql = "UPDATE `deathform` SET `deathStatus` = 1 WHERE `deathFormID` =" . $_GET['formid'];

$conn->query($sql);

header("Location: viewDeathCertificates.php");
?>