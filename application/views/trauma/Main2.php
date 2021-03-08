
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
    <li class="active treeview">
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
    <li class="treeview">
      <a href="#">
        <i class="fa fa-share"></i> <span>Settings</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo base_url();?>Accounts"><i class="fa fa-circle-o"></i> Accounts</a></li>
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
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Patients Manager
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Patients Manager</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
     

        <div id="main_skeleton_joint_div" style="width:1070px; height:788px;">
        <div style="width:675px; overflow: hidden; float:left;">
          <img id="body_hand_foot_image" src="<?php echo base_url(); ?>assets5/body_hand_foot_highlights_75p.jpg" width="600" height="788" usemap="#joint_map_name" alt="Skeleton joint image" />
        </div>
        <asp:Panel runat="server" id="jointlist" 
            style="float:left; padding-left: 10px; width:380px; height: 788px; ">
            <div id="jl_tmj_div" style="float:left; width:175px">
                <asp:Label ID="TMJ_Label" runat="server" style="float:left;width:170px">TMJ</asp:Label>
                <div id="L_TMJ" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">L:</label>
                    <input type="checkbox" checked="checked" id="jl_L_TMJ_tend" name="L_TMJ" /><span style="font-size:smaller" class="sel" key="L_TMJ">T</span>
                    <input type="checkbox" checked="checked" id="jl_L_TMJ_swol"" name="L_TMJ"" /><span style="font-size:smaller" class="sel" key="L_TMJ">S</span>
                </div>
                <div id="R_TMJ" style="font-size:small;float:left; padding-left: 3px">
                    <label style="font-weight:bolder">R:</label>
                    <input type="checkbox" id="jl_R_TMJ_tend" name="R_TMJ" /><span style="font-size:smaller" class="sel" key="R_TMJ">T</span>
                    <input type="checkbox" id="jl_R_TMJ_swol"" name="R_TMJ"" /><span style="font-size:smaller" class="sel" key="R_TMJ">S</span>
                </div>
            </div>
            <div id="jl_shoulder_div" style="float:left; width:175px">
                <asp:Label ID="Shoulder_Label" runat="server" style="float:left;width:170px">Shoulder</asp:Label>
                <div id="L_Shoulder" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">L:</label>
                    <input type="checkbox" checked="checked" id="jl_L_Shoulder_tend" name="L_Shoulder" /><span style="font-size:smaller" class="sel" key="L_Shoulder">T</span>
                    <input type="checkbox" checked="checked" id="jl_L_Shoulder_swol" name="L_Shoulder" /><span style="font-size:smaller" class="sel" key="L_Shoulder">S</span>
                </div>
                <div id="R_Shoulder" style="font-size:small;float:left; padding-left: 3px">
                    <label style="font-weight:bolder">R:</label>
                    <input type="checkbox" id="jl_R_Shoulder_tend" name="R_Shoulder" /><span style="font-size:smaller" class="sel" key="R_Shoulder">T</span>
                    <input type="checkbox" id="jl_R_Shoulder_swol" name="R_Shoulder" /><span style="font-size:smaller" class="sel" key="R_Shoulder">S</span>
                </div>
            </div>
            <div id="jl_elbow_div" style="float:left; width:175px">
                <asp:Label ID="Elbow_Joint" runat="server" style="float:left;width:170px">Elbows</asp:Label>
                <div id="L_Elbow" style="font-size:small;float:left; padding-left: 3px">
                    <label style="font-weight:bolder">L:</label>
                    <input type="checkbox" checked="checked" id="jl_L_Elbow_tend" name="L_Elbow" /><span style="font-size:smaller" class="sel" key="L_Elbow">T</span>
                    <input type="checkbox" checked="checked" id="jl_L_Elbow_swol" name="L_Elbow" /><span style="font-size:smaller" class="sel" key="L_Elbow">S</span>
                </div>
                <div id="R_Elbow" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">R:</label>
                    <input type="checkbox" checked="checked" id="jl_R_Elbow_tend" name="R_Elbow" /><span style="font-size:smaller" class="sel" key="R_Elbow">T</span>
                    <input type="checkbox" checked="checked" id="jl_R_Elbow_swol" name="R_Elbow" /><span style="font-size:smaller" class="sel" key="R_Elbow">S</span>
                </div>
            </div>
            <div id="jl_wrist_div" style="float:left; width:175px">
                <asp:Label ID="Wrist_Label" runat="server" style="float:left;width:170px">Wrists</asp:Label>
                <div id="L_Wrist" style="font-size:small;float:left; padding-left: 3px">
                    <label style="font-weight:bolder">L:</label>
                    <input type="checkbox" id="jl_L_Wrist_tend" name="L_Wrist" /><span style="font-size:smaller" class="sel" key="L_Wrist">T</span>
                    <input type="checkbox" id="jl_L_Wrist_swol" name="L_Wrist" /><span style="font-size:smaller" class="sel" key="L_Wrist">S</span>
                </div>
                <div id="R_Wrist" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">R:</label>
                    <input type="checkbox" id="jl_R_Wrist_tend" name="R_Wrist" /><span style="font-size:smaller" class="sel" key="R_Wrist">T</span>
                    <input type="checkbox" id="jl_R_Wrist_swol" name="R_Wrist" /><span style="font-size:smaller" class="sel" key="R_Wrist">S</span>
                </div>
            </div>
            <div id="jl_lh_mcp_div" style="float:left; width:175px">
                <asp:Label ID="Lh_MCP_Label" runat="server" style="float:left;width:170px">Left Hand MCP</asp:Label>
                <div id="Lh_1Mcp" style="font-size:small;float:left; padding-left: 3px">
                    <label style="font-weight:bolder">1:</label>
                    <input type="checkbox" id="jl_Lh_1Mcp_tend" name="Lh_1Mcp" /><span style="font-size:smaller" class="sel" key="Lh_1Mcp">T</span>
                    <input type="checkbox" id="jl_Lh_1Mcp_swol" name="Lh_1Mcp" /><span style="font-size:smaller" class="sel" key="Lh_1Mcp">S</span>
                </div>
                <div id="Lh_2Mcp" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">2:</label>
                    <input type="checkbox" id="jl_Lh_2Mcp_tend" name="Lh_2Mcp" /><span style="font-size:smaller" class="sel" key="Lh_2Mcp">T</span>
                    <input type="checkbox" id="jl_Lh_2Mcp_swol" name="Lh_2Mcp" /><span style="font-size:smaller" class="sel" key="Lh_2Mcp">S</span>
                </div>
                <div id="Lh_3Mcp" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">3:</label>
                    <input type="checkbox" id="jl_Lh_3Mcp_tend" name="Lh_3Mcp" /><span style="font-size:smaller" class="sel" key="Lh_3Mcp">T</span>
                    <input type="checkbox" id="jl_Lh_3Mcp_swol" name="Lh_3Mcp" /><span style="font-size:smaller" class="sel" key="Lh_3Mcp">S</span>
                </div>                   
                <div id="Lh_4Mcp" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">4:</label>
                    <input type="checkbox" id="jl_Lh_4Mcp_tend" name="Lh_4Mcp" /><span style="font-size:smaller" class="sel" key="Lh_4Mcp">T</span>
                    <input type="checkbox" id="jl_Lh_4Mcp_swol" name="Lh_4Mcp" /><span style="font-size:smaller" class="sel" key="Lh_4Mcp">S</span>
                </div>                   
                <div id="Lh_5Mcp" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">5:</label>
                    <input type="checkbox" id="jl_Lh_5Mcp_tend" name="Lh_5Mcp" /><span style="font-size:smaller" class="sel" key="Lh_5Mcp">T</span>
                    <input type="checkbox" id="jl_Lh_5Mcp_swol" name="Lh_5Mcp" /><span style="font-size:smaller" class="sel" key="Lh_5Mcp">S</span>
                </div>
            </div>
            <div id="jl_rh_mcp_div" style="float:left; width:175px">
                <asp:Label ID="Rh_MCP_Label" runat="server" style="float:left;width:170px">Right Hand MCP</asp:Label>
                <div id="Rh_1Mcp" style="font-size:small;float:left; padding-left: 3px">
                    <label style="font-weight:bolder">1:</label>
                    <input type="checkbox" id="jl_Rh_1Mcp_tend" name="Rh_1Mcp" /><span style="font-size:smaller" class="sel" key="Rh_1Mcp">T</span>
                    <input type="checkbox" id="jl_Rh_1Mcp_swol" name="Rh_1Mcp" /><span style="font-size:smaller" class="sel" key="Rh_1Mcp">S</span>
                </div>
                <div id="Rh_2Mcp" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">2:</label>
                    <input type="checkbox" id="jl_Rh_2Mcp_tend" name="Rh_2Mcp" /><span style="font-size:smaller" class="sel" key="Rh_2Mcp">T</span>
                    <input type="checkbox" id="jl_Rh_2Mcp_swol" name="Rh_2Mcp" /><span style="font-size:smaller" class="sel" key="Rh_2Mcp">S</span>
                </div>
                <div id="Rh_3Mcp" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">3:</label>
                    <input type="checkbox" id="jl_Rh_3Mcp_tend" name="Rh_3Mcp" /><span style="font-size:smaller" class="sel" key="Rh_3Mcp">T</span>
                    <input type="checkbox" id="jl_Rh_3Mcp_swol" name="Rh_3Mcp" /><span style="font-size:smaller" class="sel" key="Rh_3Mcp">S</span>
                </div>                   
                <div id="Rh_4Mcp" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">4:</label>
                    <input type="checkbox" id="jl_Rh_4Mcp_tend" name="Rh_4Mcp" /><span style="font-size:smaller" class="sel" key="Rh_4Mcp">T</span>
                    <input type="checkbox" id="jl_Rh_4Mcp_swol" name="Rh_4Mcp" /><span style="font-size:smaller" class="sel" key="Rh_4Mcp">S</span>
                </div>                   
                <div id="Rh_5Mcp" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">5:</label>
                    <input type="checkbox" id="jl_Rh_5Mcp_tend" name="Rh_5Mcp" /><span style="font-size:smaller" class="sel" key="Rh_5Mcp">T</span>
                    <input type="checkbox" id="jl_Rh_5Mcp_swol" name="Rh_5Mcp" /><span style="font-size:smaller" class="sel" key="Rh_5Mcp">S</span>
                </div>
            </div>
            <div id="jl_lh_pip_div" style="float:left; width:175px">
                <asp:Label ID="Lh_PIP_Label" runat="server" style="float:left;width:170px">Left Hand PIP</asp:Label>
                <div id="Lh_1Pip" style="font-size:small;float:left; padding-left: 3px">
                    <label style="font-weight:bolder">1:</label>
                    <input type="checkbox" id="jl_Lh_1Pip_tend" name="Lh_1Pip" /><span style="font-size:smaller" class="sel" key="Lh_1Pip">T</span>
                    <input type="checkbox" id="jl_Lh_1Pip_swol" name="Lh_1Pip" /><span style="font-size:smaller" class="sel" key="Lh_1Pip">S</span>
                </div>
                <div id="Lh_2Pip" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">2:</label>
                    <input type="checkbox" id="jl_Lh_2Pip_tend" name="Lh_2Pip" /><span style="font-size:smaller" class="sel" key="Lh_2Pip">T</span>
                    <input type="checkbox" id="jl_Lh_2Pip_swol" name="Lh_2Pip" /><span style="font-size:smaller" class="sel" key="Lh_2Pip">S</span>
                </div>
                <div id="Lh_3Pip" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">3:</label>
                    <input type="checkbox" id="jl_Lh_3Pip_tend" name="Lh_3Pip" /><span style="font-size:smaller" class="sel" key="Lh_3Pip">T</span>
                    <input type="checkbox" id="jl_Lh_3Pip_swol" name="Lh_3Pip" /><span style="font-size:smaller" class="sel" key="Lh_3Pip">S</span>
                </div>                   
                <div id="Lh_4Pip" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">4:</label>
                    <input type="checkbox" id="jl_Lh_4Pip_tend" name="Lh_4Pip" /><span style="font-size:smaller" class="sel" key="Lh_4Pip">T</span>
                    <input type="checkbox" id="jl_Lh_4Pip_swol" name="Lh_4Pip" /><span style="font-size:smaller" class="sel" key="Lh_4Pip">S</span>
                </div>                   
                <div id="Lh_5Pip" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">5:</label>
                    <input type="checkbox" id="jl_Lh_5Pip_tend" name="Lh_5Pip" /><span style="font-size:smaller" class="sel" key="Lh_5Pip">T</span>
                    <input type="checkbox" id="jl_Lh_5Pip_swol" name="Lh_5Pip" /><span style="font-size:smaller" class="sel" key="Lh_5Pip">S</span>
                </div>
            </div> 
            <div id="jl_rh_pip_div" style="float:left; width:175px">
                <asp:Label ID="Rh_PIP_Label" runat="server" style="float:left;width:170px">Right Hand PIP</asp:Label>
                <div id="Rh_1Pip" style="font-size:small;float:left; padding-left: 3px">
                    <label style="font-weight:bolder">1:</label>
                    <input type="checkbox" id="jl_Rh_1Pip_tend" name="Rh_1Pip" /><span style="font-size:smaller" class="sel" key="Rh_1Pip">T</span>
                    <input type="checkbox" id="jl_Rh_1Pip_swol" name="Rh_1Pip" /><span style="font-size:smaller" class="sel" key="Rh_1Pip">S</span>
                </div>
                <div id="Rh_2Pip" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">2:</label>
                    <input type="checkbox" id="jl_Rh_2Pip_tend" name="Rh_2Pip" /><span style="font-size:smaller" class="sel" key="Rh_2Pip">T</span>
                    <input type="checkbox" id="jl_Rh_2Pip_swol" name="Rh_2Pip" /><span style="font-size:smaller" class="sel" key="Rh_2Pip">S</span>
                </div>
                <div id="Rh_3Pip" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">3:</label>
                    <input type="checkbox" id="jl_Rh_3Pip_tend" name="Rh_3Pip" /><span style="font-size:smaller" class="sel" key="Rh_3Pip">T</span>
                    <input type="checkbox" id="jl_Rh_3Pip_swol" name="Rh_3Pip" /><span style="font-size:smaller" class="sel" key="Rh_3Pip">S</span>
                </div>                   
                <div id="Rh_4Pip" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">4:</label>
                    <input type="checkbox" id="jl_Rh_4Pip_tend" name="Rh_4Pip" /><span style="font-size:smaller" class="sel" key="Rh_4Pip">T</span>
                    <input type="checkbox" id="jl_Rh_4Pip_swol" name="Rh_4Pip" /><span style="font-size:smaller" class="sel" key="Rh_4Pip">S</span>
                </div>                   
                <div id="Rh_5Pip" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">5:</label>
                    <input type="checkbox" id="jl_Rh_5Pip_tend" name="Rh_5Pip" /><span style="font-size:smaller" class="sel" key="Rh_5Pip">T</span>
                    <input type="checkbox" id="jl_Rh_5Pip_swol" name="Rh_5Pip" /><span style="font-size:smaller" class="sel" key="Rh_5Pip">S</span>
                </div>
            </div>
            <div id="jl_lh_dip_div" style="float:left; width:175px">
                <asp:Label ID="Lh_DIP_Label" runat="server" style="float:left;width:170px">Left Hand DIP</asp:Label>
                <div id="lh_2Dip" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">2:</label>
                    <input type="checkbox" id="jl_Lh_2Dip_tend" name="Lh_2Dip" /><span style="font-size:smaller" class="sel" key="Lh_2Dip">T</span>
                    <input type="checkbox" id="jl_Lh_2Dip_swol" name="Lh_2Dip" /><span style="font-size:smaller" class="sel" key="Lh_2Dip">S</span>
                </div>
                <div id="lh_3Dip" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">3:</label>
                    <input type="checkbox" id="jl_Lh_3Dip_tend" name="Lh_3Dip" /><span style="font-size:smaller" class="sel" key="Lh_3Dip">T</span>
                    <input type="checkbox" id="jl_Lh_3Dip_swol" name="Lh_3Dip" /><span style="font-size:smaller" class="sel" key="Lh_3Dip">S</span>
                </div>                   
                <div id="lh_4Dip" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">4:</label>
                    <input type="checkbox" id="jl_Lh_4Dip_tend" name="Lh_4Dip" /><span style="font-size:smaller" class="sel" key="Lh_4Dip">T</span>
                    <input type="checkbox" id="jl_Lh_4Dip_swol" name="Lh_4Dip" /><span style="font-size:smaller" class="sel" key="Lh_4Dip">S</span>
                </div>                   
                <div id="lh_5Dip" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">5:</label>
                    <input type="checkbox" id="jl_Lh_5Dip_tend" name="Lh_5Dip" /><span style="font-size:smaller" class="sel" key="Lh_5Dip">T</span>
                    <input type="checkbox" id="jl_Lh_5Dip_swol" name="Lh_5Dip" /><span style="font-size:smaller" class="sel" key="Lh_5Dip">S</span>
                </div>
            </div>
            <div id="jl_rh_dip_div" style="float:left; width: 175px;">
                <asp:Label ID="Rh_DIP_Label" runat="server" style="float:left;width:170px">Right Hand DIP</asp:Label>
                <div id="rh_2Dip" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">2:</label>
                    <input type="checkbox" id="jl_Rh_2Dip_tend" name="Rh_2Dip" /><span style="font-size:smaller" class="sel" key="Rh_2Dip">T</span>
                    <input type="checkbox" id="jl_Rh_2Dip_swol" name="Rh_2Dip" /><span style="font-size:smaller" class="sel" key="Rh_2Dip">S</span>
                </div>
                <div id="rh_3Dip" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">3:</label>
                    <input type="checkbox" id="jl_Rh_3Dip_tend" name="Rh_3Dip" /><span style="font-size:smaller" class="sel" key="Rh_3Dip">T</span>
                    <input type="checkbox" id="jl_Rh_3Dip_swol" name="Rh_3Dip" /><span style="font-size:smaller" class="sel" key="Rh_3Dip">S</span>
                </div>                   
                <div id="rh_4Dip" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">4:</label>
                    <input type="checkbox" id="jl_Rh_4Dip_tend" name="Rh_4Dip" /><span style="font-size:smaller" class="sel" key="Rh_4Dip">T</span>
                    <input type="checkbox" id="jl_Rh_4Dip_swol" name="Rh_4Dip" /><span style="font-size:smaller" class="sel" key="Rh_4Dip">S</span>
                </div>                   
                <div id="rh_5Dip" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">5:</label>
                    <input type="checkbox" id="jl_Rh_5Dip_tend" name="Rh_5Dip" /><span style="font-size:smaller" class="sel" key="Rh_5Dip">T</span>
                    <input type="checkbox" id="jl_Rh_5Dip_swol" name="Rh_5Dip" /><span style="font-size:smaller" class="sel" key="Rh_5Dip">S</span>
                </div>
            </div>
            <div id="jl_sc_div" style="float:left; width:175px">
                <asp:Label ID="SC_Label" runat="server" style="float:left;width:170px">Sternoclavicular</asp:Label>
                <div id="L_SC" style="font-size:small;float:left; padding-left: 3px">
                    <label style="font-weight:bolder">L:</label>
                    <input type="checkbox" id="jl_L_SC_tend" name="L_SC" /><span style="font-size:smaller" class="sel" key="L_SC">T</span>
                    <input type="checkbox" id="jl_L_SC_swol" name="L_SC" /><span style="font-size:smaller" class="sel" key="L_SC">S</span>
                </div>
                <div id="R_SC" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">R:</label>
                    <input type="checkbox" id="jl_R_SC_tend" name="R_SC" /><span style="font-size:smaller" class="sel" key="R_SC">T</span>
                    <input type="checkbox" id="jl_R_SC_swol" name="R_SC" /><span style="font-size:smaller" class="sel" key="R_SC">S</span>
                </div>
            </div> 
            <div id="jl_spine_div" style="float:left; width:175px">
                <asp:Label ID="Spine_Label" runat="server" style="float:left;width:170px">Spine</asp:Label>
                <div id="C_Spine" style="font-size:small;float:left; padding-left: 3px">
                    <label style="font-weight:bolder">C:</label>
                    <input type="checkbox" id="jl_C_Spine_tend" name="C_Spine" /><span style="font-size:smaller" class="sel" key="C_Spine">T</span>
                    <input type="checkbox" id="jl_C_Spine_swol" name="C_Spine" /><span style="font-size:smaller" class="sel" key="C_Spine">S</span>
                </div>
                <div id="T_Spine" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">T:</label>
                    <input type="checkbox" id="jl_T_Spine_tend" name="T_Spine" /><span style="font-size:smaller" class="sel" key="T_Spine">T</span>
                    <input type="checkbox" id="jl_T_Spine_swol" name="T_Spine" /><span style="font-size:smaller" class="sel" key="T_Spine">S</span>
                </div>
                <div id="L_Spine" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">L:</label>
                    <input type="checkbox" id="jl_L_Spine_tend" name="L_Spine" /><span style="font-size:smaller" class="sel" key="L_Spine">T</span>
                    <input type="checkbox" id="jl_L_Spine_swol" name="L_Spine" /><span style="font-size:smaller" class="sel" key="L_Spine">S</span>
                </div>
            </div>
            <div id="jl_si_div" style="float:left; width:175px">
                <asp:Label ID="SI_Label" runat="server" style="float:left;width:170px">SI Joints</asp:Label>
                <div id="R_SI" style="font-size:small;float:left; padding-left: 3px">
                    <label style="font-weight:bolder">L:</label>
                    <input type="checkbox" id="jl_L_SI_tend" name="L_SI" /><span style="font-size:smaller" class="sel" key="L_SI">T</span>
                    <input type="checkbox" id="jl_L_SI_swol" name="L_SI" /><span style="font-size:smaller" class="sel" key="L_SI">S</span>
                </div>
                <div id="L_SI" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">R:</label>
                    <input type="checkbox" id="jl_R_SI_tend" name="R_SI" /><span style="font-size:smaller" class="sel" key="R_SI">T</span>
                    <input type="checkbox" id="jl_R_SI_swol" name="R_SI" /><span style="font-size:smaller" class="sel" key="R_SI">S</span>
                </div>
            </div>
            <div id="jl_hip_div" style="float:left; width:175px">
                <asp:Label ID="Hip_Label" runat="server" style="float:left;width:170px">Hip</asp:Label>
                <div id="L_Hip" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">L:</label>
                    <input type="checkbox" id="jl_L_Hip_tend" name="L_Hip" /><span style="font-size:smaller" class="sel" key="L_Hip">T</span>
                    <input type="checkbox" id="jl_R_Hip_swol" name="L_Hip" /><span style="font-size:smaller" class="sel" key="L_Hip">S</span>
                </div>
                <div id="R_Hip" style="font-size:small;float:left; padding-left: 3px">
                    <label style="font-weight:bolder">R:</label>
                    <input type="checkbox" id="jl_L_Hip_tend" name="R_Hip" /><span style="font-size:smaller" class="sel" key="R_Hip">T</span>
                    <input type="checkbox" id="jl_R_Hip_swol" name="R_Hip" /><span style="font-size:smaller" class="sel" key="R_Hip">S</span>
                </div>
            </div>
            <div id="jl_knee_div" style="float:left; width:175px">
                <asp:Label ID="Knee_label" runat="server" style="float:left;width:170px">Knees</asp:Label>
                <div id="L_Knee" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">L:</label>
                    <input type="checkbox" id="jl_L_Knee_tend" name="L_Knee" /><span style="font-size:smaller" class="sel" key="L_Knee">T</span>
                    <input type="checkbox" id="jl_L_Knee_swol" name="L_Knee" /><span style="font-size:smaller" class="sel" key="L_Knee">S</span>
                </div>
                <div id="R_Knee" style="font-size:small;float:left; padding-left: 3px">
                    <label style="font-weight:bolder">R:</label>
                    <input type="checkbox" id="jl_R_Knee_tend" name="R_Knee" /><span style="font-size:smaller" class="sel" key="R_Knee">T</span>
                    <input type="checkbox" id="jl_R_Knee_swol" name="R_Knee" /><span style="font-size:smaller" class="sel" key="R_Knee">S</span>
                </div>
            </div>
            <div id="jl_ankle_div" style="float:left; width:175px">
                <asp:Label ID="Ankle_Label" runat="server" style="float:left;width:170px">Ankles</asp:Label>
                <div id="L_Ankle" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">L:</label>
                    <input type="checkbox" id="jl_L_Ankle_tend" name="L_Ankle" /><span style="font-size:smaller" class="sel" key="L_Ankle">T</span>
                    <input type="checkbox" id="jl_L_Ankle_swol" name="L_Ankle" /><span style="font-size:smaller" class="sel" key="L_Ankle">S</span>
                </div>
                <div id="R_Ankle" style="font-size:small;float:left; padding-left: 3px">
                    <label style="font-weight:bolder">R:</label>
                    <input type="checkbox" id="jl_R_Ankle_tend" name="R_Ankle" /><span style="font-size:smaller" class="sel" key="R_Ankle">T</span>
                    <input type="checkbox" id="jl_R_Ankle_swol" name="R_Ankle" /><span style="font-size:smaller" class="sel" key="R_Ankle">S</span>
                </div>
            </div>
            <div id="jl_tarsal_id" style="float:left; width:175px">
                <asp:Label ID="Tarsal_Label" runat="server" style="float:left;width:170px">Tarsals</asp:Label>
                <div id="L_Tarsal" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">R:</label>
                    <input type="checkbox" id="jl_L_Tarsal_tend" name="L_Tarsal" /><span style="font-size:smaller" class="sel" key="L_Tarsal">T</span>
                    <input type="checkbox" id="jl_L_Tarsal_swol" name="L_Tarsal" /><span style="font-size:smaller" class="sel" key="L_Tarsal">S</span>
                </div>
                <div id="R_Tarsal" style="font-size:small;float:left; padding-left: 3px">
                    <label style="font-weight:bolder">L:</label>
                    <input type="checkbox" id="jl_R_Tarsal_tend" name="R_Tarsal" /><span style="font-size:smaller" class="sel" key="R_Tarsal">T</span>
                    <input type="checkbox" id="jl_R_Tarsal_swol" name="R_Tarsal" /><span style="font-size:smaller" class="sel" key="R_Tarsal">S</span>
                </div>
            </div>
            <div id="jl_rf_mtp_div" style="float:left; width:175px">
                <asp:Label ID="Rf_MTP_Label" runat="server" style="float:left;width:170px">Right Foot MTP</asp:Label>
                <div id="rf_mtp1" style="font-size:small;float:left; padding-left: 3px">
                    <label style="font-weight:bolder">1:</label>
                    <input type="checkbox" id="jl_Rf_1Mtp_tend" name="Rf_1Mtp" /><span style="font-size:smaller" class="sel" key="Rf_1Mtp">T</span>
                    <input type="checkbox" id="jl_Rf_1Mtp_swol" name="Rf_1Mtp" /><span style="font-size:smaller" class="sel" key="Rf_1Mtp">S</span>
                </div>
                <div id="rf_mtp2" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">2:</label>
                    <input type="checkbox" id="jl_Rf_2Mtp_tend" name="Rf_2Mtp" /><span style="font-size:smaller" class="sel" key="Rf_2Mtp">T</span>
                    <input type="checkbox" id="jl_Rf_2Mtp_swol" name="Rf_2Mtp" /><span style="font-size:smaller" class="sel" key="Rf_2Mtp">S</span>
                </div>
                <div id="rf_mtp3" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">3:</label>
                    <input type="checkbox" id="jl_Rf_3Mtp_tend" name="Rf_3Mtp" /><span style="font-size:smaller" class="sel" key="Rf_3Mtp">T</span>
                    <input type="checkbox" id="jl_Rf_3Mtp_swol" name="Rf_3Mtp" /><span style="font-size:smaller" class="sel" key="Rf_3Mtp">S</span>
                </div>                   
                <div id="rf_mtp4" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">4:</label>
                    <input type="checkbox" id="jl_Rf_4Mtp_tend" name="Rf_4Mtp" /><span style="font-size:smaller" class="sel" key="Rf_4Mtp">T</span>
                    <input type="checkbox" id="jl_Rf_4Mtp_swol" name="Rf_4Mtp" /><span style="font-size:smaller" class="sel" key="Rf_4Mtp">S</span>
                </div>                   
                <div id="rf_mtp5" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">5:</label>
                    <input type="checkbox" id="jl_Rf_5Mtp_tend" name="Rf_5Mtp" /><span style="font-size:smaller" class="sel" key="Rf_5Mtp">T</span>
                    <input type="checkbox" id="jl_Rf_5Mtp_swol" name="Rf_5Mtp" /><span style="font-size:smaller" class="sel" key="Rf_5Mtp">S</span>
                </div>
            </div>              
            <div id="jl_lf_mtp_div" style="float:left; width:175px">
                <asp:Label ID="Lf_MTP_Label" runat="server" style="float:left;width:170px">Left Foot MTP</asp:Label>
                <div id="lf_1Mtp" style="font-size:small;float:left; padding-left: 3px">
                    <label style="font-weight:bolder">1:</label>
                    <input type="checkbox" id="jl_Lf_1Mtp_tend" name="Lf_1Mtp" /><span style="font-size:smaller" class="sel" key="Lf_1Mtp">T</span>
                    <input type="checkbox" id="jl_Lf_1Mtp_swol" name="Lf_1Mtp" /><span style="font-size:smaller" class="sel" key="Lf_1Mtp">S</span>
                </div>
                <div id="lf_2Mtp" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">2:</label>
                    <input type="checkbox" id="jl_Lf_2Mtp_tend" name="Lf_2Mtp" /><span style="font-size:smaller" class="sel" key="Lf_2Mtp">T</span>
                    <input type="checkbox" id="jl_Lf_2Mtp_swol" name="Lf_2Mtp" /><span style="font-size:smaller" class="sel" key="Lf_2Mtp">S</span>
                </div>
                <div id="lf_3Mtp" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">3:</label>
                    <input type="checkbox" id="jl_Lf_3Mtp_tend" name="Lf_3Mtp" /><span style="font-size:smaller" class="sel" key="Lf_3Mtp">T</span>
                    <input type="checkbox" id="jl_Lf_3Mtp_swol" name="Lf_3Mtp" /><span style="font-size:smaller" class="sel" key="Lf_3Mtp">S</span>
                </div>                   
                <div id="lf_4Mtp" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">4:</label>
                    <input type="checkbox" id="jl_Lf_4Mtp_tend" name="Lf_4Mtp" /><span style="font-size:smaller" class="sel" key="Lf_4Mtp">T</span>
                    <input type="checkbox" id="jl_Lf_4Mtp_swol" name="Lf_4Mtp" /><span style="font-size:smaller" class="sel" key="Lf_4Mtp">S</span>
                </div>                   
                <div id="lf_5Mtp" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">5:</label>
                    <input type="checkbox" id="jl_Lf_5Mtp_tend" name="Lf_5Mtp" /><span style="font-size:smaller" class="sel" key="Lf_5Mtp">T</span>
                    <input type="checkbox" id="jl_Lf_5Mtp_swol" name="Lf_5Mtp" /><span style="font-size:smaller" class="sel" key="Lf_5Mtp">S</span>
                </div>
            </div>
            <div id="jl_lf_pip_div" style="float:left; width:175px" >
                <asp:Label ID="Lf_PIP_Label" runat="server" style="float:left;width:170px">Left Foot PIP</asp:Label>
                   <div id="Lf_Pip1" style="font-size:small;float:left; padding-left: 3px">
                        <label style="font-weight:bold">1:</label>
                        <input type="checkbox" id="jl_Lf_1Pip_tend" name="Lf_1Pip" /><span style="font-size:smaller" class="sel" key="Lf_1Pip">T</span>
                        <input type="checkbox" id="jl_Lf_1Pip_swol" name="Lf_1Pip" /><span style="font-size:smaller" class="sel" key="Lf_1Pip">S</span>
                   </div>
                    <div id="Lf_Pip2" style="font-size:small;float:left;padding-left:3px">
                        <label style="font-weight:bold">2:</label>
                        <input type="checkbox" id="jl_Lf_2Pip_tend" name="Lf_2Pip" /><span style="font-size:smaller" class="sel" key="Lf_2Pip">T</span>
                        <input type="checkbox" id="jl_Lf_2Pip_swol" name="Lf_2Pip" /><span style="font-size:smaller" class="sel" key="Lf_2Pip">S</span>
                   </div>
                   <div id="Lf_Pip3" style="font-size:small;float:left;padding-left:3px">
                        <label style="font-weight:bold">3:</label>
                        <input type="checkbox" id="jl_Lf_3Pip_tend" name="Lf_3Pip" /><span style="font-size:smaller" class="sel" key="Lf_3Pip">T</span>
                        <input type="checkbox" id="jl_Lf_3Pip_swol" name="Lf_3Pip" /><span style="font-size:smaller" class="sel" key="Lf_3Pip">S</span>
                   </div>                   
                   <div id="Lf_Pip4" style="font-size:small;float:left;padding-left:3px">
                        <label style="font-weight:bold">4:</label>
                        <input type="checkbox" id="jl_Lf_4Pip_tend" name="Lf_4Pip" /><span style="font-size:smaller" class="sel" key="Lf_4Pip">T</span>
                        <input type="checkbox" id="jl_Lf_4Pip_swol" name="Lf_4Pip" /><span style="font-size:smaller" class="sel" key="Lf_4Pip">S</span>
                   </div>                   
                   <div id="Lf_Pip5" style="font-size:small;float:left;padding-left:3px">
                        <label style="font-weight:bold">5:</label>
                        <input type="checkbox" id="jl_Lf_5Pip_tend" name="Lf_5Pip" /><span style="font-size:smaller" class="sel" key="Lf_5Pip">T</span>
                        <input type="checkbox" id="jl_Lf_5Pip_swol" name="Lf_5Pip" /><span style="font-size:smaller" class="sel" key="Lf_5Pip">S</span>
                   </div>
            </div>
            <div id="jl_rf_pip_div" style="float:left; width:175px">
                <asp:Label ID="Rf_PIP_Label" runat="server" style="float:left;width:170px">Right Foot PIP</asp:Label>
                <div id="Rf_Pip1" style="font-size:small;float:left; padding-left: 3px">
                    <label style="font-weight:bolder">1:</label>
                    <input type="checkbox" id="jl_Rf_1Pip_tend" name="Rf_1Pip" /><span style="font-size:smaller" class="sel" key="Rf_1Pip">T</span>
                    <input type="checkbox" id="jl_Rf_1Pip_swol" name="Rf_1Pip" /><span style="font-size:smaller" class="sel" key="Rf_1Pip">S</span>
                </div>
                <div id="Rf_Pip2" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">2:</label>
                    <input type="checkbox" id="jl_Rf_2Pip_tend" name="Rf_2Pip" /><span style="font-size:smaller" class="sel" key="Rf_2Pip">T</span>
                    <input type="checkbox" id="jl_Rf_2Pip_swol" name="Rf_2Pip" /><span style="font-size:smaller" class="sel" key="Rf_2Pip">S</span>
                </div>
                <div id="Rf_Pip3" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">3:</label>
                    <input type="checkbox" id="jl_Rf_3Pip_tend" name="Rf_3Pip" /><span style="font-size:smaller" class="sel" key="Rf_3Pip">T</span>
                    <input type="checkbox" id="jl_Rf_3Pip_swol" name="Rf_3Pip" /><span style="font-size:smaller" class="sel" key="Rf_3Pip">S</span>
                </div>                   
                <div id="Rf_Pip4" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">4:</label>
                    <input type="checkbox" id="jl_Rf_4Pip_tend" name="Rf_4Pip" /><span style="font-size:smaller" class="sel" key="Rf_4Pip">T</span>
                    <input type="checkbox" id="jl_Rf_4Pip_swol" name="Rf_4Pip" /><span style="font-size:smaller" class="sel" key="Rf_4Pip">S</span>
                </div>                   
                <div id="Rf_Pip5" style="font-size:small;float:left;padding-left:3px">
                    <label style="font-weight:bolder">5:</label>
                    <input type="checkbox" id="jl_Rf_5Pip_tend" name="Rf_5Pip" /><span style="font-size:smaller" class="sel" key="Rf_5Pip">T</span>
                    <input type="checkbox" id="jl_Rf_5Pip_swol" name="Rf_5Pip" /><span style="font-size:smaller" class="sel" key="Rf_5Pip">S</span>
                </div>
            </div>
       </asp:Panel>
        <div style="clear:both; height:8px;"></div>
