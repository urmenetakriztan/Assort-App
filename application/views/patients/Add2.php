<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Patients Manager
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Patients Manager</a></li>
        <li class="active">Add</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">

          <a class="btn btn-primary btn-block margin-bottom" href="<?php echo base_url();?>Patients">
            <span>Home</span>     

          </a>  




        </div>
        <!-- /.col -->

        <div class="col-md-9">
          <div class="panel panel-primary">
            <div class="panel-heading">
              Add Patients
              <br>
              <br>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">



              <?php $attributes = array('id'=>'create_form', 'class'=> 'form_horizontal'); ?>

              <?php echo validation_errors("<p class='bg-danger'>"); ?>

              <?php echo form_open('Patients/Add2', $attributes);?>






              <div class="form-group">


               <?php echo form_label('City:'); ?>


               <?php

               $data = array(

                 'tacloban' => 'Tacloban',
                 'other' => 'Other'


               );


               ?>

               <?php echo form_dropdown('city', $data); ?>
             </div> 

             <div class="form-group">


               <?php echo form_label('Incident Type:'); ?>


               <?php

               $data = array(

                 'vehicular' => 'Vehicular',
                 'hacking' => 'Hacking',
                 'shooting' => 'Shooting',
                 'stabbing' => 'Stabbing',
                 'mauling' => 'Mauling',
                 'post' => 'Post Fall',
                 'dog' => 'Dog bite',
                 'burn' => 'Burn',
                 'fire' => 'Fire call',
                 'medical' => 'Medical Emergency',
                 'transport' => 'Medical Assistance/Transport'

               );


               ?>

               <?php echo form_dropdown('incidentType', $data); ?>
             </div> 


             <div class="form-group">

               <?php echo form_label('Incident Location:'); ?>


               <?php

               $data = array(


                 'class' => 'form-control',
                 'name' => 'incidentLocation',
                 'placeholder' => 'Enter Incident Location',
                 'required' => 'true'

               );


               ?>



               <?php echo form_input($data); ?>



             </div>

             <div class="form-group">


               <?php echo form_label('Call Received From:'); ?>


               <?php

               $data = array(

                 'radio' => 'Radio',
                 'cdrrmo' => 'Cdrrmo',
                 'hotline' => 'Hotline',
                 'walkin' => 'Walkin'


               );


               ?>

               <?php echo form_dropdown('callReceivedFrom', $data); ?>
             </div>

             <div class="form-group">

               <?php echo form_label('Date'); ?>


               <?php

               $data = array(

                 'type' => 'text',
                 'id' => 'datepicker',
                 'class' => 'form-control',
                 'name' => 'date',
                 'placeholder' => 'Enter Date',
                 'required' => 'true'

               );


               ?> 






               <?php echo form_input($data); ?>



             </div>

             <hr>


             <div class="form-group">
               <h3>Patient Type:</h3>

               <div class="form-group">
                 <div class="radio">
                  <label>
                    <?php

                    $data = array(

                     'type' => 'radio',
                     'name' => 'patientType',
                     'id' => 'patientType',
                     'value' => 'Medical',
                     'required' => 'true'

                   );

                   ?>

                   <?php echo form_radio($data); ?>
                   Medical
                 </label>
               </div>
               <div class="radio">
                <label>
                  <?php

                  $data = array(

                   'type' => 'radio',
                   'name' => 'patientType',
                   'id' => 'patientType',
                   'value' => 'Obgyne',

                 );


                 ?>

                 <?php echo form_radio($data); ?>
                 Obgyne
               </label>
             </div>
             <div class="radio">
              <label>
                <?php

                $data = array(

                 'type' => 'radio',
                 'name' => 'patientType',
                 'id' => 'patientType',
                 'value' => 'Psychiatric',

               );


               ?>

               <?php echo form_radio($data); ?>
               Psychiatric
             </label>
           </div>
           <div class="radio">
            <label>
              <?php

              $data = array(

               'type' => 'radio',
               'name' => 'patientType',
               'id' => 'patientType',
               'value' => 'Trauma',

             );


             ?>

             <?php echo form_radio($data); ?>
             Trauma
           </label>
         </div>
         <div class="radio">
          <label>
            <?php

            $data = array(

             'type' => 'radio',
             'name' => 'patientType',
             'id' => 'patientType',
             'value' => 'Pediatric',

           );


           ?>

           <?php echo form_radio($data); ?>
           Pediatric
         </label>
       </div>
       <div class="radio">
        <label>
          <?php

          $data = array(

           'type' => 'radio',
           'name' => 'patientType',
           'id' => 'patientType',
           'checked' => 'checked',
           'value' => 'None',

         );


         ?>

         <?php echo form_radio($data); ?>
         None
       </label>
     </div>
   </div>



 </div>   













 <hr>



 <div class="form-group">
  <?php echo form_label('Time Call Received:'); ?>


  <?php

  $data = array(

   'type' => 'text',
   'class' => 'form-control',
   'name' => 'timeCallReceived',
   'id' => 'reservationtime',


 );


 ?>



 <?php echo form_input($data); ?>

</div>

<div class="form-group">
  <?php echo form_label('Time at Scene:'); ?>


  <?php

  $data = array(

   'type' => 'text',
   'class' => 'form-control',
   'name' => 'timeAtScene',
   'id' => 'reservationtime2'


 );


 ?>



 <?php echo form_input($data); ?>

</div>

<div class="form-group">
  <?php echo form_label('Time Endorsed:'); ?>


  <?php

  $data = array(

   'type' => 'text',
   'class' => 'form-control',
   'name' => 'timeEndorsed',
   'id' => 'reservationtime3'


 );


 ?>



 <?php echo form_input($data); ?>

</div>







<div class="form-group">


 <?php echo form_label('Ambulance:'); ?>


 <?php

 $data = array(

   'kimse' => 'Kimse',
   'kinglong' => 'Kinglong'


 );


 ?>

 <?php echo form_dropdown('ambulance', $data); ?>
