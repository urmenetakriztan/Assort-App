

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

     

     




      <?php foreach($status as  $s):?>  



       <?php  $status = $s->status; 

       if($status == "activated"){?>

          <a class="btn btn-primary btn-block" href="<?php echo base_url();?>Feedbacks/Archive/<?php echo $feedback_data->id; ?>">
        <span>Archive</span>            
      </a>



    <?php } ?>

    <?php  

    if($status == "deactivated"){?>


      <a class="btn btn-primary btn-block" href="<?php echo base_url();?>Feedbacks/Activate/<?php echo $feedback_data->id; ?>">
        <span>Activate</span>            
      </a>

<?php } ?>



<?php endforeach;?>  


<a class="btn btn-primary btn-block  margin-bottom" href="<?php echo base_url();?>Feedbacks/Feeds">
        <span>Home</span>            
      </a>
















</div>
<!-- /.col -->

<div class="col-md-9">
  <div class="panel panel-primary">
    <div class="panel-heading"><h2>Feedbacks</h2></div>

    <div class="panel-body">
      <p><strong>Date Created:</strong> <?php echo $feedback_data->date_created; ?></p>
      <hr>
      <h4><strong>Kind of Feedback:</strong> <?php  echo $feedback_data->feedback; ?></h4>
      <hr>  
      <h4><strong>Email:</strong> <?php  echo $feedback_data->email; ?></h4>
      <hr>
      <h4><strong>Comment:</strong> <?php  echo $feedback_data->comment; ?></h4>
      <br>
      <br>
      <br>


      <hr>

    </div>
  </div>
</div> 

</div>
<!-- /.row -->
</section>
<!-- /.content -->
