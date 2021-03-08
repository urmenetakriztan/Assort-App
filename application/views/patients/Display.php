 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
    Patients Manager
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Patients Manager</a></li>
    <li class="active">Display</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-3">
     <a class="btn btn-primary btn-block" href="<?php echo base_url();?>Patients/Add">
      <span>Add</span>     
    </span>
  </a>




  <a class="btn btn-primary btn-block" href="<?php echo base_url();?>Patients/Edit/<?php echo $patient_data->id; ?>">
    <span>Edit</span>     
  </span>
</a>



<?php foreach($status as  $s):?>  



 <?php  $status = $s->status; 

 if($status == "activated"){?>

   <a class="btn btn-primary btn-block" href="<?php echo base_url();?>Patients/Archive/<?php echo $patient_data->id; ?>">
    <span>Archive</span>     
  </span>
</a> 



<?php } ?>


 <a class="btn btn-primary btn-block" href="<?php echo base_url();?>Patients/Pdf/<?php echo $patient_data->id; ?>">
    <span>PDF</span>     
  </span>
</a>


<?php  

if($status == "deactivated"){?>


 <a class="btn btn-primary btn-block" href="<?php echo base_url();?>Patients/Activate/<?php echo $patient_data->id; ?>">
  <span>Activate</span>     
</span>
</a> 

<?php } ?>



<?php endforeach;?>  


<a class="btn btn-primary btn-block" href="<?php echo base_url();?>Patients">
    <span>Home</span>     
  </span>
</a>






</div>
<!-- /.col -->

&nbsp;

