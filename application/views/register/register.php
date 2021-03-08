<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TACRU APP | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets//bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets//bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets//dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets//plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>TACRU</b>APP</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <?php $attributes = array('id'=>'register_form', 'class'=> 'form_horizontal', 'enctype' => 'multipart/form-data' ); ?>

      <?php echo validation_errors("<p class='bg-danger'>"); ?>

      <?php echo form_open('Register/create', $attributes);?>


      <div class="form-group has-feedback">

        <?php

        $data = array(

          'class' => 'form-control',
          'name' => 'first_name',
          'placeholder' => 'Enter First Name',
          'required' => 'true',
          'value' => set_value('first_name')

        );
        ?>
        <?php echo form_input($data); ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>


      <div class="form-group has-feedback">
        
        <?php

        $data = array(

          'class' => 'form-control',
          'name' => 'last_name',
          'placeholder' => 'Enter Last Name',
          'required' => 'true',
          'value' => set_value('last_name')

        );


        ?>

        <?php echo form_input($data); ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <?php

        $data = array(

          'class' => 'form-control',
          'name' => 'email',
          'placeholder' => 'Enter Your Email',
          'required' => 'true',
          'value' => set_value('email')

        );

        ?>

        <?php echo form_input($data); ?>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">
      
        <?php

        $data = array(

          'class' => 'form-control',
          'name' => 'username',
          'placeholder' => 'Enter Username',
          'required' => 'true',
          'value' => set_value('username')

        );


        ?>

        <?php echo form_input($data); ?>

      </div>

      <div class="form-group has-feedback">

        <?php

        $data = array(

          'class' => 'form-control',
          'name' => 'password',
          'required' => 'true',
          'placeholder' => 'Enter Password'

        );

        ?>

        <?php echo form_password($data); ?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

      </div>


      <div class="form-group has-feedback">
        
        <?php

        $data = array(

          'class' => 'form-control',
          'name' => 'confirm_password',
          'required' => 'true',
          'placeholder' => 'Confirm Password'

        );

        ?>

        <?php echo form_password($data); ?>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>

      </div>
      
      
      
           
     
      
      
      
      
      


      <div class="form-group has-feedback">
        
        <?php echo form_label('User Type'); ?>


        <?php

        $data = array(

            'admin' => 'Admin',
            'staff' => 'User'
        

        );


        ?>

        <?php echo form_dropdown('role_id', $data, 'admin'); ?>


      </div>

      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <!-- <input type="checkbox"> I agree to the <a href="#">terms</a> -->
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
     
        
        <?php

        $data = array(

          'class' => 'btn btn-primary',
          'name' => 'submit',
          'value' => 'Register'

        );

        ?>

        <?php echo form_submit($data); ?>

      
        </div>
        <!-- /.col -->
      </div>



    

      <?php echo form_close();?>


    <a href="<?php echo base_url();?>" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets//bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets//bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>assets//plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
