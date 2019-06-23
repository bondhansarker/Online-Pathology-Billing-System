 
<?php 
	include 'patient_sidebar.php';  
	include 'connection_link.php'; 
 ?>

<div class="check-balance">
<?php 
 


	$Email=$_SESSION['Email'];
	$sql = "SELECT * FROM patient where Email='$Email'";
	$result = mysqli_query($conn, $sql);

	if ($result->num_rows > 0) 
	{
	    echo "<table><br><br><br>";

	    while($row = $result->fetch_assoc()) 
	    {
	        echo "<tr> <h1 class='Balance'>Your account Balance is  ".$row["Balance"]." taka</h1></tr>";    
	    }

	    echo "</table>";
	}
	
	mysqli_close($conn);
?>
 <div class="balance-img">
 	<img src="assets/img/sm-img.svg" alt="">
 </div>
</div>