</div>



<map id="jointMap" name="joint_map_name">
    <area alt="Left TMJ" href="#" joint="L_TMJ" full="Left TMJ" shape="poly" coords="365,104,363,108,360,111,359,117,353,117,353,115,350,112,349,107,350,103,355,101,360,101" />
    <area alt="Right TMJ" href="#" joint="R_TMJ" full="Right TMJ" shape="poly" coords="310,102,314,101,320,101,324,104,326,109,325,113,320,117,316,117,314,111,311,107" />
    
    <area alt="Left SI Joint" href="#" joint="L_SI" full="Left SI Joint" shape="poly" coords="354,355,354,336,358,334,360,330,362,341,362,356,359,362,351,362" />
    <area alt="Right SI Joint" href="#" joint="R_SI" full="Right SI Joint" shape="poly" coords="314,330,317,333,320,335,320,353,324,362,320,362,317,362,312,356,312,344"/>
    <area alt="Left Knee" href="#" joint="L_Knee" full="Left Knee" shape="poly" coords="386,530,389,537,393,544,391,556,388,563,388,569,373,569,359,566,356,560,359,557,353,551,354,543,359,537,361,532"/>
    <area alt="Right Knee" href="#" joint="R_Knee" full="Right Knee" shape="poly" coords="287,535,297,532,314,530,320,542,321,551,317,566,300,569,287,570,287,564,284,556,282,550,282,543" />
    
    <area alt="Left Elbow" href="#" joint="L_Elbow" full="Left Elbow" shape="poly" coords="428,287,439,281,444,282,449,287,450,293,451,297,450,303,445,308,436,308,431,302,428,300,424,294,426,290" />
    <area alt="Right Elbow" href="#" joint="R_Elbow" full="Right Elbow" shape="poly" coords="231,282,246,285,250,293,248,299,239,307,230,307,224,304,223,296,225,290,227,287" />

    <area alt="Right Shoulder" href="#" joint="R_Shoulder" full="Right Shoulder" shape="poly" coords="263,163,271,161,277,161,282,169,283,181,276,191,270,186,263,191,254,182,254,173,257,168,260,165" />
    <area alt="Left Shoulder" href="#" joint="L_Shoulder" full="Left Shoulder" shape="poly" coords="407,161,413,164,417,167,418,169,422,173,422,180,421,185,410,189,405,186,401,188,393,185,390,176,389,170,389,164,396,161,402,160" />
    
    <area alt="Left SC" href="#" joint="L_SC" full="Left SC" shape="poly" coords="345,169,352,171,355,177,352,182,345,184,339,180,340,173" />
    <area alt="Right SC" href="#" joint="R_SC" full="Right SC" shape="poly" coords="325,169,332,171,335,177,332,182,325,184,319,180,320,173" />

    <area alt="Left Hip" href="#" joint="L_Hip" full="Left Hip" shape="poly" coords="369,370,377,369,383,374,385,378,385,381,383,386,380,390,378,392,374,392,370,389,367,386,365,382,365,377" />
    <area alt="Right Hip" href="#" joint="R_Hip" full="Right Hip" shape="poly" coords="290,373,294,370,298,368,302,369,308,373,311,379,310,383,307,389,302,392,297,391,292,387,290,383,288,377" />

    <area alt="C-Spine" href="#" joint="C_Spine" full="C-Spine"
    shape="poly" coords="323,166,323,158,324,148,323,141,326,135,333,137,341,137,348,135,352,140,351,148,350,156,352,166,344,167,331,168" />
    
    <area alt="T-Spine" href="#" joint="T_Spine" full="T-Spine" shape="poly" 
    coords="328,291,329,285,322,288,320,284,329,280,329,275,326,272,326,267,327,263,327,258,327,254,327,250,326,237,326,232,326,227,325,221,324,201,328,192,323,190,324,188,330,188,351,188,351,191,348,192,351,200,350,220,350,231,347,249,347,254,347,258,347,264,348,266,349,271,346,275,346,281,354,284,354,288,348,287,346,286,347,291" />
    
    <area alt="L-Spine" href="#" joint="L_Spine" full="L-Spine" shape="poly" 
    coords="327,343,328,337,321,335,317,330,320,327,324,328,327,331,328,326,317,322,317,317,323,317,328,317,328,313,320,313,317,311,317,306,323,306,328,305,328,299,323,300,320,299,320,294,324,293,329,292,344,292,350,293,355,294,355,299,351,301,347,299,347,304,348,307,353,306,358,308,357,312,350,312,347,312,347,317,351,317,357,317,357,322,351,324,347,325,347,330,353,327,357,329,355,334,347,336,347,338,347,341,347,344,341,347,331,347"/>
    
    <area alt="Left Wrist" href="#" joint="L_Wrist" full="Left Wrist" shape="poly" coords="468,377,475,373,487,372,490,380,494,383,486,386,474,387,470,386,471,381" />
    <area alt="Right Wrist" href="#" joint="R_Wrist" full="Right Wrist" shape="poly" coords="185,375,188,373,197,374,203,375,206,377,204,383,206,389,195,388,185,386,179,384,182,380" />
    
    <area alt="Left Ankle" href="#" joint="L_Ankle" full="Left Ankle" shape="poly" coords="350,695,372,694,371,706,373,710,354,709,350,709,350,701" />    
    <area alt="Right Ankle" href="#" joint="R_Ankle" full="Right Ankle" shape="poly" coords="302,698,313,693,323,693,325,702,324,708,313,710,303,708" />
    

    <area alt="Right Hand 1 MCP" href="#" joint="Rh_1Mcp" full="Right Hand 1 MCP" 
    shape="poly" coords="79,239,81,237,83,238,84,236,86,238,86,241,87,243,89,245,92,248,93,250,91,251,88,251,86,252,83,249,80,247,78,244,79,240"/>
    
    <area alt="Right Hand 2 MCP" href="#" joint="Rh_2Mcp" full="Right Hand 2 MCP" shape="poly" coords="86,289,86,287,89,286,91,284,91,282,93,283,99,288,101,290,103,291,101,293,101,296,100,297,97,296,92,293,89,290"/>
    
    <area alt="Right Hand 3 MCP" href="#" joint="Rh_3Mcp" full="Right Hand 3 MCP" shape="poly" coords="107,293,110,295,113,297,116,299,120,299,122,299,119,302,119,305,116,306,109,305,104,302,103,300,104,298,107,297"/>
    
    <area alt="Right Hand 4 MCP" href="#" joint="Rh_4Mcp" full="Right Hand 4 MCP" shape="poly" coords="131,299,134,299,140,302,143,305,140,306,140,308,142,311,139,311,131,308,128,305,128,304,130,302,131,302"/>
    
    <area alt="Right Hand 5 MCP" href="#" joint="Rh_5Mcp" full="Right Hand 5 MCP" shape="poly" coords="150,299,154,299,158,300,163,302,162,304,163,306,163,309,158,309,155,308,149,307,149,305,151,302"/>

    <area alt="Left Hand 1 MCP" href="#" joint="Lh_1Mcp" full="Left Hand 1 MCP" shape="poly" coords="596,238,596,240,595,247,589,252,587,251,584,251,581,250,583,248,587,243,589,238,590,236,592,238,593,237"/>
    
    <area alt="Left Hand 2 MCP" href="#" joint="Lh_2Mcp" full="Left Hand 2 MCP" shape="poly" coords="589,289,584,291,582,293,578,296,575,297,573,296,574,293,572,291,577,287,578,284,581,283,584,282,584,284,585,286,588,287"/>
    
    <area alt="Left Hand 3 MCP" href="#" joint="Lh_3Mcp" full="Left Hand 3 MCP" shape="poly" coords="567,295,567,297,569,298,571,300,566,305,559,306,555,305,556,302,553,299,554,299,558,299,562,297,565,295"/>
    
    <area alt="Left Hand 4 MCP" href="#" joint="Lh_4Mcp" full="Left Hand 4 MCP" shape="poly" coords="544,299,543,302,545,302,547,305,545,307,539,310,533,311,534,308,534,306,532,304,535,302,538,300,540,299"/>
    
    <area alt="Left Hand 5 MCP" href="#" joint="Lh_5Mcp" full="Left Hand 5 MCP" shape="poly" coords="524,299,524,303,525,305,526,308,520,308,516,309,512,309,512,306,512,305,512,302,514,301,518,300"/>
    <area alt="Right Hand 1 PIP" href="#" joint="Rh_1Pip" full="Right Hand 1 PIP" shape="poly" 
    coords="62,252,64,254,66,257,68,260,70,262,68,263,65,263,64,266,61,265,59,263,56,259,55,257,56,254,59,254,60,255"/>
    
    <area alt="Right Hand 2 PIP" href="#" joint="Rh_2Pip" full="Right Hand 2 PIP" 
    shape="poly" coords="72,317,75,317,78,319,83,323,80,326,78,326,77,330,74,329,68,326,67,325,68,323,70,323,70,320"/>
    
    <area alt="Right Hand 3 PIP" href="#" joint="Rh_3Pip" full="Right Hand 3 PIP" 
    shape="poly" coords="92,332,95,332,101,335,103,336,104,338,101,341,101,345,98,345,94,343,88,341,88,338,90,337,91,334"/>
    
    <area alt="Right Hand 4 PIP" href="#" joint="Rh_4Pip" full="Right Hand 4 PIP" 
    shape="poly" coords="119,339,122,339,126,341,128,342,130,344,128,347,128,350,125,350,120,348,118,347,117,344,119,343,118,341"/>
    
    <area alt="Right Hand 5 PIP" href="#" joint="Rh_5Pip" full="Right Hand 5 PIP" 
    shape="poly" coords="145,331,149,329,152,329,154,331,156,332,154,335,154,338,149,339,144,339,143,337,144,335,144,333"/>
    <area alt="Left Hand 1 PIP" href="#" joint="Lh_1Pip" full="Left Hand 1 PIP" 
    shape="poly" coords="613,252,614,255,616,254,618,254,620,257,617,260,614,265,611,266,610,263,607,263,605,262,608,257,611,254"/>
    
    <area alt="Left Hand 2 PIP" href="#" joint="Lh_2Pip" full="Left Hand 2 PIP" 
    shape="poly" coords="602,317,605,320,605,323,606,323,608,325,606,326,601,329,597,330,596,326,595,326,592,323,594,320,599,317"/>
    
    <area alt="Left Hand 3 PIP" href="#" joint="Lh_3Pip" full="Left Hand 3 PIP" 
    shape="poly" coords="582,332,584,334,584,337,587,338,587,341,581,343,576,345,573,345,573,341,571,338,572,336,576,333"/>
    
    <area alt="Left Hand 4 PIP" href="#" joint="Lh_4Pip" full="Left Hand 4 PIP" 
    shape="poly" coords="556,339,557,341,556,343,557,344,557,347,554,348,549,350,546,350,546,347,545,344,546,342,552,339"/>
    
    <area alt="Left Hand 5 PIP" href="#" joint="Lh_5Pip" full="Left Hand 5 PIP" 
    shape="poly" coords="530,331,530,333,530,335,531,337,530,339,525,339,521,338,521,338,521,335,518,332,523,329,526,329"/>
    <area alt="Right Hand 2 DIP" href="#" joint="Rh_2Dip" full="Right Hand 2 DIP" 
    shape="poly" coords="61,341,64,341,67,343,69,345,70,347,68,347,68,350,68,352,65,350,62,349,58,347,59,345,60,344,59,342"/>
    
    <area alt="Right Hand 3 DIP" href="#" joint="Rh_3Dip" full="Right Hand 3 DIP" 
    shape="poly" coords="83,360,86,361,89,362,91,364,92,366,92,368,90,368,90,372,87,371,81,368,79,367,80,365,80,362"/>
    
    <area alt="Right Hand 4 DIP" href="#" joint="Rh_4Dip" full="Right Hand 4 DIP" 
    shape="poly" coords="115,361,119,362,122,363,123,365,120,368,119,371,113,368,110,367,113,365,113,362"/>
    
    <area alt="Right Hand 5 DIP" href="#" joint="Rh_5Dip" full="Right Hand 5 DIP" 
    shape="poly" coords="143,347,149,347,151,348,150,350,149,354,146,355,143,354,140,353,142,350"/>
    <area alt="Left Hand 2 DIP" href="#" joint="Lh_2Dip" full="Left Hand 2 DIP" 
    shape="poly" coords="614,341,615,342,614,344,616,345,617,347,609,350,606,352,606,350,607,347,605,347,605,345,608,343,611,341"/>
    
    <area alt="Left Hand 3 DIP" href="#" joint="Lh_3Dip" full="Left Hand 3 DIP" 
    shape="poly" coords="592,360,594,362,595,365,596,367,590,369,587,371,584,372,584,368,583,368,582,366,584,364,586,362,589,361"/>
    
    <area alt="Left Hand 4 DIP" href="#" joint="Lh_4Dip" full="Left Hand 4 DIP" 
    shape="poly" coords="560,361,561,362,562,365,564,367,558,370,555,371,554,368,551,365,553,363,556,362"/>
    
    <area alt="Left Hand 5 DIP" href="#" joint="Lh_5Dip" full="Left Hand 5 DIP" 
    shape="poly" coords="531,347,533,350,535,353,532,354,529,355,526,354,524,350,524,347"/>
    <area alt="Right Tarsal" href="#" joint="R_Tarsal" full="Right Tarsal" 
    shape="poly" coords="197,581,203,584,211,593,213,599,222,603,232,602,242,590,248,592,248,604,244,614,245,617,241,638,244,643,234,651,223,652,211,647,196,643,187,635,174,622,173,611,179,605,181,609,183,608,184,602,188,594,187,578,188,565"/>
    <area alt="Left Tarsal" href="#" joint="L_Tarsal" full="Left Tarsal" 
    shape="poly" coords="432,589,441,601,449,603,461,600,464,596,470,586,479,580,482,572,486,564,487,575,488,590,486,595,490,599,490,605,497,605,501,612,496,625,479,638,466,645,452,651,445,653,431,650,431,643,434,638,432,629,431,616,428,604,426,592"/>
    <area alt="Left Foot 1 MTP" href="#" joint="Lf_1Mtp" full="Left Foot 1 MTP" 
    shape="poly" coords="452,691,451,695,449,698,450,703,446,705,440,706,429,704,429,698,431,696,430,695,429,691,437,692,444,692"/>
    
    <area alt="Left Foot 2 MTP" href="#" joint="Lf_2Mtp" full="Left Foot 2 MTP" 
    shape="poly" coords="466,700,467,701,466,704,468,707,465,710,461,710,458,709,457,707,458,704,457,701,462,701"/>
    
    <area alt="Left Foot 3 MTP" href="#" joint="Lf_3Mtp" full="Left Foot 3 MTP" 
    shape="poly" coords="479,693,479,698,482,699,480,701,474,703,470,702,471,699,469,696,470,695,473,694,476,694"/>
    
    <area alt="Left Foot 4 MTP" href="#" joint="Lf_4Mtp" full="Left Foot 4 MTP" 
    shape="poly" coords="492,682,493,683,494,686,493,689,494,690,493,693,489,695,485,694,485,690,484,689,483,686,487,683,489,683"/>
    
    <area alt="Left Foot 5 MTP" href="#" joint="Lf_5Mtp" full="Left Foot 5 MTP" 
    shape="poly" coords="505,677,505,680,506,680,506,683,505,685,502,686,497,686,496,683,497,682,496,680,498,679,502,678"/>
    <area alt="Right Foot 1 MTP" href="#" joint="Rf_1Mtp" full="Right Foot 1 MTP" 
    shape="poly" coords="223,691,230,692,237,692,245,691,245,695,244,696,245,698,245,704,235,706,228,705,224,703,226,698,224,695"/>
    
    <area alt="Right Foot 2 MTP" href="#" joint="Rf_2Mtp" full="Right Foot 2 MTP" 
    shape="poly" coords="209,700,212,701,218,701,217,704,221,707,217,709,214,710,209,710,206,707,209,704,207,701"/>
    
    <area alt="Right Foot 3 MTP" href="#" joint="Rf_3Mtp" full="Right Foot 3 MTP" 
    shape="poly" coords="195,693,198,694,201,694,204,695,206,696,203,699,204,702,200,703,194,701,193,699,195,698"/>
    
    <area alt="Right Foot 4 MTP" href="#" joint="Rf_4Mtp" full="Right Foot 4 MTP" 
    shape="poly" coords="182,682,185,683,188,683,191,686,191,689,190,690,190,694,185,695,182,693,180,690,182,689,181,686,182,683"/>
    
    <area alt="Right Foot 5 MTP" href="#" joint="Rf_5Mtp" full="Right Foot 5 MTP" 
    shape="poly" coords="170,677,173,678,176,679,179,680,177,682,179,683,177,686,173,686,170,685,168,683,169,680"/>
    <area alt="Right Foot 1 PIP" href="#" joint="Rf_1Pip" full="Right Foot 1 PIP" 
    shape="poly" coords="226,725,242,725,241,731,242,736,225,738,222,732,224,730"/>
    
    <area alt="Right Foot 2 PIP" href="#" joint="Rf_2Pip" full="Right Foot 2 PIP" 
    shape="poly" coords="206,729,214,728,215,732,213,734,214,736,206,736,206,733"/>
    
    <area alt="Right Foot 3 PIP" href="#" joint="Rf_3Pip" full="Right Foot 3 PIP" 
    shape="poly" coords="200,725,198,728,199,731,190,729,191,726,190,723"/>
    
    <area alt="Right Foot 4 PIP" href="#" joint="Rf_4Pip" full="Right Foot 4 PIP" 
    shape="poly" coords="180,710,187,709,187,713,186,713,187,717,179,716,179,713"/>
    
    <area alt="Right Foot 5 PIP" href="#" joint="Rf_5Pip" full="Right Foot 5 PIP" 
    shape="poly" coords="168,699,176,699,175,702,174,704,175,706,167,705,168,703"/>
    <area alt="Left Foot 1 PIP" href="#" joint="Lf_1Pip" full="Left Foot 1 PIP" 
    shape="poly" coords="432,726,449,724,451,730,452,735,434,737,434,731"/>
    
    <area alt="Left Foot 2 PIP" href="#" joint="Lf_2Pip" full="Left Foot 2 PIP" 
    shape="poly" coords="461,728,468,727,470,731,469,733,469,736,461,737,462,734,460,731"/>
    
    <area alt="Left Foot 3 PIP" href="#" joint="Lf_3Pip" full="Left Foot 3 PIP" 
    shape="poly" coords="475,723,483,720,485,723,484,725,485,729,477,731,475,729,476,728"/>
    
    <area alt="Left Foot 4 PIP" href="#" joint="Lf_4Pip" full="Left Foot 4 PIP" 
    shape="poly" coords="488,710,494,708,496,712,496,716,488,718,488,714"/>
    
    <area alt="Left Foot 5 PIP" href="#" joint="Lf_5Pip" full="Left Foot 5 PIP" 
    shape="poly" coords="499,699,506,697,507,701,506,703,508,706,500,707,500,704"/>
