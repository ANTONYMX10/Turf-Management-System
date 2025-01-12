<?php

 require('../config/autoload.php');
include("header.php");

$file=new FileUpload();
$elements=array(
        "dname"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('dname'=>"district name" );

$rules=array(


"dname"=>array("required"=>true,"minlength"=>3,"maxlength"=>30)
);


$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_insert"]))
{

if($validator->validate($_POST))
{

//if($fileName=$file->doUploadRandom($_FILES['timage'],array('.jpg','.png','.jpeg'),100000,1,'../uploads'))
		{

$data=array(



          'dname'=>$_POST['dname'],

    );

    if($dao->insert($data,"district"))
    {
        echo "<script> alert('New record created successfully');</script> ";
header('location:category.php');
    }
    else
        {$msg="Registration failed";} ?>

<span style="color:red;"><?php echo $msg; ?></span>

<?php

}

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
District name:

<?= $form->textBox('dname',array('class'=>'form-control')); ?>
<?= $validator->error('dname'); ?>

</div>
</div>






<button type="submit" name="btn_insert"  >Submit</button>
</form>


</body>

</html>
