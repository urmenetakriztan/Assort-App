
<!-- Content Header (Page header) -->
<section class="content-header">
 <h1>
  Patients Manager
  <small></small>
</h1>
<ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Edit</a></li>
  <li class="active">Patients Manager</li>
</ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-3">

      <a class="btn btn-primary btn-block" href="<?php echo base_url();?>Patients/Archive2/<?php echo $patient_data->id; ?>">
        <span>Archive</span>     
      </a>
      <a class="btn btn-primary btn-block margin-bottom" href="<?php echo base_url();?>Patients">
        <span>Home</span>    
      </a>

    </div>
    <!-- /.col -->




    <div class="col-md-9">
      <div class="panel panel-primary">
        <div class="panel-heading"><h2>Patient Name:</h2><h4> <?php echo $patient_data->name; ?></h4></div>
        <!-- /.box-header -->
        <div class="panel-body">

         <?php $attributes = array('id'=>'create_form', 'class'=> 'form_horizontal'); ?>

         <?php echo validation_errors("<p class='bg-danger'>"); ?>

         <?php echo form_open('Patients/Edit2/'. $patient_data->id . '', $attributes);?>


         <?php foreach($patient_data2 as  $s):?> 



           <div class="form-group">


             <?php echo form_label('City:'); ?>


             <?php

             $data = array(

               'tacloban' => 'Tacloban',
               'other' => 'Other'


             );


             ?>

             <?php echo form_dropdown('city', $data, $patient_data->city
           ); ?>
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

           <?php echo form_dropdown('incidentType', $data, $patient_data->incidentType); ?>
         </div> 






         <div class="form-group">
          <?php echo form_label('Incident Location:'); ?>


          <?php

          $data = array(

           'class' => 'form-control',
           'name' => 'incidentLocation',

           'value' => $patient_data->incidentLocation

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

         <?php echo form_dropdown('callReceivedFrom', $data, $patient_data->callReceivedFrom
       ); ?>
     </div>










     <div class="form-group">
      <?php echo form_label('Date:'); ?>


      <?php

      $data = array(

       'type' => 'text',
       'class' => 'form-control',
       'name' => 'date',
       'id' => 'datepicker',
       'value' => $patient_data->date

     );


     ?>



     <?php echo form_input($data); ?>

   </div>  




   <div class="form-group">
    <h3>Patient Type:</h3>






    <?php  $patientType = $s->patientType; 

    if($patientType == "Medical"){?>

     <div class="radio">
      <label>
        <input type="radio" name="patientType" id="" value="Medical" checked>
        Medical
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="patientType" id="" value="Obgyne">
        Obgyne
      </label>
    </div>
    <div class="radio">
     <label>
      <input type="radio" name="patientType" id="" value="Psychiatric">
      Psychiatric
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="patientType" id="" value="Trauma">
      Trauma
    </label>
  </div>
  <div class="radio">
   <label>
    <input type="radio" name="patientType" id="" value="Pediatric">
    Pediatric
  </label>
</div>
<div class="radio">
 <label>
  <input type="radio" name="patientType" id="" value="None">
  None
</label>
</div>

<?php } ?>

<?php

if($patientType == "Obgyne"){?>

  <div class="radio">

    <label>
      <?php

      $data = array(

       'type' => 'radio',
       'name' => 'patientType',
       'value' => 'Medical'

     );

     ?>

     <?php echo form_radio($data); ?>
     Medical
   </label>
 </div >
 <div class="radio">
  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'patientType',
     'checked' => 'checked',
     'value' => 'Obgyne'

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
     'value' => 'Psychiatric'

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
     'value' => 'Trauma'

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
     'value' => 'Pediatric'

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
     'value' => 'None'

   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>


<?php } ?>





<?php

if($patientType == "Psychiatric"){?>

 <div class="radio">

  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'patientType',
     'value' => 'Medical'

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
     'value' => 'Obgyne'

   );


   ?>

   <?php echo form_radio($data); ?>
   Obgyne
 </label>
</div>
<div class="radio" >
  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'patientType',
     'checked' => 'checked',
     'value' => 'Psychiatric'

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
     'value' => 'Trauma'

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
     'value' => 'Pediatric'

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
     'value' => 'None'

   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>



<?php } ?>






<?php

if($patientType == "Trauma"){?>

 <div class="radio">

  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'patientType',
     'value' => 'Medical'

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
     'value' => 'Obgyne'

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
     'value' => 'Psychiatric'

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
     'checked' => 'checked',
     'value' => 'Trauma'

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
     'value' => 'Pediatric'

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
     'value' => 'None'

   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>



<?php } ?>






<?php

if($patientType == "Pediatric"){?>

 <div class="radio">

  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'patientType',
     'value' => 'Medical'

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
     'value' => 'Obgyne'

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
     'value' => 'Psychiatric'

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
     'value' => 'Trauma'

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
     'checked' => 'checked',
     'value' => 'Pediatric'

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
     'value' => 'None'

   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>



<?php } ?>




<?php

if($patientType == "None"){?>

 <div class="radio">

  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'patientType',
     'value' => 'Medical'

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
     'value' => 'Obgyne'

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
     'value' => 'Psychiatric'

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
     'value' => 'Trauma'

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
     'value' => 'Pediatric'

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
     'checked' => 'checked',
     'value' => 'None'

   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>



<?php }?>







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
   'value' => $patient_data->timeCallReceived

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
    'id' => 'reservationtime2',
    'value' => $patient_data->timeAtScene


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
    'id' => 'reservationtime3',
    'value' => $patient_data->timeEndorsed


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

 <?php echo form_dropdown('ambulance', $data, $patient_data->ambulance); ?>

</div>

<div class="form-group">
  <?php echo form_label('Name'); ?>


  <?php

  $data = array(

   'class' => 'form-control',
   'name' => 'name',

   'value' => $patient_data->name

 );


 ?>



 <?php echo form_input($data); ?>

</div> 



<div class="form-group">
  <?php echo form_label('Birth Date:'); ?>


  <?php

  $data = array(

   'type' => 'text',
   'class' => 'form-control',
   'name' => 'birthDate',
   'id' => 'datepicker2',
   'value' => $patient_data->birthDate

 );


 ?>



 <?php echo form_input($data); ?>

</div>






