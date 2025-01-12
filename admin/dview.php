<?php require('../config/autoload.php'); ?>

<?php
$dao = new DataAccess();
?>
<?php include('header.php'); ?>

<div class="container_gray_bg" id="home_feat_1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table border="1" class="table" style="margin-top:100px;">
                    <tr>
                        <th>District ID</th>
                        <th>District Name</th>
                    
                        <th>EDIT/DELETE</th>
                    </tr>
                    <?php
                    // Define actions for edit and delete functionality
                    $actions = array(
                        'edit' => array('label' => 'Edit', 'link' => 'editdistrict.php', 'params' => array('id' => 'did'), 'attributes' => array('class' => 'btn btn-success')),
                        'delete' => array('label' => 'Delete', 'link' => 'deletedistrict.php', 'params' => array('id' => 'did'), 'attributes' => array('class' => 'btn btn-danger'))
                    );

                    // Configuration for the table display
                    $config = array(
                        'srno' => true,  // Display serial numbers
                        'hiddenfields' => array('did'),
                        'actions_td' => false
                    );

                    // Define fields to be selected from the district table
                    $fields = array('did', 'dname');

                    // Fetch district data and display it as a table
                    $districts = $dao->selectAsTable($fields, 'district as d', 'status=1', array(), $actions, $config);

                    echo $districts;
                    ?>
                </table>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</div><!-- End container_gray_bg -->