</div> 




<div class="form-group">

 <?php echo form_label('Name:'); ?>

 <?php

 $data = array(

   'class' => 'form-control',
   'name' => 'name',
   'placeholder' => 'Enter Name'

 );


 ?>

 <?php echo form_input($data); ?>

</div>  

<div class="form-group">

 <?php echo form_label('Birth Date:'); ?>

 <?php

 $data = array(


   'type' => 'text',
   'id' => 'datepicker2',
   'class' => 'form-control',
   'name' => 'birthDate',
   'placeholder' => 'Enter Birth Date',
   'required' => 'true'

 );


 ?>

 <?php echo form_input($data); ?>

</div>  


<div class="form-group">

 <?php echo form_label('Age:'); ?>

 <?php

 $data = array(

   'class' => 'form-control',
   'id' => 'age',
   'name' => 'age',
   'readonly'=>'true'


 );


 ?>

 <?php echo form_input($data); ?>



</div>  



<div class="form-group">
  <?php echo form_label('Sex:'); ?>


  <?php

  $data = array(

   'male' => 'Male',
   'female' => 'Female'


 );


 ?>

 <?php echo form_dropdown('sex', $data); ?>

</div> 

<div class="form-group">

 <?php echo form_label('Address:'); ?>

 <?php

 $data = array(

   'class' => 'form-control',
   'name' => 'address',
   'placeholder' => 'Enter Address',
   'required' => 'true'

 );


 ?>

 <?php echo form_input($data); ?>

</div>  

<div class="form-group">

 <?php echo form_label('Contact Number:'); ?>

 <?php

 $data = array(

   'class' => 'form-control',
   'name' => 'contactNumber',
   'placeholder' => 'Enter Contact Number',
   'required' => 'true'

 );


 ?>

 <?php echo form_input($data); ?>

</div>  

<div class="form-group">


 <?php echo form_label('Phil Health Member:'); ?>


 <?php

 $data = array(

   'yes' => 'Yes',
   'no' => 'No'


 );


 ?>

 <?php echo form_dropdown('phMember', $data); ?>
</div> 

<hr>


<div class="form-group">
 <h3>Level of Consciousness:</h3>

 <div class="form-group">
   <div class="radio">
    <label>
      <?php

      $data = array(

       'type' => 'radio',
       'name' => 'level',
       'id' => 'level',
       'value' => 'Alert',

     );

     ?>

     <?php echo form_radio($data); ?>
     Alert
   </label>
 </div>
 <div class="radio">
  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'level',
     'id' => 'level',
     'value' => 'Verbal',

   );


   ?>

   <?php echo form_radio($data); ?>
   Verbal
 </label>
</div>
<div class="radio">
  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'level',
     'id' => 'level',
     'value' => 'Pain',

   );


   ?>

   <?php echo form_radio($data); ?>
   Pain
 </label>
</div>

<div class="radio">
  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'level',
     'id' => 'level',
     'value' => 'Unresponsive',

   );


   ?>

   <?php echo form_radio($data); ?>
   Unresponsive
 </label>
</div>
<div class="radio">
  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'level',
     'id' => 'level',
     'checked' => 'checked',
     'value' => 'None',

   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>
</div>



</div>  





<div class="form-group">

 <?php echo form_label('Received From:'); ?>

 <?php

 $data = array(

   'class' => 'form-control',
   'name' => 'receivedFrom',
   'placeholder' => 'Enter Received From',
   'required' => 'true'

 );


 ?>

 <?php echo form_input($data); ?>

</div> 

<div class="form-group">

 <?php echo form_label('Transported To:'); ?>

 <?php

 $data = array(

   'class' => 'form-control',
   'name' => 'transportedTo',
   'placeholder' => 'Enter Transported to',
   'required' => 'true'

 );


 ?>

 <?php echo form_input($data); ?>

</div> 








<div class="form-group" >

 <h3>Type of Run:</h3>

 <div class="form-group">
   <div class="radio">
    <label>
      <?php

      $data = array(

       'type' => 'radio',
       'name' => 'run',
       'id' => 'run',
       'value' => 'Emergency Transport',

     );

     ?>

     <?php echo form_radio($data); ?>
     Emergency Transport
   </label>
 </div>
 <div class="radio">
  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'run',
     'id' => 'run',
     'value' => 'Emergency Transfer',

   );


   ?>

   <?php echo form_radio($data); ?>
   Emergency Transfer
 </label>
</div>
<div class="radio">
  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'run',
     'id' => 'run',
     'value' => 'No Transport',

   );


   ?>

   <?php echo form_radio($data); ?>
   No Transport
 </label>
</div>
<div class="radio">
  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'run',
     'id' => 'run',
     'value' => 'Routine',

   );


   ?>

   <?php echo form_radio($data); ?>
   Routine
 </label>
</div>
<div class="radio">
  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'run',
     'id' => 'run',
     'value' => ' Refused Transport',

   );


   ?>

   <?php echo form_radio($data); ?>
   Refused Transport
 </label>
</div>
<div class="radio">
  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'run',
     'id' => 'run',
     'value' => 'Request for Transport',

   );


   ?>

   <?php echo form_radio($data); ?>
   Request for Transport
 </label>
</div>
<div class="radio">
  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'run',
     'id' => 'run',
     'checked' => 'checked',
     'value' => 'None',

   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>
</div>




</div>



<hr>


          <a class="btn btn-primary btn-block margin-bottom" href="<?php echo base_url();?>Map">
            <span>Trauma Information</span>     

          </a>

<hr>


<div class="form-group">

 <?php echo form_label('Chief Complaint:'); ?>

 <?php

 $data = array(

   'class' => 'form-control',
   'name' => 'chiefComplaint',
   'placeholder' => 'Enter Chief Complaint'

 );


 ?>

 <?php echo form_textarea($data); ?>

</div> 




<hr>




