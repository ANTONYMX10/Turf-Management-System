<?php
//session_start();
require('../config/autoload.php');
if(isset($_SESSION['email']))
{
include("header.html");
}
else
{
	//include("header.php");
}?>
<?php


include("dbcon.php");
?>

<?php
$dao=new DataAccess();

   $name=$_SESSION['email'] ;
 if(isset($_POST["payment"]))
{
    echo"<script >location.href = 'payments.php'</script>";
	 //header('location:payments.php');
}
   if(isset($_POST["purchase"]))
{
     //header('location:displaycategory.php');
}
if(!isset($_SESSION['email']))
   {
	 $current = $_SERVER['REQUEST_URI'];
echo"<script> location.replace($current); </script>";
	$_SESSION['url']=$current;
 echo "<script> alert($current);</script> ";

//header('location:login1.php');
	   }
	   else
	   {
	   $sql = "select sum(tprice)as t from booking where status=1 and  remail='$name'";
$result = $conn->query($sql);
	   $row = $result->fetch_assoc();
	   $total=$row["t"];

	   $_SESSION['total']=$total;

	    ?>




 <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-12">

            <H1><center> Turf Booking Details</center> </H1>
                <table  border="1" class="table" style="margin-top:100px;">
                    <tr>

                        <th>Sl No</th>
                        <th>Turf ID</th>


                        <th>Turf name</th>
                        <th>TOTAL</th>

                        <th>Date</th>
                        <th>Time</th>
                        <th>Action</th>


                    </tr>
<?php

    $actions=array(


    'delete'=>array('label'=>'Delete','link'=>'deleteitem.php','params'=>array('id'=>'bid'),'attributes'=>array('class'=>'btn btn-success'))

    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('bid')


    );

   $condition="remail='".$name."' and status=1";

   $join=array(

    );
	$fields=array('bid','TID','tname','tprice','pdate','ctime');

    $users=$dao->selectAsTable($fields,'booking as c',$condition,$join,$actions,$config);

    echo $users;

    ?>


                </table>
            </div>


            <div class="row">
 <div class="col-md-3">
TOTAL AMOUNT:
<input type="text" class="form-control" value="<?php echo $total; ?>" readonly name="total"/>

</div>


<form action="" method="POST" enctype="multipart/form-data">


<a href="districtdisplay.php" class="btn btn-success">Book Another Turf</a>
<button class="btn btn-success" type="submit" style="margin-right: 2px;"  name="payment" >Payment</button>

</form>
</div>




        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->

<?php } ?>
