 

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Archived
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Equipments and Supplies</a></li>
        <li class="active">Archived</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          
           <a class="btn btn-primary btn-block margin-bottom" href="<?php echo base_url();?>Feedbacks/feeds">
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
                <th>Kind of Feedback</th>
                <th>Email</th>
                <th>Comment</th>
                <th>Date Created</th>
           
              </tr>
            </thead>

            <tbody role="alert" aria-live="polite" aria-relevant="all">


             <?php foreach($feedbacks as $feedback): ?> 
              <tr>


                <?php echo "<td> <a href='" .base_url()."Feedbacks/Display/$feedback->id'>" .
                $feedback->feedback."</a></td>"; ?> 
                <?php echo "<td> <a href='" .base_url()."Feedbacks/Display/$feedback->id'>" .
                $feedback->email."</a></td>"; ?>
               
                <?php echo "<td> <a href='" .base_url()."Feedbacks/Display/$feedback->id'>" .
                $feedback->comment."</a></td>"; ?> 
                <?php echo "<td>"  . $feedback->date_created . "</td>"; ?>
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
