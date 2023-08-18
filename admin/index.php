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
		mysqli_select_db($db,"hospital");
		
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Admin - Dashbord</title>
    <!-- Favicon
    <link rel="icon" href="favicon.ico" type="image/x-icon">-->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Sweetalert Css -->
    <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/event.css" type="text/css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />

     <!-- jQuery -->
    <script src="js/jQuery.js" type="text/javascript"></script>
    <script src="js/event.js" type="text/javascript"></script>
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

    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
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
					
                    <li class="header">REGISTRATIONS</li>
                    <li>
                        <a href="pages/registration/doctors/doctors.php">
                            <i class="material-icons">people_alt</i>
                            <span>Manage Doctors</span>
                        </a>
                    </li>
					
					<li>
                        <a href="pages/registration/patient/patient.php">
                            <i class="material-icons">people_alt</i>
                            <span>Manage Patient</span>
                        </a>
                    </li>
					
					
                	<li class="header">MEDIA</li>
                   
					<li>
                        <a href="pages/appoinment.php">
                            <i class="material-icons">assignment</i>
                            <span>Manage Appointment</span>
                        </a>
                       
                    </li>

                    <li>
                        <a href="pages/registration/presc.php">
                            <i class="material-icons">assignment</i>
                            <span>Manage Prescription</span>
                        </a>
                       
                    </li>
                    </ul></li>
                  
                    
                   
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; <script>document.write(new Date().getFullYear());</script> <a href="javascript:void(0);">Anupam & Jaymin [Hospital]</a>
                </div>
               
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->

    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.php">Admin -[Hospital]</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    
                    <!-- #END# Notifications -->

                    <!-- Tasks -->
                    
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
        <!-- Right Sidebar -->
        <!-- <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    
                </div>
               
            </div>
        </aside> -->
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">

            <div class="block-header" align="center">
                <h1>DASHBOARD</h1>
                
            </div>

            <div class="block-header">
                <h2>Total Registration</h2>
                
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="../admin/pages/registration/users/users.php">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content"></a>
                            <div class="text">Total Doctors</div>
                            <div class="number count-to" data-from="0" data-to="
							
							<?php
								$query="select id from doctor order by id";
								$query_run = mysqli_query($db, $query);
								$row = mysqli_num_rows($query_run);
								echo $row;
							?>
							
							" data-speed="1000" data-fresh-interval="2">
							</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="../admin/pages/registration/cameraman/cameraman.php">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content"></a>
                            <div class="text">Total Patient</div>
                            <div class="number count-to" data-from="0" data-to="
							
							<?php
								$query="select id from patient order by id";
								$query_run = mysqli_query($db, $query);
								$row = mysqli_num_rows($query_run);
								echo $row;
							?>
							" data-speed="4500" data-fresh-interval="20"></div>

                        </div>

                    </div>
                    
                </div>


               

                <!--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW COMMENTS</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>-->
                
                </div>

            </div>

            <!-- #END# Widgets -->
            <div class="block-header">
                <h2>Total Appointment</h2>
                
            </div>
            <!-- Widgets -->
            <div class="row clearfix">
                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="../admin/pages/orders/all/allorder.php">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content"></a>
                            <div class="text">All Appointment</div>
                            <div class="number count-to" data-from="0" data-to="
                            
                            <?php
                                $query="select id from appo order by id";
                                $query_run = mysqli_query($db, $query);
                                $row = mysqli_num_rows($query_run);
                                echo $row;
                            ?>
                            " data-speed="4500" data-fresh-interval="20"></div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

        
            
  </section>          <!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Modal Header</h2>
    </div>
    <div class="modal-body">
      <p>Some text in the Modal Body</p>
      <p>Some other text...</p>
    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>

            <!-- #Model -->


    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="plugins/sweetalert/sweetalert.min.js"></script>

   

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
     
 <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>

</html>