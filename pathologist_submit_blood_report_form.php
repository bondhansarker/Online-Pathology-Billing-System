<?php 

    include 'pathologist_sidebar.php';
    include 'connection_link.php'; 

    if(isset($_GET['Sample_id']))
    {
        $id=$_GET['Sample_id'];
        $sql = "SELECT * FROM sample where Sample_id='$id'";

        $result = mysqli_query($conn, $sql);

        if($result->num_rows > 0) 
        {
              while($row = $result->fetch_assoc()) 
              {
                  $Sample_id=$row["Sample_id"];
                  $Patient_name=$row["Patient_name"];
                  $Age=$row['Age'];
                  $Sex = $row['Sex'];
                  $Email = $row['Email'];
                  $Date_of_payment = $row['Date_of_payment'];
                  $Payment_status= $row['Payment_status'];
              }
        }
    }

 ?>


    
      <form action="pathologist_submit_blood_report_link.php" method="post">
          
           <div class="container">
           <div class="row">
             <div class="col-md-12">
                <div class="about-title">
                   <h2>Report(Blood) data Submisson</h2>
                      <p class="line1"></p>
         
                </div>
             </div>

       <div class="col-md-5 offset-md-2">

           <div class="input-form">
            <label for=""> Sample ID:</label>
           <input type="text"  name="Sample_id" value="<?php echo $Sample_id; ?>" readonly>
           </div> 
            
            <div class="input-form">
            <label for=""> Patient Name: </label>
            <input type="text"  name="Patient_name" value="<?php echo $Patient_name; ?>"readonly>
              </div>  
          

            <div class="input-form">
            <label for=""> Patient Email: </label>
            <input type="text"  name="Email" value="<?php echo $Email; ?>"readonly>
              </div> 
        
            <div class="input-form">
            <label for=""> Patient Age:</label>
             <input type="text"  name="Age" value="<?php echo $Age; ?>" readonly>
              </div> 
           
            <div class="input-form">
            <label for=""> Sex:</label>
             <input type="text" name="Sex" value="<?php echo $Sex; ?>"readonly>
              </div> 
          

            <div class="input-form">
            <label for=""> Blood group: </label>
            <input type="text" placeholder="Blood group" name="Blood_group" required>
              </div> 
          

            <div class="input-form">
            <label for=""> WBC:</label>
           <input type="text" placeholder="WBC" name="WBC" >
              </div> 
          
            <div class="input-form">
            <label for=""> RBC: </label>
          <input type="text" placeholder="RBC" name="RBC" >
              </div> 
           
            <div class="input-form">
            <label for=""> HEMOGLOBIN: </label>
            <input type="text" placeholder="HEMOGLOBIN" name="HEMOGLOBIN" >
              </div> 
           
        
      </div>
      <div class="col-md-5 ">

            <div class="input-form">
            <label for=""> HEMATOCRIT: </label>
            <input type="text" placeholder="HEMATOCRIT" name="HEMATOCRIT" >
              </div> 

            <div class="input-form">
            <label for="">  MCV:</label>
          <input type="text" placeholder="MCV" name="MCV" >
            </div> 
           
            <div class="input-form">
            <label for="">  MCH:</label>   
           <input type="text" placeholder="MCH" name="MCH" >
             </div> 
           
            <div class="input-form">
            <label for=""> MCHC: </label>
           <input type="text" placeholder="MCHC" name="MCHC" >
             </div> 
           
            <div class="input-form">
            <label for=""> MPV:</label>
            <input type="text" placeholder="MPV" name="MPV" >
              </div> 
          
            <div class="input-form">
            <label for=""> LYMPHOCYTES: </label> 
            <input type="text" placeholder="LYMPHOCYTES" name="LYMPHOCYTES" >
              </div> 
        
            
            <div class="input-form">
            <label for=""> GLUCOSE: </label>
            <input type="text" placeholder="GLUCOSE" name="GLUCOSE" >
              </div> 
            

            <div class="input-form">
            <label for="">  RESULT:</label>  
             <input type="text" placeholder="RESULT" name="RESULT" >
               </div> 
            

            <div class="input-form">
            <label for="">COMMENT</label>
            <input type="text" placeholder="COMMENT" name="COMMENT" >
              </div> 
            
        
      </div>
    </div>
  </div>

           <div class="login-btn">
            <center>

            <button class="btn btn_one" name="Submit" value="<?php echo $Sample_id; ?>" ><b>Submit</b></button>
            </center>

          </div>
          
      </form> 
      
  