</map>






















</div>
<!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<footer class="main-footer">
  
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Create the tabs -->
  <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <!-- Home tab content -->
    <div class="tab-pane" id="control-sidebar-home-tab">
      <h3 class="control-sidebar-heading">Recent Activity</h3>
      <ul class="control-sidebar-menu">
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

              <p>Will be 23 on April 24th</p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-user bg-yellow"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

              <p>New phone +1(800)555-1234</p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

              <p>nora@example.com</p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-file-code-o bg-green"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

              <p>Execution time 5 seconds</p>
            </div>
          </a>
        </li>
      </ul>
      <!-- /.control-sidebar-menu -->

      <h3 class="control-sidebar-heading">Tasks Progress</h3>
      <ul class="control-sidebar-menu">
        <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
              Custom Template Design
              <span class="label label-danger pull-right">70%</span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
              Update Resume
              <span class="label label-success pull-right">95%</span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-success" style="width: 95%"></div>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
              Laravel Integration
              <span class="label label-warning pull-right">50%</span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
              Back End Framework
              <span class="label label-primary pull-right">68%</span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
            </div>
          </a>
        </li>
      </ul>
      <!-- /.control-sidebar-menu -->

    </div>
    <!-- /.tab-pane -->

    <!-- Settings tab content -->
    <div class="tab-pane" id="control-sidebar-settings-tab">
      <form method="post">
        <h3 class="control-sidebar-heading">General Settings</h3>

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Report panel usage
            <input type="checkbox" class="pull-right" checked>
          </label>

          <p>
            Some information about this general settings option
          </p>
        </div>
        <!-- /.form-group -->

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Allow mail redirect
            <input type="checkbox" class="pull-right" checked>
          </label>

          <p>
            Other sets of options are available
          </p>
        </div>
        <!-- /.form-group -->

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Expose author name in posts
            <input type="checkbox" class="pull-right" checked>
          </label>

          <p>
            Allow the user to show his name in blog posts
          </p>
        </div>
        <!-- /.form-group -->

        <h3 class="control-sidebar-heading">Chat Settings</h3>

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Show me as online
            <input type="checkbox" class="pull-right" checked>
          </label>
        </div>
        <!-- /.form-group -->

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Turn off notifications
            <input type="checkbox" class="pull-right">
          </label>
        </div>
        <!-- /.form-group -->

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Delete chat history
            <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
          </label>
        </div>
        <!-- /.form-group -->
      </form>
    </div>
    <!-- /.tab-pane -->
  </div>
