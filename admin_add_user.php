<?php include 'header.php'; ?>

<center>
    <p>

      <form action="admin_add_user_link.php" method="post">

                <h1> User Registration </h1>
                <br>
                
                <input type="text" placeholder="User name" name="User_name" required >
                <br>
                <br> 

                <input type="text" placeholder="Email" name="Email" required>
                <br>
                <br>

       			  <input type="Password" placeholder="Password" name="Password" required>
                <br>
                <br>

                <input type="text" placeholder="Phone number" name="Phone_number" required>
                <br>
                <br>

                <select name="User_type">
                    <option value="Staff"> Staff</option>
                    <option value="Pathologist"> Pathologist</option>
                </select>
                <br>
                <br>

                <select name="  Pathologist_type">
                    <option value="Blood"> Blood</option>
                    <option value="Urine"> Urine</option>
                    <option value="X-ray"> X-ray</option>
                    <option value="None"> None</option>
                </select> 
                <br>
                <br>      
                <br>
       

              <button class="btn btn_one""  ><big><b>Add</b></big></button>
              <button class="btn btn_one""  ><big><b>Cancel</b></big></button>

        </form> 
      
      </p>
 </center>


