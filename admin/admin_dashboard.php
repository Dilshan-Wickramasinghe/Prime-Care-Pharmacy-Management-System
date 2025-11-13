<?php session_start(); 
if($_SESSION["username"]==true)
{
?>
<?php
$user_type = 'admin'; // Set user type as customer
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome | Admin Dashboard</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Font Awesome -->
  <link rel="stylesheet" href="../common/plugins/font-awesome/css/font-awesome.min.css">

    <!-- Bootstrap Core Css -->
    <link href="../common/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../common/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../common/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="../common/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../common/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../common/css/themes/all-themes.css" rel="stylesheet" />

    <!-- loading bar -->
    <link href="../common/plugins/loading-bar/jquery.incremental-counter.css" rel="stylesheet" type="text/css">

</head>

<body class="theme-red">
    
    <?php include '../common/includes/top.php' ?>  
    
    <section>
        <?php include '../common/includes/left_side_bar.php' ?>  
    </section>

    <section class="content">
        <div class="container-fluid">
            <ol class="breadcrumb breadcrumb-bg-teal align-right" style="background-color:#333 !important;">
                <li class="active"><a href="javascript:void(0);">Admin Dashboard</a></li>
            </ol>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                   <div class="info-box bg-blue hover-zoom-effect" style="margin-top: 30px; border-radius: 15px;">
                        <div class="icon">
                            <i class="fa fa-angle-double-right"></i>   
                        </div>
                        <div class="content" >
                            <div class="text" >Categories</div>
                            <div class="number">
                                <?php
                                include_once '../database/db.php';
                                $sql = "SELECT COUNT(*) AS row_count FROM category_list";
                                $result = $connection->query($sql);

                                if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                echo $row["row_count"];
                                } else {
                                echo "0";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="info-box bg-grey hover-zoom-effect" style="margin-top: 10px; border-radius: 15px;">
                        <div class="icon">
                            <i class="fa fa-angle-double-right"></i>   
                        </div>
                        <div class="content" >
                            <div class="text" >Pending Order</div>
                            <div class="number">10</div>
                        </div>
                    </div>
                    <div class="info-box bg-green hover-zoom-effect" style="margin-top: 10px; border-radius: 15px;">
                        <div class="icon">
                            <i class="fa fa-angle-double-right"></i>   
                        </div>
                        <div class="content" >
                            <div class="text" >Out of Delivery</div>
                            <div class="number">10</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-zoom-effect" style="margin-top: 50px; border-radius: 15px;">
                        <div class="icon">
                            <i class="fa fa-angle-double-right"></i>   
                        </div>
                        <div class="content" >
                            <div class="text" >Product</div>
                            <div class="number">
                                <?php
                                include_once '../database/db.php';
                                $sql = "SELECT COUNT(*) AS row_count FROM product_list";
                                $result = $connection->query($sql);

                                if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                echo $row["row_count"];
                                } else {
                                echo "0";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="info-box bg-purple hover-zoom-effect" style="margin-top: 10px; border-radius: 15px;">
                        <div class="icon">
                            <i class="fa fa-angle-double-right"></i>   
                        </div>
                        <div class="content" >
                            <div class="text" >Packed Orders</div>
                            <div class="number">10</div>
                        </div>
                    </div>
                    <div class="info-box bg-red hover-zoom-effect" style="margin-top: 10px; border-radius: 15px;">
                        <div class="icon">
                            <i class="fa fa-angle-double-right"></i>   
                        </div>
                        <div class="content">
                            <div class="text">Completed Orders</div>
                            <div class="number">10</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                   <?php include '../common/includes/clock.php' ?>  
                </div>
            </div>      
        </div>
        <!-- #END# Widgets -->
    </section>

    

    <!-- Bootstrap Core Js -->
    <script src="../common/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../common/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../common/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../common/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="../common/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="../common/plugins/raphael/raphael.min.js"></script>
    <script src="../common/plugins/morrisjs/morris.js"></script>

    <!-- Jquery Knob Plugin Js -->
    <script src="../common/plugins/jquery-knob/jquery.knob.min.js"></script>

    <!-- Custom Js -->
    <script src="../common/js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="../common/js/demo.js"></script>

    <!-- Jquery Core Js -->
    <script src="../common/plugins/jquery/jquery.min.js"></script>

    <!-- Custom Js -->
    <script src="../common/js/admin.js"></script>
    
    
</body>

</html>
<?php
}
else
{
header('location:loging-your-session');     
}

?>
