 

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Accounts Manager
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Accounts</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-3">
        <!-- <a class="btn btn-primary btn-block" href="<?php echo base_url();?>patients/create">
          <span>Add</span>     
        </span>
      </a> -->
      <!-- <a class="btn btn-primary btn-block margin-bottom" href="<?php echo base_url();?>patients/archived">
        <span>Archived</span>     
      </span>
    </a> -->


    
    
     
      <!-- /.box -->
    </div>
    <!-- /.col -->






     <div class="col-md-9">
       <p class="bg-success">
        <?php if($this->session->flashdata('patient_created')): ?>

          <?php echo $this->session->flashdata('patient_created'); ?>

        <?php endif; ?>

        <?php if($this->session->flashdata('patient_updated')): ?>

          <?php echo $this->session->flashdata('patient_updated'); ?>

        <?php endif; ?>

        

        <?php if($this->session->flashdata('patient_activated')): ?>

          <?php echo $this->session->flashdata('patient_activated'); ?>

        <?php endif; ?>

        <?php if($this->session->flashdata('patient_archived')): ?>

          <?php echo $this->session->flashdata('patient_archived'); ?>

        <?php endif; ?>
      </p>

      <div class="box">
        <div class="box-header">
          <h3 class="box-title"></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

          <table id="example1" class="table table-bordered table-striped dataTable" aria-describedby="editable-sample_info">
            <thead>
              <tr role="row">
               <th>Users Name</th>
                  <th>Date Created</th>
             </tr>
           </thead>

           <tbody role="alert" aria-live="polite" aria-relevant="all">


             <?php foreach($users as $user): ?>
              <tr>


                <?php echo "<td> <a href='" .base_url()."Accounts/display/$user->id'>" .
                      $user->username."</a></td>"; ?>

                <?php echo "<td>" . $user->date_created . "</td>"; ?>

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
