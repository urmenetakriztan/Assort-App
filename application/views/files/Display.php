




<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Display
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> File Manager</a></li>
    <li class="active">Dislay</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-3">
     <a class="btn btn-primary btn-block" href="<?php echo base_url();?>Files/Add">
      <span>Add</span>     
    </a>

    <a class="btn btn-primary btn-block" href="<?php echo base_url();?>Files/Edit/<?php echo $file_data->id; ?>">
      <span>Edit</span>            
    </a> 

          <!--   <a class="btn btn-primary btn-block" href="<?php // echo site_url('Files/download/'.$file_data['id'])?>">
            <span>Download</span>            
          </a>  -->


          <a class="btn btn-primary btn-block" href="<?php echo base_url();?>Files/Download/<?php echo $file_data->id; ?>">
            <span>Download</span>            
          </a>





          <?php foreach($status as  $s):?>  



            <?php  $status = $s->stat; 

            if($status == "activated"){?>

              <a class="btn btn-primary btn-block" href="<?php echo base_url();?>Files/Archive/<?php echo $file_data->id; ?>">
                <span>Archive</span>            
              </a> 



            <?php } ?>

            <?php  

            if($status == "deactivated"){?>


             <a class="btn btn-primary btn-block margin-bottom" href="<?php echo base_url();?>Files/Activate/<?php echo $file_data->id; ?>">
              <span>Activate</span>            
            </a> 

          <?php } ?>



        <?php endforeach;?>  


        <a class="btn btn-primary btn-block" href="<?php echo base_url();?>Files">
          <span>Home</span>     
        </span>
      </a>

    </div>
    <!-- /.col -->

    &nbsp;

    <div class="col-md-9">
      <div class="panel panel-primary">
        <div class="panel-heading"><h2>File Name:</h2><h4> <?php echo $file_data->name; ?></h4></div>

        <div class="panel-body">
          <p><strong>Date Created:</strong> <?php echo $file_data->date_created; ?></p>
          <hr>
          <h4><strong>File:</strong> <?php  echo $file_data->picture; ?></h4>

          <hr>

          <h4><strong>Email:</strong> <?php  echo $file_data->email; ?></h4>

          <hr>
         <!--  <img src="<?php echo base_url($img->picture); ?>" /> -->
         <img src="<?php echo base_url('uploads/files/'.$img->picture);?>" />



        </div>
      </div>

    </div> 

  </div>
  <!-- /.row -->
</section>
<!-- /.content -->


