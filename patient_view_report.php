
<?php 

	include 'patient_sidebar.php';  
	include 'connection_link.php'; 


	$Email=$_SESSION['Email'];
	
	$sql = "SELECT * FROM sample where Email='$Email'";

	$result = mysqli_query($conn, $sql);

	echo'<h1 class="Dashboard" >Report list</h1>';

	
		if ($result->num_rows > 0) 
		{
			echo "<br>";
		    echo "<table align=center>
					     <tr> 
					     	<th>Sample type</th>
					     	<th>Cost</th>
							<th>Date of delivery</th>
							<th>Date of payment</th>
							<th>Report Status</th>
							<th>Payment Status</th>
							<th>Operation</th>
						</tr>";

		    while($row = $result->fetch_assoc()) 
		    {

		    	if($row["Sample_status"]=="Done")
		    	{
		    		if($row["Payment_status"]=="Due")
			    	{
			      	  echo "<tr> 
							
							<td>".$row["Sample_type"]. "</td> 
			     			<td>".$row["Cost"]. "</td> 
							<td>".$row["Date_of_delivery"]. "</td>
							<td>".$row["Date_of_payment"]. "</td>
							<td>".$row["Sample_status"]. "</td>
							<td class='Green'>".$row["Payment_status"]. "</td>
							<td>"."<a href='payment.php?Sample_id=".$row["Sample_id"]."'>Pay"."</td>
			             </tr>";
			         }
			         else
			         {
			         	echo "<tr> 
							
							<td>".$row["Sample_type"]. "</td> 
			     			<td>".$row["Cost"]. "</td> 
							<td>".$row["Date_of_delivery"]. "</td>
							<td>".$row["Date_of_payment"]. "</td>
							<td>".$row["Sample_status"]. "</td>
							<td >".$row["Payment_status"]. "</td>
							<td>"."<a href='patient_view_prescription.php?Sample_id=".$row["Sample_id"]."'>View"."</td>
			             </tr>";
			         }
		    	}
		    	else
		    	{
		    		echo "<tr> 
							
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
