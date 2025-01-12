<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <meta http-equiv="X-UA-Compatible">
    <title>Document</title>
    <link rel="stylesheet" href="ui.css">
    
    <script>
function showtotal() {
//alert(str);
	  var fees=document.getElementById("fees").value;  
	  var advance=document.getElementById("advance").value; 
	  var datefrom=document.getElementById("datefrom").value;
	  var todate=document.getElementById("todate").value;
// 	  var balance=fees-advance; 
//	  var total=todate-datefrom;
	
	
	
	const date1 = new Date(datefrom);
const date2 = new Date(todate);
const diffTime = Math.abs(date2 - date1);
const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); 

var	tot= (fees*(diffDays+1));
	var b=tot-advance;
	
	  //alert(diffDays);
	document.getElementById("total").value = tot;
	document.getElementById("balance").value = b;
	document.getElementById("days").value = diffDays;
	
}
</script>
    
</head>

<body>

	<?php
    require('../config/autoload.php'); 
//session_start();
if(isset($_SESSION['email']))
{ 
//include("headerlogout.php");
}
else
{
	//include("header.php");
}?>

<?php 	
include("dbcon.php");

?>

<?php 

$iid = "";
$iname = "";
$name="";
$dao=new DataAccess();
?>



<?php
$_SESSION['email']="jj";
if(isset($_POST["btn_insert"]))
{
if(!isset($_SESSION['email']))
   {
	//   header('location:login1.php');
	echo"<script >location.href = 'login1.php'</script>";

  }
  else
  {
$name=$_SESSION['email'];
$itid = $_GET['id'];
 $q1="select * from turf where TID=".$itid ;

$info1=$dao->query($q1);
$tname=$info1[0]["tname"];
//$itemname = $iname;
$fees = $info1[0]["tprice"];
//$advance = $_POST["advance"];
//$_SESSION['advance']=$advance;	  
$status=1;
$date1=date('Y-m-d',time());
$datefrom = $_POST["datefrom"];
//$todate = $_POST["todate"];
//$balance=$_POST["balance"];	
$slot=$_POST["ctime"];	  
//$_SESSION['days']=$diffDays;
 
//$total=$_POST["total"]	  ;

$sql = "INSERT INTO booking(TID,tname,remail,cdate,pdate,ctime,tprice) VALUES ('$itid','$tname','$name','$date1','$datefrom','$slot','$fees')";

$conn->query($sql);
	  
	  
	//echo $sql;
 header('location:viewcart.php');
//echo"<script >location.href = 'payments.php'</script>";
}}

?>


<?php
$dao=new DataAccess();
?>

<?php	$iid=$_GET['id']; 



			 $q="select * from turf where TID=".$iid ;

$info=$dao->query($q);
//$iname=$info[0]["room_no"];
?>
 
   

<form action="" method="POST" enctype="multipart/form-data">

 <div class="upper">
        <div class="upper-left">
<?php 
if(isset($_SESSION['email']))
{ 
   $name=$_SESSION['email'];
?>

 
<?php } ?>
            <h3>ROOM Details</h3>
            <img style="width:300; height:300" src=<?php echo BASE_URL."uploads/".$info[0]["timage"]; ?> alt=" " class="img-responsive" />
        </div>
	  <div class="upper-right">
        <div class="content">
            <h3>Details</h3>
            <div style="display: block;">
                <label for="name"><u>Turf Name:</u></label>
                
                <label for="name"><?php echo $info[0]["tname"]; ?></label><br>
                  <label for="name"><u>Turf Rent:</u></label>
                
                <label for="name"><?php echo $info[0]["tprice"]; ?></label><br>
                 <label for="fees">PRICE:</label><br>
                <input id="fees" name="fees" type="text" value="<?php echo $info[0]["tprice"];  ?>" readonly style="margin-top: 8px;"><br>
				<label for="datefrom">FROM DATE:</label><br>
                <input id="datefrom" name="datefrom" type="date"  style="margin-top: 8px;"><br>
                Time
<div class="row">
                    <div class="col-md-6">
<select name="ctime" id="ctimei">
<option>-Select-</option>
<?php

$sql="SELECT * FROM slot";
$result = $conn->query($sql);;
 while($row = $result->fetch_assoc())
{
?>
   <option value='<?php echo $row["ctime"];?>'><?php echo $row["ctime"]; ?></option> 
<?php
 }
?>
  </select>
<div class="btn-grp">
                <button class="buttons" name="btn_insert" id="btn-1">Book</button>
               
    </div>

</div>
</div>

                
				
				
			</div>
            </div>
        </div>
   
         <div class="btn-grp">
			 <button class="buttons" name="btn_insert" id="btn-1">PROCEED</button>
               
					 </div>
        </div>
    </div>
    </form>
</body>
<?php // include("footer.php");?>
</html>