<?php 
include "includes/dbconnection.php"; 

$sql = "UPDATE `birthform` SET `birthStatus` = 2 WHERE `birthformID` =" . $_GET['formid'];

$conn->query($sql);

header("Location: viewBirthCertificates.php");
?>