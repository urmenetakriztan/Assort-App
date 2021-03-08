

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Profile 
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Display</a></li>
      <li class="active">Profile</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-3">
       <a class="btn btn-primary btn-block" href="<?php echo base_url();?>Home/home">
        <span>Home</span>     
      </a>

      <a class="btn btn-primary btn-block margin-bottom" href="<?php echo base_url();?>Profile/Edit/<?php echo $account_data->id; ?>">
        <span>Edit</span>            
      </a> 

          <!-- <a class="btn btn-primary btn-block" href="<?php echo base_url();?>Equipments/archive/<?php echo $equipment_data->id; ?>">
            <span>Archive</span>            
          </a> -->

          <!-- <a class="btn btn-primary btn-block margin-bottom" href="<?php echo base_url();?>Equipments/activate/<?php echo $equipment_data->id; ?>">
            <span>Activate</span>            
          </a> -->

          

       
            </div>
            <!-- /.col -->

            <div class="col-md-9">
              <div class="panel panel-primary">
                <div class="panel-heading"><h2>User Name:</h2><h4> <?php echo $account_data->username; ?></h4></div>

                <div class="panel-body">
                  <p><strong>Date Created:</strong> <?php echo $account_data->date_created; ?></p>
                  <hr>
                  <p><strong>First Name:</strong> <?php echo $account_data->first_name; ?></p>
                  <hr>
                  <p><strong>Last Name:</strong> <?php echo $account_data->last_name; ?></p>
                  <hr>
                  <p><strong>Email:</strong> <?php echo $account_data->email; ?></p>
                  <hr>
                  <p><strong>Role:</strong> <?php echo $account_data->role_id; ?></p>
                  <hr>

                </div>
              </div>
            </div> 

          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->
      