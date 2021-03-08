

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Add Ambulance Crew
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> </a></li>
      <li class="active"></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-3">

        <a class="btn btn-primary btn-block margin-bottom" href="<?php echo base_url();?>Crew">
          <span>Home</span>     
        </span>
      </a>  

      
        
      </div>
      <!-- /.col -->

      <div class="col-md-9">


        <div class="panel panel-default">
          <div class="panel-heading">
            Add 
          </div>
          <!-- /.panel-heading -->
          <div class="panel-body">
            <div class="table-responsive">
              <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">


                <?php $attributes = array('id'=>'create_form', 'class'=> 'form_horizontal'); ?>

                <?php echo validation_errors("<p class='bg-danger'>"); ?>

                <?php echo form_open('crew/add', $attributes);?>


                <div class="form-group">

                  <?php echo form_label('Name:'); ?>


                  <?php

                  $data = array(

                    'class' => 'form-control',
                    'name' => 'crewn',
                    'placeholder' => 'Enter Name'

                  );


                  ?>



                  <?php echo form_input($data); ?>



                </div>

                <div class="form-group">


                   <?php echo form_label('Position:'); ?>


                   <?php

                   $data = array(

                     'Driver' => 'Driver',
                     'Crew' => 'Crew'


                   );


                   ?>

                   <?php echo form_dropdown('position', $data); ?>
                 </div> 

        

                     <!--  <div class="form-group">

                        <?php //echo form_label('Maintenance Code:'); ?>


                        <?php

                        $data// = array(

                         // 'class' => 'form-control',
                         // 'name' => 'maintenanceCode',
                         // 'placeholder' => 'Enter Maintenance Code'

                       // );


                        ?>



                        <?php //echo form_input($data); ?>



                      </div>  -->

                    

                      <div class="form-group">


                        <?php

                        $data = array(

                          'class' => 'btn btn-primary',
                          'name' => 'submit',
                          'value' => 'Create'

                        );


                        ?>



                        <?php echo form_submit($data); ?>



                      </div>

                      <?php echo form_close();?>







                    </table>
                    <!-- /.table-responsive -->

                  </div>
                  <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
              </div>
              <!-- /.col-lg-12 -->

            </div>
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->

    
 