<?php 
    
    include 'pathologist_sidebar.php';
    include 'connection_link.php'; 


    $Sample_id=$_POST["Sample_id"];
    $Patient_name=$_POST["Patient_name"];
    $Age=$_POST['Age'];
    $Sex = $_POST['Sex'];
    $Email = $_POST['Email'];
    $Blood_group = $_POST['Blood_group'];
    $WBC = $_POST['WBC'];
    $RBC = $_POST['RBC'];
    $HEMOGLOBIN = $_POST['HEMOGLOBIN'];
    $HEMATOCRIT = $_POST['HEMATOCRIT'];
    $MCV = $_POST['MCV'];
    $MCH = $_POST['MCH'];
    $MCHC = $_POST['MCHC'];
    $MPV = $_POST['MPV'];
    $LYMPHOCYTES = $_POST['LYMPHOCYTES'];
    $GLUCOSE = $_POST['GLUCOSE'];
    $RESULT = $_POST['RESULT'];
    $COMMENT = $_POST['COMMENT'];


    $sql = "INSERT INTO blood_sample_report(Sample_id,Patient_name,Email,Age,Sex,Blood_group,WBC,RBC,HEMOGLOBIN , HEMATOCRIT,MCV,MCH ,MCHC, MPV , LYMPHOCYTES,GLUCOSE,RESULT,COMMENT )VALUES ('$Sample_id','$Patient_name','$Email','$Age','$Sex', '$Blood_group', '$WBC','$RBC','$HEMOGLOBIN','$HEMATOCRIT','$MCV','$MCH', '$MCHC','$MPV','$LYMPHOCYTES','$GLUCOSE','$RESULT','$COMMENT')";
      

      if ($conn->query($sql) == TRUE) 
      {
         echo "<script> alert('Data Submitted Successfully');</script>";
      } 
  

      $done="Done";
      $sql = "UPDATE `sample` SET `Sample_status` = '$done'  WHERE `sample`.`Sample_id` = '$Sample_id'";
      if ($conn->query($sql) == TRUE) 
      {
         
      } 
        
      
      if($_SESSION['Pathologist_type'])
      {
        $Pathologist_type=$_SESSION['Pathologist_type'];
      }


      $sql = "SELECT * FROM sample where Sample_type='$Pathologist_type'";

      $result = mysqli_query($conn, $sql);

      echo'<h1 class="Dashboard" > '.$_SESSION['Pathologist_type'].' Report list</h1>';

      if($Pathologist_type=="Blood")
      {
          
              if ($result->num_rows > 0) 
              {
                  echo "<br><table align=center>
                   <tr> 
                      <th>Patient name</th>
                      <th>Age</th>
                      <th>Sex</th>
                      <th>Date_of_delivery</th>
                      <th>Date_of_payment</th>
                      <th>Cost</th>
                      <th>Status</th>
                      <th>Operation</th>
                  </tr>";

                  while($row = $result->fetch_assoc())
                  {

                      if($row["Sample_status"]=="Not yet")
                      {
                         echo "<tr> 
                                <td>".$row["Patient_name"]. "</td>
                                <td>".$row["Age"]. "</td>   
                                <td>".$row["Sex"]. "</td>  
                                <td>".$row["Date_of_delivery"]. "</td>
                                <td>".$row["Date_of_payment"]. "</td>
                                <td>".$row["Cost"]. "</td> 
                                <td>".$row["Sample_status"]. "</td>
                                <td>"."<a href='pathologist_submit_blood_report_form.php?Sample_id=".$row["Sample_id"]."'>Submit</a>"."
                             </tr>";
                      }
                      else
                      {
                          echo "<tr> 
                                  <td>".$row["Patient_name"]. "</td>
                                  <td>".$row["Age"]. "</td>   
                                  <td>".$row["Sex"]. "</td>  
                                  <td>".$row["Date_of_delivery"]. "</td>
                                  <td>".$row["Date_of_payment"]. "</td>
                                  <td>".$row["Cost"]. "</td> 
                                  <td>".$row["Sample_status"]. "</td>
                                  <td>Submitted</td>
                               </tr>";
                       }
                  }
                  echo "</table>";
               }

               else 
               {
                  echo "0 results";
               }
      }

      elseif ($Pathologist_type=="Urine")
       {
          if ($result->num_rows > 0) 
          {
                  echo "<br><table align=center>
                   <tr> 
                      <th>Patient name</th>
                      <th>Age</th>
                      <th>Sex</th>
                      <th>Date_of_delivery</th>
                      <th>Date_of_payment</th>
                      <th>Cost</th>
                      <th>Status</th>
                      <th>Operation</th>
                 </tr>";

              while($row = $result->fetch_assoc())
               {
                   if($row["Sample_status"]=="Not yet")
                   {
                           echo "<tr> 
                          <td>".$row["Patient_name"]. "</td>
                          <td>".$row["Age"]. "</td>   
                          <td>".$row["Sex"]. "</td>  
                          <td>".$row["Date_of_delivery"]. "</td>
                          <td>".$row["Date_of_payment"]. "</td>
                          <td>".$row["Cost"]. "</td> 
                          <td>".$row["Sample_status"]. "</td>
                            <td>"."<a href='pathologist_submit_urine_report_form.php?Sample_id=".$row["Sample_id"]."'>Submit</a>"."
                               </tr>";
                    }
                   else
                   {
                            echo "<tr> 
                          <td>".$row["Patient_name"]. "</td>
                          <td>".$row["Age"]. "</td>   
                          <td>".$row["Sex"]. "</td>  
                          <td>".$row["Date_of_delivery"]. "</td>
                          <td>".$row["Date_of_payment"]. "</td>
                          <td>".$row["Cost"]. "</td> 
                          <td>".$row["Sample_status"]. "</td>
                          <td>Submitted</td>
                               </tr>";

                   }
              }
              echo "</table>";
          }
          else 
          {
              echo "0 results";
          }
      }
      else if($Pathologist_type=="X-ray")
      {
            if ($result->num_rows > 0) 
            {
                echo "<br><table align=center>
                   <tr> 
                      <th>Patient name</th>
                      <th>Age</th>
                      <th>Sex</th>
                      <th>Date_of_delivery</th>
                      <th>Date_of_payment</th>
                      <th>Cost</th>
                      <th>Status</th>
                      <th>Operation</th>
                   </tr>";

                while($row = $result->fetch_assoc()) 
                {
                    echo "<tr> 
                            <td>".$row["Patient_name"]. "</td>
                            <td>".$row["Age"]. "</td>   
                            <td>".$row["Sex"]. "</td>  
                            <td>".$row["Date_of_delivery"]. "</td> 
                            <td>".$row["Date_of_payment"]. "</td> 
                            <td>".$row["Cost"]. "</td> 
                            <td>".$row["Sample_status"]. "</td>
                            <td>"."<a href='submit_report_form.php?Sample_id=".$row["Sample_id"]."'>Submit</a>"."
                         </tr>";
                }
                echo "</table>";
            }
             else 
            {
                echo "0 results";
            }
      }

      mysqli_close($conn);
    ?>
