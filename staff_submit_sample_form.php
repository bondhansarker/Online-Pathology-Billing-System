<?php include 'header.php'; ?>

 <body>
    <div class="about-area section-padding" id="about">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="about-title">
              <h2>Submit Sample Information </h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="about-img">
              <img src="assets/img/login.svg" alt="pathology-image">
            </div>
          </div>
          <div class="col-md-4 offset-md-2">
            <div class="about-content">

            <div class="login-box">
             
            <center>
               <p>
                    <form action="staff_submit_sample_link.php" method="post">

                     <div class="input-form">
                       <label for="">Patient name:</label>
                     <input type="text"   placeholder="Patient name" name="Patient_name" required >
                      </div>

                     

                      <div class="input-form">
                       <label for=""> Patient Age:</label>
                      <input type="text" placeholder="Age" name="Age" required >
                      </div>

                    
                         <div class="input-form">
                       <label for="">Patient Email:</label>
                       <input type="text" placeholder="Email" name="Email" required>
                      </div> 

                      
                      <div class="input-form">
                        <label for="">Gender:</label>
                        <select name="Sex">
                                        <option value="Male" > Male</option>
                                        <option value="Female"> Female</option>
                                        <option value="Others"> Others</option>
                                 </select> 
                      </div>
                   

                       <div class="input-form">
                               <label for=""> Sample type:</label>
                      
                                <select name="Sample_type">
                                    <option value="Blood" > Blood</option>
                                    <option value="Urine"> Urine</option>
                                    <option value="X-ray"> X-ray</option>
                               </select> 
                      </div>

                      <div class="input-form">
                       <label for=""> Date of delivery:</label>
                      <input type="Date" placeholder="Date of delivery" name="Date_of_delivery" required>
                     </div>

                     <div class="input-form">
                       <label for=""> Date of payment: </label>
                      <input type="Date" placeholder="Date of payment" name="Date_of_payment" required>
                     </div>



                     <br>
                      <button class="btn btn_one"> <b> Submit </b></button>
                  
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

