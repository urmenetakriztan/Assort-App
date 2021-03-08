<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Fire Call Incidents
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Fire Call Incidents</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-3">
      



</div>
<!-- /.col -->




<div class="col-md-9">


 <?php if($this->session->flashdata('patient_created')): ?>
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> Alert!</h4>
    <?php echo $this->session->flashdata('patient_created'); ?>

  </div>
<?php endif; ?>




<?php if($this->session->flashdata('patient_updated')): ?>
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> Alert!</h4>
    <?php echo $this->session->flashdata('patient_updated'); ?>

  </div>
<?php endif; ?>



<?php if($this->session->flashdata('patient_activated')): ?>
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> Alert!</h4>
    <?php echo $this->session->flashdata('patient_activated'); ?>

  </div>
<?php endif; ?>


<?php if($this->session->flashdata('patient_archived')): ?>
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> Alert!</h4>
    <?php echo $this->session->flashdata('patient_archived'); ?>

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
         <th>Patients Name</th>
         <th>Date Created</th>
       </tr>
     </thead>

     <tbody role="alert" aria-live="polite" aria-relevant="all">


       <?php foreach($patients as $patient): ?> 
        <tr>


          <?php echo "<td> <a href='" .base_url()."Patients/display/$patient->id'>" .
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