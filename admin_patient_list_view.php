<?php include 'admin_sidebar.php'; 

	include 'connection_link.php'; 

	if($_SESSION['Email'])
	{
		$id=$_SESSION['Email'];
	}

	$sql = "SELECT * FROM patient";

	$result = mysqli_query($conn, $sql);

	echo'<br><h1 class="Dashboard" >Patient list</h1>';

	if ($result->num_rows > 0) 
	{
				echo "<br>";
			    echo "<table align=center>
				     <tr> 
						<th>Patient name</th>
						<th>Phone number</th>
						<th>Email</th>
						<th>Address</th>
						<th>Date_of_register</th>  
					 </tr>";

		    while($row = $result->fetch_assoc())
		    {
		        echo"<tr> 
						<td>".$row["Patient_name"]. "</td>
						<td>".$row["Phone_number"]. "</td>   
						<td>".$row["Email"]. "</td>  
						<td>".$row["Address"]. "</td> 
						<td>".$row["Date_of_register"]. "</td> 
		             </tr>";
	    	}
	            echo "</table>";
	}
	else 
	{
	    echo "0 results";
	}

	mysqli_close($conn);
?>
