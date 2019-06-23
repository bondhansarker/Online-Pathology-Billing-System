<?php include 'header.php'; ?>

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
    <style>
          body
          {
              margin: 0px;
              padding: 0px;
          }
          .hero-area
          {
              background-image:url(assets/img/bg.svg);
              background-position:right top ;
              background-size:;
              background-repeat: no-repeat;
              height:600px;
              background-attachment: fixed;
              position:relative;
          }
    </style>
</head>
<body>

   <div class="hero-area">
      <div class="container">
        <div class="row">
             <div class="hero-text">
               <h1>Welcome to Oreo <br> Pathology Lab</h1>
               <h2>We are ready fo giving to best services <br>
               Let us know about your demand !</h2>
             </div>
        </div>

      </div>

       <?php  
            if(isset($_SESSION['User_type']))
            {
             
            }
            else
            {
                echo
                '<div class="hero_btn">
                  <a class="btn btn_one" href="patient_registration_form.php">Registation</a>
                  <a class="btn btn_two" href="login_form.php">Login</a>
                </div>';
            }
        ?>

  </div>
     
</body>
</html>
