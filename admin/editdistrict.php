<?php require('../config/autoload.php'); ?>
<?php

include("header.php");
$dao = new DataAccess();
$info = $dao->getData('*', 'district', 'did=' . $_GET['id']);

$elements = array(
    "dname" => $info[0]['dname']
    
);

$form = new FormAssist($elements, $_POST);

$labels = array(
    'dname' => "District Name"
 
);

$rules = array(
    "dname" => array("required" => true, "minlength" => 3, "maxlength" => 100)
    
);

$validator = new FormValidator($rules, $labels);

if (isset($_POST["btn_update"])) {
    if ($validator->validate($_POST)) {
        $data = array(
            'dname' => $_POST['dname']
           
        );
        $condition = 'did=' . $_GET['id'];

        if ($dao->update($data, 'district', $condition)) {
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

    <form action="" method="POST">
        <div class="row">
            <div class="col-md-6">
                District Name:
                <?= $form->textBox('dname', array('class' => 'form-control', 'required' => true, 'minlength' => 3)); ?>
                <?= $validator->error('dname'); ?>
            </div>
        </div>

        

        <button type="submit" name="btn_update">UPDATE</button>
    </form>
</div>
</body>
</html>
