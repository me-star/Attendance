<?php 
    $title = 'Edit Record';
   
    require_once '../includes/header.php'; 
    require_once '../db/conn.php';

    $results = $crud->getspecialties();

    if(!isset($_GET['id']))
    {   
        //echo error messaage
        include '../includes/errormessage.php';
        header("Location: viewrecords.php");
    }
    else{
        $id = $_GET['id'];
        $attendee = $crud->getAttendeeDetails($id);
    
    

?>
        <h1 class="text-center">Edit Record</h1>


        <form method="post" action="editpost.php">
            <input type="hidden" name= "id" value="<?php echo $attendee['attendee_id'] ?>" />
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label> 
                <input type="text" class="form-control" value="<?php echo $attendee['firstname'] ?>" id="firstname" name="firstname" >
            
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control"value="<?php echo $attendee['lastname'] ?>" id="lastname" name="lastname" >
            
            </div>
            <div class="mb-3">
                <label for="dateofbirth" class="form-label">Date of Birth</label>
                <input type="text" class="form-control" value="<?php echo $attendee['dateofbirth'] ?>" id="dateofbirth" name="dateofbirth" >
            
            </div>
            <div class="mb-3">
                <label for="specialty">Area of Expertise</label>
                <select class="form-control" id="specialty" name="specialty">
                   <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                      <option value="<?php echo $r['specialty_id'] ?>" <?php if($r['specialty_id'] ==
                       $attendee['specialty_id']) echo 'selected' ?>> 
                       <?php echo $r['name']; ?> 
                       </option>

                    <?php }?>
                </select>
            </div>
            <div class="mb-3">
                <label for="emailadd" class="form-label">Email Address</label>
                <input type="email" class="form-control" value="<?php echo $attendee['emailadd'] ?>" id="emailadd" name="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Contact Number</label>
                <input type="text" class="form-control" value="<?php echo $attendee['phone'] ?>" id="phone" name="phone"
                aria-describedby="phoneHelp">
                <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" name="submit" class="btn btn-success">Submit Changes</button>
            </div>

    </form>
    
    <?php }?>                

    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>



    <?php require_once '../includes/footer.php'; ?>                 
