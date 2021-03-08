
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TACRU | Patients Manager</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  


  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet"
href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<style>
.example-modal .modal {
  position: relative;
  top: auto;
  bottom: auto;
  right: auto;
  left: auto;
  display: block;
  z-index: 1;
}

img{
  width: 150px;
  margin: auto;
}

.example-modal .modal {
  background: transparent !important;
}
</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">

 <!--  <p class="bg-success">
    
    <?php if($this->session->flashdata('login_success')): ?>
      <?php echo $this->session->flashdata('login_success'); ?>
    <?php endif; ?>

  </p> -->

  <!-- <p class="bg-danger">
    
    <?php if($this->session->flashdata('login_failed')): ?>
      <?php echo $this->session->flashdata('login_failed'); ?>
    <?php endif; ?>

  </p> -->




  <div class="wrapper">

    <header class="main-header">

      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>TACRU</b>App</span>
      </a>

      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">



            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url();?>assets/dist/img/usrimage.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs">
                 <?php if($this->session->userdata('username')): ?>

                  <?php echo $this->session->userdata('username'); ?>

                <?php endif; ?>

              </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url();?>assets/dist/img/usrimage.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php if($this->session->userdata('username')): ?>

                    <?php echo $this->session->userdata('username'); ?>

                  <?php endif; ?>
                  <small></small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url();?>Accounts/display/<?php echo $this->session->userdata('user_id'); ?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right"> 
                  <a href="<?php echo base_url();?>Users/logout" class="btn btn-default btn-flat">Sign out</a> 
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/dist/img/usrimage.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
         <p><?php if($this->session->userdata('username')): ?>

         <?php echo $this->session->userdata('username'); ?>

         <?php endif; ?></p>
         <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
       </div>
     </div>
     <!-- search form -->
     <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat">
            <i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="">
        <a href="<?php echo base_url();?>Home">
          <span>Dashboard</span>
          <span class="pull-right-container">
          </span>
        </a>
      </li>
      <li class="">
        <a href="<?php echo base_url();?>Patients">
          <i class="fa fa-files-o"></i>
          <span>Patients Manager</span>
          <span class="pull-right-container">
            <span class="label label-primary pull-right"><?=$patientsinfo?></span>
          </span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url();?>Files">
          <i class="fa fa-th"></i> <span>File Manager</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-green"><?=$fileinfo?></small>
          </span>
        </a>
      </li>
      <li class="">
        <a href="<?php echo base_url();?>Equipments">
          <i class="fa fa-pie-chart"></i>
          <span>Equipment and Supplies</span>
          <span class="pull-right-container">
          </span>
          <span class="pull-right-container">
            <small class="label pull-right bg-yellow"><?=$equipmentinfo?></small>
          </span>
        </a>
      </li>
      <li class="">
        <a href="<?php echo base_url();?>Events">
          <i class="fa fa-edit"></i> <span>Events</span>
          <span class="pull-right-container">
          </span>
        </a>
      </li>
      <li class="active treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Settings</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url();?>Accounts"><i class="fa fa-circle-o"></i> Accounts</a></li>
          <li><a href="<?php echo base_url();?>Crew"><i class="fa fa-circle-o"></i> Crew</a></li>
          <li><a href="<?php echo base_url();?>Feedbacks/feeds"><i class="fa fa-circle-o"></i> Feedbacks</a></li>
          <li><a href="<?php echo base_url();?>Activity"><i class="fa fa-circle-o"></i> Activity Log</a></li>
          <li><a href="<?php echo base_url();?>Backup"><i class="fa fa-circle-o"></i> Backup</a></li>
          <li><a href="<?php echo base_url();?>Help"><i class="fa fa-circle-o"></i> Help</a></li>
          <li><a href="<?php echo base_url();?>About"><i class="fa fa-circle-o"></i> About</a></li>
        </ul>
      </li>          
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">