<div class="col-md-9">
  <div class="panel panel-primary">
    <div class="panel-heading"><h2>Patient Name:</h2><h4> <?php echo $patient_data->name; ?></h4></div>

    <div class="panel-body">

      <p><strong>Date Created:</strong> <?php echo $patient_data->date_created; ?></p>
      <hr>
      <h4><strong>City:</strong> <?php echo $patient_data->city; ?></h4>           
      <hr>
      <h4><strong>Incident Type:</strong> <?php echo $patient_data->incidentType; ?></h4> 
      <hr>
      <h4><strong>Incident Location:</strong> <?php echo $patient_data->incidentLocation; ?></h4>
      <hr>
      <h4><strong>Call Received From:</strong> <?php  echo $patient_data->callReceivedFrom; ?></h4>
      <hr>
      <h4><strong>Date:</strong> <?php  echo $patient_data->date; ?></h4>
      <hr>
      <h4><strong>Patient Type:</strong> <?php  echo $patient_data->patientType; ?></h4>
      <hr>
      <h4><strong>Time Call Received:</strong> <?php  echo $patient_data->timeCallReceived; ?></h4>
      <hr>
      <h4><strong>Time at Scene:</strong> <?php  echo $patient_data->timeAtScene; ?></h4>
      <hr>
      <h4><strong>Time Endorsed:</strong> <?php  echo $patient_data->timeEndorsed; ?></h4>
      <hr>
      <h4><strong>Ambulance:</strong> <?php  echo $patient_data->ambulance; ?></h4>
      <hr>
      <h4><strong>Age:</strong> <?php  echo $patient_data->age; ?></h4>
      <hr>
      <h4><strong>Birth Date:</strong> <?php  echo $patient_data->birthDate; ?></h4>
      <hr>
      <h4><strong>Sex:</strong> <?php  echo $patient_data->sex; ?></h4>
      <hr>
      <h4><strong>Address:</strong> <?php  echo $patient_data->address; ?></h4>
      <hr>
      <h4><strong>Contact Number:</strong> <?php  echo $patient_data->contactNumber; ?></h4>
      <hr>
      <h4><strong>PhilHealth Member:</strong> <?php  echo $patient_data->phMember; ?></h4>
      <hr>
      <h4><strong>Level of Consciousness:</strong> <?php  echo $patient_data->level; ?></h4>
      <hr>
      <h4><strong>Received From:</strong> <?php  echo $patient_data->receivedFrom; ?></h4>
      <hr>
      <h4><strong>Transported To:</strong> <?php  echo $patient_data->transportedTo; ?></h4>
      <hr>
      <h4><strong>Type of Run:</strong><?php  echo $patient_data->run; ?></h4>
      <hr>
      <h4><strong>Chief Complaint:</strong> <?php  echo $patient_data->chiefComplaint; ?></h4>
      <hr>
      <h4 class="margin-top margin-bottom"><strong>Injuries:</strong> <?php  echo $patient_data->injuries; ?></h4>
      <hr>
      <h3 class="text-center margin-bottom"><strong>MOI</strong></h3>
      <h4><strong>Vehicle Involved:</strong> <?php  echo $patient_data->vehicleInvolved; ?></h4>
      <h4><strong>Plate Number:</strong> <?php  echo $patient_data->plate; ?></h4>
      <h4><?php  echo $patient_data->mvc; ?></h4>
      <h4 class="margin-bottom"><strong>Others:</strong> <?php  echo $patient_data->mvcothers; ?></h4>
      <h4><strong>Ped. Vs. Vehicle:</strong></h4>
      <h4><?php  echo $patient_data->ped; ?></h4>
      <h4><strong>Others:</strong> <?php  echo $patient_data->pedothers; ?></h4>
      <hr>
      <h4 class="margin-bottom margin-top"><strong>TRIAGE INFORMATION:</strong> <?php  echo $patient_data->tri; ?></h4>
      <hr>



      <div class="form-group">


        <table class="table table-bordered">
          <tr>
            <th style="width: 40px">TIME</th>
            <th style="width: 40px">PR</th>
            <th style="width: 40px">RR</th>
            <th style="width: 40px">BP</th>
            <th style="width: 40px">Spo2</th>
          </tr>
          <tr>
            <td>

              <?php  echo $patient_data->time1; ?>

            </td>


            <td>


              <?php  echo $patient_data->pr1; ?>


            </td>


            <td>

             <?php  echo $patient_data->rr1; ?>

           </td>


           <td>

            <?php  echo $patient_data->bp1; ?>


          </td>

          <td>

            <?php  echo $patient_data->spo21; ?>


          </td>





        </tr>




        <tr>
          <td>

            <?php  echo $patient_data->time2; ?>

          </td>


          <td>


            <?php  echo $patient_data->pr2; ?>


          </td>


          <td>

           <?php  echo $patient_data->rr2; ?>

         </td>


         <td>

          <?php  echo $patient_data->bp2; ?>


        </td>

        <td>

          <?php  echo $patient_data->spo22; ?>


        </td>





      </tr>


      <tr>
        <td>

          <?php  echo $patient_data->time3; ?>

        </td>


        <td>


          <?php  echo $patient_data->pr3; ?>


        </td>


        <td>

         <?php  echo $patient_data->rr3; ?>

       </td>


       <td>

        <?php  echo $patient_data->bp3; ?>


      </td>

      <td>

        <?php  echo $patient_data->spo23; ?>


      </td>





    </tr>







  </table>



</div>






