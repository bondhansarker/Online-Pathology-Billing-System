<?php 

	include 'patient_sidebar.php';  
	include 'connection_link.php'; 

	
	$Email=$_SESSION['Email'];
		

	$sql = "SELECT * FROM patient where Email='$Email'";
	$result = mysqli_query($conn, $sql);

	if($result->num_rows > 0) 
	{
	    while($row = $result->fetch_assoc())
	    {
	        $Balance=$row["Balance"];
	    }
	}
	
	if(isset($_POST['Sample_id']))
	{
		  $Sample_id=$_POST['Sample_id'];
		  
		  $sql = "SELECT * FROM sample where Sample_id='$Sample_id'";
		  $result = mysqli_query($conn, $sql);

		  if($result->num_rows > 0) 
		  {
		      while($row = $result->fetch_assoc()) 
		      {
		  		  $Cost=$row["Cost"];
		          $Email = $row['Email'];
		          $Sample_type=$row['Sample_type'];
		          $Date_of_payment = $row['Date_of_payment'];
		          $Payment_status= $row['Payment_status'];
		      }
		  }
	}


	
	$today = time(); // or your date as well
	$your_date = strtotime($Date_of_payment);
	$datediff = $today - $your_date;
	$days=round($datediff / (60 * 60 * 24));
	$fine=($Cost*(5/100));
	$totalcost=($Cost+($fine*$days));
	
	echo"<br><br><h1 class='Balance'>Your total bill is ".$totalcost." taka</h1>";

	$newbalance=round($Balance-$totalcost);

	if(isset($_POST['Sample_id']))
	{

		$sql = "UPDATE `patient` SET `Balance` = '$newbalance'  WHERE `patient`.`Email` = '$Email'";

		if ($conn->query($sql) == TRUE) 
		{
			echo"<br><br> <h1 class='Balance'> Your New Balance is ".$newbalance." Taka
			</h1>";
			if($Sample_type=="Blood")
			{	
				echo "<div class='pay'>
					<br>
					<form method='post' action='patient_view_prescription.php' >  
						<button class='btn btn_one' name='Sample_id' value='$Sample_id'><b>Click here to see the report</b></button>
				    </form>
				 </div>";
			}
			else if($Sample_type=="Urine")
			{
				echo "<div class='pay'>
						<br>
						<form method='post' action='patient_view_prescription.php' >  
							<button class='btn btn_one' name='Sample_id' value='$Sample_id'><b>Click here to see the report</b></button>
					    </form>
					 </div>";
			}
		} 
	}


	$done="Completed";
	$sql = "UPDATE `sample` SET `Payment_status` = '$done'  WHERE `sample`.`Sample_id` = '$Sample_id'";
	if ($conn->query($sql) == TRUE) 
	{

	}

	

?>