<div class="form-group" >

 <h3>Injuries</h3>


 <div class="checkbox">
  <label>
    <?php

    $data = array(


     'type' => 'checkbox',
     'name' => 'injuries[]',
     'value' => 'Deformity'

   );


   ?>

   <?php echo form_checkbox($data); ?>
   Deformity 
 </label>
</div>


<div class="checkbox">
  <label>
    <?php

    $data = array(


     'type' => 'checkbox',
     'name' => 'injuries[]',
     'value' => 'Confusion'

   );


   ?>

   <?php echo form_checkbox($data); ?>
   Confusion 
 </label>
</div>


<div class="checkbox">
  <label>
    <?php

    $data = array(


     'type' => 'checkbox',
     'name' => 'injuries[]',
     'value' => 'Abrasion'

   );


   ?>

   <?php echo form_checkbox($data); ?>
   Abrasion
 </label>
</div>


<div class="checkbox">
  <label>
    <?php

    $data = array(


     'type' => 'checkbox',
     'name' => 'injuries[]',
     'value' => 'Puncture'

   );


   ?>

   <?php echo form_checkbox($data); ?>
   Puncture
 </label>
</div>

<div class="checkbox">
  <label>
    <?php

    $data = array(


     'type' => 'checkbox',
     'name' => 'injuries[]',
     'value' => 'Tenderness'

   );


   ?>

   <?php echo form_checkbox($data); ?>
   Tenderness 
 </label>
</div>


<div class="checkbox">
  <label>
    <?php

    $data = array(


     'type' => 'checkbox',
     'name' => 'injuries[]',
     'value' => 'Laceration'

   );


   ?>

   <?php echo form_checkbox($data); ?>
   Laceration  
 </label>
</div> 


<div class="checkbox">
  <label>
    <?php

    $data = array(


     'type' => 'checkbox',
     'name' => 'injuries[]',
     'value' => 'Swelling'

   );


   ?>

   <?php echo form_checkbox($data); ?>
   Swelling  
 </label>
</div> 
<div class="checkbox">
  <label>
    <?php

    $data = array(


     'type' => 'checkbox',
     'name' => 'injuries[]',
     'value' => 'Fracture'

   );


   ?>

   <?php echo form_checkbox($data); ?>
   Fracture  
 </label>
</div> 
<div class="checkbox">
  <label>
    <?php

    $data = array(


     'type' => 'checkbox',
     'name' => 'injuries[]',
     'value' => 'Dislocation'

   );


   ?>

   <?php echo form_checkbox($data); ?>
   Dislocation  
 </label>
</div> 
<div class="checkbox">
  <label>
    <?php

    $data = array(


     'type' => 'checkbox',
     'name' => 'injuries[]',
     'value' => 'Avuision'

   );


   ?>

   <?php echo form_checkbox($data); ?>
   Avuision  
 </label>
</div>
<div class="checkbox">
  <label>
    <?php

    $data = array(


     'type' => 'checkbox',
     'name' => 'injuries[]',
     'checked' => 'checked',
     'value' => 'None'

   );


   ?>

   <?php echo form_checkbox($data); ?>
   None  
 </label>
</div>  







</div>








<hr>

<h3 class="text-center">MOI(Mechanism of Injury)</h3>

<h5><strong>MVC(Motor Vehicle Crash)</strong></h5>
<div class="form-group">

 <?php echo form_label('Vehicle Involved:'); ?>

 <?php

 $data = array(

   'class' => 'form-control',
   'name' => 'vehicleInvolved',
   'placeholder' => 'Enter Vehicle Involved'

 );


 ?>

 <?php echo form_input($data); ?>

</div>

<div class="form-group">

 <?php echo form_label('Plate No.'); ?>

 <?php

 $data = array(

   'class' => 'form-control',
   'name' => 'plate',
   'placeholder' => 'Enter Plate'

 );


 ?>

 <?php echo form_input($data); ?>

</div>

<div class="form-group">


 <div class="checkbox">
  <label>
    <?php

    $data = array(

     'type' => 'checkbox',
     'name' => 'mvc[]',
     'value' => 'Head'

   );


   ?>

   <?php echo form_checkbox($data); ?>
   Head on
 </label>
</div>


<div class="checkbox">
  <label>
    <?php

    $data = array(

     'type' => 'checkbox',
     'name' => 'mvc[]',
     'value' => 'Rear'

   );


   ?>

   <?php echo form_checkbox($data); ?>
   Rear end
 </label>
</div>


<div class="checkbox">
  <label>
    <?php

    $data = array(

     'type' => 'checkbox',
     'name' => 'mvc[]',
     'value' => 'Lateral'

   );


   ?>

   <?php echo form_checkbox($data); ?>
   Lateral
 </label>
</div>


<div class="checkbox">
  <label>
    <?php

    $data = array(

     'type' => 'checkbox',
     'name' => 'mvc[]',
     'value' => 'Mvcrotations'

   );


   ?>

   <?php echo form_checkbox($data); ?>
   Rotation
 </label>
</div>
<div class="checkbox">
  <label>
    <?php

    $data = array(

     'type' => 'checkbox',
     'name' => 'mvc[]',
     'value' => 'Roll'

   );


   ?>

   <?php echo form_checkbox($data); ?>
   Roll over
 </label>
</div>

<div class="checkbox">
  <label>
    <?php

    $data = array(

     'type' => 'checkbox',
     'name' => 'mvc[]',
     'checked' => 'checked',
     'value' => 'None'

   );


   ?>

   <?php echo form_checkbox($data); ?>
   None
 </label>
</div>




</div>

<div class="form-group">

 <?php echo form_label('Others:'); ?>


 <?php

 $data = array(

   'type' => 'text',
   'class' => 'form-control',
   'name' => 'mvcothers'


 );


 ?>

 <?php echo form_input($data); ?>



</div> 

<h5><strong>Ped Vs. Vehicle</strong></h5>



<div class="form-group">


 <div class="checkbox">
  <label>
    <?php

    $data = array(

     'type' => 'checkbox',
     'name' => 'ped[]',
     'value' => 'Fall'

   );


   ?>

   <?php echo form_checkbox($data); ?>
   Fall
 </label>
