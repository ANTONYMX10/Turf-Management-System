<?php

 require('../config/autoload.php');
include("header.php");

$file=new FileUpload();
$elements=array(
        "tname"=>"", "tloc"=>"","tcontno"=>"","timage"=>"","temail"=>"","tpasswrd"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('tname'=>"turf Name",'tloc'=>"turf age",'tcontno'=>"turf contact",'timage'=>"turf image",'temail'=>"turf email",'tpasswrd'=>"turf password");

$rules=array(
    "tname"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaonly"=>true),
    "tloc"=>array("required"=>true,"minlength"=>2,"maxlength"=>2,"integeronly"=>true),
    "tcontno"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaonly"=>true),
    "timage"=>array("required"=>true,"minlength"=>2,"maxlength"=>2,"integeronly"=>true),
    "temail"=>array("required"=>true,"minlength"=>3,"maxlength"=>30),
    "tpasswrd"=>array("required"=>true,"minlength"=>2,"maxlength"=>2,"integeronly"=>true)


);


$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_insert"]))
{

if($validator->validate($_POST))
{



$data=array(

        'tname'=>$_POST['tname'],
        'tloc'=>$_POST['tloc'],
        'tcontno'=>$_POST['tcontno'],
        'timage'=>$_POST['timage'],
        'temail'=>$_POST['temail'],
        'tpasswrd'=>$_POST['tpasswrd']





    );

    if($dao->insert($data,"turf"))
    {
        echo "<script> alert('New record created successfully');</script> ";
header('location:category.php');


    }
    else
        {$msg="Registration failed";} ?>

<span style="color:red;"><?php echo $msg; ?></span>

<?php



}

}
?>
<html>
<head>
</head>
<body>

 <form action="" method="POST" enctype="multipart/form-data">


<div class="row">
                    <div class="col-md-6">
turf Name:

<?= $form->textBox('tname',array('class'=>'form-control')); ?>
<?= $validator->error('tname'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
turf location:

<?= $form->textBox('tloc',array('class'=>'form-control')); ?>
<?= $validator->error('tloc'); ?>

</div>
</div>
turf location:

<?= $form->textBox('tloc',array('class'=>'form-control')); ?>
<?= $validator->error('tloc'); ?>

</div>
</div>
turf location:

<?= $form->textBox('tloc',array('class'=>'form-control')); ?>
<?= $validator->error('tloc'); ?>

</div>
</div>




<button type="submit" name="btn_insert"  >Submit</button>
</form>


</body>

</html>


