



  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Profile
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Mailbox</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-3">


    <a class="btn btn-primary btn-block margin-bottom" href="<?php echo base_url();?>Home/home">
            <span>Home</span>     
            </span>
          </a> 

          <!-- <a class="btn btn-primary btn-block margin-bottom" href="<?php echo base_url();?>equipments/archive/<?php echo $equipment_data->id; ?>">
            <span>Archive</span>     
            </span>
          </a> -->

          

         
        
          </div>
          <!-- /.col -->

          <div class="col-md-9">
            <div class="panel panel-primary">
              <div class="panel-heading"><h2>Username:</h2><h4> <?php echo $account_data->username; ?></h4></div>

              <div class="panel-body">

               <?php $attributes = array('id'=>'create_form', 'class'=> 'form_horizontal'); ?>

               <?php echo validation_errors("<p class='bg-danger'>"); ?>

               <?php echo form_open('Profile/edit/'. $account_data->id . '', $attributes);?>

               <div class="form-group">
                <?php echo form_label('First Name'); ?>


                <?php

                $data = array(

                 'class' => 'form-control',
                 'name' => 'first_name',

                 'value' => $account_data->first_name

               );


               ?>



               <?php echo form_input($data); ?>

             </div>

             <div class="form-group">
              <?php echo form_label('Last Name'); ?>


              <?php

              $data = array(

               'class' => 'form-control',
               'name' => 'last_name',

               'value' => $account_data->last_name

             );


             ?>



             <?php echo form_input($data); ?>

           </div>

           <div class="form-group">
            <?php echo form_label('Email:'); ?>


            <?php

            $data = array(

             'class' => 'form-control',
             'name' => 'email',

             'value' => $account_data->email

           );


           ?>



           <?php echo form_input($data); ?>

         </div>

         <div class="form-group">
            <?php echo form_label('Username:'); ?>


            <?php

            $data = array(

             'class' => 'form-control',
             'name' => 'username',

             'value' => $account_data->username

           );


           ?>



           <?php echo form_input($data); ?>

         </div>

         <div class="form-group">
            <?php echo form_label('Password:'); ?>


            <?php

            $data = array(

             'class' => 'form-control',
             'name' => 'password',
             'required' => 'true'

           

           );


           ?>



           <?php echo form_input($data); ?>

         </div>

        

  

   

 



<div>
  <?php

  $data = array(

   'class' => 'btn btn-primary pull-right',
   'name' => 'submit',
   'value' => 'Save changes'

 );


 ?>



 <?php echo form_submit($data); ?>

 <!-- text input -->
               <!--   <div class="form-group">
                  <label>Model</label>
                  <input type="text" class="form-control" placeholder="Enter ...">
                </div> -->
                <!-- text input -->
               <!--   <div class="form-group">
                  <label>Equipment Type</label>
                  <input type="text" class="form-control" placeholder="Enter ...">
                </div>       -->  
                <?php echo form_close();?>     


              </div>
            </div>
          </div> 

        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    