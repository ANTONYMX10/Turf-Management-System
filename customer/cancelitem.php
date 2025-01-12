

<?php	
include("dbcon.php");
$cartid = $_GET['id'];
$sql = "update booking set status=3 where bid=".$cartid;

$conn->query($sql);

 header('location:viewcancel.php');



?>