</div>


<div class="checkbox">
  <label>
    <?php

    $data = array(

     'type' => 'checkbox',
     'name' => 'ped[]',
     'value' => 'Ejection'

   );


   ?>

   <?php echo form_checkbox($data); ?>
   Ejection
 </label>
</div>


<div class="checkbox">
  <label>
    <?php

    $data = array(

     'type' => 'checkbox',
     'name' => 'ped[]',
     'value' => 'Gsw'

   );


   ?>

   <?php echo form_checkbox($data); ?>
   GSW
 </label>
</div>


<div class="checkbox">
  <label>
    <?php

    $data = array(

     'type' => 'checkbox',
     'name' => 'ped[]',
     'value' => 'Stab'

   );


   ?>

   <?php echo form_checkbox($data); ?>
   Stab Wound
 </label>
</div>
<div class="checkbox">
  <label>
    <?php

    $data = array(

     'type' => 'checkbox',
     'name' => 'ped[]',
     'value' => 'Mauling'

   );


   ?>

   <?php echo form_checkbox($data); ?>
   Mauling
 </label>
</div>
<div class="checkbox">
  <label>
    <?php

    $data = array(

     'type' => 'checkbox',
     'name' => 'ped[]',
     'value' => 'Flail'

   );


   ?>

   <?php echo form_checkbox($data); ?>
   Flail Chest
 </label>
</div>
<div class="checkbox">
  <label>
    <?php

    $data = array(

     'type' => 'checkbox',
     'name' => 'ped[]',
     'value' => 'Burn'

   );


   ?>

   <?php echo form_checkbox($data); ?>
   Burn
 </label>
</div>


<div class="checkbox">
  <label>
    <?php

    $data = array(

     'type' => 'checkbox',
     'name' => 'ped[]',
     'checked' => 'checked',
     'value' => 'None'

   );


   ?>

   <?php echo form_checkbox($data); ?>
   None
 </label>
</div>



</div>

<div class="form-group">

 <?php echo form_label('Others:'); ?>


 <?php

 $data = array(

   'type' => 'text',
   'class' => 'form-control',
   'name' => 'pedothers'


 );


 ?>

 <?php echo form_input($data); ?>



</div> 

<hr>

<div class="form-group">
 <h3>TRIAGE INFORMATION:</h3>

 <div class="form-group">
   <div class="radio">
    <label>
      <?php

      $data = array(

       'type' => 'radio',
       'name' => 'tri',
       'id' => 'tri',
       'value' => 'Red',

     );

     ?>

     <?php echo form_radio($data); ?>
     Red
   </label>
 </div>
 <div class="radio">
  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'tri',
     'id' => 'tri',
     'value' => 'Yellow',

   );


   ?>

   <?php echo form_radio($data); ?>
   Yellow
 </label>
</div>
<div class="radio">
  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'tri',
     'id' => 'tri',
     'value' => 'Green',

   );


   ?>

   <?php echo form_radio($data); ?>
   Green
 </label>
</div>
<div class="radio">
  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'tri',
     'id' => 'tri',
     'value' => 'Black',

   );


   ?>

   <?php echo form_radio($data); ?>
   Black
 </label>
</div>
<div class="radio">
  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'tri',
     'id' => 'tri',
     'checked' => 'checked',
     'value' => 'None',

   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>
</div>



</div>


<hr>

<div class="form-group">


  <table class="table table-bordered">
    <tr>
      <th style="width: 40px">TIME</th>
      <th style="width: 40px">PR(Pulse Rate)</th>
      <th style="width: 40px">RR(Respiratory Rate)</th>
      <th style="width: 40px">BP(Blood Pressure)</th>
      <th style="width: 40px">Spo2(Oxygen Saturation)</th>
    </tr>
    <tr>
      <td>

       <?php

       $data = array(

         'type' => 'text',
         'class' => 'form-control timepicker',
         'name' => 'time1'


       );


       ?>

       <?php echo form_input($data); ?>





     </td>


     <td>


      <?php

      $data = array(


       'class' => 'form-control',
       'name' => 'pr1',
       'id' => 'pr1',
       'type' => 'number',
       'pattern' => '[0-9]*',
       'required' => 'true',
       'placeholder' => 'Enter PR'

     );


     ?>

     <?php echo form_input($data); ?>


   </td>


   <td>


    <?php

    $data = array(


     'class' => 'form-control',
     'name' => 'rr1',
     'type' => 'number',
     'pattern' => '[0-9]*',
     'placeholder' => 'Enter RR'

   );


   ?>

   <?php echo form_input($data); ?>

 </td>


 <td>

  <?php

  $data = array(

   'class' => 'form-control',
   'name' => 'bp1',
   'placeholder' => 'Enter BP'

 );


 ?>

 <?php echo form_input($data); ?>




</td>

<td>

  <?php

  $data = array(

   'class' => 'form-control',
   'name' => 'spo21',
   'type' => 'number',
   'pattern' => '[0-9]*',
   'placeholder' => 'Enter Spo2'

 );


 ?>

 <?php echo form_input($data); ?>





</td>





</tr>




<tr>
  <td>

   <?php

   $data = array(

     'type' => 'text',
     'class' => 'form-control timepicker',
     'name' => 'time2'


   );


   ?>

   <?php echo form_input($data); ?>





 </td>


 <td>


  <?php

  $data = array(


   'class' => 'form-control',
   'name' => 'pr2',
   'type' => 'number',
   'pattern' => '[0-9]*',
   'placeholder' => 'Enter PR'

 );


 ?>

 <?php echo form_input($data); ?>



</td>


<td>


  <?php

  $data = array(


   'class' => 'form-control',
   'name' => 'rr2',
   'type' => 'number',
   'pattern' => '[0-9]*',
   'placeholder' => 'Enter RR'

 );


 ?>

 <?php echo form_input($data); ?>

</td>


