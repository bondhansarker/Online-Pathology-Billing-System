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
	
	if(isset($_GET['Sample_id']))
	{
		  $id=$_GET['Sample_id'];
		  $sql = "SELECT * FROM sample where Sample_id='$id'";
		  $result = mysqli_query($conn, $sql);

		  if($result->num_rows > 0) 
		  {
		      while($row = $result->fetch_assoc()) 
		      {
		          $Sample_id=$row["Sample_id"];
		  		  $Cost=$row["Cost"];
		          $Email = $row['Email'];
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
	
	echo"<br><br><h1 class='Balance'>Your payment deadline was ".$days." Days ago</h1>";
	echo"<br><br><h1 class='Balance'>Your total bill is ".$totalcost." taka</h1>";

	$newbalance=$Balance-$totalcost;

    echo "<div class='pay'>
			<br>
			<form method='post' action='payment_complete.php' >  
				<button class='btn btn_one' name='Sample_id' value='$Sample_id'><b>Pay the Bill</b></button>
		    </form>

		 </div>";
 
?>
	