<div class="form-group">
  <?php echo form_label('Age'); ?>


  <?php

  $data = array(

   'class' => 'form-control',
   'id' => 'age',
   'name' => 'age',
   'readonly'=>'true',
   'value' => $patient_data->age

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

 <?php echo form_dropdown('sex', $data, $patient_data->sex); ?>

</div>

<div class="form-group">
  <?php echo form_label('Address:'); ?>


  <?php

  $data = array(

   'class' => 'form-control',
   'name' => 'address',

   'value' => $patient_data->address

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

   'value' => $patient_data->contactNumber

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

 <?php echo form_dropdown('phMember', $data, $patient_data->phMember); ?>
</div>









<div class="form-group">
  <h3>Level of Consciousness:</h3>


  <div>

    <?php  $level = $s->level; 

    if($level == "Alert"){?>

     <div class="radio">

      <label>
        <?php

        $data = array(

          'type' => 'radio',
          'name' => 'level',
          'checked' => 'checked',
          'value' => 'Alert'

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
         'value' => 'Verbal'

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
       'value' => 'Pain'


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
     'value' => 'Unresponsive'


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
     'value' => 'None'


   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>





<?php } ?>


<?php  

if($level == "Verbal"){?>

 <div class="radio">

  <label>
    <?php

    $data = array(

      'type' => 'radio',
      'name' => 'level',
      'value' => 'Alert'

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
     'checked' => 'checked',
     'value' => 'Verbal'

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
     'value' => 'Pain'


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
     'value' => 'Unresponsive'


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
     'value' => 'None'


   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>





<?php } ?>


<?php  

if($level == "Pain"){?>

 <div class="radio">

  <label>
    <?php

    $data = array(

      'type' => 'radio',
      'name' => 'level',
      'value' => 'Alert'

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
     'value' => 'Verbal'

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
     'checked' => 'checked',
     'value' => 'Pain'


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
     'value' => 'Unresponsive'


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
     'value' => 'None'


   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>





<?php } ?>

<?php  

if($level == "Unresponsive"){?>

 <div class="radio">

  <label>
    <?php

    $data = array(

      'type' => 'radio',
      'name' => 'level',
      'value' => 'Alert'

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
     'value' => 'Verbal'

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
     'value' => 'Pain'

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
     'checked' => 'checked',
     'value' => 'Unresponsive'


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
     'value' => 'None'


   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>





<?php } ?>


<?php  

if($level == "None"){?>

 <div class="radio">

  <label>
    <?php

    $data = array(

      'type' => 'radio',
      'name' => 'level',
      'value' => 'Alert'

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
     'value' => 'Verbal'

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
     'value' => 'Pain'

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
     'value' => 'Unresponsive'


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
     'checked' => 'checked',
     'value' => 'None'


   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>





<?php } ?>











</div>
</div>









<div class="form-group">

 <?php echo form_label('Received From:'); ?>

 <?php

 $data = array(

   'class' => 'form-control',
   'name' => 'receivedFrom',
   'value' => $patient_data->receivedFrom

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
   'value' => $patient_data->transportedTo

 );


 ?>

 <?php echo form_input($data); ?>

</div> 




<div class="form-group">
  <h3>Type of Run:</h3>


  <div>

   <?php  $run = $s->run; 

   if($run == "Emergency Transport"){?>

     <div class="radio">

      <label>
        <?php

        $data = array(

         'type' => 'radio',
         'name' => 'run',
         'id' => 'run',
         'checked' => 'checked',
         'value' => 'Emergency Transport'

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
       'value' => 'Emergency Transfer'

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
     'value' => 'No Transport'

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
     'value' => 'Routine'

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
     'value' => 'Refused Transport'

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
     'value' => 'Request for Transport'

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
     'value' => 'none'

   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>

<?php } ?>







<?php

if($run == "Emergency Transfer"){?>

 <div class="radio">

  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'run',
     'id' => 'run',
     'value' => 'Emergency Transport'

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
     'checked' => 'checked',
     'value' => 'Emergency Transfer'

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
     'value' => 'No Transport'

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
     'value' => 'Routine'

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
     'value' => 'Refused Transport'

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
     'value' => 'Request for Transport'

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
     'value' => 'none'

   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>




<?php } ?>











<?php

if($run == "No Transport"){?>

 <div class="radio">

  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'run',
     'id' => 'run',
     'value' => 'Emergency Transport'

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
     'value' => 'Emergency Transfer'

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
     'checked' => 'checked',
     'value' => 'No Transport'

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
     'value' => 'Routine'

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
     'value' => 'Refused Transport'

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
     'value' => 'Request for Transport'

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
     'value' => 'none'

   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>


<?php } ?>











<?php

if($run == "Routine"){?>

 <div class="radio">

  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'run',
     'id' => 'run',
     'value' => 'Emergency Transport'

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
     'value' => 'Emergency Transfer'

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
     'value' => 'No Transport'

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
     'checked' => 'checked',
     'value' => 'Routine'

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
     'value' => 'Refused Transport'

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
     'value' => 'Request for Transport'

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
     'value' => 'none'

   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>

<?php } ?>









<?php

if($run == "Refused Transport"){?>

 <div class="radio">

  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'run',
     'id' => 'run',
     'value' => 'Emergency Transport'

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
     'value' => 'Emergency Transfer'

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
     'value' => 'No Transport'

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
     'value' => 'Routine'

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
     'checked' => 'checked',
     'value' => 'Refused Transport'

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
     'value' => 'Request for Transport'

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
     'value' => 'none'

   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>

<?php } ?>











<?php

if($run == "Request for Transport"){?>

 <div class="radio">

  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'run',
     'id' => 'run',
     'value' => 'Emergency Transport'

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
     'value' => 'Emergency Transfer'

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
     'value' => 'No Transport'

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
     'value' => 'Routine'

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
     'value' => 'Refused Transport'

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
     'checked' => 'checked',
     'value' => 'Request for Transport'

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
     'value' => 'none'

   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>

<?php } ?>


<?php

if($run == "None"){?>

 <div class="radio">

  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'run',
     'id' => 'run',
     'value' => 'Emergency Transport'

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
     'value' => 'Emergency Transfer'

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
     'value' => 'No Transport'

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
     'value' => 'Routine'

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
     'value' => 'Refused Transport'

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
     'value' => 'Request for Transport'

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
     'checked' => 'checked',
     'value' => 'None'

   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>

<?php } ?>





</div>
</div>








<hr>







<div class="form-group">
  <?php echo form_label('Chief Complaint:'); ?>


  <?php

  $data = array(

   'class' => 'form-control',
   'name' => 'chiefComplaint',
   'value' => $patient_data->chiefComplaint

 );


 ?>



 <?php echo form_input($data); ?>

</div>

<hr>


<div class="form-group">
 <h3>Injuries</h3>

 

 <div>
  <?php $t=$s->injuries;
  $injuries = explode(',',$t);

  if (in_array("Deformity", $injuries)){?>
    <div class="checkbox">
      <label>
        <?php

        $data = array(

          'type' => 'checkbox',
          'name' => 'injuries[]',
          'checked' => 'checked',
          'value' => 'Deformity'

        );


        ?>

        <?php echo form_checkbox($data); ?>
        Deformity
      </label>
    </div>
  <?php }else {?>
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
  <?php }


  if (in_array("Confusion", $injuries)){?>
    <div class="checkbox">
      <label>
        <?php

        $data = array(

         'type' => 'checkbox',
         'name' => 'injuries[]',
         'checked' => 'checked',
         'value' => 'Confusion'


       );


       ?>

       <?php echo form_checkbox($data); ?>
       Confusion
     </label>
   </div>
 <?php }else {?>
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
<?php }


if (in_array("Abrasion", $injuries)){?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'injuries[]',
       'checked' => 'checked',
       'value' => 'Abrasion'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     Abrasion
   </label>
 </div>
<?php }else {?>
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
<?php }


if (in_array("Puncture", $injuries)){?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

        'type' => 'checkbox',
        'name' => 'injuries[]',
        'checked' => 'checked',
        'value' => 'Puncture'

      );


      ?>

      <?php echo form_checkbox($data); ?>
      Puncture
    </label>
  </div>
<?php }else {?>
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
<?php }
if (in_array("Tenderness", $injuries)){?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

        'type' => 'checkbox',
        'name' => 'injuries[]',
        'checked' => 'checked',
        'value' => 'Tenderness'

      );


      ?>

      <?php echo form_checkbox($data); ?>
      Tenderness
    </label>
  </div>
<?php }else {?>
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
<?php }
if (in_array("Laceration", $injuries)){?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'injuries[]',
       'checked' => 'checked',
       'value' => 'Laceration'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     Laceration
   </label>
 </div>
<?php }else {?>
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
<?php }
if (in_array("Swelling", $injuries)){?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'injuries[]',
       'checked' => 'checked',
       'value' => 'Swelling'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     Swelling
   </label>
 </div>
<?php }else {?>
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
<?php }
if (in_array("Fracture", $injuries)){?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

        'type' => 'checkbox',
        'name' => 'injuries[]',
        'checked' => 'checked',
        'value' => 'Fracture'

      );


      ?>

      <?php echo form_checkbox($data); ?>
      Fracture
    </label>
  </div>
<?php }else {?>
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
<?php }
if (in_array("Dislocation", $injuries)){?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'injuries[]',
       'checked' => 'checked',
       'value' => 'Dislocation'
     );


     ?>

     <?php echo form_checkbox($data); ?>
     Dislocation
   </label>
 </div>
<?php }else {?>
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
<?php }
if (in_array("Avuision", $injuries)){?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'injuries[]',
       'checked' => 'checked',
       'value' => 'Avuision'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     Avuision
   </label>
 </div>
<?php }else {?>
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
<?php }


if (in_array("None", $injuries)){?>
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
<?php }else {?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'injuries[]',
       'value' => 'None'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     None
   </label>
 </div>
<?php }









?>
</div>


</div>































<hr>


<div class="form-group">


  <h3 class="text-center">MOI</h3>

  <h5><strong>MVC</strong></h5>

  <?php echo form_label('Vehicle Involved:'); ?>

  <?php

  $data = array(

   'class' => 'form-control',
   'name' => 'vehicleInvolved',
   'value' => $patient_data->vehicleInvolved

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
   'value' => $patient_data->plate

 );


 ?>

 <?php echo form_input($data); ?>

</div>




<div class="form-group">




  <div>

    <?php $t=$s->mvc;
    $mvc = explode(',',$t);

    if (in_array("Head", $mvc)){?>
      <div class="checkbox">
        <label>
          <?php

          $data = array(

           'type' => 'checkbox',
           'name' => 'mvc[]',
           'checked' => 'checked',
           'value' => 'Head'

         );


         ?>

         <?php echo form_checkbox($data); ?>
         Head on
       </label>
     </div>
   <?php }else {?>
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
 <?php }


 if (in_array("Rear", $mvc)){?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'mvc[]',
       'checked' => 'checked',
       'value' => 'Rear'



     );


     ?>

     <?php echo form_checkbox($data); ?>
     Rear end
   </label>
 </div>
<?php }else {?>
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
<?php }


if (in_array("Lateral", $mvc)){?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'mvc[]',
       'checked' => 'checked',
       'value' => 'Lateral'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     Lateral
   </label>
 </div>
<?php }else {?>
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
<?php }


if (in_array("Mvcrotations", $mvc)){?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'mvc[]',
       'checked' => 'checked',
       'value' => 'Mvcrotations'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     Rotation
   </label>
 </div>
<?php }else {?>
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
<?php }

if (in_array("Roll", $mvc)){?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

        'type' => 'checkbox',
        'name' => 'mvc[]',
        'checked' => 'checked',
        'value' => 'Roll'

      );


      ?>

      <?php echo form_checkbox($data); ?>
      Roll over
    </label>
  </div>
<?php }else {?>
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
<?php }


if (in_array("None", $mvc)){?>
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
<?php }else {?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

        'type' => 'checkbox',
        'name' => 'mvc[]',
        'value' => 'None'

      );


      ?>

      <?php echo form_checkbox($data); ?>
      None
    </label>
  </div>
<?php }








?>
</div>



</div> 












<div class="form-group">

 <?php echo form_label('Others:'); ?>


 <?php

 $data = array(

   'type' => 'text',
   'class' => 'form-control',
   'name' => 'mvcothers',
   'value' => $patient_data->mvcothers


 );


 ?>

 <?php echo form_input($data); ?>



</div> 

<h5><strong>Ped Vs. Vehicle</strong></h5>


<div class="form-group">



  <div>
    <?php $t=$s->ped;
    $ped = explode(',',$t);

    if (in_array("Fall", $ped)){?>
      <div class="checkbox">
        <label>
          <?php

          $data = array(

           'type' => 'checkbox',
           'name' => 'ped[]',
           'checked' => 'checked',
           'value' => 'Fall'

         );


         ?>

         <?php echo form_checkbox($data); ?>
         Fall 
       </label>
     </div>
   <?php }else {?>
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
 <?php }


 if (in_array("Ejection", $ped)){?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

        'type' => 'checkbox',
        'name' => 'ped[]',
        'checked' => 'checked',
        'value' => 'Ejection'

      );


      ?>

      <?php echo form_checkbox($data); ?>
      Ejection
    </label>
  </div>
<?php }else {?>
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
<?php }