<td>

  <?php

  $data = array(

   'class' => 'form-control',
   'name' => 'bp2',
   'placeholder' => 'Enter BP'

 );


 ?>

 <?php echo form_input($data); ?>




</td>

<td>

  <?php

  $data = array(

   'class' => 'form-control',
   'name' => 'spo22',
   'type' => 'number',
   'pattern' => '[0-9]*',
   'placeholder' => 'Enter Spo2'

 );


 ?>

 <?php echo form_input($data); ?>





</td>





</tr>


<tr>
  <td>

   <?php

   $data = array(

     'type' => 'text',
     'class' => 'form-control timepicker',
     'name' => 'time3'


   );


   ?>

   <?php echo form_input($data); ?>





 </td>


 <td>


  <?php

  $data = array(


   'class' => 'form-control',
   'name' => 'pr3',
   'type' => 'number',
   'pattern' => '[0-9]*',
   'placeholder' => 'Enter PR'

 );


 ?>

 <?php echo form_input($data); ?>



</td>


<td>


  <?php

  $data = array(


   'class' => 'form-control',
   'name' => 'rr3',
   'type' => 'number',
   'pattern' => '[0-9]*',
   'placeholder' => 'Enter RR'

 );


 ?>

 <?php echo form_input($data); ?>

</td>


<td>

  <?php

  $data = array(

   'class' => 'form-control',
   'name' => 'bp3',
   'placeholder' => 'Enter BP'

 );


 ?>

 <?php echo form_input($data); ?>




</td>

<td>

  <?php

  $data = array(

   'class' => 'form-control',
   'name' => 'spo23',
   'type' => 'number',
   'pattern' => '[0-9]*',
   'placeholder' => 'Enter Spo2'

 );


 ?>

 <?php echo form_input($data); ?>





</td>





</tr>







</table>



</div>











<hr>







<label>Skin Color</label>
<div class="form-group">
 <div class="radio">
  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'skinColor',
     'id' => 'skinColor',
     'value' => 'Normal',

   );

   ?>

   <?php echo form_radio($data); ?>
   Normal
 </label>
</div>
<div class="radio">
  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'skinColor',
     'id' => 'skinColor',
     'value' => 'Pale',

   );


   ?>

   <?php echo form_radio($data); ?>
   Pale
 </label>
</div>
<div class="radio">
  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'skinColor',
     'id' => 'skinColor',
     'value' => 'Flushed',

   );


   ?>

   <?php echo form_radio($data); ?>
   Flushed
 </label>
</div>
<div class="radio">
  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'skinColor',
     'id' => 'skinColor',
     'value' => 'Cyanotic',

   );


   ?>

   <?php echo form_radio($data); ?>
   Cyanotic
 </label>
</div>
<div class="radio">
  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'skinColor',
     'id' => 'skinColor',
     'checked' => 'checked',
     'value' => 'None',

   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>
</div>




<hr>





<label>Temperature</label>
<div class="form-group">
 <div class="radio">
  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'temp',
     'id' => 'temp',
     'value' => 'Warm',

   );


   ?>

   <?php echo form_radio($data); ?>
   Warm
 </label>
</div>
<div class="radio">
  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'temp',
     'id' => 'temp',
     'value' => 'Cool',

   );


   ?>

   <?php echo form_radio($data); ?>
   Cool
 </label>
</div>
<div class="radio">
  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'temp',
     'id' => 'temp',
     'value' => 'Hot',

   );


   ?>

   <?php echo form_radio($data); ?>
   Hot
 </label>
</div>
<div class="radio">
  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'temp',
     'id' => 'temp',
     'checked' => 'checked',
     'value' => 'None',

   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>
</div>




<hr>




<h3 class="text-center">Pupil</h3>

<div class="form-group">

  <label>Left:</label>&nbsp;&nbsp;

  <?php

  $data = array(

   'normal' => 'Normal',
   'dilated' => 'Dilated',
   'constriction' => 'Constriction',
   'non-responsive' => 'Non-responsive'

 );


 ?>

 <?php echo form_dropdown('left', $data); ?>
</div> 





<div class="form-group">

  <label>Right:</label>&nbsp;&nbsp;

  <?php

  $data = array(

   'normal' => 'Normal',
   'dilated' => 'Dilated',
   'constriction' => 'Constriction',
   'non-responsive' => 'Non-responsive'


 );


 ?>

 <?php echo form_dropdown('right', $data); ?>
</div> 



<hr>








<h2 class="text-center">Sample History</h2>


<div class="form-group">

 <?php echo form_label('Sign & Symptoms:'); ?>

 <?php

 $data = array(

   'class' => 'form-control',
   'name' => 'signAndSymptoms',
   'placeholder' => 'Enter Sign & Symptoms'

 );


 ?>

 <?php echo form_input($data); ?>

</div>

<div class="form-group">

 <?php echo form_label('Allergies:'); ?>

 <?php

 $data = array(

   'class' => 'form-control',
   'name' => 'allergies',
   'placeholder' => 'Enter Allergies'

 );


 ?>

 <?php echo form_input($data); ?>

</div>

<div class="form-group">

 <?php echo form_label('Medications:'); ?>

 <?php

 $data = array(

   'class' => 'form-control',
   'name' => 'medication',
   'placeholder' => 'Enter  Medication'

 );


 ?>

 <?php echo form_input($data); ?>

</div>






<div class="form-group">

  <label> Past and Present Medical History:</label>

  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'medicalHistory[]',
       'id' => '',
       'value' => 'HTN'




     );


     ?>

     <?php echo form_checkbox($data); ?>
     HTN
   </label>
 </div>

 <div class="checkbox">
  <label>
    <?php

    $data = array(

     'type' => 'checkbox',
     'name' => 'medicalHistory[]',
     'id' => '',
     'value' => 'DM'


   );


   ?>

   <?php echo form_checkbox($data); ?>
   DM
 </label>
