<?php 
include 'con.php';

$id = $_GET['id'];
$q ="DELETE FROM `usertable` WHERE id = $id";

mysqli_query($con,$q);
header('location:display.php');

?>