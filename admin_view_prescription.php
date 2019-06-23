<?php 

	include 'admin_sidebar.php';
	include 'connection_link.php'; 

		if(isset($_POST['Sample_id']))
		{
			$Sample_id=$_POST['Sample_id'];
		}

		if(isset($_GET['Sample_id']))
		{
			$Sample_id=$_GET['Sample_id'];
		}

		$sql = "SELECT * FROM sample where Sample_id='$Sample_id'";

		$result = mysqli_query($conn, $sql);

		if ($result->num_rows > 0) 
		{
		    while($row = $result->fetch_assoc()) 
		    {
				 $Sample_type=$row["Sample_type"];			
		    }	
		}
		echo'<h1 class="Dashboard" >This is your report</h1>';

		if ($Sample_type=="Blood") 
		{

			$sql = "SELECT * FROM blood_sample_report where Sample_id='$Sample_id'";
			$result = mysqli_query($conn, $sql);
		
			if ($result->num_rows > 0) 
			{
			    echo "<br>";
			    echo "<table align=center>
					     <tr> 
							<th>Sample id</th>
							<th>Patient_name</th>
							<th>Email</th>
							<th>Age</th>
							<th>Sex</th>
							<th>Blood group</th>
							<th>WBC</th>
							<th>RBC</th>
							<th>HEMOGLOBIN</th>
							<th>HEMATOCRIT</th>
							<th>MCV</th>
							<th>MCH</th>
							<th>COMMENT</th>
						</tr>";
			    
			    while($row = $result->fetch_assoc()) 
			    {
			        echo "<tr> 
							<td>".$row["Sample_id"]. "</td>
							<td>".$row["Patient_name"]. "</td>   
							<td>".$row["Email"]. "</td>
							<td>".$row["Age"]. "</td>
							<td>".$row["Sex"]. "</td>   
							<td>".$row["Blood_group"]. "</td> 
							<td>".$row["WBC"]. "</td>
							<td>".$row["RBC"]. "</td>   
							<td>".$row["HEMOGLOBIN"]. "</td> 
							<td>".$row["HEMATOCRIT"]. "</td>
							<td>".$row["MCV"]. "</td>   
							<td>".$row["MCH"]. "</td>  
							<td>".$row["COMMENT"]. "</td>   
			             </tr>";
			    }
			    echo "</table>";
			}
		}
		else if ($Sample_type=="Urine") 
		{

			$sql = "SELECT * FROM urine_sample_report where Sample_id='$Sample_id'";
			$result = mysqli_query($conn, $sql);
		
					$sql = "SELECT * FROM urine_sample_report where Sample_id='$Sample_id'";
			$result = mysqli_query($conn, $sql);
		
			if ($result->num_rows > 0) 
			{
			    echo "<br>";
			    echo "<table align=center>
					     <tr> 
							<th>Sample_id</th>
							<th>Patient_name</th>
							<th>Email</th>
							<th>Age</th>
							<th>Sex</th>
							<th>Albumin</th>
							<th>ALP</th>
							<th>BHM</th>
							<th>CK</th>
							<th>CRISTROL</th>
							<th>Epinephrin</th>
							<th>Dopamine</th>
							<th>COMMENT</th>
						</tr>";

			    while($row = $result->fetch_assoc()) 
			    {
			        echo "<tr> 
							<td>".$row["Sample_id"]. "</td>
							<td>".$row["Patient_name"]. "</td>   
							<td>".$row["Email"]. "</td>
							<td>".$row["Age"]. "</td>
							<td>".$row["Sex"]. "</td>   
							<td>".$row["Albumin"]. "</td> 
							<td>".$row["ALP"]. "</td>
							<td>".$row["BHM"]. "</td>   
							<td>".$row["CK"]. "</td> 
							<td>".$row["CRISTROL"]. "</td>
							<td>".$row["Epinephrin"]. "</td>   
							<td>".$row["Dopamine"]. "</td> 
							<td>".$row["COMMENT"]. "</td>
			             </tr>";
			    }
			    echo "</table>";
			}
		}
		

?>
s