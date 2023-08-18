<?php
session_start();
if(isset($_SESSION['User']))
{
    echo'';
}
else
{
    header("location:login.php");
}
$db = mysqli_connect("localhost","root","",""); 
  
    if(!$db)
      echo "complete"; 
    else
        echo "Database Connection Successfully.";
        mysqli_select_db($db,"shoot_my_day");
        
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Event Table</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Sweet Alert Css -->
    <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Dropzone Css -->
    <link href="plugins/dropzone/dropzone.css" rel="stylesheet">

    <!-- Multi Select Css -->
    <link href="plugins/multi-select/css/multi-select.css" rel="stylesheet">

    <!-- Bootstrap Spinner Css -->
    <link href="plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

    <!-- Bootstrap Tagsinput Css -->
    <link href="plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="plugins/nouislider/nouislider.min.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/coustom.css">

    <!-- jQuery -->
    <script src="js/jQuery.js" type="text/javascript"></script>
    <script src="js/c_event.js" type="text/javascript"></script>

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
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
    
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.php">Admin -[Shoot My Day]</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
         <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/258.png" width="48" height="48" alt="User" />
                </div>
                
                    
                
                <div class="info-container">
                    <div class="name" >Admin</div>
                    <?php
                        if(isset($_SESSION['uname']))
                        {
                            echo'';
                        }
                    ?>
                    <div class="email"><?php  echo $_SESSION['User']; ?> </div> 
                    <div class="btn-group user-helper-dropdown js-sweetalert row clearfix">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                          
                            <li ><a href="addevent.php" id="myBtn" data-type="prompt"   ><i class="material-icons">favorite</i>Add Events</a></li>

                            

                            <li><a href="http://localhost/Shoot_My_Day/index.php">Site Visit</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="logout.php?logout"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->



            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                <li class="active">
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="../admin/pages/visitor/visitor.php">
                            <i class="material-icons">home</i>
                            <span>Visitor's Feed</span>
                        </a>
                    </li>
                   <li class="header">REGISTRATIONS</li>
                    <li>
                        <a href="pages/registration/users/users.php">
                            <i class="material-icons">people_alt</i>
                            <span>Manage Users</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="pages/registration/cameraman/cameraman.php">
                            <i class="material-icons">people_alt</i>
                            <span>Manage Cameraman</span>
                        </a>
                    </li>
                    
                    
                     <li >
                     <a href="pages/orders/all/allorder.php">
                            <i class="material-icons">assignment</i>
                            <span>All Orders</span>
                        </a>
                    </li>

                    <li class="header">MEDIA</li>
                    <li>
                        <a href="pages/gallery/gallery1.php"><i class="material-icons">perm_media</i><span>Gallery</span></a>
                        
                    </li>
                    <li>
                        <a href="">
                            <i class="material-icons">assignment</i>
                            <span>Manage Magazine</span>
                        </a>
                       
                    </li>
                    </ul></li>
                   
               
            </div>
            <!-- #Menu -->
             <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; <script>document.write(new Date().getFullYear());</script> <a href="javascript:void(0);">Anupam Mistry [Shoot_My_Day]</a>
                </div>
               
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            
         
            <!-- Advanced Form Example With Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 align="center">
                               Add an EVENT here..
                            </h2>
                            <!-- <ul class="header-dropdown m-r--5">
                                <li><a href="reportpdf.php" class="btn btn-success">Report</a></li>
                               </ul> -->
                        </div>
                        <div class="body">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Event Name" id="ename" required=" Please Add Event Name" />
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                            <div class="form-group">
                                                 <b> Start Date</b>
                                                        <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">date_range</i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="date" id="esdate"class="form-control date" placeholder="Ex: 30/07/2016">
                                                        </div>
                                            </div>
                                    </div>
                                    

                                </div><div class="col-sm-6">
                                        <div class="form-group">
                                            
                                                <b> End Date</b>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="material-icons">date_range</i>
                                                            </span>
                                                            <div class="form-line">
                                                                <input type="date" id="etdate" class="form-control date" placeholder="Ex: 30/07/2016">
                                                            </div>
                                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea rows="5" id="edisc" class="form-control no-resize" placeholder="Please type Description about this EVENT..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="etag" class="form-control" placeholder="Event Tag" />
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6" align="center">
                                        <input type="button" id="addevent"class="btn-success" value="Add EVENT"name="">
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Form Example With Validation -->
        
            <div class="block-header">
                <h2 align="center">
                    EVENTS DATATABLE

                </h2>
            </div>
           
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 align="center">
                                EVENTS TABLE
                            </h2>
                            <!-- <ul class="header-dropdown m-r--5">
                                <li><a href="reportpdf.php" class="btn btn-success">Report</a></li>
                               </ul> -->
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable" id=tab>
                                    
                                    
                                    <?php
                                        include_once 'action/classis/db_event.php';
                                        $t=new demo();
                                        $t->tab();
                                    ?>


                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Filter Data -->
            <?php

                            if(isset($_POST['search']))
                            {
                                $valueToSearch = $_POST['valueToSearch'];
                                // search in all table columns
                                // using concat mysql function
                                $query = "SELECT * FROM `add_event` WHERE CONCAT(`event_date`, `e_name`, `e_disc`, `e_tag`) LIKE '%".$valueToSearch."%'";
                                $search_result = filterTable($query);

                            }
                             else {
                                $query = "SELECT * FROM 'add_event'";
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
                                Events Reports
                            </h2>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">

                        

                     
                                <form action="addevent.php" method="post">
                                <input type="text" name="valueToSearch" class="form-control" placeholder="Value To Search">
                                <input type="submit" name="search" class="btn btn-primary " value="Filter"><br><br>
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Register Date</th>
                                            <th>Event Name</th>
                                            <th>Event Description  </th>
                                            <th>Event tag</th>
                                            
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
                                                        <td><?php echo date("Y.m.d", strtotime($row['event_date'])); ?></td>
                                                        <td><?php echo $row['e_name'];?></td>
                                                        <td><?php echo $row['e_disc'];?></td>
                                                        <td><?php echo $row['e_tag'];?></td>
                                                        
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

        </div>
    </section>





    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

        <!-- Bootstrap Colorpicker Js -->
    <script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

    <!-- Dropzone Plugin Js -->
    <script src="plugins/dropzone/dropzone.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

    <!-- Multi Select Plugin Js -->
    <script src="plugins/multi-select/js/jquery.multi-select.js"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="plugins/jquery-spinner/js/jquery.spinner.js"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- noUISlider Plugin Js -->
    <script src="plugins/nouislider/nouislider.js"></script>
    <!-- Jquery Validation Plugin Css -->
    <script src="plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/forms/form-wizard.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>
</html>