<?php 
  
 include 'header.php';
 include 'connection_link.php'; 

  $loggedIn = 0;
  $Email = $_POST["Email"];
  $Password =$_POST["Password"];
  $User_type=$_POST["User_type"];

   

  if(isset($_POST['Login']))
  {
      
      $query = "SELECT Email FROM patient WHERE Email = '$Email' AND Password = '$Password' AND User_type='$User_type'";
      $result = mysqli_query( $conn, $query);
      $row = mysqli_fetch_assoc($result);

      if($row)
      {
         $loggedIn = 1;
         
      }
      else
      {
         $query = "SELECT * FROM user WHERE Email = '$Email' AND Password = '$Password' AND User_type='$User_type'";
         $result = mysqli_query( $conn, $query);
         $row = mysqli_fetch_assoc($result);

         if($row)
         {
           $loggedIn = 2;  
         }
      }
    }


  if ($loggedIn==1) 
  {
      $_SESSION['Email']=$_POST['Email'];
      $_SESSION['User_type']=$_POST['User_type'];
      header('Location: patient_dashboard.php');
  }    
  else if ($loggedIn==2) 
  {
        if($User_type=='Admin')
        {
            $_SESSION['Email']=$_POST['Email'];
            $_SESSION['User_type']=$_POST['User_type'];
            header('Location: admin_dashboard.php');
        }

        else if ($User_type=='Staff') 
        {
            $_SESSION['Email']=$_POST['Email'];
            $_SESSION['User_type']=$_POST['User_type'];
            header('Location: staff_dashboard.php');
        }

        else if ($User_type=='Pathologist') 
        {
            $_SESSION['Email']=$_POST['Email'];
            $_SESSION['User_type']=$_POST['User_type'];
            $_SESSION['Pathologist_type']=$_POST['Pathologist_type'];
            $Pathologist_type= $_SESSION['Pathologist_type'];

            $query = "SELECT * FROM user WHERE Email = '$Email' AND Password = '$Password' AND Pathologist_type='$Pathologist_type'";
            $result = mysqli_query( $conn, $query);
            $row = mysqli_fetch_assoc($result);

            if($row)
            {
                 header('Location: pathologist_dashboard.php');
            }
            else
            {
                 echo "<script> alert('No existing user or wrong password.');</script>";
            }

         }
    }
    else
    {
          echo "<script> alert('No existing user or wrong password.');</script>";
    }

?>



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
                <img src="assets/img/login.svg" alt="pathology-image">
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

