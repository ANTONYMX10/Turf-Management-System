<?php

 require('../config/autoload.php');
include("header.php");

$file=new FileUpload();
$elements=array(
        "tname"=>"","tloc"=>"","did"=>"","tcontno"=>"","timage"=>"","temail"=>"","tpasswrd"=>"","tdescription"=>"","tprice"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('tname'=>"Turf Name",'did' =>"district location",'tcontno' =>"Turf contact",'timage' =>"Turf image",'temail' =>"email",
'tpasswrd' =>"password",'tdescription' =>"tdescription",'tprice' =>"tprice" );

$rules=array(
    "tname"=>array("required"=>true,"minlength"=>2,"maxlength"=>30,"alphaonly"=>true),
    "tloc"=>array("required"=>true,"minlength"=>2,"maxlength"=>30,"alphaonly"=>true),
    "did"=>array("required"=>true,"minlength"=>1,"maxlength"=>30),
    "tcontno"=>array("required"=>true,"minlength"=>2,"maxlength"=>30,"integeronly"=>true),
    "timage"=> array('filerequired'=>true),
    "temail"=>array("required"=>true,"minlength"=>2,"maxlength"=>30,),
    "tpasswrd"=>array("required"=>true,"minlength"=>2,"maxlength"=>30),
    "tdescription"=>array("required"=>true,"minlength"=>2,"maxlength"=>600),
    "tprice"=>array("required"=>true,"minlength"=>2,"maxlength"=>30)


);


$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_insert"]))
{

if($validator->validate($_POST))
{

if($fileName=$file->doUploadRandom($_FILES['timage'],array('.jpg','.png','.jpeg'),100000,1,'../uploads'))
		{

$data=array(

        'tname'=>$_POST['tname'],
        'tloc'=>$_POST['tloc'],
        'did'=>$_POST['did'],
        'tcontno'=>$_POST['tcontno'],
        'timage'=>$fileName,
        'temail'=>$_POST['temail'],
        'tpasswrd'=>$_POST['tpasswrd'],
        'tdescription'=>$_POST['tdescription'],
         'tprice'=>$_POST['tprice'],


    );

    if($dao->insert($data,"turf"))
    {
        echo "<script> alert('New record created successfully');</script> ";
//header('location:turf.php');
    }
    else
        {$msg="Registration failed";} ?>



<?php

}
else
echo $file->errors();
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
Turf Name:

<?= $form->textBox('tname',array('class'=>'form-control')); ?>
<?= $validator->error('tname'); ?>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
                    Turf Location:

<?= $form->textBox('tloc',array('class'=>'form-control')); ?>
<?= $validator->error('tloc'); ?>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
District name:

<?php
                    $options = $dao->createOptions('dname','did',"district");
                    echo $form->dropDownList('did',array('class'=>'form-control'),$options); ?>
<?= $validator->error('did'); ?>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
Turf contact:

<?= $form->textBox('tcontno',array('class'=>'form-control')); ?>
<?= $validator->error('tcontno'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
IMAGE:

<?= $form->fileField('timage',array('class'=>'form-control')); ?>
<span style="color:red;"><?= $validator->error('timage'); ?></span>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
 email:

<?= $form->textBox('temail',array('class'=>'form-control')); ?>
<?= $validator->error('temail'); ?>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
password:

<?= $form->textBox('tpasswrd',array('class'=>'form-control')); ?>
<?= $validator->error('tpasswrd'); ?>
</div>
</div>
<div class="row">
                    <div class="col-md-6">
description:

<?= $form->textBox('tdescription',array('class'=>'form-control')); ?>
<?= $validator->error('tdescription'); ?>
</div>
</div>
<div class="row">
                    <div class="col-md-6">
price:

<?= $form->textBox('tprice',array('class'=>'form-control')); ?>
<?= $validator->error('tprice'); ?>

</div>
</div>





<button type="submit" name="btn_insert"  >Submit</button>
</form>


</body>

</html>