</div>
<div class="checkbox">
  <label>
    <?php

    $data = array(


     'type' => 'checkbox',
     'name' => 'medicalHistory[]',
     'id' => '',
     'value' => 'CVA'


   );


   ?>

   <?php echo form_checkbox($data); ?>
   CVA
 </label>
</div>
<div class="checkbox">
  <label>
    <?php

    $data = array(


     'type' => 'checkbox',
     'name' => 'medicalHistory[]',
     'id' => '',
     'value' => 'MI'


   );


   ?>

   <?php echo form_checkbox($data); ?>
   MI
 </label>
</div>
<div class="checkbox">
  <label>
    <?php

    $data = array(


      'type' => 'checkbox',
      'name' => 'medicalHistory[]',
      'id' => '',
      'value' => 'ASTHMA'

    );


    ?>

    <?php echo form_checkbox($data); ?>
    ASTHMA
  </label>
</div>

<div class="checkbox">
  <label>
    <?php

    $data = array(


      'type' => 'checkbox',
      'name' => 'medicalHistory[]',
      'checked' => 'checked',
      'value' => 'None'

    );


    ?>

    <?php echo form_checkbox($data); ?>
    None
  </label>
</div>




</div>

<div class="form-group">

 <?php echo form_label('Others:'); ?>

 <?php

 $data = array(

   'class' => 'form-control',
   'name' => 'others'


 );


 ?>

 <?php echo form_input($data); ?>

</div>





<div class="form-group">

 <?php echo form_label('Last Oral Intake:'); ?>

 <?php

 $data = array(

   'class' => 'form-control',
   'name' => 'lastOralIntake',
   'placeholder' => 'Enter Last Oral Intake'

 );


 ?>

 <?php echo form_input($data); ?>

</div>

<div class="form-group">

 <?php echo form_label('Events Prior to Incident:'); ?>

 <?php

 $data = array(

   'class' => 'form-control',
   'name' => 'eventsPrior',
   'placeholder' => 'Enter Events Prior to Incident'

 );


 ?>

 <?php echo form_input($data); ?>

</div>

<hr>

<h3>OB HISTORY</h3>

<div class="form-group">

 <?php echo form_label('LMP:(Last Menstrual Period)'); ?>

 <?php

 $data = array(

  'type' => 'text',
  'id' => 'datepicker3',
  'class' => 'form-control',
  'name' => 'lmp',
  'placeholder' => 'Enter LMP'

);


?>

<?php echo form_input($data); ?>

</div>

<div class="form-group">

 <?php echo form_label('AOG:(Age of Gestation)'); ?>

 <?php

 $data = array(

  'type' => 'text',
  'class' => 'form-control',
  'id' => 'datepicker4',
  'name' => 'aog',
  'placeholder' => 'Enter AOG'

);


?>

<?php echo form_input($data); ?>

</div>

<div class="form-group">

 <?php echo form_label('EDD:(Estimated Date of Delivery)'); ?>

 <?php

 $data = array(

  'type' => 'text',
  'class' => 'form-control',
  'id' => 'datepicker5',
  'name' => 'edd',
  'placeholder' => 'Enter EDD'

);


?>

<?php echo form_input($data); ?>

</div>

<div class="form-group">

 <?php echo form_label('G:(Gravida)'); ?>

 <?php

 $data = array(

   'class' => 'form-control',
   'name' => 'gOb',
   'placeholder' => 'Enter G'

 );


 ?>

 <?php echo form_input($data); ?>

</div>

<div class="form-group">

 <?php echo form_label('P:(Para)'); ?>

 <?php

 $data = array(

   'class' => 'form-control',
   'name' => 'pOb',
   'placeholder' => 'Enter P'

 );


 ?>

 <?php echo form_input($data); ?>

</div>




<hr>




<h3>Pale Rate Scale of 1-10</h3>

<div class="form-group">

 <?php echo form_label('Initial:'); ?>

 <?php

 $data = array(

  'type' => 'number',  
  'class' => 'form-control',
  'name' => 'initial',
  'placeholder' => 'Enter Initial'

);


?>

<?php echo form_input($data); ?>

</div>

<div class="form-group">

 <?php echo form_label('Final:'); ?>

 <?php

 $data = array(

   'type' => 'number', 
   'class' => 'form-control',
   'name' => 'final',
   'placeholder' => 'Enter Final'

 );


 ?>

 <?php echo form_input($data); ?>

</div>


<hr>



<h3>Pedia</h3>

<div class="form-group">

 <?php echo form_label('Sex:'); ?>

 <?php

 $data = array(

   'type' => 'text',
   'class' => 'form-control',
   'id' => 'datepicker6',
   'name' => 'sexPedia',
   'placeholder' => ''

 );


 ?>

 <?php echo form_input($data); ?>

</div>

<div class="form-group">

 <?php echo form_label('Baby out:'); ?>

 <?php

 $data = array(

  'type' => 'text',
  'class' => 'form-control',
  'id' => 'datepicker7',
  'name' => 'babyOut',
  'placeholder' => 'Enter Baby out'

);


?>

<?php echo form_input($data); ?>

</div>

<div class="form-group">

 <?php echo form_label('Placenta out:'); ?>

 <?php

 $data = array(

   'type' => 'text',
   'class' => 'form-control',
   'id' => 'datepicker8',
   'name' => 'placentaOut',
   'placeholder' => 'Enter Placenta out'

 );


 ?>

 <?php echo form_input($data); ?>

</div>

<hr>

<div class="form-group margin-top">

  <label class="margin-top">Narrative</label>

  <?php

  $data = array(

   'class' => 'form-control margin-bottom',
   'name' => 'narrative',

 );


 ?>

 <?php echo form_textarea($data); ?>

</div>




<hr>


<h3 class="text-center">BLS TREATMENT</h3>

<label>Circulation</label>
<div class="form-group">
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'circulation[]',
       'id' => '',
       'value' => 'Bleeding'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     Bleeding
   </label>
 </div>

 <div class="checkbox">
  <label>
    <?php

    $data = array(

     'type' => 'checkbox',
     'name' => 'circulation[]',
     'id' => '',
     'value' => 'Control'




   );


   ?>

   <?php echo form_checkbox($data); ?>
   Control
 </label>
