<?php 

	include 'patient_sidebar.php';  
 	include 'connection_link.php'; 

	$Email=$_SESSION['Email'];


	$sql = "SELECT * FROM appointment where Email='$Email'";

	$result = mysqli_query($conn, $sql);

	echo'<h1 class="Dashboard" >Appointment list</h1>';

	if ($result->num_rows > 0) 
	{
	    echo "<br>";
	    echo "<table align=center>
			     <tr> 
					<th >Appointment Date</th>
					<th >Appointment Slot</th>
					<th >Status</th> 
				</tr>";
	    

	    while($row = $result->fetch_assoc()) 
	    {
	    	if($row["Appointment_status"]=="Approved")
		    {	
		    	echo "<tr> 
						<td >".$row["Appointment_date"]. "</td>
						<td >".$row["Appointment_time"]. "</td>   
						<td class='approve'>".$row["Appointment_status"]. "</td>  
		             </tr>";
	        }
	        else
	        {	
	        	echo "<tr> 
						<td >".$row["Appointment_date"]. "</td>
						<td >".$row["Appointment_time"]. "</td>   
						<td class='not'>".$row["Appointment_status"]. "</td>  
		             </tr>";

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


 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Oreo</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    

    <style type="text/css">
   
	th
	{
		background-color: #588c7e;
		color: white;
		border:1px solid black;
	}
	.approve
	{
		 color: green;
		 
	}
	.not
	{
		color:#DC143C;
	}

    </style>
</head>