<?php

require('../config/autoload.php');
include("header.php");

$file = new FileUpload();
$elements = array(
    "tname" => "",
    "tloc" => "",
    "tcontno" => "",
    "temail" => "",
    "tpasswrd" => "",
    "status" => "",
    "did" => "",
    "timage" => ""
);

$form = new FormAssist($elements, $_POST);
$dao = new DataAccess();

$labels = array(
    'tname' => "Turf Name",
    'tloc' => "Turf Location",
    'tcontno' => "Turf Contact Number",
    'temail' => "Turf Email",
    'tpasswrd' => "Turf Password",
    'status' => "Status",
    'did' => "District name",
    'timage' => "Turf Image"
);

$rules = array(
    "tname" => array("required" => true, "minlength" => 3, "maxlength" => 50, "alphaonly" => true),
    "tloc" => array("required" => true, "minlength" => 5, "maxlength" => 100),
    "tcontno" => array("required" => true, "minlength" => 10, "maxlength" => 15, "integeronly" => true),
    "temail" => array("required" => true, "email" => true),
    "tpasswrd" => array("required" => true, "minlength" => 6, "maxlength" => 20),
    "status" => array("required" => true, "exist" => array("active", "inactive")),
    "did" => array("required" => true),
    "timage" => array('filerequired' => true)
);

$validator = new FormValidator($rules, $labels);

if (isset($_POST["btn_insert"])) {
    if ($validator->validate($_POST)) {
        if ($fileName = $file->doUploadRandom($_FILES['timage'], array('.jpg', '.png', '.jpeg'), 100000, 5, '../uploads')) {
            $data = array(
                'tname' => $_POST['tname'],
                'tloc' => $_POST['tloc'],
                'tcontno' => $_POST['tcontno'],
                'temail' => $_POST['temail'],
                'tpasswrd' => $_POST['tpasswrd'],
                'status' => $_POST['status'],
                'did' => $_POST['did'],
                'timage' => $fileName
            );

            if ($dao->insert($data, "turf")) {
                echo "<script> alert('New turf record created successfully');</script> ";
                header('location:turfdetails.php');
                exit;
            } else {
                $msg = "Turf registration failed";
            }
        } else {
            echo $file->errors();
        }
    }
}

?>

<html>
<head></head>
<body>

<form action="" method="POST" enctype="multipart/form-data">

    <div class="row">
        <div class="col-md-6">Turf Name:
            <?= $form->textBox('tname', array('class' => 'form-control')); ?>
            <?= $validator->error('tname'); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">Turf Location:
            <?= $form->textBox('tloc', array('class' => 'form-control')); ?>
            <?= $validator->error('tloc'); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">Contact Number:
            <?= $form->textBox('tcontno', array('class' => 'form-control')); ?>
            <?= $validator->error('tcontno'); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">Email:
            <?= $form->textBox('temail', array('class' => 'form-control')); ?>
            <?= $validator->error('temail'); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">Password:
            <?= $form->passwordBox('tpasswrd', array('class' => 'form-control')); ?>
            <?= $validator->error('tpasswrd'); ?>
        </div>
    </div>



    <div class="row">
        <div class="col-md-6">District name:
            <?= $form->textBox('did', array('class' => 'form-control')); ?>
            <?= $validator->error('did'); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">Turf Image:
            <?= $form->fileField('timage', array('class' => 'form-control')); ?>
            <?= $validator->error('timage'); ?>
        </div>
    </div>

    <button type="submit" name="btn_insert">Submit</button>

</form>

</body>
</html>
