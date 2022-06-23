<style>
.s_bg_header{
  background-color:#154360;
}

.s_topbar_bg{
  background-color:#21618C;
}


.s_nav_header_table td {
 color:#000;
 font-size:12px;
 padding:2px 5px;
 border: 1px solid #17202A;
  background-color:#F4D03F;
  box-shadow:2px 4px 4px #85929E ;
}

.s_nav_header_table i{
  padding-right:5px;
}


.s_headoffice_cont .navbar{
  padding:0px 2px;
}
</style>







<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Student Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/css/center.css" rel="stylesheet">



</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion s_bg_header" id="accordionSidebar">



      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="./">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Student Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
           <!-- Nav Item - //custom - START -->
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Student Management</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="change_pass">Change Password</a>
          </div>
        </div>
      </li>
      
      <!-- Nav Item - //custom - END -->

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Download</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="online_exam">Online Exam</a>
          <a class="collapse-item" href="online_class">Online Class</a>
            <a class="collapse-item" href="#">Syllabus</a>
            <a class="collapse-item" href="payment_history">Suggestion</a>
          </div>
        </div>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTeacher" aria-expanded="true" aria-controls="collapseTeacher">
          <i class="fas fa-fw fa-wrench"></i>
          <span> Syllabus </span>
        </a> -->
        <!-- <div id="collapseTeacher" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="add-teacher">Add a Teacher</a>
            <a class="collapse-item" href="teacher_list">List All Teachers</a>
            
          </div>
        </div> -->
      <!-- </li> -->
      

     

      


     

      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Nav Item - Charts -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="charts">
          <i class="fas fa-fw fa-align-left"></i>
          <span>Exam paper</span></a>
      </li> -->

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="/form/signout">
          <i class="fas fa-fw fa-sign-out"></i>
          <span>Logout</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
                <div class="s_headoffice_cont">
        <nav class="navbar navbar-expand navbar-light bg-white topbar static-top shadow s_headoffice_cont">

<table class="s_nav_header_table">
  <tr>
  <td rowspan="3">Head Office</td>
    <td><i class='fas fa-phone-alt'></i>  7001537091</td>
  </tr>
  <tr>
    <td><i class='fab fa-whatsapp'></i>  7318992100</td>
  </tr>
  <tr>
    <td><i class="fa fa-envelope"></i>  horgyci@gmail.com</td>
  </tr>
</table>
          <!-- Topbar Search -->

<img class="mx-auto" src="../assets/img/logo.png" alt="Girl in a jacket" width="80" height="75" style="padding-top:5px;">
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto s_topbar_bg">


            <div class=" d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-light-600 large"><?php echo $_SESSION["user"]?></span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/form/signout" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        </div>
        <!-- End of Topbar -->
