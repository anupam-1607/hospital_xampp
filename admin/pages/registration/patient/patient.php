<!-- Connect Database-->
        <?php 
		        
		session_start();
		if(isset($_SESSION['User']))
		{
			echo'';
		}
		else
		{
			header("location:../../../login.php");
		}

		include('cn.php'); ?>
<!--END# Connect Database-->



<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Patient Data</title>
    <!-- Favicon-->
    <link rel="icon" href="../../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="../../../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="../../../css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../../css/coustom.css">

    <!-- jQuery -->
    <script src="../../../js/jQuery.js" type="text/javascript"></script>
    <script src="../../../js/c_reg.js" type="text/javascript"></script>

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../../css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
	
	
	
<!-- Left Menubar-->
        <?php include('leftsection.php'); ?>
<!--END# Left Menubar-->
    
	
	
	<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2 align="center">
                    CAMERAMAN DATATABLE

                </h2>
            </div>
           
            <!-- Exportable Table -->
            
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CAMERAMAN REGISTRATION TABLE
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <!-- <li><a href="reportpdf.php" class="btn btn-success">Report</a></li> -->
                               <!--  <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li> -->
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable" id=tab>
                                    
                                    
                                    <?php
                                        include_once '../../../action/classis/db_reg.php';
                                        $t=new demo();
                                        $t->tab();
                                    ?>

                                   
                                </table>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
                        <?php

                            if(isset($_POST['search']))
                            {
                                $valueToSearch = $_POST['valueToSearch'];
                                // search in all table columns
                                // using concat mysql function
                                $query = "SELECT * FROM `cameraman` WHERE CONCAT(`register_date`, `fullname`, `phone`, `state`, `city`, `camera`, `studio`, `email`, `pass`, `gender`) LIKE '%".$valueToSearch."%'";
                                $search_result = filterTable($query);

                            }
                             else {
                                $query = "SELECT * FROM 'cameraman'";
                                $search_result = filterTable($query);
                            }

                            // function to connect and execute the query
                            function filterTable($query)
                            {
                                $db = mysqli_connect("localhost", "root", "", "shoot_my_day");
                                
                                $filter_Result = mysqli_query($db, $query);
                                
                                return $filter_Result;

                            }

                            ?>




            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Cameraman Report
                            </h2>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">

                        

                     
                                <form action="cameraman.php" method="post">
                                <input type="text" name="valueToSearch" class="form-control" placeholder="Value To Search">
                                <input type="submit" name="search" class="btn btn-primary " value="Filter"><br><br>
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Register Date</th>
                                            <th>Name</th>
                                            <th>Camera  </th>
                                            <th>Studio</th>
                                            <th>Email</th>
                                            <!-- <th>Phone</th> -->
                                            
                                            <!-- <th>Birthdate</th> -->
                                            <!-- <th>User Name</th> -->
                                            <th>Password</th>
                                            <th>gender</th>
                                        </tr>
                                    </thead>
                                   <!--  <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot> -->
                                    
                                    <tbody>
                                    <?php 
                                        while ($row = mysqli_fetch_array($search_result)):
                                     ?>
                                                    <tr>
                                                        <td><?php echo date("d.m.Y", strtotime($row['register_date'])); ?></td>
                                                        <td><?php echo $row['fullname'];?></td>
                                                        <td><?php echo $row['camera'];?></td>
                                                        <td><?php echo $row['studio'];?></td>
                                                        <td><?php echo $row['email'];?></td>
                                                        <td><?php echo $row['pass'];?></td>
                                                        <td><?php echo $row['gender'];?></td>
                                                    </tr>
                                              <?php endwhile;?>         
                               
                             
                                    </tbody>
                                     </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../../plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="../../../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../../../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../../../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../../../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../../../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../../../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../../../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../../../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../../../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../../../js/admin.js"></script>
    <script src="../../../js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="../../../js/demo.js"></script>
</body>

</html>