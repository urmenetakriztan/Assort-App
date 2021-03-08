




<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Display
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Display</a></li>
    <li class="active">Equipments and Supplies</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-3">
     <a class="btn btn-primary btn-block" href="<?php echo base_url();?>Equipments/Add">
      <span>Add</span>     
    </a>

    <a class="btn btn-primary btn-block" href="<?php echo base_url();?>Equipments/Edit/<?php echo $equipment_data->id; ?>">
      <span>Edit</span>            
    </a>





    <?php foreach($status as  $s):?>  



     <?php  $status = $s->status; 

     if($status == "activated"){?>

      <a class="btn btn-primary btn-block" href="<?php echo base_url();?>Equipments/Archive/<?php echo $equipment_data->id; ?>">
        <span>Archive</span>     
      </span>
    </a> 



  <?php } ?>

  <?php  

  if($status == "deactivated"){?>


   <a class="btn btn-primary btn-block" href="<?php echo base_url();?>Equipments/Activate/<?php echo $equipment_data->id; ?>">
    <span>Activate</span>     
  </span>
</a> 

<?php } ?>



<?php endforeach;?>  


<a class="btn btn-primary btn-block" href="<?php echo base_url();?>Equipments">
  <span>Home</span>     
</span>
</a>

</div>
<!-- /.col -->


&nbsp;

<div class="col-md-9">
  <div class="panel panel-primary">
    <div class="panel-heading"><h2>Equipment Name:</h2><h4> <?php echo $equipment_data->model; ?></h4></div>

    <div class="panel-body">
      <p><strong>Date Created:</strong> <?php echo $equipment_data->date_created; ?></p>
      <hr>
      <h4><strong>Model:</strong> <?php  echo $equipment_data->model; ?></h4>
      <hr>  
      <h4><strong>Quantity:</strong> <?php  echo $equipment_data->quantity; ?></h4>
      <hr>
      <h4><strong>Equipment Type:</strong> <?php  echo $equipment_data->equipment_type; ?></h4>


      <!--  <h4><strong>Maintenance Code:</strong> <?php  //echo $equipment_data->maintenanceCode; ?></h4> -->

      <hr>
      <h4><strong>Maintenance Performed:</strong> <?php  echo $equipment_data->maintenancePerformed; ?></h4>

      <hr>
      <h4><strong>Maintenance Frequency in Days:</strong> <?php  echo $equipment_data->maintenanceFrequency; ?></h4>

      <hr>
      <h4><strong>Previous Maintenance Date:</strong> <?php  echo $equipment_data->previousMaintenance; ?></h4>

      <hr>
      <h4><strong>Next Maintenance Date:</strong> <?php  echo $equipment_data->nextMaintenance; ?></h4>

      <hr>
      <h4><strong>Storage:</strong> <?php  echo $equipment_data->storage; ?></h4>


      <hr>
      <h4><strong>Status:</strong> <?php  echo $equipment_data->stat; ?></h4>


      <hr>
      <h4><strong>Date of Purchase:</strong> <?php  echo $equipment_data->date; ?></h4>

      <hr>

    </div>
  </div>
</div> 

</div>
<!-- /.row -->
</section>
<!-- /.content -->
