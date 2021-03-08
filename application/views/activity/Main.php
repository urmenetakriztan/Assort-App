


  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Activity Log
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Activity Log</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-3">


        <div class="modal fade" id="modal-add">
          <div class="modal-dialog">
            <div class="modal-content">               
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Add Modal</h4>
                </div>
                <!-- general form elements disabled -->
                <!--    <div class="box box-warning"> -->
                  <div class="box-header with-border">
                    <h3 class="box-title">General Elements</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">



                    <!--   <form role="form"> -->

                     <?php $attributes = array('id'=>'create_form', 'class'=> 'form_horizontal'); ?>

                     <?php echo validation_errors("<p class='bg-danger'>"); ?>

                     <?php echo form_open('Equipments/Add', $attributes);?>
                     <!-- text input -->
                     <div class="form-group">
                      <?php echo form_label('Date'); ?>


                      <?php

                      $data = array(

                       'class' => 'form-control',
                       'name' => 'date',
                       'placeholder' => 'Enter Date',
                       'value' => set_value('date')

                     );


                     ?>



                     <?php echo form_input($data); ?>

                   </div>

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
                <!--     </form> -->
                <!--    </div> -->
                <!-- /.box-body -->            
              </div>
              <!-- /.box -->
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>

              </div>



            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->



        <div class="modal fade" id="modal-edit">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">edit Modal</h4>
                </div>
                <div class="modal-body">
                  <p>One fine body&hellip;</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->

          <div class="modal fade" id="modal-archive">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">archive Modal</h4>
                  </div>
                  <div class="modal-body">
                    <p>One fine body&hellip;</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

           
              
            </div>
            <!-- /.col -->

            <div class="col-md-9">


              <div class="panel panel-default">
                <div class="panel-heading">
                  Activity Logs
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                  <div class="table-responsive">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                        <tr>
                          <th>Activity</th>
                          <th>Date</th>
                        </tr>
                      </thead>
                      <tbody>

                        <!-- <tr class="odd gradeX"> -->

                          <?php foreach($activities as $activity): ?>

                            <tr class="odd gradeX">

                              <?php echo "<td>" . $activity->activity . "</td>"; ?>

                              <?php echo "<td>" . $activity->date . "</td>"; ?>

                            </tr>

                          <?php endforeach; ?>



                        </tbody>
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

       
 