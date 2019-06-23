<?php 

    include 'header.php';
    include 'connection_link.php'; 

    $Patient_name = $_POST['Patient_name'];
    $User_type="'Patient'";
    $Phone_number = $_POST['Phone_number'];
    $Address = $_POST['Address'];
    $Email = $_POST['Email'];
    $Password = ($_POST['Password']);
    $Date_of_register = $_POST['Date_of_register'];
    $Balance=2000;


    $sql = "INSERT INTO patient( Patient_name,User_type,Phone_number ,Address, Email , Password,Date_of_register,Balance) VALUES ('$Patient_name',$User_type,'$Phone_number','$Address','$Email', '$Password', '$Date_of_register','$Balance')";

    if ($conn->query($sql) == TRUE) 
    {
       echo "<script> alert('Successfully Registered. You can login now');</script>";
    } 
    else 
    {
       echo "<script> alert('Error! The email has been registered already');</script>";
    }

?>



<center>
  <p>
   <form action="patient_registration_link.php" method="post">

            <div class="input-form">
            <label for=""> Patient Name: </label>
            <input type="text"   placeholder="Patient name" name="Patient_name" required >
           </div>

             <div class="input-form">
            <label for=""> Patient Number: </label>
            <input type="text" placeholder="Phone number" name="Phone_number" required >
             </div>

            <div class="input-form">
            <label for=""> Address: </label>
            <input type="text" placeholder="Address" name="Address" required>
           </div>


            <div class="input-form">
            <label for=""> Email: </label>
            <input type="text" placeholder="Email" name="Email" required>
            </div>


            <div class="input-form">
            <label for=""> Password: </label>
            <input type="Password" placeholder="Password" name="Password" required>
            </div>


             <div class="input-form">
            <label for=""> Date: </label>
            <input type="Date" placeholder="Date of registration..." name="Date_of_register" required>
            </div>
            <br>



      
            <p> Already have an account?* <a href="login_form.php"> Log-in  </a> </p>

            <button class="btn btn_one"><b>Submit</b></button>
          
      </form> 
  </p>
</center>




