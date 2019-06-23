<?php 

	include 'staff_sidebar.php';  
 	include 'connection_link.php'; 


	$sql = "SELECT * FROM appointment";

	$result = mysqli_query($conn, $sql);

	echo'<h1 class="Dashboard" >Appointment list</h1>';

	if ($result->num_rows > 0) 
	{
	    echo "<br>";
	    echo "<table align=center>
			     <tr>
			     	<th>Appointment id</th>
			     	<th>Email</th>
			     	<th>Appointment Date</th> 
					<th>Appointment Slot</th>
					<th>Status</th> 
				</tr>";
	    

	    while($row = $result->fetch_assoc()) 
	    {
	    	if($row["Appointment_status"]=="Not yet")
	    	{
		        echo "<tr>
		        		<td>".$row["Appointment_id"]. "</td> 
		        		<td>".$row["Email"]. "</td> 
						<td>".$row["Appointment_date"]. "</td>
						<td>".$row["Appointment_time"]. "</td>   
						<td>"."<a href='staff_appointment_approve.php?Appointment_id=".$row["Appointment_id"]."'>Approve</a>"."
		             </tr>";

		            
	         }
	         else
	         {	echo "<tr>
	     				<td>".$row["Appointment_id"]. "</td> 
		        		<td>".$row["Email"]. "</td> 
						<td>".$row["Appointment_date"]. "</td>
						<td>".$row["Appointment_time"]. "</td>   
						<td>".$row["Appointment_status"]. "</td>
					<tr>";

	         }
	    }
	    echo "</table>";
	}
	else
	{
	    echo "0 results";
	}

	mysqli_close($conn);
?>