if (in_array("Gsw", $ped)){?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

        'type' => 'checkbox',
        'name' => 'ped[]',
        'checked' => 'checked',
        'value' => 'Gsw'

      );


      ?>

      <?php echo form_checkbox($data); ?>
      GSW
    </label>
  </div>
<?php }else {?>
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
<?php }


if (in_array("Stab", $ped)){?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'ped[]',
       'checked' => 'checked',
       'value' => 'Stab'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     Stab Wound
   </label>
 </div>
<?php }else {?>
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
<?php }

if (in_array("Mauling", $ped)){?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'ped[]',
       'checked' => 'checked',
       'value' => 'Mauling'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     Mauling 
   </label>
 </div>
<?php }else {?>
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
<?php }

if (in_array("Flail", $ped)){?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'ped[]',
       'checked' => 'checked',
       'value' => 'Flail'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     Flail Chest 
   </label>
 </div>
<?php }else {?>
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
<?php }

if (in_array("Burn", $ped)){?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'ped[]',
       'checked' => 'checked',
       'value' => 'Burn'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     Burn  
   </label>
 </div>
<?php }else {?>
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
<?php }


if (in_array("None", $ped)){?>
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
<?php }else {?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'ped[]',
       'value' => 'None'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     None  
   </label>
 </div>
<?php }










