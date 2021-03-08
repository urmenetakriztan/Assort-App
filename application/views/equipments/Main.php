




  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Equipments and Supplies
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
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
      <a class="btn btn-primary btn-block margin-bottom" href="<?php echo base_url();?>Equipments/Archived">
        <span>Archived</span>     
      </span>
    </a>

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
      








      <?php if($this->session->flashdata('equipment_created')): ?>
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-check"></i> Alert!</h4>
          <?php echo $this->session->flashdata('equipment_created'); ?>

        </div>
      <?php endif; ?>




      <?php if($this->session->flashdata('equipment_updated')): ?>
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-check"></i> Alert!</h4>
          <?php echo $this->session->flashdata('equipment_updated'); ?>

        </div>
      <?php endif; ?>



      <?php if($this->session->flashdata('equipment_activated')): ?>
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-check"></i> Alert!</h4>
          <?php echo $this->session->flashdata('equipment_activated'); ?>

        </div>
      <?php endif; ?>


      <?php if($this->session->flashdata('equipment_archived')): ?>
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-check"></i> Alert!</h4>
          <?php echo $this->session->flashdata('equipment_archived'); ?>

        </div>
      <?php endif; ?>







      <div class="box">
        <div class="box-header">
          <h3 class="box-title"></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

          <table id="example1" class="table table-bordered table-striped dataTable" aria-describedby="editable-sample_info">
            <thead>
              <tr role="row">
                <th>Model</th>
                <th>Equipment Type</th>
                <th>Maintenance Date</th>
                <th>Quantity</th>
                <th>Status</th>
              </tr>
            </thead>

            <tbody role="alert" aria-live="polite" aria-relevant="all">


             <?php foreach($equipments as $equipment): ?> 
              <tr>


                <?php echo "<td> <a href='" .base_url()."equipments/display/$equipment->id'>" .
                $equipment->model."</a></td>"; ?> 
                <?php echo "<td> <a href='" .base_url()."equipments/display/$equipment->id'>" .
                $equipment->equipment_type."</a></td>"; ?>
                <?php echo "<td>"  . $equipment->nextMaintenance . "</td>"; ?>
                 <?php echo "<td>"  . $equipment->quantity . "</td>"; ?>
                <?php echo "<td>"  . $equipment->stat . "</td>"; ?>
              </tr>
            <?php endforeach; ?>  






          </tbody>

          <tfoot>
            <tr>
              
            </tr>
          </tfoot>
        </table>

      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>   





</div>
<!-- /.row -->
</section>
<!-- /.content -->
