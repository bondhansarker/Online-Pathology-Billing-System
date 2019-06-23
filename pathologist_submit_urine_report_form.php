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


  
    
      <form action="pathologist_submit_urine_report_link.php" method="post">

          <div class="container">
           <div class="row">
             <div class="col-md-12">
                <div class="about-title">
                   <h2>Report(Urine) data Submisson</h2>
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
            <label for="">Albumin: </label>
            <input type="text" placeholder="Albumin" name="Albumin" required>
              </div> 
          

            <div class="input-form">
            <label for=""> ALP:</label>
           <input type="text" placeholder="ALP" name="ALP" >
              </div> 
          
            <div class="input-form">
            <label for=""> BHM: </label>
          <input type="text" placeholder="BHM" name="BHM" >
              </div> 
           
            <div class="input-form">
            <label for=""> CK: </label>
            <input type="text" placeholder="CK" name="CK" >
              </div> 
           
        
      </div>
      <div class="col-md-5 ">

            <div class="input-form">
            <label for=""> CRISTROL: </label>
            <input type="text" placeholder="CRISTROL" name="CRISTROL" >
              </div> 

            <div class="input-form">
            <label for="">  Epinephrin:</label>
          <input type="text" placeholder="Epinephrin" name="Epinephrin" >
            </div> 
           
            <div class="input-form">
            <label for="">  Metanephorin:</label>   
           <input type="text" placeholder="Metanephorin" name="Metanephorin" >
             </div> 
           
            <div class="input-form">
            <label for=""> Norpinephrin: </label>
           <input type="text" placeholder="Norpinephrin" name="Norpinephrin" >
             </div> 
           
            <div class="input-form">
            <label for=""> Normetanephorin:</label>
            <input type="text" placeholder="Normetanephorin" name="Normetanephorin" >
              </div> 
          
            <div class="input-form">
            <label for=""> LYMPHOCYTES: </label> 
            <input type="text" placeholder="LYMPHOCYTES" name="LYMPHOCYTES" >
              </div> 
        
            
            <div class="input-form">
            <label for=""> Dopamine: </label>
            <input type="text" placeholder="Dopamine" name="Dopamine" >
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

        
            <br>

           
        <br>

         <button class="btn btn_one" name="Submit" value="<?php echo $Sample_id; ?>" ><big><b>Submit</b></big></button>
          
      </form> 
      
      </p>
    </center>


