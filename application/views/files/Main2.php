 


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        File Manager
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">File Manager</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a class="btn btn-primary btn-block" href="<?php echo base_url();?>Files/Add2">
            <span>Add</span>     
          </span>
        </a>

        <a class="btn btn-primary btn-block margin-bottom" href="<?php echo base_url();?>Files/Archived2">
          <span>Archive</span>            
        </a> 



        
      </div>
      <!-- /.col -->



      <div class="col-md-9">






       




        <?php if($this->session->flashdata('file_updated')): ?>
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Alert!</h4>
            <?php echo $this->session->flashdata('file_updated'); ?>

          </div>
        <?php endif; ?>



        <?php if($this->session->flashdata('file_activated')): ?>
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Alert!</h4>
            <?php echo $this->session->flashdata('file_activated'); ?>

          </div>
        <?php endif; ?>


        <?php if($this->session->flashdata('file_archived')): ?>
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Alert!</h4>
            <?php echo $this->session->flashdata('file_archived'); ?>

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
                  <th>Name</th>
                  <th>File</th>
                  <th>Date Created</th>
                </tr>
              </thead>

              <tbody role="alert" aria-live="polite" aria-relevant="all">


               <?php foreach($files as $file): ?> 
                <tr>


                 <?php echo "<td> <a href='" .base_url()."Files/Display2/$file->id'>" .
                 $file->name."</a></td>"; ?> 
                 <?php echo "<td>" . $file->picture . "</td>"; ?>
                 <?php echo "<td>" . $file->date_created . "</td>"; ?>
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