</div>
<div class="checkbox">
  <label>
    <?php

    $data = array(

     'type' => 'checkbox',
     'name' => 'circulation[]',
     'id' => '',
     'value' => 'Shock'




   );


   ?>

   <?php echo form_checkbox($data); ?>
   Shock
 </label>
</div>
<div class="checkbox">
  <label>
    <?php

    $data = array(

     'type' => 'checkbox',
     'name' => 'circulation[]',
     'id' => '',
     'value' => 'Position'




   );


   ?>

   <?php echo form_checkbox($data); ?>
   Position
 </label>
</div>


<div class="checkbox">
  <label>
    <?php

    $data = array(

     'type' => 'checkbox',
     'name' => 'circulation[]',
     'checked' => 'checked',
     'value' => 'None'




   );


   ?>

   <?php echo form_checkbox($data); ?>
   None
 </label>
</div>


</div>




<hr>

<label>Airway Breathing</label>
<div class="form-group">
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'breathing[]',
       'id' => '',
       'value' => 'OPA'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     OPA
   </label>
 </div>

 <div class="checkbox">
  <label>
    <?php

    $data = array(

     'type' => 'checkbox',
     'name' => 'breathing[]',
     'id' => '',
     'value' => 'NPA'




   );


   ?>

   <?php echo form_checkbox($data); ?>
   NPA
 </label>
</div>
<div class="checkbox">
  <label>
    <?php

    $data = array(

     'type' => 'checkbox',
     'name' => 'breathing[]',
     'id' => '',
     'value' => 'Cannula'




   );


   ?>

   <?php echo form_checkbox($data); ?>
   Cannula
 </label>
</div>
<div class="checkbox">
  <label>
    <?php

    $data = array(

     'type' => 'checkbox',
     'name' => 'breathing[]',
     'id' => '',
     'value' => 'SFM'




   );


   ?>

   <?php echo form_checkbox($data); ?>
   SFM
 </label>
</div>
<div class="checkbox">
  <label>
    <?php

    $data = array(

     'type' => 'checkbox',
     'name' => 'breathing[]',
     'id' => '',
     'value' => 'BVM'




   );


   ?>

   <?php echo form_checkbox($data); ?>
   BVM
 </label>
</div>


<div class="checkbox">
  <label>
    <?php

    $data = array(

     'type' => 'checkbox',
     'name' => 'breathing[]',
     'checked' => 'checked',
     'value' => 'None'




   );


   ?>

   <?php echo form_checkbox($data); ?>
   None
 </label>
</div>






<div>
  <label>lpm</label>
  <?php

  $data = array(

    'class' => 'form-control',
    'name' => 'lpm',
    'placeholder' => 'Enter lpm'




  );


  ?>

  <?php echo form_input($data); ?>
</div>
</div>
<hr>





<label>Extrication/Immobilization</label>
<div class="form-group">
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'immobilization[]',
       'id' => '',
       'value' => 'Collar'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     C/X Collar
   </label>
 </div>

 <div class="checkbox">
  <label>
    <?php

    $data = array(

     'type' => 'checkbox',
     'name' => 'immobilization[]',
     'id' => '',
     'value' => 'Block'




   );


   ?>

   <?php echo form_checkbox($data); ?>
   Head Block
 </label>
</div>
<div class="checkbox">
  <label>
    <?php

    $data = array(

     'type' => 'checkbox',
     'name' => 'immobilization[]',
     'id' => '',
     'value' => 'Splint'




   );


   ?>

   <?php echo form_checkbox($data); ?>
   Splint
 </label>
</div>
<div class="checkbox">
  <label>
    <?php

    $data = array(

     'type' => 'checkbox',
     'name' => 'immobilization[]',
     'id' => '',
     'value' => 'Spine'




   );


   ?>

   <?php echo form_checkbox($data); ?>
   Spine Board
 </label>
</div>


<div class="checkbox">
  <label>
    <?php

    $data = array(

     'type' => 'checkbox',
     'name' => 'immobilization[]',
     'checked' => 'checked',
     'value' => 'None'




   );


   ?>

   <?php echo form_checkbox($data); ?>
   None
 </label>
</div>




</div>
<hr>













<h3 class="text-center">CPR INFORMATION</h3>




<div class="form-group">

  <div class="radio">
    <label>
      <?php

      $data = array(

       'type' => 'radio',
       'name' => 'arrest',
       'id' => 'arrest',
       'value' => 'Witnessed',

     );


     ?>

     <?php echo form_radio($data); ?>
     Witnessed Arrest
   </label>
 </div>



 <div class="radio">
  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'arrest',
     'id' => 'arrest',
     'value' => 'Unwitnessed',

   );


   ?>

   <?php echo form_radio($data); ?>
   Un-witnessed Arrest
 </label>
</div>

<div class="radio">
  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'arrest',
     'id' => 'arrest',
     'checked' => 'checked',
     'value' => 'None'

   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>


</div>






<div class="form-group">

 <?php echo form_label('Cycle of CPR:'); ?>

 <?php

 $data = array(

   'class' => 'form-control',
   'name' => 'cpr',
   'placeholder' => 'Enter Cycle of CPR'

 );


 ?>

 <?php echo form_input($data); ?>

</div>


<label>Pulse Restored</label>
<div class="form-group">

 <div class="radio">
  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'pulse',
     'id' => 'pulse',
     'value' => 'Yes',

   );


   ?>

   <?php echo form_radio($data); ?>
   Yes
 </label>
</div>


<div class="radio">
  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'pulse',
     'id' => 'pulse',
     'value' => 'No',

   );


   ?>

   <?php echo form_radio($data); ?>
   No
 </label>
</div>

<div class="radio">
  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'pulse',
     'id' => 'pulse',
     'checked' => 'checked',
     'value' => 'None',

   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>