</aside>
<!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
   <div class="control-sidebar-bg"></div>

 </div>
 <!-- ./wrapper -->

 <!-- jQuery 3 -->
 <script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
 <!-- Bootstrap 3.3.7 -->
 <script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
 <!-- FastClick -->
 <script src="<?php echo base_url();?>assets/bower_components/fastclick/lib/fastclick.js"></script>
 <!-- AdminLTE App -->
 <script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>
 <!-- Sparkline -->
 <script src="<?php echo base_url();?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
 <!-- jvectormap  -->
 <script src="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
 <script src="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
 <!-- SlimScroll -->
 <script src="<?php echo base_url();?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
 <!-- ChartJS -->
 <script src="<?php echo base_url();?>assets/bower_components/chart.js/Chart.js"></script>
 <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
 <script src="<?php echo base_url();?>assets/dist/js/pages/dashboard2.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>
 <script src="<?php echo base_url();?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
 <script src="<?php echo base_url();?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>





 



 <script src="<?php echo base_url(); ?>assets5/SkeletonJointMapping.js" type="text/javascript"></script>
 <script src="<?php echo base_url(); ?>assets5/jquery-1.6.1.min.js" type="text/javascript"></script>
 <script src="<?php echo base_url(); ?>assets5/jquery.imagemapster.1.1.3b5.js" type="text/javascript"></script>


 <script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>

