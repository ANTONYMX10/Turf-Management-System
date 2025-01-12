<?php 



 require('../config/autoload.php'); 
include("header.php");

//session_start();
$elements=array(
        "fdate"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array("fdate"=>"from Date");

$rules=array(
    
    "fdate"=>array('required'=>true,'date'=>array('from'=>'-30 days 12 am','to'=>'+30 days 12 am')),
    
 

     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_insert"]))
{
if($validator->validate($_POST))
{
 $_SESSION['fdate']=$_POST['fdate'];



//header('location:rptbookingdateview.php');
echo"<script >location.href = 'rptbookingdateview.php'</script>";
       
}

}


?>
<html>
<head>
</head>
<body>

 <form action="" method="POST" >
 


<div class="row">
                    <div class="col-md-6">
From Date:
<?= $form->inputBox('fdate',array('class'=>'form-control'),"date") ?>
<span style="color:red;"><?= $validator->error('fdate'); ?></span>


</div>
</div>





<button type="submit" name="btn_insert"  >Submit</button>
</form>


</body>

</html>