<hr>
<h4><strong>Skin Color:</strong> <?php  echo $patient_data->skinColor; ?></h4>
<hr>
<h4><strong>Temp:</strong> <?php  echo $patient_data->temp; ?></h4>
<hr>
<h3 class="text-center margin-bottom"><strong>Pupil</strong></h3>
<h4><strong>Left:</strong> <?php  echo $patient_data->leftPupil; ?></h4>
<hr>
<h4><strong>Right:</strong> <?php  echo $patient_data->rightPupil; ?></h4>
<hr>
<h3 class="text-center margin-bottom"><strong>SAMPLE HISTORY</strong></h3>
<h4><strong>Sign & Symptoms:</strong> <?php  echo $patient_data->signAndSymptoms; ?></h4>
<hr>
<h4><strong>Allergies:</strong> <?php  echo $patient_data->allergies; ?></h4>
<hr>
<h4><strong>Medication:</strong> <?php  echo $patient_data->medication; ?></h4>
<hr>
<h4><strong>Past and Present Medical History:</strong> <?php  echo $patient_data->medicalHistory; ?></h4>
<hr>
<h4><strong>Last Oral Intake:</strong> <?php  echo $patient_data->lastOralIntake; ?></h4>
<hr>
<h4><strong>Events Prior to Incident:</strong> <?php  echo $patient_data->eventsPrior; ?></h4>
<hr>
<h3 class="margin-bottom"><strong>OB HISTORY</strong></h3>
<h4><strong>LMP:</strong> <?php  echo $patient_data->lmp; ?></h4>
<h4><strong>AOG:</strong> <?php  echo $patient_data->aog; ?></h4>
<h4><strong>EDD:</strong> <?php  echo $patient_data->edd; ?></h4>
<h4><strong>G:</strong> <?php  echo $patient_data->gOb; ?></h4>
<h4><strong>P:</strong> <?php  echo $patient_data->pOb; ?></h4>
<hr>
<h3 class="margin-bottom"><strong>Pale Rate Scale of 1-10</strong></h3>
<h4><strong>Intial:</strong> <?php  echo $patient_data->initial; ?></h4>
<h4><strong>Final:</strong> <?php  echo $patient_data->final; ?></h4>
<hr>
<h3 class="margin-bottom"><strong>PEDIA</strong></h3>
<h4><strong>Sex:</strong> <?php  echo $patient_data->sexPedia; ?></h4>
<h4><strong>Baby out:</strong> <?php  echo $patient_data->babyOut; ?></h4>
<h4><strong>Placenta out:</strong> <?php  echo $patient_data->placentaOut; ?></h4>
<hr>
<h4><strong>Narrative:</strong> <?php  echo $patient_data->narrative; ?></h4>
<hr>
<h3 class="margin-bottom text-center"><strong>BLS TREATMENT</strong></h3>
<h4><strong>Circulation:</strong> <?php  echo $patient_data->circulation; ?></h4>
<hr>
<h4><strong>Airway Breathing:</strong> <?php  echo $patient_data->breathing; ?></h4>
<h4><strong>lpm:</strong> <?php  echo $patient_data->lpm; ?></h4>
<hr>
<h4><strong>Extrication/Immobilization:</strong> <?php  echo $patient_data->immobilization; ?></h4>
<hr>
<h3 class="margin-bottom text-center"><strong>CPR INFORMATION</strong></h3>
<h4><strong>Arrest:</strong> <?php  echo $patient_data->arrest; ?></h4>
<h4><strong>Cycles of CPR:</strong> <?php  echo $patient_data->cpr; ?></h4>
<h4><strong>Pulse Restored:</strong> <?php  echo $patient_data->pulse; ?></h4>
<hr>
<h4><strong>Patient Disposition:</strong> <?php  echo $patient_data->disposition; ?></h4>
<hr>
<h4><strong>Pending Equipment:</strong> <?php  echo $patient_data->pending; ?></h4>
<hr>
<h4><strong>Ambulance Driver:</strong> <?php  echo $patient_data->ambulanceDriver; ?></h4>
<h4><strong>Ambulance Crew:</strong> <?php  echo $patient_data->crew1; ?></h4>
<h4><strong>Ambulance Crew:</strong> <?php  echo $patient_data->crew2; ?></h4>
<h4><strong>Ambulance Crew:</strong> <?php  echo $patient_data->crew3; ?></h4>
<h4><strong>Ambulance Crew:</strong> <?php  echo $patient_data->crew4; ?></h4>
<h4><strong>Ambulance Crew:</strong> <?php  echo $patient_data->crew5; ?></h4>
<h4><strong>Ambulance Crew:</strong> <?php  echo $patient_data->crew6; ?></h4>
<hr>
<h4><strong>Endorsed By:</strong> <?php  echo $patient_data->endorsedBy; ?></h4>
<hr>
<h4><strong>Received By:</strong> <?php  echo $patient_data->receivedBy; ?></h4>
<hr>

<h4><strong>Signature:</strong></h4>

  <img src="<?php echo base_url($img->image); ?>" style="width:100%"/>








</div>
</div>
</div> 

</div>
<!-- /.row -->
</section>
<!-- /.content -->