<?php require_once('../database/db.php'); 
session_start();
                         
if(!$_SESSION["username"]==true)
    {
            header('location:loging-your-session');                             
    }

     $user_type = 'admin';
                                
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Admin | Inventory</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../common/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../common/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../common/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="../common/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="../common/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Bootstrap DatePicker Css -->
    <link href="../common/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="../common/plugins/waitme/waitMe.css" rel="stylesheet" />


    <!-- Bootstrap Select Css -->
    <link href="../common/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />


    <!-- Custom Css -->
    <link href="../common/css/style.css" rel="stylesheet">

    <!-- Switchery css -->
    <link href="../common/plugins/switchery/switchery.min.css" rel="stylesheet" />

    <!-- DataTables -->
        <link href="../common/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="../common/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="../common/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Multi Item Selection examples -->
        <link href="../common/plugins/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Font Awesome -->
        <link rel="stylesheet" href="../common/plugins/font-awesome/css/font-awesome.min.css">

    <!-- Sweet alert -->  
    <link href="../common/plugins/sweetalert2/style.css" type="text/css" rel="stylesheet">
    <link href="../common/plugins/sweetalert2/sweetalert.css" type="text/css" rel="stylesheet">
    <script src="../common/plugins/sweetalert2/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="../common/plugins/sweetalert2/sweetalert.min.js" type="text/javascript"></script>
    <!-- -->

    <link href="../common/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
   
   <?php include '../common/includes/top.php' ?>  
    
    <section>
        <?php include '../common/includes/left_side_bar.php' ?>  
    </section>
    
    <section class="content">
        <div class="container-fluid">

            <ol class="breadcrumb breadcrumb-bg-teal align-right" style="background-color:#333 !important;">
                <li ><a href="javascript:void(0);">Inventory Management</a></li>
            </ol>
             
            <!-- Inventory Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               All Details of Stocks
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <div style="text-align: right;padding: 10px;"></div>
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr >
                                            <th style="text-align: center;">ID</th>
                                            <th style="text-align: center;">Name</th>
                                            <th style="text-align: center;">Category Name</th>
                                            <th style="text-align: center;">Brand</th>
                                            <th style="text-align: center;">Dose</th>
                                            <th style="text-align: center;">Price</th>
                                            <th style="text-align: center;">Available</th>
                                            <th style="text-align: center;">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th style="text-align: center;">ID</th>
                                            <th style="text-align: center;">Name</th>
                                            <th style="text-align: center;">Category Name</th>
                                            <th style="text-align: center;">Brand</th>
                                            <th style="text-align: center;">Dose</th>
                                            <th style="text-align: center;">Price</th>
                                            <th style="text-align: center;">Available</th>
                                            <th style="text-align: center;">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
<?php
    include ('../database/db.php');

    $sql = "SELECT 
                product_list.id AS p_id,
                product_list.name AS p_name,
                product_list.description AS p_description,
                product_list.brand AS p_brand,
                product_list.dose AS p_dose,
                product_list.price AS p_price,
                product_list.status AS p_status,
                category_list.name AS c_name
                FROM product_list INNER JOIN category_list 
                ON product_list.category_id = category_list.id";

    $result = $connection->query( $sql);

    if ( ($result-> num_rows > 0)  ) 
            {
            while ( $row = $result->fetch_assoc() ) 
                    {

                        $id =  $row['p_id'];
                        $p_name =  $row['p_name']; 
                        $p_description =  $row['p_description']; 
                        $p_brand =  $row['p_brand']; 
                        $p_dose =  $row['p_dose']; 
                        $p_price =  $row['p_price']; 
                        $p_status =  $row['p_status']; 
                        $c_name =  $row['c_name']; 
                        
?>
           
                                        <tr>
                                           <td><?= $id ;?></td>
                                            <td><?= $p_name ;?></td>
                                            <td><?= $c_name ;?></td>
                                            <td><?= $p_brand ;?></td>
                                            <td><?= $p_dose ;?></td>
                                            <td><?= $p_price ;?></td>
                                            <td></td>                                  
                                             <td>
                                                <a href="view_inventory.php?view_id=<?=$row['p_id'];?>">
                                                    <button type="button" class="btn btn-success btn-circle waves-effect waves-circle waves-float" >
                                                        <i class="fa fa fa-eye center"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
<?php } } ?>
        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Inventory Table -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../common/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../common/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../common/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../common/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../common/plugins/node-waves/waves.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="../common/plugins/autosize/autosize.js"></script>

     <!-- Moment Plugin Js -->
    <script src="../common/../common/plugins/momentjs/moment.js"></script>


     <!-- Bootstrap Notify Plugin Js -->
    <script src="../common/plugins/bootstrap-notify/bootstrap-notify.js"></script>

     <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="../common/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="../common/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="../common/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../common/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../common/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../common/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../common/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../common/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../common/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../common/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../common/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../common/js/admin.js"></script>
    <script src="../common/js/pages/tables/jquery-datatable.js"></script>
      <script src="../common/js/pages/ui/modals.js"></script>
       <script src="../common/js/pages/forms/basic-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="../common/js/demo.js"></script>
</body>

</html>

