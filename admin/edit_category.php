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
    <title>Admin | Category</title>
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
                <li ><a href="javascript:void(0);">Edit Category Details</a></li>
            </ol>
             
            <!-- Category Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    


<!--Begin - Add new category form--> 
<div class=""> 
  <div class="modal-dialog"> 
    <div class="modal-content">
        <div class="modal-header" > 
            <h3 class="pull-left no-margin">Edit Category</h3>    
        </div>
        <div class="row"> 
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <form method="post" enctype="multipart/form-data"> 

                     <?php
                    include_once '../database/db.php';
                    if (isset($_GET['edit_id'])) 
                    {
                    $id = $_GET['edit_id'];
                    $get_edit = "SELECT * FROM category_list WHERE id ='$id'";
                    $run_edit = mysqli_query($connection, $get_edit);
                    $row_edit = mysqli_fetch_array($run_edit);
                   
                    $name =  $row_edit['name'];
                    $description = $row_edit['description'];
                    }
                    ?>     
                        <div class="body">
                            <label >Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text"  class="form-control" placeholder="" name="name" value="<?php echo $name; ?>" >
                                    </div>
                                </div>
                            <label >Description</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text"  class="form-control" placeholder="" name="description" value="<?php echo $description; ?>">
                                    </div>
                                </div>
                        </div>
                </div>
            </div>
        </div> 
        <div class="modal-footer"> 
            <div class="form-group"> 
                <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3"> 
                <button type="submit" class="btn btn-primary m-t-15 waves-effect" name="update">Update</button>
                <a href="category.php"><button type="button" class="btn btn-danger m-t-15 waves-effect">Cancel</button></a>
            </div> 
        </div>
                
                    </form> 
                </div> 
        </div> 
    </div> 
</div>
<!--##END - Add new category form--> 
            
                        
                    </div>
                </div>
            </div>
            <!-- #END# Category Table -->
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
    <script src="../common/plugins/momentjs/moment.js"></script>


     <!-- Bootstrap Notify Plugin Js -->
    <script src="../common/plugins/bootstrap-notify/bootstrap-notify.js"></script>

     <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="../common/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="../common/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

    <!-- Custom Js -->
    <script src="../common/js/admin.js"></script>
    <script src="../common/js/pages/tables/jquery-datatable.js"></script>
      <script src="../common/js/pages/ui/modals.js"></script>
       <script src="../common/js/pages/forms/basic-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>

<!-- update data to databse -->
<?php
            if (isset($_POST['update'])) {
                $pr_id = $_GET['edit_id']; 
                $name  = $_POST['name'];
                $description = $_POST['description'];
                
    $update = "UPDATE category_list SET name ='$name',description='$description' 
                WHERE id='$pr_id' ";

    
               if (mysqli_query($connection, $update))
                    {
                        $successStatus = 1;
                     } 
                     else 
                     {
                         echo "Error: " . mysqli_error($connection);
                         $successStatus = 0;
                    }

                if ($successStatus==1)

            {
                echo '<script>
                    setTimeout(function() {
                    swal({
                    title: "SUCCESS!",
                    text: "",
                    type: "success"
                    }, function() {
                    window.location = "category.php";
                    });
                    },100);
                    </script>';
            }
            else
            {
                echo '<script>
                    setTimeout(function() {
                    swal({
                    title: "ERROR",
                    text: "",
                    type: "error"
                    }, function() {
                    window.location = "category.php";
                    });
                    },100);
                    </script>';
            }
            }
            ?>

<!-- End update data to databse -->