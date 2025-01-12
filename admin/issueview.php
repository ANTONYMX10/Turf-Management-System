<?php

require('../config/autoload.php');
include("header.php");	?>
<?php
include("dbcon.php");
?>

<?php
$dao=new DataAccess();
//session_start();
   $name=$_SESSION['email'] ;
//$name="ab@gmail.com";



	   {


	    ?>

        <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
			<div class="row">
				<div class="span9">
					<div class="module-body">
						<H1><center> TURF WISE DETAILS </center> </H1>
                <table  border="1" class="table" style="margin-top:100px;">

                    <tr>

                        <th>Sl No</th>
                        <th>Price</th>
                        <th>Date</th>



                        <th>Time</th>


                    </tr>
<?php

    $actions=array(


   // 'delete'=>array('label'=>'Issue','link'=>'issueitem.php','params'=>array('id'=>'cartid'),'attributes'=>array('class'=>'btn btn-success'))

    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('bid')


    );

   $condition="tname='".$name."' and status=2";

   $join=array(

    );
	$fields=array('bid','tprice','pdate','ctime');

    $users=$dao->selectAsTable($fields,'booking as c',$condition,$join,$actions,$config);

    echo $users;

    ?>


                </table>


<form action="" method="POST" enctype="multipart/form-data">


<?php /*
	<div class="module-body">
<button class="btn btn-success" type="submit" href="category.php" name="purchase" >Home</button>
</div>    */
?>

</div>
</div>



        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
</form>
<?php } ?>
