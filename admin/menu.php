<?php
include_once("../accessdb.php");
include("sessionhandler.php");
//include_once("scriptvalidation.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
   
    <title>BON'S RESTAURANT</title>
    <!-- Bootstrap Core CSS -->
    <link href="../resources/admindesign/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../resources/admindesign/css/helper.css" rel="stylesheet">
    <link href="../resources/admindesign/css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <style>
    .color-green{
        color: #17B31F;
    }
    .rem-side-pad{
        padding-right: 0;
        padding-left: 0
    }
    </style>
</head>

<body class="fix-header fix-sidebar">
 
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <?php include("navbar.php");?>
        </div>
        <!-- End header header -->

        <!-- Left Sidebar  -->
        <?php include("leftsidebar.php");?>
        <!-- End Left Sidebar  -->

        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Menu</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Settings</a></li>
                        <li class="breadcrumb-item active">Menu</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->

            <div>
                <?php //if(isset($_SESSION['accountsNotifications'])){echo $_SESSION['accountsNotifications']; unset($_SESSION['accountsNotifications']);} ?>
            </div>
            <!-- Container fluid  -->
            <div class="container-fluid" style="margin:0; padding-left: 10px;">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-sm-4 " style="padding-right: 0;">
                        <div class="card card-outline-primary">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Add Menu</h4>
                            </div>
                            <div class="card-body">

                                <form method="POST" action="actions/menu/addmenu.php">
                                    <div class="form-body">
                                         <br>
                                        <div class="row p-t-5">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select class="form-control" name="category">
                                                        <option value="">-Category-</option>
                                                        <option value="Sea Food">Sea Food</option>
                                                        <option value="Noodles">Noodles</option>
                                                        <option value="Meat & Poultry">Meat & Poultry</option>
                                                        <option value="Vegetables">Vegetables</option>
                                                        <option value="Dessert">Dessert</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                                </div>
                                            </div>

                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-12">
                                                     <div class="form-group">
                                                    <input type="text" name="description" class="form-control" placeholder="Description">
                                                </div>
                                            </div>
                                            
                                        </div>
                                       
                                        <!--/row-->
                                        <h3 class="card-title m-t-15">Price</h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                               <div class="form-group">
                                                    <input type="text" name="regular_price"  class="form-control" placeholder="Regular">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                               <div class="form-group">
                                                    <input type="text" name="medium_price"  class="form-control" placeholder="Medium">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                               <div class="form-group">
                                                    <input type="text" name="large_price"  class="form-control" placeholder="Large">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                              
                                            </div>
                                            <!--/span-->

                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> Add</button>
                                        <button type="reset" class="btn btn-inverse">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8" style="padding-right: 0;">
                        <div class="card">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Category</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Regular Price</th>
                                                <th>Medium Price</th>
                                                <th>Large Price</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                               
                      $selectmenu = $conn->query("SELECT * FROM menu");
                      $i='1';
                      While($rowmenu = $selectmenu->fetch(PDO::FETCH_ASSOC)){
                                            ?>
                                            <tr>
                                                <td><?php echo $rowmenu['category']; ?></td>
                                                <td><?php echo $rowmenu['name']; ?></td>
                                                <td><?php echo $rowmenu['description']; ?></td>
                                                <td><?php echo $rowmenu['regular_price']; ?></td>
                                                <td><?php echo $rowmenu['medium_price']; ?></td>
                                                <td><?php echo $rowmenu['large_price']; ?></td>
                                                
                                                <td>

                                                   



                                                    <!-- Activate -->
                                              

                                                     <!-- Delete -->
                                                    <button class="btn btn-rounded btn-danger"  href="#deletemenu<?php echo $i;?>" data-toggle="modal" data-target="#deletemenu<?php echo $i;?>"><i class="fa fa-trash" aria-hidden="true"></i></button>

                                                    

                                                    <!-- Edit -->
                                                    <button class="btn btn-rounded btn-warning"  href="#editaccount<?php echo $i;?>" data-toggle="modal" data-target="#editaccount<?php echo $i;?>"><i class="fa fa-id-card" aria-hidden="true"></i></button>

                                                  


                                                </td>
                                            </tr>
                                            <?php include('modalmenu.php');
                                            $i++;
                                        } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved.</footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="../resources/js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../resources/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="../resources/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../resources/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="../resources/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../resources/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->

    <script src="../resources/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="../resources/js/lib/owl-carousel/owl.carousel-init.js"></script>
    <script src="../resources/js/scripts.js"></script>
    <!-- scripit init-->


    <script src="../resources/js/lib/datatables/datatables.min.js"></script>
    <script src="../resources/js/lib/datatables/datatables-init.js"></script>

    <!-- form validation -->

    <script src="../resources/js/lib/form-validation/jquery.validate.min.js"></script>
    <script src="../resources/js/lib/form-validation/jquery.validate-init.js"></script>
</body>

</html>
<div class="modal "  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="logoutModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
                <form action="logout.php" method="post">
                    <div class="modal-header">
                    </div>
                    <div class="modal-body">

                        <div style="text-align:center;"><font size="30px"><span class="fa fa-warning" style="color: red;"><h3>Are You Sure?</h3></span></font></div>

                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Logout</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
          </div>
        </div>
      </div>
