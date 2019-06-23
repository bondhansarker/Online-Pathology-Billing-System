<?php 

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
							<th>Patient name</th>
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
							<th>Sample id</th>
							<th>Patient name</th>
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
      .Dashboard
      {
        margin-left:40%;
        color:#38D39F;
        padding-top:20px;
     }
     table
     {
		  width: 80%;
		  font-family: monospace;
		  font-size: 20px;
		  text-align: center;
		  padding: 5px;
		  margin-left: 150px;
		  border:1px solid black;
	}
	th
	{
		background-color: #588c7e;
		color: white;
		border:1px solid black;

	}

	td
	{
		 color: black;
		 border:1px solid black;
	}
	.prnt
	{
		margin-left: 45%;
		display: inline-block;
		height:40px;
   		 width:80px;
	}
	.back
	{	margin-left: 50%;
		display: inline-block;
		height:40px;
   		width:65px;	
   		margin-top: -20px;
	}

	@media print 
	{
	 	.prnt
	 	{
	 		visibility: hidden;
	 	}
	 	.back
	 	{
	 		visibility: hidden;
	 	}
	  #section-to-print, #section-to-print * 
	  {
	    visibility: visible;
	  }
	  #section-to-print 
	  {
	    position: absolute;
	    left: 0;
	    top: 0;
	  }
	}
    </style>
</head>

<br><br>
<button class="prnt btn btn_one" onclick="myFunction()">Print</button>
 <form class="back" action="patient_view_report.php" method="post">
  	<button class="back btn btn_one">Back</button>                  
 </form> 

<script>

function myFunction() 
{
  window.print();
}

</script>


