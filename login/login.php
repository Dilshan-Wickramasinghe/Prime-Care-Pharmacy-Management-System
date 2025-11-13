<?php session_start(); ?>  

  <!-- Sweet alert -->  
    <link href="../common/plugins/sweetalert2/style.css" type="text/css" rel="stylesheet">
    <link href="../common/plugins/sweetalert2/sweetalert.css" type="text/css" rel="stylesheet">
    <script src="../common/plugins/sweetalert2/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="../common/plugins/sweetalert2/sweetalert.min.js" type="text/javascript"></script>
    <!-- -->
    
    
    <style type="text/css">
    
.confirm {
    background-color: #2196f3 !important; 
    border-color: #2196f3 !important;
}

.sweet-alert .sa-icon.sa-success .sa-placeholder 
{border: 4px solid #2196f3;}

.sweet-alert .sa-icon.sa-success .sa-line {
   
    background-color: #2196f3;
    
}
.sweet-alert .sa-icon.sa-error {
    border-color: #2196f3;
}
.sweet-alert .sa-icon.sa-error .sa-line {
    position: absolute;
    height: 5px;
    width: 47px;
    background-color: #2196f3;
    display: block;
    top: 37px;
    border-radius: 2px;
}
</style>


<?php include_once '../database/db.php'; ?>

<?php 

if(isset($_POST['login']))
    {

    // save username and password into variables
      $name = $_POST['username'];
      $password = $_POST['password'];
      
    // prepare database query
      error_reporting(error_reporting() & ~E_WARNING);
      $query1 = "SELECT * FROM users WHERE username = '{$name}' AND password = '{$password }'";
      $result1 = mysqli_query($connection, $query1);

        if($result1)
            {
                        $row = mysqli_fetch_array($result1);
                        $dbpassword = $row['password'];
                        $dbName = $row['username'];
                        $dbtype = $row['type'];

                 
                    if(($password  == $dbpassword) AND ($name  == $password) AND ($dbtype == 'admin')) 
                        {
                                $_SESSION["username"] = $dbName;
                                        echo '<script>
                            setTimeout(function() {
                            swal({
                            title: "WELCOME ...!!!",
                            text: "Login is Successfully.",
                            type: "success"
                            }, function() {
                            window.location = "../admin/admin_dashboard.php";
                            });
                            },100);
                            </script>';
                        }

                    elseif (($password  == $dbpassword) AND ($name  == $password) AND ($dbtype == 'customer')) 
                        {
                         $_SESSION["username"] = $dbName;
                                        echo '<script>
                            setTimeout(function() {
                            swal({
                            title: "WELCOME ...!!!",
                            text: "Login is Successfully.",
                            type: "success"
                            }, function() {
                            window.location = "../pharmacist/product_list.php";
                            });
                            },100);
                            </script>';
                        } 

                         elseif (($password  == $dbpassword) AND ($name  == $password) AND ($dbtype == 'pharmacist')) 
                        {
                         $_SESSION["username"] = $dbName;
                                        echo '<script>
                            setTimeout(function() {
                            swal({
                            title: "WELCOME ...!!!",
                            text: "Login is Successfully.",
                            type: "success"
                            }, function() {
                            window.location = "../pharmacist/pharmacist_dashboard.php";
                            });
                            },100);
                            </script>';
                        } 

                    else 
                        {
                            echo '<script>
                                setTimeout(function() {
                                swal({
                                title: "ERROR....",
                                text: "Wrong Credential.",
                                type: "error"
                                }, function() {
                                window.location = "index.php";
                                });
                                },100);
                                </script>';
                        }
            }    
    } 
    else
        {
           echo '<script>
                                setTimeout(function() {
                                swal({
                                title: "ERROR....",
                                text: "Wrong Credential.",
                                type: "error"
                                }, function() {
                                window.location = "index.php";
                                });
                                },100);
                                </script>';
        }


?>