?>
</div>




</div> 



<div class="form-group">

 <?php echo form_label('Others:'); ?>


 <?php

 $data = array(

   'type' => 'text',
   'class' => 'form-control',
   'name' => 'pedothers',
   'value' => $patient_data->pedothers


 );


 ?>

 <?php echo form_input($data); ?>


</div> 


<hr>









<div class="form-group">
  <h3>TRIAGE INFORMATION:</h3>



  <div>

   <?php  $tri = $s->tri; 

   if($tri == "Red"){?>

     <div class="radio">

      <label>
        <?php

        $data = array(

          'type' => 'radio',
          'name' => 'tri',
          'id' => 'tri',
          'checked' => 'checked',
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
     'value' => 'None',


   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>

<?php } ?>

<?php

if($tri == "Yellow"){?>

  <div class="radio">

    <label>
      <?php

      $data = array(

       'type' => 'radio',
       'name' => 'tri',
       'id' => 'tri',
       'value' => 'Red'

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
     'checked' => 'checked',
     'value' => 'Yellow'

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
     'value' => 'Green'

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
     'name' => 'tri',
     'id' => 'tri',
     'value' => 'Black'

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
     'value' => 'None'

   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>


<?php } ?>





<?php

if($tri == "Green"){?>

 <div class="radio">

  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'tri',
     'id' => 'tri',
     'value' => 'Red'

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
     'value' => 'Yellow'

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
     'checked' => 'checked',
     'value' => 'Green'

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
     'value' => 'Black'

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
     'value' => 'None'

   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>



<?php } ?>






<?php

if($tri == "Black"){?>

 <div class="radio">

  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'tri',
     'id' => 'tri',
     'value' => 'Red'

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
     'value' => 'Yellow'

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
     'value' => 'Green'

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
     'checked' => 'checked',
     'value' => 'Black'

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
     'value' => 'None'

   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>



<?php } ?>

<?php

if($tri == "None"){?>

 <div class="radio">

  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'tri',
     'id' => 'tri',
     'value' => 'Red'

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
     'value' => 'Yellow'

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
     'value' => 'Green'

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
     'value' => 'Black'

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
     'checked' => 'checked',
     'value' => 'None'

   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>



<?php } ?>


</div>
</div>








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
         'name' => 'time1',
         'value' => $patient_data->time1


       );


       ?>

       <?php echo form_input($data); ?>





     </td>


     <td>


      <?php

      $data = array(

        'type' => 'text',
        'class' => 'form-control',
        'name' => 'pr1',
        'type' => 'number',
        'pattern' => '[0-9]*',
        'value' => $patient_data->pr1


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
       'value' => $patient_data->rr1

     );


     ?>

     <?php echo form_input($data); ?>

   </td>


   <td>

    <?php

    $data = array(

     'class' => 'form-control',
     'name' => 'bp1',
     'value' => $patient_data->bp1

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
   'value' => $patient_data->spo21

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
     'name' => 'time2',
     'value' => $patient_data->time2


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
   'value' => $patient_data->pr2

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
   'value' => $patient_data->rr2

 );


 ?>

 <?php echo form_input($data); ?>

</td>


<td>

  <?php

  $data = array(

   'class' => 'form-control',
   'name' => 'bp2',
   'value' => $patient_data->bp2

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
   'value' => $patient_data->spo22

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
     'name' => 'time3',
     'value' => $patient_data->time3


   );


   ?>

   <?php echo form_input($data); ?>





 </td>


 <td>


  <?php

  $data = array(

    'type' => 'text',
    'class' => 'form-control',
    'name' => 'pr3',
    'type' => 'number',
    'pattern' => '[0-9]*',
    'value' => $patient_data->pr3

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
   'value' => $patient_data->rr3

 );


 ?>

 <?php echo form_input($data); ?>

</td>


<td>

  <?php

  $data = array(

   'class' => 'form-control',
   'name' => 'bp3',
   'value' => $patient_data->bp3

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
   'value' => $patient_data->spo23

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


  <div>

   <?php  $skinColor = $s->skinColor; 

   if($skinColor == "Normal"){?>

     <div class="radio">

      <label>
        <?php

        $data = array(

         'type' => 'radio',
         'name' => 'skinColor',
         'checked' => 'checked',
         'value' => 'Normal'

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
       'value' => 'Pale'

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
     'value' => 'Flushed'

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
     'value' => 'Cyanotic'

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
     'value' => 'None'

   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>



<?php } ?>

<?php

if($skinColor == "Pale"){?>

  <div class="radio">

    <label>
      <?php

      $data = array(

       'type' => 'radio',
       'name' => 'skinColor',
       'value' => 'Normal'

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
     'checked' => 'checked',
     'value' => 'Pale'

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
     'value' => 'Flushed'

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
     'value' => 'Cyanotic'

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
     'value' => 'None'

   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>

<?php } ?>





<?php

if($skinColor == "Flushed"){?>

 <div class="radio">

  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'skinColor',
     'value' => 'Normal'

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
     'value' => 'Pale'

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
     'checked' => 'checked',
     'value' => 'Flushed'

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
     'value' => 'Cyanotic'

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
     'value' => 'None'

   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>



<?php } ?>





<?php

if($skinColor == "Cyanotic"){?>

 <div class="radio">

  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'skinColor',
     'value' => 'Normal'

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
     'value' => 'Pale'

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
     'value' => 'Flushed'

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
     'checked' => 'checked',
     'value' => 'Cyanotic'

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
     'value' => 'None'

   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>

<?php } ?>




<?php

if($skinColor == "None"){?>

 <div class="radio">

  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'skinColor',
     'value' => 'Normal'

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
     'value' => 'Pale'

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
     'value' => 'Flushed'

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
     'value' => 'Cyanotic'

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
     'checked' => 'checked',
     'value' => 'None'

   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>

<?php } ?>


</div>
</div>






<hr>






<div class="form-group">

  <label>Temp</label>




  <div>

   <?php  $temp = $s->temp; 

   if($temp == "Warm"){?>

     <div class="radio">

      <label>
        <?php

        $data = array(

          'type' => 'radio',
          'name' => 'temp',
          'checked' => 'checked',
          'value' => 'Warm'

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
     'value' => 'None'


   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>

<?php } ?>





<?php

if($temp == "Cool"){?>

  <div class="radio">

    <label>
      <?php

      $data = array(

       'type' => 'radio',
       'name' => 'temp',
       'value' => 'Warm'

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
     'checked' => 'checked',
     'value' => 'Cool'

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
     'value' => 'Hot'

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
     'value' => 'None'


   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>


<?php } ?>




<?php

if($temp == "Hot"){?>

 <div class="radio">

  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'temp',
     'value' => 'Warm'

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
     'value' => 'Cool'

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
     'checked' => 'checked',
     'value' => 'Hot'

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
     'value' => 'None'


   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>



<?php } ?>



<?php

if($temp == "None"){?>

 <div class="radio">

  <label>
    <?php

    $data = array(

     'type' => 'radio',
     'name' => 'temp',
     'value' => 'Warm'

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
     'value' => 'Cool'

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
     'value' => 'Hot'

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
     'checked' => 'checked',
     'value' => 'None'


   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </label>
</div>



<?php } ?>


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

 <?php echo form_dropdown('left', $data, $patient_data->leftPupil); ?>
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

 <?php echo form_dropdown('right', $data, $patient_data->rightPupil); ?>
</div> 







<hr>

<h2 class="text-center">Sample History</h2>


<div class="form-group">

 <?php echo form_label('Sign & Symptoms:'); ?>

 <?php

 $data = array(

   'class' => 'form-control',
   'name' => 'signAndSymptoms',
   'value' => $patient_data->signAndSymptoms

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
   'value' => $patient_data->allergies

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
   'value' => $patient_data->medication

 );


 ?>

 <?php echo form_input($data); ?>

</div>






<div class="form-group">

  <label> Past and Present Medical History:</label>




  <div>



   <?php $t=$s->medicalHistory;
   $medicalHistory = explode(',',$t);

   if (in_array("HTN", $medicalHistory)){?>

    <div class="checkbox">
      <label>
        <input type="checkbox" name="medicalHistory[]"  value="HTN" checked="checked">
        HTN
      </label>
    </div>
  <?php }else {?>

   <div class="checkbox">
    <label>
      <input type="checkbox" name="medicalHistory[]"  value="HTN">
      HTN
    </label>
  </div>
<?php }




if (in_array("DM", $medicalHistory)){?>

  <div class="checkbox">
    <label>
      <input type="checkbox" name="medicalHistory[]"  value="DM" checked="checked">
      DM
    </label>
  </div>
<?php }else {?>

 <div class="checkbox">
  <label>
    <input type="checkbox" name="medicalHistory[]"  value="DM">
    DM
  </label>
</div>
<?php }


if (in_array("CVA", $medicalHistory)){?>

  <div class="checkbox">
    <label>
      <input type="checkbox" name="medicalHistory[]"  value="CVA" checked="checked">
      CVA
    </label>
  </div>
<?php }else {?>

 <div class="checkbox">
  <label>
    <input type="checkbox" name="medicalHistory[]"  value="CVA">
    CVA
  </label>
</div>
<?php }

if (in_array("MI", $medicalHistory)){?>

  <div class="checkbox">
    <label>
      <input type="checkbox" name="medicalHistory[]"  value="MI" checked="checked">
      MI
    </label>
  </div>
<?php }else {?>

 <div class="checkbox">
  <label>
    <input type="checkbox" name="medicalHistory[]"  value="MI">
    MI
  </label>
</div>
<?php }

if (in_array("ASTHMA", $medicalHistory)){?>

  <div class="checkbox">
    <label>
      <input type="checkbox" name="medicalHistory[]"  value="ASTHMA" checked="checked">
      ASTHMA
    </label>
  </div>
<?php }else {?>

 <div class="checkbox">
  <label>
    <input type="checkbox" name="medicalHistory[]"  value="ASTHMA">
    ASTHMA
  </label>
</div>
<?php }


if (in_array("None", $medicalHistory)){?>

  <div class="checkbox">
    <label>
      <input type="checkbox" name="medicalHistory[]"  value="None" checked="checked">
      None
    </label>
  </div>
<?php }else {?>

 <div class="checkbox">
  <label>
    <input type="checkbox" name="medicalHistory[]"  value="None">
    None
  </label>
</div>
<?php }

















?>

</div>


</div>


<div class="form-group">

 <?php echo form_label('Others:'); ?>

 <?php

 $data = array(

   'class' => 'form-control',
   'name' => 'others',
   'value' => $patient_data->others

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
   'value' => $patient_data->lastOralIntake

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
   'value' => $patient_data->eventsPrior

 );


 ?>

 <?php echo form_input($data); ?>

</div>

<hr>

<h3>OB HISTORY</h3>

<div class="form-group">

 <?php echo form_label('LMP:'); ?>

 <?php

 $data = array(

   'type' => 'text',
   'class' => 'form-control',
   'id' => 'datepicker3', 
   'name' => 'lmp',
   'value' => $patient_data->lmp

 );


 ?>

 <?php echo form_input($data); ?>

</div>


<div class="form-group">

 <?php echo form_label('AOG:'); ?>

 <?php

 $data = array(

  'type' => 'text',
  'class' => 'form-control',
  'id' => 'datepicker4',
  'name' => 'aog',
  'value' => $patient_data->aog

);


?>

<?php echo form_input($data); ?>

</div>

<div class="form-group">

 <?php echo form_label('EDD:'); ?>

 <?php

 $data = array(

  'type' => 'text',
  'class' => 'form-control',
  'id' => 'datepicker5',
  'name' => 'edd',
  'value' => $patient_data->edd

);


?>

<?php echo form_input($data); ?>

</div>

<div class="form-group">

 <?php echo form_label('G:'); ?>

 <?php

 $data = array(

   'class' => 'form-control',
   'name' => 'gOb',
   'value' => $patient_data->gOb

 );


 ?>

 <?php echo form_input($data); ?>

</div>

<div class="form-group">

 <?php echo form_label('P:'); ?>

 <?php

 $data = array(

   'class' => 'form-control',
   'name' => 'pOb',
   'value' => $patient_data->pOb

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

   'class' => 'form-control',
   'name' => 'initial',
   'type' => 'number',
   'pattern' => '[0-9]*',
   'value' => $patient_data->initial

 );


 ?>

 <?php echo form_input($data); ?>

</div>

<div class="form-group">

 <?php echo form_label('Final:'); ?>

 <?php

 $data = array(

   'class' => 'form-control',
   'name' => 'final',
   'type' => 'number',
   'pattern' => '[0-9]*',
   'value' => $patient_data->final

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
  'value' => $patient_data->sexPedia

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
  'value' => $patient_data->babyOut

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
  'value' => $patient_data->placentaOut

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
   'value' => $patient_data->narrative

 );


 ?>

 <?php echo form_input($data); ?>

</div>
















<hr>

<h3 class="text-center">BLS TREATMENT</h3>





<label>Circulation</label>
<div class="form-group">



  <div>
    <?php $t=$s->circulation;
    $circulation = explode(',',$t);

    if (in_array("Bleeding", $circulation)){?>
      <div class="checkbox">
        <label>
          <?php

          $data = array(

           'type' => 'checkbox',
           'name' => 'circulation[]',
           'checked' => 'checked',
           'value' => 'Bleeding'

         );


         ?>

         <?php echo form_checkbox($data); ?>
         Bleeding
       </label>
     </div>
   <?php }else {?>
    <div class="checkbox">
      <label>
        <?php

        $data = array(

         'type' => 'checkbox',
         'name' => 'circulation[]',
         'value' => 'Bleeding'

       );


       ?>

       <?php echo form_checkbox($data); ?>
       Bleeding
     </label>
   </div>
 <?php }


 if (in_array("Control", $circulation)){?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'circulation[]',
       'checked' => 'checked',
       'value' => 'Control'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     Control
   </label>
 </div>
<?php }else {?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'circulation[]',
       'value' => 'Control'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     Control
   </label>
 </div>
<?php }


if (in_array("Shock", $circulation)){?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'circulation[]',
       'checked' => 'checked',
       'value' => 'Shock'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     Bleeding
   </label>
 </div>
<?php }else {?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'circulation[]',
       'value' => 'Shock'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     Shock
   </label>
 </div>
<?php }


if (in_array("Position", $circulation)){?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'circulation[]',
       'checked' => 'checked',
       'value' => 'Position'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     Position
   </label>
 </div>
<?php }else {?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'circulation[]',
       'value' => 'Position'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     Position
   </label>
 </div>
<?php }



if (in_array("None", $circulation)){?>
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
<?php }else {?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'circulation[]',
       'value' => 'None'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     None
   </label>
 </div>
<?php }










?>
</div>



</div>





<hr>

<label>Airway Breathing</label>
<div class="form-group">


  <div>
    <?php $t=$s->breathing;
    $breathing = explode(',',$t);

    if (in_array("OPA", $breathing)){?>
      <div class="checkbox">
        <label>
          <?php

          $data = array(

           'type' => 'checkbox',
           'name' => 'breathing[]',
           'checked' => 'checked',
           'value' => 'OPA'

         );


         ?>

         <?php echo form_checkbox($data); ?>
         OPA
       </label>
     </div>
   <?php }else {?>
    <div class="checkbox">
      <label>
        <?php

        $data = array(

         'type' => 'checkbox',
         'name' => 'breathing[]',
         'value' => 'OPA'

       );


       ?>

       <?php echo form_checkbox($data); ?>
       OPA
     </label>
   </div>
 <?php }


 if (in_array("NPA", $breathing)){?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'breathing[]',
       'checked' => 'checked',
       'value' => 'NPA'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     NPA
   </label>
 </div>
<?php }else {?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'breathing[]',
       'value' => 'NPA'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     NPA
   </label>
 </div>
<?php }


if (in_array("Cannula", $breathing)){?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'breathing[]',
       'checked' => 'checked',
       'value' => 'Cannula'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     Cannula
   </label>
 </div>
<?php }else {?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'breathing[]',
       'value' => 'Cannula'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     Cannula
   </label>
 </div>
<?php }



if (in_array("SFM", $breathing)){?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'breathing[]',
       'checked' => 'checked',
       'value' => 'SFM'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     SFM
   </label>
 </div>
<?php }else {?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'breathing[]',
       'value' => 'SFM'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     SFM
   </label>
 </div>
<?php }

if (in_array("BVM", $breathing)){?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'breathing[]',
       'checked' => 'checked',
       'value' => 'BVM'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     BVM
   </label>
 </div>
<?php }else {?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'breathing[]',
       'value' => 'BVM'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     BVM
   </label>
 </div>
<?php }



if (in_array("None", $breathing)){?>
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
<?php }else {?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'breathing[]',
       'value' => 'None'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     None
   </label>
 </div>
<?php }









?>
</div>



</div>
<div>
  <label>lpm</label>
  <?php

  $data = array(

    'class' => 'form-control',
    'name' => 'lpm',
    'value' => $patient_data->lpm




  );


  ?>

  <?php echo form_input($data); ?>
</div>
<hr>





<label>Extrication/Immobilization</label>
<div class="form-group">


  <div>
    <?php $t=$s->immobilization;
    $immobilization = explode(',',$t);

    if (in_array("Collar", $immobilization)){?>
      <div class="checkbox">
        <label>
          <?php

          $data = array(

           'type' => 'checkbox',
           'name' => 'immobilization[]',
           'checked' => 'checked',
           'value' => 'Collar'

         );


         ?>

         <?php echo form_checkbox($data); ?>
         C/X Collar
       </label>
     </div>
   <?php }else {?>
    <div class="checkbox">
      <label>
        <?php

        $data = array(

         'type' => 'checkbox',
         'name' => 'immobilization[]',
         'value' => 'Collar'

       );


       ?>

       <?php echo form_checkbox($data); ?>
       C/X Collar
     </label>
   </div>
 <?php }


 if (in_array("Block", $immobilization)){?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'immobilization[]',
       'checked' => 'checked',
       'value' => 'Block'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     Head Block
   </label>
 </div>
<?php }else {?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'immobilization[]',
       'value' => 'Block'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     Head Block
   </label>
 </div>
<?php }


if (in_array("Splint", $immobilization)){?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'immobilization[]',
       'checked' => 'checked',
       'value' => 'Splint'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     Splint
   </label>
 </div>
<?php }else {?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'immobilization[]',
       'value' => 'Splint'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     Splint
   </label>
 </div>
<?php }


if (in_array("Spine", $immobilization)){?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'immobilization[]',
       'checked' => 'checked',
       'value' => 'Spine'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     Spine Board
   </label>
 </div>
<?php }else {?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'immobilization[]',
       'value' => 'Spine'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     Spine Board
   </label>
 </div>
<?php }


if (in_array("None", $immobilization)){?>
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
<?php }else {?>
  <div class="checkbox">
    <label>
      <?php

      $data = array(

       'type' => 'checkbox',
       'name' => 'immobilization[]',
       'value' => 'None'

     );


     ?>

     <?php echo form_checkbox($data); ?>
     None 
   </label>
 </div>
<?php }













?>
</div>





</div>
<hr>













<h3 class="text-center">CPR INFORMATION</h3>




<div class="form-group">

  <div>

   <?php  $arrest = $s->arrest; 

   if($arrest == "Witnessed"){?>

     <div class="radio">

      <label>
        <?php

        $data = array(

          'type' => 'radio',
          'name' => 'arrest',
          'checked' => 'checked',
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
       'value' => 'None',

     );


     ?>

     <?php echo form_radio($data); ?>
     None
   </div>




 <?php } ?>

 <?php

 if($arrest == "Unwitnessed"){?>

  <div class="radio">

    <label>
      <?php

      $data = array(

       'type' => 'radio',
       'name' => 'arrest',
       'value' => 'Witnessed'

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
     'checked' => 'checked',
     'value' => 'Unwitnessed'

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
     'value' => 'None',

   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </div>


<?php } ?>

<?php

if($arrest == "None"){?>

  <div class="radio">

    <label>
      <?php

      $data = array(

       'type' => 'radio',
       'name' => 'arrest',
       'value' => 'Witnessed'

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
     'value' => 'Unwitnessed'

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
     'checked' => 'checked',
     'value' => 'None',

   );


   ?>

   <?php echo form_radio($data); ?>
   None
 </div>


<?php } ?>


</div>




</div>






<div class="form-group">

 <?php echo form_label('Cycle of CPR:'); ?>

 <?php

 $data = array(

   'class' => 'form-control',
   'name' => 'cpr',
   'value' => $patient_data->cpr

 );


 ?>

 <?php echo form_input($data); ?>

</div>


<label>Pulse Restored</label>
<div class="form-group">

  <div>

   <?php  $pulse = $s->pulse; 

   if($pulse == "Yes"){?>

     <div class="radio">

      <label>
        <?php

        $data = array(

         'type' => 'radio',
         'name' => 'pulse',
         'checked' => 'checked',
         'value' => 'Yes'



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
         'value' => 'None'

       );


       ?>

       <?php echo form_radio($data); ?>
       None
     </label>
   </div>


 <?php } ?>

 <?php

 if($pulse == "No"){?>

  <div class="radio">

    <label>
      <?php

      $data = array(

        'type' => 'radio',
        'name' => 'pulse',
        'value' => 'Yes'

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
        'name' => 'pulse',
        'checked' => 'checked',
        'value' => 'No'

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
       'value' => 'None'

     );


     ?>

     <?php echo form_radio($data); ?>
     None
   </label>
 </div>


<?php } ?>



<?php

if($pulse == "None"){?>

  <div class="radio">

    <label>
      <?php

      $data = array(

        'type' => 'radio',
        'name' => 'pulse',
        'value' => 'Yes'

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
        'name' => 'pulse',
        'value' => 'No'

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
       'checked' => 'checked',
       'value' => 'None'

     );


     ?>

     <?php echo form_radio($data); ?>
     None
   </label>
 </div>


<?php } ?>




</div>




</div>

<hr>




<label>Patient Disposition</label>
<div class="form-group">


  <div>

   <?php  $disposition = $s->disposition; 

   if($disposition == "Improved"){?>

     <div class="radio">

      <label>
        <?php

        $data = array(

          'type' => 'radio',
          'name' => 'disposition',
          'checked' => 'checked',
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
        'value' => 'None',

      );


      ?>

      <?php echo form_radio($data); ?>
      None
    </label>
  </div>


<?php } ?>

<?php

if($disposition == "Unchanged"){?>

  <div class="radio">
    <label>
      <?php

      $data = array(

        'type' => 'radio',
        'name' => 'disposition',
        'value' => 'Improved'

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
        'checked' => 'checked',
        'value' => 'Unchanged'

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
        'value' => 'None',

      );


      ?>

      <?php echo form_radio($data); ?>
      None
    </label>
  </div>


<?php } ?>



<?php

if($disposition == "Expired"){?>

  <div class="radio">
    <label>
      <?php

      $data = array(

        'type' => 'radio',
        'name' => 'disposition',
        'value' => 'Improved'

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
        'value' => 'Unchanged'

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
        'checked' => 'checked',
        'value' => 'Expired'

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
        'value' => 'None',

      );


      ?>

      <?php echo form_radio($data); ?>
      None
    </label>
  </div>


<?php } ?>



<?php

if($disposition == "None"){?>

  <div class="radio">
    <label>
      <?php

      $data = array(

        'type' => 'radio',
        'name' => 'disposition',
        'value' => 'Improved'

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
        'value' => 'Unchanged'

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
        'value' => 'Expired'

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
        'checked' => 'checked',
        'value' => 'None'

      );


      ?>

      <?php echo form_radio($data); ?>
      None
    </label>
  </div>


<?php } ?>






</div>

</div>








<label>Pending Equipment</label>
<div class="form-group">



  <div>
    <?php $t=$s->pending;
    $pending = explode(',',$t);

    if (in_array("Stretcher", $pending)){?>
      <div class="checkbox">
        <label>
          <?php

          $data = array(

            'type' => 'checkbox',
            'name' => 'pending[]',
            'checked' => 'checked',
            'value' => 'Stretcher'

          );


          ?>

          <?php echo form_checkbox($data); ?>
          Stretcher
        </label>
      </div>
    <?php }else {?>
      <div class="checkbox">
        <label>
          <?php

          $data = array(

            'type' => 'checkbox',
            'name' => 'pending[]',
            'value' => 'Stretcher'

          );


          ?>

          <?php echo form_checkbox($data); ?>
          Stretcher
        </label>
      </div>
    <?php }


    if (in_array("Spine", $pending)){?>
      <div class="checkbox">
        <label>
          <?php

          $data = array(

            'type' => 'checkbox',
            'name' => 'pending[]',
            'checked' => 'checked',
            'value' => 'Spine'

          );


          ?>

          <?php echo form_checkbox($data); ?>
          Spine Board
        </label>
      </div>
    <?php }else {?>
      <div class="checkbox">
        <label>
          <?php

          $data = array(

            'type' => 'checkbox',
            'name' => 'pending[]',
            'value' => 'Spine'

          );


          ?>

          <?php echo form_checkbox($data); ?>
          Spine Board
        </label>
      </div>
    <?php }


    if (in_array("Collar", $pending)){?>
      <div class="checkbox">
        <label>
          <?php

          $data = array(

            'type' => 'checkbox',
            'name' => 'pending[]',
            'checked' => 'checked',
            'value' => 'Collar'

          );


          ?>

          <?php echo form_checkbox($data); ?>
          C Collar
        </label>
      </div>
    <?php }else {?>
      <div class="checkbox">
        <label>
          <?php

          $data = array(

            'type' => 'checkbox',
            'name' => 'pending[]',
            'value' => 'Collar'

          );


          ?>

          <?php echo form_checkbox($data); ?>
          C Collar
        </label>
      </div>
    <?php }


    if (in_array("Splint", $pending)){?>
      <div class="checkbox">
        <label>
          <?php

          $data = array(

            'type' => 'checkbox',
            'name' => 'pending[]',
            'checked' => 'checked',
            'value' => 'Splint'

          );


          ?>

          <?php echo form_checkbox($data); ?>
          Splint
        </label>
      </div>
    <?php }else {?>
      <div class="checkbox">
        <label>
          <?php

          $data = array(

            'type' => 'checkbox',
            'name' => 'pending[]',
            'value' => 'Splint'

          );


          ?>

          <?php echo form_checkbox($data); ?>
          Splint
        </label>
      </div>
    <?php }



    if (in_array("None", $pending)){?>
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
    <?php }else {?>
      <div class="checkbox">
        <label>
          <?php

          $data = array(

            'type' => 'checkbox',
            'name' => 'pending[]',
            'value' => 'None'

          );


          ?>

          <?php echo form_checkbox($data); ?>
          None
        </label>
      </div>
    <?php }









    ?>


  </div>




</div>

<?php endforeach;?>  



<hr>








<div class="form-group">
  <?php echo form_label('Ambulance Driver:'); ?>


  <?php

  $data = array(

   'class' => 'form-control',
   'name' => 'ambulanceDriver',
   'list' => 'browsers',
   'value' => $patient_data->ambulanceDriver

 );


 ?>

 <?php echo form_input($data); ?>

 <datalist id="browsers">
  <?php 

  foreach($groups3 as $row)
  { 
    echo '<option value="'.$row->crewn.'">'.$row->crewn.'</option>';
  }
  ?>
</datalist>

</div>











<div class="form-group">



 <?php echo form_label('Ambulance Crew:'); ?>
 <br>
 <?php echo form_label('1:'); ?>

 <?php

 $data = array(

   'class' => 'form-control',
   'name' => 'crew1',
   'list' => 'crew1',
   'value' => $patient_data->crew1

 );


 ?>

 <?php echo form_input($data); ?>

 <datalist id="crew1">
  <?php 

  foreach($groups2 as $row)
  { 
    echo '<option value="'.$row->crewn.'">'.$row->crewn.'</option>';
  }
  ?>
</datalist>




<?php echo form_label('2:'); ?>

 <?php

 $data = array(

   'class' => 'form-control',
   'name' => 'crew2',
   'list' => 'crew2',
   'value' => $patient_data->crew2

 );


 ?>

 <?php echo form_input($data); ?>

 <datalist id="crew2">
  <?php 

  foreach($groups2 as $row)
  { 
    echo '<option value="'.$row->crewn.'">'.$row->crewn.'</option>';
  }
  ?>
</datalist>




<?php echo form_label('3:'); ?>

 <?php

 $data = array(

   'class' => 'form-control',
   'name' => 'crew3',
   'list' => 'crew3',
   'value' => $patient_data->crew3

 );


 ?>

 <?php echo form_input($data); ?>

 <datalist id="crew3">
  <?php 

  foreach($groups2 as $row)
  { 
    echo '<option value="'.$row->crewn.'">'.$row->crewn.'</option>';
  }
  ?>
</datalist>



<?php echo form_label('4:'); ?>

 <?php

 $data = array(

   'class' => 'form-control',
   'name' => 'crew4',
   'list' => 'crew4',
   'value' => $patient_data->crew4

 );


 ?>

 <?php echo form_input($data); ?>

 <datalist id="crew4">
  <?php 

  foreach($groups2 as $row)
  { 
    echo '<option value="'.$row->crewn.'">'.$row->crewn.'</option>';
  }
  ?>
</datalist>



<?php echo form_label('5:'); ?>

 <?php

 $data = array(

   'class' => 'form-control',
   'name' => 'crew5',
   'list' => 'crew5',
   'value' => $patient_data->crew5

 );


 ?>

 <?php echo form_input($data); ?>

 <datalist id="crew5">
  <?php 

  foreach($groups2 as $row)
  { 
    echo '<option value="'.$row->crewn.'">'.$row->crewn.'</option>';
  }
  ?>
</datalist>



<?php echo form_label('1:'); ?>

 <?php

 $data = array(

   'class' => 'form-control',
   'name' => 'crew6',
   'list' => 'crew6',
   'value' => $patient_data->crew6

 );


 ?>

 <?php echo form_input($data); ?>

 <datalist id="crew6">
  <?php 

  foreach($groups2 as $row)
  { 
    echo '<option value="'.$row->crewn.'">'.$row->crewn.'</option>';
  }
  ?>
</datalist>





</div>



<hr>


<div class="form-group">

  <?php echo form_label('Endorsed By:'); ?>

  <?php

  $data = array(

    'class' => 'form-control',
    'name' => 'endorsedBy',
    'value' => $patient_data->endorsedBy

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
    'value' => $patient_data->receivedBy

  );


  ?>

  <?php echo form_input($data); ?>

</div>
















<div>
  <?php

  $data = array(

    'class' => 'btn btn-primary pull-right',
    'name' => 'submit',
    'value' => 'Save changes'

  );


  ?>



  <?php echo form_submit($data); ?>


  <!-- text input -->
                            <!--   <div class="form-group">
                            <label>Model</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                          </div> -->
                          <!-- text input -->
                            <!--   <div class="form-group">
                            <label>Equipment Type</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                          </div>       -->  








                        </div>





                        <?php echo form_close();?>   




                      </div>


                    </div>

                    <!-- /. box -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

              </section>
              <!-- /.content -->
