
<?php 
	
    include 'connection_link.php'; 
    $Patient_name = $_POST['Patient_name'];
    $Age=$_POST['Age'];
    $Sex = $_POST['Sex'];
    $Email = $_POST['Email'];
    $Date_of_delivery = ($_POST['Date_of_delivery']);
    $Date_of_payment = $_POST['Date_of_payment'];
    $Sample_type =  $_POST['Sample_type'];
    $Sample_status = "Not yet";
    $Payment_status= "Due";
    $Sample_id=mt_rand()%100000;

    if($Sample_type=="Blood")
    {
      $Cost=50;
    }
    else if ($Sample_type=="Urine")
    {
      $Cost=100;
    }
    elseif ($Sample_type=="X-ray") 
    {
      $Cost=150;
    }

    $query = "SELECT Email FROM patient WHERE Email = '$Email'";
    $result = mysqli_query( $conn, $query);
    $row = mysqli_fetch_assoc($result);
    if($row)
    {
          $sql = "INSERT INTO sample(Sample_id,Patient_name,Age,Sex , Email , Date_of_delivery,Date_of_payment,Sample_type,Cost,Sample_status,Payment_status) VALUES ('$Sample_id','$Patient_name',$Age,'$Sex','$Email', '$Date_of_delivery', '$Date_of_payment','$Sample_type','$Cost','$Sample_status','$Payment_status')";

          if ($conn->query($sql) == TRUE) 
          {
             echo "<script> alert('Successfully Submitted the data to Pathologist');</script>";

          } 
    }
    else 
    {
       header('location:staff_submit_sample_form_error.php');
    }

  echo'<h1 class="Dashboardlink" >Sample Details of ID : '.$Sample_id.'</h1>';

    $sql = "SELECT * FROM sample";
    $result = mysqli_query($conn, $sql);
  
  if ($result->num_rows > 0) 
  {
    echo "<br>";
      echo "<table align=center>

            <tr>
              <th>Sample id</th>
              <th>Patient name</th>
              <th>Email</th>
              <th>Sample type</th>
              <th>Cost</th>
              <th>Date of delivery</th>
              <th>Date of payment</th>
          </tr>";

      while($row = $result->fetch_assoc()) 
      {
          if($row["Sample_id"]==$Sample_id)
          {     
                $id=$row["Cost"]*2;
                echo "<tr> 
                <td>".$row["Sample_id"]. "</td> 
                <td>".$row["Patient_name"]. "</td> 
                <td>".$row["Email"]. "</td> 
                <td>".$row["Sample_type"]. "</td> 
                <td>".$id."</td> 
                <td>".$row["Date_of_delivery"]. "</td>
                <td>".$row["Date_of_payment"]. "</td>
                    </tr>";
          
          }
      }
      echo "</table>";
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
      .Dashboardlink
      {
        margin-left:35%;
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
  { margin-left: 50%;
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
 <form class="back" action="staff_submit_sample_form.php" method="post">
  	<button class="back btn btn_one">Back</button>                  
 </form> 

<script>

function myFunction() 
{
  window.print();
}

</script>