</div>

<hr>




<label> Disposition</label>
<div class="form-group">

  <div class="radio">
    <label>
      <?php

      $data = array(

       'type' => 'radio',
       'name' => 'disposition',
       'id' => 'disposition',
       'value' => 'Improved',

     );


     ?>

     <?php echo form_radio($data); ?>
     Improved
   </label>
 </div>
 <div class="radio">
  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'disposition',
     'id' => 'disposition',
     'value' => 'Unchanged',

   );


   ?>

   <?php echo form_radio($data); ?>
   Unchanged
 </label>
</div>
<div class="radio">
  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'disposition',
     'id' => 'disposition',
     'value' => 'Expired',

   );


   ?>

   <?php echo form_radio($data); ?>
   Expired
 </label>
</div>
<div class="radio">
  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'disposition',
     'id' => 'disposition',
     'checked' => 'checked',
     'value' => 'None',

   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>
</div>



<label>Pending Equipment</label>
<div class="form-group">
 <div class="checkbox">
  <label>
    <?php

    $data = array(

     'type' => 'checkbox',
     'name' => 'pending[]',
     'id' => '',
     'value' => 'Stretcher'




   );


   ?>

   <?php echo form_checkbox($data); ?>
   Stretcher
 </label>
</div>
<div class="checkbox">
  <label>
    <?php

    $data = array(

     'type' => 'checkbox',
     'name' => 'pending[]',
     'id' => '',
     'value' => 'Spine'




   );


   ?>

   <?php echo form_checkbox($data); ?>
   Spine Board
 </label>
</div>
<div class="checkbox">
  <label>
    <?php

    $data = array(

     'type' => 'checkbox',
     'name' => 'pending[]',
     'id' => '',
     'value' => 'Collar'




   );


   ?>

   <?php echo form_checkbox($data); ?>
   C Collar
 </label>
</div>
<div class="checkbox">
  <label>
    <?php

    $data = array(

     'type' => 'checkbox',
     'name' => 'pending[]',
     'id' => '',
     'value' => 'Splint'




   );


   ?>

   <?php echo form_checkbox($data); ?>
   Splint
 </label>
</div>

<div class="checkbox">
  <label>
    <?php

    $data = array(

     'type' => 'checkbox',
     'name' => 'pending[]',
     'checked' => 'checked',
     'value' => 'None'




   );


   ?>

   <?php echo form_checkbox($data); ?>
   None
 </label>
</div>



</div>

<hr>

<div class="form-group">

  <?php echo form_label('Ambulance Driver:'); ?>
  <select class="form-control" name="ambulanceDriver">
    <?php 

    foreach($groups2 as $row)
    { 
      echo '<option value="'.$row->crewn.'">'.$row->crewn.'</option>';
    }
    ?>

  </select>


</div>






<div class="form-group">


  <?php echo form_label('Ambulance Crew:'); ?>
  <br>


  <?php echo form_label('1:'); ?>
  <select class="form-control" name="crew1">
    <?php 

    foreach($groups as $row)
    { 
      echo '<option value="'.$row->crewn.'">'.$row->crewn.'</option>';
    }
    ?>

  </select>





<?php echo form_label('2:'); ?>
<select class="form-control" name="crew2">
  <?php 

  foreach($groups as $row)
  { 
    echo '<option value="'.$row->crewn.'">'.$row->crewn.'</option>';
  }
  ?>

</select>

<?php echo form_label('3:'); ?>
<select class="form-control" name="crew3">
  <?php 

  foreach($groups as $row)
  { 
    echo '<option value="'.$row->crewn.'">'.$row->crewn.'</option>';
  }
  ?>

</select>

<?php echo form_label('4:'); ?>
<select class="form-control" name="crew4">
  <?php 

  foreach($groups as $row)
  { 
    echo '<option value="'.$row->crewn.'">'.$row->crewn.'</option>';
  }
  ?>

</select>

<?php echo form_label('5:'); ?>
<select class="form-control" name="crew5">
  <?php 

  foreach($groups as $row)
  { 
    echo '<option value="'.$row->crewn.'">'.$row->crewn.'</option>';
  }
  ?>

</select>

<?php echo form_label('6:'); ?>
<select class="form-control" name="crew6">
  <?php 

  foreach($groups as $row)
  { 
    echo '<option value="'.$row->crewn.'">'.$row->crewn.'</option>';
  }
  ?>

</select>






</div>



<hr>


<div class="form-group">

 <?php echo form_label('Endorsed By:'); ?>

 <?php

 $data = array(

   'class' => 'form-control',
   'name' => 'endorsedBy',
   'placeholder' => 'Enter Endorsed By',
   'required' => 'true'

 );


 ?>

 <?php echo form_input($data); ?>

</div>

<div class="form-group">

 <?php echo form_label('Received By:'); ?>

 <?php

 $data = array(

   'class' => 'form-control',
   'name' => 'receivedBy',
   'placeholder' => 'Enter Received By',
   'required' => 'true'

 );


 ?>

 <?php echo form_input($data); ?>

</div>


<div class="form-group">
  
 
   
      <h1>Sign Below !</h1>
      <div class="signature-pad" id="signature-pad">
        <div class="m-signature-pad">
          <div class="m-signature-pad-body">
            <canvas width="625" height="318"></canvas>
          </div>
        </div>
        <div class="m-signature-pad-footer">
          <button type="button"  id="save2" data-action="save" class="btn btn-primary"><i class="fa fa-check"></i> Save</button>
          <button type="button" data-action="clear"  class="btn btn-danger"><i class="fa fa-trash-o"></i> Clear</button>
        </div>
      </div>
    
  


</div>

<input type="hidden" value="<?php echo rand();?>" id="rowno">












<div class="form-group">


 <?php

 $data = array(

   'class' => 'btn btn-primary',
   'name' => 'submit',
   'value' => 'Create'

 );


 ?>



 <?php echo form_submit($data); ?>



</div>

<?php echo form_close();?>









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