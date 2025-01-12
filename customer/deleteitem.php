

<?php	
include("dbcon.php");
$cartid = $_GET['id'];
$sql = "delete from booking where bid=".$cartid;

$conn->query($sql);

 header('location:viewcart.php');



?>

