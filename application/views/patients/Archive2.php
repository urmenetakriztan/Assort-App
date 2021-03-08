 


  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Archive
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Patients Manager</a></li>
      <li class="active">Archive</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-3">
        <a class="btn btn-primary btn-block" href="<?php echo base_url();?>Patients/Add2">
          <span>Add</span>     
        </span>
      </a>

      <a class="btn btn-primary btn-block margin-bottom" href="<?php echo base_url();?>Patients/home">
        <span>Home</span>     
      </span>
    </a>  




   
      
    </div>
    <!-- /.col -->

     <div class="col-md-9">
       

      <div class="box">
        <div class="box-header">
          <h3 class="box-title"></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

          <table id="example1" class="table table-bordered table-striped dataTable" aria-describedby="editable-sample_info">
            <thead>
              <tr role="row">
               <th>Patients Name</th>
               <th>Date Created</th>
             </tr>
           </thead>

           <tbody role="alert" aria-live="polite" aria-relevant="all">


             <?php foreach($patients as $patient): ?> 
              <tr>


                <?php echo "<td> <a href='" .base_url()."Patients/Display2/$patient->id'>" .
                $patient->name."</a></td>"; ?>

                <?php echo "<td>" . $patient->date_created . "</td>"; ?>

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
