<!DOCTYPE html>
<html lang="en">



<head>

    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="reg/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="reg/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="reg/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="reg/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="reg/css/main.css" rel="stylesheet" media="all">



</head>

<body>

<style type="text/css">
            .valErr{
                color:red!important;
            }
        </style>

<?php
require('../config/autoload.php');
$dao=new DataAccess();
$elements=array(
        "remail"=>"","rpassword"=>"");

$form=new FormAssist($elements,$_POST);
$labels=array(
    'remail'=>" email",

    'rpassword'=>"Password",

);

$rules=array(
    "remail"=>array("required"=>true),

    "rpassword"=>array("required"=>true),

);

$validator = new FormValidator($rules,$labels);

if(isset($_POST['register']))
{
    if($validator->validate($_POST))
    {
        $data=array('temail'=>$_POST['remail'],'tpasswrd'=>$_POST['rpassword']);
        if($info=$dao->login($data,'turf'))
        {

            $_SESSION['email']=$info['temail'];
            $_SESSION['tid']=$info['TID'];
$a=$_SESSION['email'];

	echo "<script> alert('$a');</script> ";

   echo"<script> location.replace('index2.php'); </script>";

           // header('location:student/index.html');



 }
        else{
            $msg="invalid username or password";

				echo "<script> alert('Invalid username or password');</script> ";
        }
    }


}

if(isset($_POST['home']))
{
    echo "<script> alert('New record created successfully');</script> ";
    echo "<script> location.replace('displaycategory.php'); </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="reg/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="reg/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="reg/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="reg/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="reg/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <style type="text/css">
        .valErr{
            color:red!important;
        }
    </style>

    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">LOGIN</h2>
                    <form method="POST">
                        <p><?php if(isset($msg)) echo $msg; ?></p>
                        <div class="input-group">
                            <?= $form->textBox('remail',array("placeholder"=>"email")); ?>
                            <span class="valErr"><?= $validator->error('remail'); ?></span>
                        </div>

                        <div class="input-group">
                            <?= $form->passwordBox('rpassword',array("placeholder"=>"Password")); ?>
                            <span class="valErr"><?= $validator->error('rpassword'); ?></span>
                        </div>

                        <div class="p-t-10">
    <button class="btn btn--pill btn--green" name="register" type="submit">LOGIN</button>
</div>
<div class="p-t-10">
    <p style="color: white">Don't have an account? <a href="/Turf_Booking/customer/registration1.php" style="color: yellow; text-decoration: none;">Signup</a></p>
</div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="reg/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="reg/vendor/select2/select2.min.js"></script>
    <script src="reg/vendor/datepicker/moment.min.js"></script>
    <script src="reg/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="reg/js/global.js"></script>
</body>
</html>





