<?php require('../config/autoload.php'); ?>

<?php
$dao=new DataAccess();
?>
<?php include('header.php'); ?>


    <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-12">
                <table  border="1" class="table" style="margin-top:100px;">
                    <tr>

                        <th>TId</th>
                        <th>name</th>
                        <th>tloc</th>
                        <th>tcontno</th>
                        <th>timage</th>
                        <th>temail</th>
                       <th>tpasswrd</th>




                        <th>EDIT/DELETE</th>


                    </tr>
<?php

    $actions=array(
    'edit'=>array('label'=>'Edit','link'=>'editstudentsimage.php','params'=>array('id'=>'TID'),'attributes'=>array('class'=>'btn btn-success')),

    'delete'=>array('label'=>'Delete','link'=>'editstudentsimage.php','params'=>array('id'=>'TID'),'attributes'=>array('class'=>'btn btn-success'))

    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('TID'),
'actions_td'=>false,
         'images'=>array(
                        'field'=>'timage',
                        'path'=>'../uploads/',
                        'attributes'=>array('style'=>'width:100px;'))

    );


   $join=array();
$fields=array('TID','tname','tloc','tcontno','timage','temail','tpasswrd');

    $users=$dao->selectAsTable($fields,'turf as s',1,$join,$actions,$config);

    echo $users;




?>

                </table>
            </div>





        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->


