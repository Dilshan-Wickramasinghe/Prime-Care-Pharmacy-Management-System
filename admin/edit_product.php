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
    <title>Admin | Edit Product</title>
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
                <li ><a href="javascript:void(0);">Products</a></li>
            </ol>
             
            
                        


<!--Begin - Add new category form--> 
<div class=""> 
  <div class="modal-dialog"> 
    <div class="modal-content">
        <div class="modal-header" > 
            <h3 class="pull-left no-margin">Edit Product Details</h3>    
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
                    $get_edit = "SELECT 
                product_list.id AS p_id,
                product_list.name AS p_name,
                product_list.description AS p_description,
                product_list.brand AS p_brand,
                product_list.dose AS p_dose,
                product_list.price AS p_price,
                product_list.status AS p_status,
                product_list.image_path AS p_img,
                category_list.name AS c_name,
                category_list.id AS c_id
                FROM product_list INNER JOIN category_list 
                ON product_list.category_id = category_list.id WHERE product_list.id ='$id'";
                    $run_edit = mysqli_query($connection, $get_edit);
                    $row_edit = mysqli_fetch_array($run_edit);
                
                        $id =  $row_edit['p_id'];
                        $p_name =  $row_edit['p_name']; 
                        $p_description =  $row_edit['p_description']; 
                        $p_brand =  $row_edit['p_brand']; 
                        $p_dose =  $row_edit['p_dose']; 
                        $p_price =  $row_edit['p_price']; 
                        $p_status =  $row_edit['p_status']; 
                        $c_name =  $row_edit['c_name']; 
                        $c_id =  $row_edit['c_id']; 
                        $img = $row_edit['p_img'];
                    }
                    ?>     
                        <div class="body">
                            <label >Brand</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text"  class="form-control" placeholder="" name="brand" value="<?php echo $p_brand; ?>" required>
                                    </div>
                                </div>
                            <label >Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text"  class="form-control" placeholder="" name="name" value="<?php echo $p_name; ?>" required>
                                    </div>
                                </div>
                            <label >Dose</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text"  class="form-control" placeholder="" name="dose" value="<?php echo $p_dose; ?>" required>
                                    </div>
                                </div>
                            <label >Category</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control show-tick" name="category">
                                            <option selected="" value="<?php echo $c_id; ?>" ><?php echo $c_name; ?></option>
                                            <option disabled><-- please choose , if update --></option>
                                            <?php
                                            $sql = "SELECT * FROM  category_list";
                                            $result = $connection->query($sql);
                                            if ($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) {
                                            ?>
                                            <option value="<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?> 
                                            </option>
                                            <?php }} ?>    
                                        </select>
                                    </div>
                                </div>
                            <label >Description</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text"  class="form-control" placeholder="" name="description" value="<?php echo $p_description; ?>"required>
                                    </div>
                                </div>
                            <label >Price</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text"  class="form-control" placeholder="" name="price" value="<?php echo $p_price; ?>" required>
                                    </div>
                                </div>
                            <label >Status</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control show-tick" name="status">
                                            <option selected="" value="<?php echo $p_status; ?>"  ><?php if ($p_status == 1) { ?>
                                                <?php  echo "Available";}?> 
                                                <?php if ($p_status == 0) { ?>
                                                <?php  echo "Unavailable";}?> 
                                            </option>
                                            <option disabled><-- please choose, if update --></option>
                                            <option value="1">Available</option>
                                            <option value="0">Unavailable</option>
                                        </select>
                                    </div>
                                </div>
                            <label >Image of product</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <?php if ( $img != ''){ ?>
                                            <input name="image" type="file" onchange="img001(this);"  >
                                            <img style="width: 100px;height:auto" id="img01" src="uploads/<?php echo  $img; ?> " alt=""/>
                                     
                                                <script>
                                                    function img001(input) {
                                                    if (input.files && input.files[0]) {
                                                    var reader = new FileReader();
                                                    reader.onload = function (e) {
                                                    $('#img01')
                                                    .attr('src', e.target.result)};
                                                    reader.readAsDataURL(input.files[0]);
                                                    }}
                                                </script>
                                        <?php } else {  echo "no image";    ?>
                                            <input name="image" type="file" onchange="img001(this);"  >
                                            <img style="width: 100px;height:auto" id="img01" src="uploads/<?php echo  $img; ?> " alt=""/>
                                     
                                                <script>
                                                    function img001(input) {
                                                    if (input.files && input.files[0]) {
                                                    var reader = new FileReader();
                                                    reader.onload = function (e) {
                                                    $('#img01')
                                                    .attr('src', e.target.result)};
                                                    reader.readAsDataURL(input.files[0]);
                                                    }}
                                            </script>
                                        <?php } ?>
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
                <a href="product_list.php"><button type="button" class="btn btn-danger m-t-15 waves-effect">Cancel</button></a>
            </div> 
        </div>
                
                    </form> 
                </div> 
        </div> 
    </div> 
</div>
<!--##END - Add new category form--> 
            
                        
                
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
    <script src="../common/js/demo.js"></script>
</body>

</html>

<!-- update data to databse -->
<?php
            if (isset($_POST['update'])) {
                $pr_id = $_GET['edit_id']; 
                $brand = $_POST['brand'];
                $name  = $_POST['name'];
                $dose = $_POST['dose'];
                $category = $_POST['category'];
                $description = $_POST['description'];
                $price = $_POST['price'];
                $status = $_POST['status'];
                $image = $_FILES["image"]["name"];
                move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $image);
    
    if ( $image !='') {            
    $update = "UPDATE product_list SET category_id ='$category',brand='$brand',name='$name',description='$description',dose='$dose',price ='$price',image_path='$image',status='$status' WHERE id='$pr_id' ";
    }
else
{
    $update = "UPDATE product_list SET category_id ='$category',brand='$brand',name='$name',description='$description',dose='$dose',price ='$price',status='$status' WHERE id='$pr_id' ";
}

    
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
                    window.location = "product_list.php";
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
                    window.location = "product_list.php";
                    });
                    },100);
                    </script>';
            }
            }
            ?>

<!-- End update data to databse -->