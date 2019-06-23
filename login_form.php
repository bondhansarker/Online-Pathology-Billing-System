<?php include 'header.php'; ?>
  
  
    <body>
<div class="about-area section-padding" id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="about-title">
          <h2>User Login</h2>
        </div>
      </div>
      <div class="col-md-8">
        <div class="about-img">
          <img src="assets/img/sm-img.svg" alt="pathology-image">
        </div>
      </div>
      <div class="col-md-4">
        <div class="about-content">

        <div class="login-box">
          <center>
           <p>
             <form action="login_link.php" method="post">

                       
                       <div class="input-form">
                       <label for="">Username:</label>
                        <input type="text" placeholder="User Email" name="Email" required>
                       </div>
                      

                        <div class="input-form">
                       <label for=""> Password:</label>
                        <input type="Password" placeholder="User Password" name="Password" required>
                          </div>

                        
                          <div class="input-form">
                           <label for=""> User Type:</label>
                            <select name="User_type">
                              <option value="Patient" > Patient</option>
                              <option value="Staff"> Staff</option>
                              <option value="Pathologist"> Pathologist</option>
                              <option value="Admin"> Admin</option>
                          </select>
                        </div>

                       
                              <div class="input-form">
                              <label for=""> *Pathologist :</label>
                                <select name="Pathologist_type">
                              <option value="None"> None</option>
                              <option value="Blood"> Blood</option>
                              <option value="Urine"> Urine</option>
                              <option value="X-ray"> X-ray</option>
                                </select>
                              </div>
                       

                        <button class="btn"  name="Login" >Login</button>
                        <br> <br>

                        <div class="new-account"> Don't have an account yet? <a href="patient_registration_form.php">Create an account</a> </div>

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

