<?php 

	include 'pathologist_sidebar.php';
	include 'connection_link.php'; 

	if($_SESSION['Pathologist_type'])
	{
		$Pathologist_type=$_SESSION['Pathologist_type'];
	}

	$sql = "SELECT * FROM sample where Sample_type='$Pathologist_type'";

	$result = mysqli_query($conn, $sql);

	echo'<h1 class="Dashboard" > '.$_SESSION['Pathologist_type'].' Report list</h1>';

    if($Pathologist_type=="Blood")
    {
    	
		if($result->num_rows > 0) 
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
	else if ($Pathologist_type=="Urine")
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
					
		    }
		    echo "</table>";
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

		    while($row = $result->fetch_assoc()) {
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
