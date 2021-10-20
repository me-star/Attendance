<?php 
    $title = 'Success';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 

    if(isset($_POST['submit'])){
       $fname = $_POST['firstname'];
       $lname = $_POST['lastname'];
       $dob = $_POST['dateofbirth'];
       $email = $_POST['email'];
       $contact = $_POST['phone'];
       $specialty = $_POST['specialty'];
       //Call function to insert and track if success or not
       $isSuccess = $crud->insertAttendees($fname,$lname,$dob,$email,$contact,$specialty);
       
       if($isSuccess){
          include '<includes/successmessage.php';
       }
       else{
        include 'includes/errormessage.php';
       }
       
       
       
       }
    
    ?>

        

        <!-- <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title">
                <?php //echo " $_GET[firstname] $_GET[lastname]"?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted"> 
                <?php //echo  $_GET['specialty'];?>
            </h6>
            <p class="card-text">
                Date of Birth: <?php // echo $_GET['dateofbirth'];?> 
            </p>
            <p class="card-text">
               Email Address: <?php // echo $_GET['email'];?> 
            </p>
            <p class="card-text">
                Contact: <?php //echo $_GET['phone'];?> 
            </p>
            
            </div>
        </div>  -->


        <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title">
            <?php echo  $_POST['firstname'] . ' ' . $_POST['lastname'];?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted"> 
            <?php echo  $_POST['specialty'];?>
            </h6>
            <p class="card-text">
                Date of Birth: <?php echo $_POST['dateofbirth'];?> 
            </p>
            <p class="card-text">
                Email Address: <?php  echo $_POST['email'];?> 
            </p>
            <p class="card-text">
                Contact: <?php echo $_POST['phone'];?> 
            </p>

        </div>
    </div> 


        
        <?php
            echo   $_POST['firstname'];
            echo   $_POST['lastname'];
            echo   $_POST['dateofbirth'];
            echo   $_POST['specialty'];
            echo   $_POST['email'];
            echo   $_POST['phone'];
        
        
        ?>






<br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>



<?php require_once 'includes/footer.php'; ?>