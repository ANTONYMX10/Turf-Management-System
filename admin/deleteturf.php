<?php
include("dbcon.php");
$tid = $_GET['id'];
$sql = "update turf set status=2 where tid=".$tid;

$conn->query($sql);

 header('location:view.php');



?>
