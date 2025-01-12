<?php
include("dbcon.php");
$did = $_GET['id'];
$sql = "update district set status=2 where did=".$did;

$conn->query($sql);

 header('location:dview.php');



?>
