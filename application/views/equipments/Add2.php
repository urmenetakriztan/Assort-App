



  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Add Equipments and Supplies
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

        <a class="btn btn-primary btn-block margin-bottom" href="<?php echo base_url();?>Equipments/home">
          <span>Home</span>     
        </span>
      </a>  

      
        
      </div>
      <!-- /.col -->

      <div class="col-md-9">


        <div class="panel panel-default">
          <div class="panel-heading">
            Add Equipments and Supplies
          </div>
          <!-- /.panel-heading -->
          <div class="panel-body">
            <div class="table-responsive">
              <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">


                <?php $attributes = array('id'=>'create_form', 'class'=> 'form_horizontal'); ?>

                <?php echo validation_errors("<p class='bg-danger'>"); ?>

                <?php echo form_open('Equipments/Add2', $attributes);?>


                <div class="form-group">

                  <?php echo form_label('Model:'); ?>


                  <?php

                  $data = array(

                    'class' => 'form-control',
                    'name' => 'model',
                    'placeholder' => 'Enter Model'

                  );


                  ?>



                  <?php echo form_input($data); ?>



                </div>

                <div class="form-group">

                  <?php echo form_label('Quantity:'); ?>


                  <?php

                  $data = array(

                    'class' => 'form-control',
                    'name' => 'quantity',
                    'placeholder' => 'Enter Quantity'

                  );


                  ?>



                  <?php echo form_input($data); ?>



                </div>

                <div class="form-group">

                  <?php echo form_label('Equipment Type:'); ?>


                  <?php

                  $data = array(

                    'class' => 'form-control',
                    'name' => 'equipment_type',
                    'placeholder' => 'Enter Equipment Type'

                  );


                  ?>



                  <?php echo form_input($data); ?>



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

                        <?php echo form_label('Maintenance to be performed:'); ?>


                        <?php

                        $data = array(

                          'class' => 'form-control',
                          'name' => 'maintenancePerformed',
                          'placeholder' => 'Enter Maintenance to be performed'

                        );


                        ?>



                        <?php echo form_input($data); ?>



                      </div>

                      <div class="form-group">

                        <?php echo form_label('Maintenance Frequency in Days:'); ?>


                        <?php

                        $data = array(

                         
                          'class' => 'form-control',
                          'name' => 'maintenanceFrequency',
                          'placeholder' => 'Enter Maintenance Frequency in Days'

            

                        );


                        ?>



                        <?php echo form_input($data); ?>



                      </div>

                      <div class="form-group">

                        <?php echo form_label('Previous Maintenance Date:'); ?>


                        <?php

                        $data = array(

                          'type' => 'text',
                          'id' => 'datepicker2',
                          'class' => 'form-control',
                          'name' => 'previousMaintenance',
                          'placeholder' => 'Enter Previous Maintenance Date'

          

                        );


                        ?>



                        <?php echo form_input($data); ?>



                      </div>

                      <div class="form-group">

                        <?php echo form_label('Next Maintenance Date:'); ?>


                        <?php

                        $data = array(


                          'type' => 'text',
                          'id' => 'datepicker3',
                          'class' => 'form-control',
                          'name' => 'nextMaintenance',
                          'placeholder' => 'Enter Next Maintenance Date'

                  

                        );


                        ?>



                        <?php echo form_input($data); ?>



                      </div>

                      <div class="form-group">

                        <?php echo form_label('Date of Purchase:'); ?>


                        <?php

                        $data = array(

                          'type' => 'text',
                          'id' => 'datepicker4',
                          'class' => 'form-control',
                          'name' => 'date',
                          'placeholder' => 'Enter Date of Purchase'



                        );


                        ?>



                        <?php echo form_input($data); ?>



                      </div>         

                      <div class="form-group">

                        <?php echo form_label('Storage:'); ?>


                        <?php

                        $data = array(

                          'class' => 'form-control',
                          'name' => 'storage',
                          'placeholder' => 'Enter Storage'

                        );


                        ?>



                        <?php echo form_input($data); ?>


                      </div> 









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

   

