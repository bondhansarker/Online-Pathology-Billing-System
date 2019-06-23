<?php 

    include 'patient_sidebar.php'; 
    include 'connection_link.php'; 

    $Email = $_SESSION['Email'];
    $Appointment_date = $_POST['Appointment_date'];
    $Appointment_time = $_POST['Appointment_time'];
    $Appointment_status = "Not yet";
    $Appointment_id=mt_rand()%100000;

        
    $query = "SELECT * FROM appointment WHERE Appointment_date = '$Appointment_date' AND Appointment_time = '$Appointment_time'";
    $result = mysqli_query( $conn, $query);
    $row = mysqli_fetch_array($result);

    if($row)
    {
        header('location:patient_add_appointment_error.php');
    }
    else
    {
        $query = "SELECT Email FROM patient WHERE Email = '$Email'";
        $result = mysqli_query( $conn, $query);
        $row = mysqli_fetch_array($result);
        if($row)
        {
            $sql = "INSERT INTO appointment(Appointment_id,Email,Appointment_date,Appointment_time,Appointment_status ) VALUES ('$Appointment_id','$Email','$Appointment_date','$Appointment_time','$Appointment_status')";

            if ($conn->query($sql) == TRUE) 
            {
                echo "<script> alert('The appointment has been done already');</script>";
            }
        }
    }



    $Email=$_SESSION['Email'];


    $sql = "SELECT * FROM appointment where Email='$Email'";

    $result = mysqli_query($conn, $sql);

    echo'<h1 class="Dashboardlink">Your Appointment Schedule</h1>';

    if ($result->num_rows > 0) 
    {
        echo "<br>";
        echo "<table align=center><tr> 
            <th>Appointment Date</th>
            <th>Appointment Slot</th>
            <th>Status</th> 
          </tr>";
        
        while($row = $result->fetch_assoc()) 
        {
          if($row["Appointment_id"]==$Appointment_id)
          {
            echo "<tr> 
            <td>".$row["Appointment_date"]. "</td>
            <td>".$row["Appointment_time"]. "</td>   
            <td>".$row["Appointment_status"]. "</td>  
                 </tr>";
          }
        }
        echo "</table><br><br>";
        echo '<p class="text-danger" align=center >N.B: You have to pay 50% payment When you submit the Sample !</p>' ;
    }
    else
    {
        echo "0 results";
    }

?>


