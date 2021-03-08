


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
           <a class="btn btn-primary btn-block" href="<?php echo base_url();?>Crew/Add">
            <span>Add</span>     
            </span>
          </a>
           
          <a class="btn btn-primary btn-block" href="<?php echo base_url();?>Crew/Archive/<?php echo $crew_data->id; ?>">
            <span>Archive</span>     
            </span>
          </a>
           <a class="btn btn-primary btn-block margin-bottom" href="<?php echo base_url();?>Crew">
            <span>Home</span>     
            </span>
          </a>

       

       

      

               
        </div>
        <!-- /.col -->

       <div class="col-md-9">
        <div class="panel panel-primary">
          <div class="panel-heading"><br></div>

          <div class="panel-body">
            
                   <?php $attributes = array('id'=>'create_form', 'class'=> 'form_horizontal'); ?>

                   <?php echo validation_errors("<p class='bg-danger'>"); ?>

                   <?php echo form_open('Crew/Edit/'. $crew_data->id . '', $attributes);?>
            
                <div class="form-group">
                  <?php echo form_label('Name:'); ?>


                        <?php

                         $data = array(

                             'class' => 'form-control',
                             'name' => 'crewn',
                    
                             'value' => $crew_data->crewn

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

               <?php echo form_dropdown('position', $data, $crew_data->position
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
                


          </div>

           <?php echo form_close();?>    

        </div>
      </div> 

      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
 