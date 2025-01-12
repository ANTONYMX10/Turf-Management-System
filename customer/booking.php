<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Turf Booking</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="ui.css">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <?php
    require('../config/autoload.php');
    require('ajax.php');
    include("dbcon.php");
    $dao = new DataAccess();
    ?>

    <?php
    if (isset($_POST["btn_insert"])) {
        if (!isset($_SESSION['email'])) {
            echo "<script>location.href = 'login1.php'</script>";
        } else {
            $name = $_SESSION['email'];
            $itid = $_GET['id'];
            $q1 = "select * from turf where TID=" . $itid;
            $info1 = $dao->query($q1);
            $tname = $info1[0]["tname"];
            $fees = $info1[0]["tprice"];
            $status = 1;
            $date1 = date('Y-m-d', time());
            $datefrom = $_POST["cdate"];
            $slot = $_POST["ctime"];
            $sql = "INSERT INTO booking(TID, tname, remail, cdate, pdate, ctime, tprice) 
                    VALUES ('$itid','$tname','$name','$date1','$datefrom','$slot','$fees')";
            $conn->query($sql);
            header('location:viewcart.php');
        }
    }

    $iid = $_GET['id'];
    $q = "select * from turf where TID=" . $iid;
    $info = $dao->query($q);
    ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="booking-container">
            <div class="booking-left">
                <h3>Booking Details</h3>
                <input type="hidden" id="doid" value="<?php echo $iid; ?>">
                <img src="<?php echo BASE_URL . "uploads/" . $info[0]["timage"]; ?>" alt="Turf Image" class="img-responsive">
            </div>

            <div class="booking-right">
                <h3>Turf Information</h3>
                <div class="details">
                    <label for="name"><u>Turf Name:</u></label>
                    <span><?php echo $info[0]["tname"]; ?></span><br>

                    <label for="name"><u>Turf Rent:</u></label>
                    <span><?php echo $info[0]["tprice"]; ?></span><br>

                    <label for="fees">PRICE:</label><br>
                    <input id="fees" name="fees" type="text" value="<?php echo $info[0]["tprice"]; ?>" readonly><br>

                    <label for="datefrom">FROM DATE:</label><br>
                    <input id="cdate" name="cdate" type="date" min="<?php echo date("Y-m-d"); ?>"><br>

                    <label for="ctime">Select Time Slot:</label><br>
                    <select name="ctime" id="ctimei">
                        <option>-Select-</option>
                    </select><br>
                    <a href="index2.php" class="btn-submit">HOME</a>
                    <div class="btn-group">
              
                        <button class="btn-submit" name="btn_insert" id="btn-1">PROCEED</button>

                       
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <!-- Inline Script for Booking -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#cdate').change(function () {
                var date = $(this).val();
                var doid = $("#doid").val();
                $.ajax({
                    type: "POST",
                    url: "test.php",
                    data: { id: date, doid: doid },
                    dataType: "json",
                    cache: false,
                    success: function (data) {
                        var options = '<option>-Select-</option>';
                        if (data && data.length > 0) {
                            data.forEach(function (slot) {
                                options += `<option value="${slot.ctime}">${slot.ctime}</option>`;
                            });
                        } else {
                            alert("Sorry! Slots are not available on this date.");
                        }
                        $("#ctimei").html(options);
                    },
                    error: function (xhr, status, error) {
                        console.error('AJAX Error:', status, error);
                        alert('An error occurred while fetching the time slots.');
                    }
                });
            });
        });
    </script>
</body>
</html>
