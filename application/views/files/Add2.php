




  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Add Files
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

       <a class="btn btn-primary btn-block margin-bottom" href="<?php echo base_url();?>Files/home">
        <span>Home</span>     
      </span>
    </a>  

    
     
    </div>
    <!-- /.col -->

    <div class="col-md-9">


      <div class="panel panel-default">
        <div class="panel-heading">
          Add Files
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
          

        <?php if($this->session->flashdata('success_msg')): ?>
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Alert!</h4>
            <?php echo $this->session->flashdata('success_msg'); ?>

          </div>
        <?php endif; ?>




          <div class="table-responsive">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">

                     <!--  <h3>Select an image from your computer and upload it to the cloud</h3>
                      <?php
                      if (isset($error)){
                        echo $error;
                      }
                      ?>
                      <form method="post" action="<?=base_url('store-image')?>" enctype="multipart/form-data">
                        <input type="file" id="profile_image" name="profile_image" size="33" />
                        <input type="submit" value="Upload Image" />
                      </form> -->
                      

                      <form role="form" method="post" enctype="multipart/form-data">
                        <div class="panel">
                          <div class="form-group">
                            <label>File</label>
                            <input class="form-control" type="file" name="picture" required/>
                          </div>      
                          <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name" required/>
                          </div>    
                          <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="text" name="email" required/>
                          </div>     
                          <div class="form-group">
                            <input type="submit" class="btn btn-warning" name="submit" value="Add">
                          </div>
                        </div>

                        

                      </form>






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

     