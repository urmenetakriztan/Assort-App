


<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Edit
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Edit</a></li>
    <li class="active">Equipments and Supplies</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-3">
     <a class="btn btn-primary btn-block" href="<?php echo base_url();?>Equipments/Add">
      <span>Add</span>     
    </span>
  </a>

  <a class="btn btn-primary btn-block" href="<?php echo base_url();?>Equipments/Archive/<?php echo $equipment_data->id; ?>">
    <span>Archive</span>     
  </span>
</a>
<a class="btn btn-primary btn-block margin-bottom" href="<?php echo base_url();?>Equipments">
  <span>Home</span>     
</span>
</a>


</div>
<!-- /.col -->

<div class="col-md-9">
  <div class="panel panel-primary">
    <div class="panel-heading"><h2>Equipment Name:</h2><h4> <?php echo $equipment_data->model; ?></h4></div>

    <div class="panel-body">

     <?php $attributes = array('id'=>'create_form', 'class'=> 'form_horizontal'); ?>

     <?php echo validation_errors("<p class='bg-danger'>"); ?>

     <?php echo form_open('equipments/edit/'. $equipment_data->id . '', $attributes);?>

     <div class="form-group">
      <?php echo form_label('Model'); ?>


      <?php

      $data = array(

       'class' => 'form-control',
       'name' => 'model',

       'value' => $equipment_data->model

     );


     ?>



     <?php echo form_input($data); ?>

   </div>

   <div class="form-group">
    <?php echo form_label('Quantity'); ?>


    <?php

    $data = array(

     'class' => 'form-control',
     'name' => 'quantity',
     'type' => 'number',
     'value' => $equipment_data->quantity

   );


   ?>



   <?php echo form_input($data); ?>

 </div>

 <div class="form-group">
  <?php echo form_label('Equipment Type'); ?>


  <?php

  $data = array(

   'class' => 'form-control',
   'name' => 'equipment_type',

   'value' => $equipment_data->equipment_type

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
           
                            // 'value' => $equipment_data->maintenanceCode

                          // );


                  ?>



                   <?php //echo form_input($data); ?>
            
                 </div> -->

                 <div class="form-group">
                  <?php echo form_label('Maintenance Performed:'); ?>


                  <?php

                  $data = array(

                   'class' => 'form-control',
                   'name' => 'maintenancePerformed',

                   'value' => $equipment_data->maintenancePerformed

                 );


                 ?>



                 <?php echo form_input($data); ?>

               </div>

               <div class="form-group">
                <?php echo form_label('Maintenance Frequency in Days:'); ?>


                <?php

                $data = array(

                  'type' => 'number',
                  //'id' => 'datepicker',
                  'class' => 'form-control',
                  'name' => 'maintenanceFrequency',
                  'value' => $equipment_data->maintenanceFrequency



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
                  'value' => $equipment_data->previousMaintenance

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
                  'value' => $equipment_data->nextMaintenance

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
                 'value' => $equipment_data->date

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
               
               'value' => $equipment_data->storage

             );


             ?>



             <?php echo form_input($data); ?>

           </div>

           <div class="form-group">


            <?php echo form_label('Status:'); ?>


             <?php

             $data = array(

               'Undone' => 'Undone',
               'Done' => 'Done'


             );


             ?>

             <?php echo form_dropdown('stat', $data, $equipment_data->stat
           ); ?>
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


