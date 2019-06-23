<?php include 'patient_sidebar.php';

 echo "<script> alert('Conflict ! Please,choose another time!'); </script>";

 ?>
               
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"> </script>

<h1 class="Appointment">Add Appointment</h1>
<br>
<div class="container pricebox">
    <form action="" method="post">
          <div class="bg">  
            <label> Test </label>&nbsp &nbsp &nbsp  <label>&nbsp &nbsp &nbspCost</label>
            <br>
          </div>

          <hr>

          <input type="checkbox"  value="100.00" id="cbx1" />
          <label>Blood Test - 100.00 taka</label>
          <br>

          <hr>

          <input type="checkbox" value="200.00" id="cbx2" />
          <label>Urine Test - 200.00 taka</label>
          <br>

          <hr>

          <input type="checkbox" value="300.00" id="cbx3" />
          <label>X-ray Test - 300.00 taka</label>
          <br>

          <hr>

          &nbsp &nbsp Total &nbsp &nbsp-<input type="text" id="grandtotal" /> taka
          <br>

    </form>
</div>


<center>
    <p>
        <form class="dateclass" action="patient_add_appointment_link.php" method="post">
   
                Date : &nbsp <input type="Date" name="Appointment_date" required>
               
                &nbsp &nbsp Time : &nbsp
                <select name="Appointment_time" required>
                    <option value="9:00AM-10:00AM" > 9:00AM-10:00AM</option>
                    <option value="10:00AM-11:00AM"> 10:00AM-11:00AM</option>
                    <option value="11:00AM-12:00PM"> 11:00AM-12:00PM</option>
                    <option value="12:00PM-01:00PM"> 12:00PM-01:00PM</option>
                    <option value=" 01:00PM-02:00PM"> 01:00PM-02:00PM</option>
                    <option value="02:00PM-03:00PM"> 02:00PM-03:00PM</option>
                    <option value="03:00PM-04:00PM"> 03:00PM-04:00PM</option>
                    <option value="04:00PM-05:00PM"> 04:00PM-05:00PM</option>
                    <option value="05:00PM-06:00PM"> 05:00PM-06:00PM</option>
                </select>
                <br> <br>
                <p class="text-danger">N.B: You have to pay 50% payment When you submit the Sample !</p> 
             
                <button class="btn btn_one"><b>Add</b></button>
            
        </form>  
   </p>
</center>


<script type="text/javascript">
  
          $(":checkbox").on("change", function() 
          {
              $("#grandtotal").val(function() 
              {
                  //declare a variable to keep the sum of the values
                  var sum = 0;
                  //using an iterator find and sum the values of checked checkboxes
                  $(":checkbox:checked").each(function()
                  {
                      sum += ~~$(this).val();
                  });
                  return sum;
              });
          });

        //here change the value according on checked checkboxes on DOM ready event
        $("#grandtotal").val(function()
        {
            var sum = 0;
            $(":checkbox:checked").each(function()
             {
              sum += ~~$(this).val();
            });
            return sum;
        });
        
</script>


  
