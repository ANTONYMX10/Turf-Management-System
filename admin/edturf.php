<?php require('../config/autoload.php'); ?>
<?php

include("header.php");
$dao = new DataAccess();
$info = $dao->getData('*', 'turf', 'TID=' . $_GET['id']);
$file = new FileUpload();
$elements = array(
    "tname" => $info[0]['tname'],
    "timage" => "",
    "tloc" => $info[0]['tloc'],
    "tcontno" => $info[0]['tcontno'],
    "temail" => $info[0]['temail'],
    "tpasswrd" => $info[0]['tpasswrd'],
    "tdescription" => $info[0]['tdescription'],
    "tprice" => $info[0]['tprice']
);

$form = new FormAssist($elements, $_POST);

$labels = array(
    'tname' => "Turf Name",
    'tloc' => "Turf Location",
    'tcontno' => "Turf Contact Number",
    'temail' => "Turf Email",
    'tpasswrd' => "Turf password",
    'tdescription' => "Turf description",
    'tprice' => "Turf Price"
);

$rules = array(
    "tname" => array("required" => true, "minlength" => 3, "maxlength" => 100),
    "tloc" => array("required" => true, "minlength" => 3, "maxlength" => 100),
    "tcontno" => array("required" => true, "minlength" => 3, "maxlength" => 15),
    "temail" => array("required" => true, "email" => true, "maxlength" => 100),
    "tpasswrd" => array("required" => true, "minlength" => 3, "maxlength" => 100),
    "tdescription" => array("required" => true, "minlength" => 3, "maxlength" => 600),
    "tprice" => array("required" => true, "minlength" => 1, "maxlength" => 10)
);

$validator = new FormValidator($rules, $labels);

if (isset($_POST["btn_update"])) {
    if ($validator->validate($_POST)) {
        if (isset($_FILES['timage']['name'])) {
            if ($fileName = $file->doUploadRandom($_FILES['timage'], array('.jpg', '.png', '.jpeg'), 100000, 5, '../uploads')) {
                $flag = true;
            }
        }
        $data = array(
            'tname' => $_POST['tname'],
            'tloc' => $_POST['tloc'],
            'tcontno' => $_POST['tcontno'],
            'temail' => $_POST['temail'],
            'tpasswrd' => $_POST['tpasswrd'],
            'tdescription' => $_POST['tdescription'],
            'tprice' => $_POST['tprice']
        );
        $condition = 'TID=' . $_GET['id'];
        if (isset($flag)) {
            $data['timage'] = $fileName;
        }

        if ($dao->update($data, 'turf', $condition)) {
            $msg = "Successfully Updated";
        } else {
            $msg = "Failed";
        }
    }
}
?>

<html>
<head>
    
</head>
<body>
<div class="form-container">
    <?php if (isset($msg)): ?>
        <div style="color: <?= ($msg === 'Successfully Updated') ? 'green' : 'red'; ?>;">
            <?= $msg; ?>
        </div>
    <?php endif; ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                Turf Name:
                <?= $form->textBox('tname', array('class' => 'form-control', 'required' => true, 'minlength' => 3)); ?>
                <?= $validator->error('tname'); ?>
            </div>
        </div>

        <?php if (!empty($info[0]['timage'])): ?>
            <img src="../uploads/<?= $info[0]['timage']; ?>" alt="Turf Image" style="width:150px;">
        <?php endif; ?>

        <div class="row">
            <div class="col-md-6">
                Turf Image:
                <?= $form->fileField('timage', array('class' => 'form-control')); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                Turf Location:
                <?= $form->textBox('tloc', array('class' => 'form-control')); ?>
                <?= $validator->error('tloc'); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                Turf Contact Number:
                <?= $form->textBox('tcontno', array('class' => 'form-control')); ?>
                <?= $validator->error('tcontno'); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                Turf Email:
                <?= $form->textBox('temail', array('class' => 'form-control')); ?>
                <?= $validator->error('temail'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                Turf password:
                <?= $form->textBox('tpasswrd', array('class' => 'form-control')); ?>
                <?= $validator->error('tpasswrd'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                Turf description:
                <?= $form->textBox('tdescription', array('class' => 'form-control')); ?>
                <?= $validator->error('tdescription'); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                Turf Price:
                <?= $form->textBox('tprice', array('class' => 'form-control')); ?>
                <?= $validator->error('tprice'); ?>
            </div>
        </div>

        <button type="submit" name="btn_update">UPDATE</button>
    </form>
</div>
</body>
</html>

