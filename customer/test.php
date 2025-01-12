<?php 
include("dbcon.php");
require('../config/autoload.php'); 
$dao=new DataAccess();
$date = $_POST['id'];
$doid = $_POST['doid'];

$q1="SELECT * from slot WHERE ctime not IN (SELECT ctime FROM `booking` WHERE status=2 and `TID` =".$doid." AND `pdate`='".$date."');" ;
//$q1="SELECT * from slot";
$info1=$dao->query($q1);
echo json_encode($info1);
// echo $q1;
 //echo $date.$doid."sa";
?>