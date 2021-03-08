




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
     <a class="btn btn-primary btn-block" href="<?php echo base_url();?>Crew/Add">
      <span>Add</span>     
    </a>

    <a class="btn btn-primary btn-block" href="<?php echo base_url();?>Crew/Edit/<?php echo $crew_data->id; ?>">
      <span>Edit</span>            
    </a>



    



    <?php foreach($status as  $s):?>  



    <?php  $status = $s->status; 

    if($status == "activated"){?>

       <a class="btn btn-primary btn-block" href="<?php echo base_url();?>Crew/Archive/<?php echo $crew_data->id; ?>">
      <span>Archive</span>            
    </a>



<?php } ?>

<?php  

if($status == "deactivated"){?>


 <a class="btn btn-primary btn-block margin-bottom" href="<?php echo base_url();?>Crew/Activate/<?php echo $crew_data->id; ?>">
      <span>Activate</span>            
    </a>

<?php } ?>



<?php endforeach;?>  


<a class="btn btn-primary btn-block" href="<?php echo base_url();?>Crew">
  <span>Home</span>     
</span>
</a>














</div>
<!-- /.col -->

<div class="col-md-9">
  <div class="panel panel-primary">
    <div class="panel-heading"><h2>Name:</h2><h4> <?php echo $crew_data->crewn; ?></h4></div>

    <div class="panel-body">
      <p><strong>Date Created:</strong> <?php echo $crew_data->date_created; ?></p>
      <hr>
      <h4><strong>Position:</strong> <?php  echo $crew_data->position; ?></h4>
      <hr>  



    </div>
  </div>
</div> 

</div>
<!-- /.row -->
</section>
<!-- /.content -->


