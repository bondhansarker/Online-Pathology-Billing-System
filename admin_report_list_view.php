<?php 

	include 'admin_sidebar.php';  
	include 'connection_link.php'; 

	echo'<h1 class="Dashboard" >Report list</h1>';

		$sql = "SELECT * FROM sample";
		$result = mysqli_query($conn, $sql);
	
	if ($result->num_rows > 0) 
	{
		echo "<br>";
	    echo "<table align=center>

				     <tr> 
				     	<th>Patient name</th>
				     	<th>Email</th>
				     	<th>Sample type</th>
				     	<th>Cost</th>
						<th>Date_of_delivery</th>
						<th>Date_of_payment</th>
						<th>Report Status</th>
						<th>Payment Status</th>
						<th>Open</th>
						
					</tr>";

	    while($row = $result->fetch_assoc()) 
	    {

	    	if($row["Sample_status"]=="Done")
	    	{
	    		
	      	  		echo "<tr> 
								<td>".$row["Patient_name"]. "</td> 
								<td>".$row["Email"]. "</td> 
								<td>".$row["Sample_type"]. "</td> 
				     			<td>".$row["Cost"]. "</td> 
								<td>".$row["Date_of_delivery"]. "</td>
								<td>".$row["Date_of_payment"]. "</td>
								<td>".$row["Sample_status"]. "</td>
								<td>".$row["Payment_status"]. "</td>
								<td>"."<a href='admin_view_prescription.php?Sample_id=".$row["Sample_id"]."'>View"."</td>
					
	               		</tr>";
		        
	    	}
	    	else
	    	{
		    		echo "<tr> 
								<td>".$row["Patient_name"]. "</td> 
								<td>".$row["Email"]. "</td> 
								<td>".$row["Sample_type"]. "</td> 
				     			<td>".$row["Cost"]. "</td> 
								<td>".$row["Date_of_delivery"]. "</td>
								<td>".$row["Date_of_payment"]. "</td>
								<td>".$row["Sample_status"]. "</td>
								<td>Processing</td>
								<td>Processing</td>
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
