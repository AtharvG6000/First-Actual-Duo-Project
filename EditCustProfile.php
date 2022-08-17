<?php

session_start();

$con =mysqli_connect("localhost" , "root" , "" , "final_project");

if ( isset($_POST['btn-update']) )
{

    $Name = $_POST['newName']; // NAME
     $Mail = $_POST['mail']; // mail
    $Pin = $_POST['pin']; 
    $Landmark = $_POST['Landmark'];
    $Phone = $_POST['Phone'];
    $Pass = $_POST['Pass'];

    $curr_ID =  $_SESSION['id'] ;

     mysqli_query($con ,  " UPDATE customer_details SET cust_name='$Name',cust_email='$Mail',cust_pass='$Pass',cust_phone='$Phone', cust_pincode='$Pin',cust_address= '$Landmark' WHERE id = '$curr_ID'" );
      $_SESSION["name"] = $Name;
    $_SESSION["mail"]  = $Mail ;
    $_SESSION["pass"] = $Pass ;
      $_SESSION["number"] = $Phone ;
     $_SESSION["address"] =     $Landmark;
     $_SESSION["pincode"] = $Pin ;

     header('Location:Customer_Profile.php');
     exit;
}

?>



<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Registration</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body style="background-image: url('image/b3.jpg'); background-repeat: no-repeat;background-attachment: fixed;
  background-size: cover;">  
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
       
    <div class="global-container" >
        <div class="card login-form2" style=" height: 800px;">
            <div class="card-body">
                <h1 class="card-title text-center">Edit Your Details</h1>
                  <div class="card-text">
                        <form action="EditCustProfile.php" method="post">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Enter Your Name</label>
                              <input type="text" name="newName" class="form-control rom-control-sm" id="exampleInputNumber1" aria-describedby="emailHelp">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Email Address</label>
                              <input type="email" name="mail" class="form-control rom-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                        
                       
                        <!-- <div class="form-group">
                           <label for="exampleInputEmail1">Enter Your Address </label>
                           <input type="text" class="form-control rom-control-sm" id="exampleInputNumber1" aria-describedby="emailHelp">
                       </div>
                    <div class="form-group">
                           <label for="exampleInputEmail1">City</label>
                           <input type="text" class="form-control rom-control-sm" id="exampleInputNumber1" aria-describedby="emailHelp">
                    </div> -->
                          <div class="form-group">
                              <label for="exampleInputEmail1">Pincode</label>
                              <input type="text" name="pin" class="form-control rom-control-sm" id="exampleInputNumber1" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Landmark</label>
                            <input type="text" name="Landmark" class="form-control rom-control-sm" id="exampleInputNumber1" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Mobile No</label>
                            <input type="text" name="Phone" class="form-control rom-control-sm" id="exampleInputNumber1" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1"> New Password</label>
                            <input type="password" name="Pass" class="form-control rom-control-sm" id="exampleInputPassword1" aria-describedby="emailHelp">
                          </div>
                            <button type="submit" name="btn-update" class="btn btn-primary btn-block">
                                            Update  
                            </button>

                            <div class="signup">
                            <a href="Customer_Profile.php">Cancle</a>
                            </div>
                          
                    </form>
                </div>
            </div>
        </div>
    </div>

  </body>
</html>



