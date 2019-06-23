<?php include 'header.php'; ?>


  

 <body>
<div class="about-area section-padding" id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="about-title">
          <h2>Patient Registration</h2>
        </div>
      </div>
      <div class="col-md-6">
        <div class="about-img">
          <img src="assets/img/sm-img.svg" alt="pathology-image">
        </div>
      </div>
      <div class="col-md-4 offset-md-2">
        <div class="about-content">

        <div class="login-box">
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
          
         </div> 
          
  
        </div>
      </div>
    </div>
  </div>
</div>
     
</body>

