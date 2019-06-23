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
        margin-left:42%;
        color:#38D39F;
        padding-top:20px;
      }
      

    </style>
</head>

<body>
    <header>
       <div class="header-top">
              <div class="container">
                     <div class="row">

                             <div class="col-md-4"> 
                                <div class="logo">
                                   <a href="index.php"> <h1>Oreo</h1> </a>
                                </div>
                             </div>
                             <div class="col-md-8">

                                  <div class="menu">
                                       <nav>
                                            <ul>
                                                 <li><a href="index.php">Home</a></li>
                                                 <li><a href="about.php">About</a></li>
                                                 <li><a href="contact_us.php">Contact Us</a></li>
                                               
                                                  <?php 
                                                      session_start();

                                                      if(isset($_SESSION['User_type']))
                                                      {

                                                         if($_SESSION['User_type']=="Patient")
                                                         {
                                                            echo'<li><a href="patient_dashboard.php">Dashboard </a></li>';
                                                         }
                                                         else if($_SESSION['User_type']=="Admin")
                                                         {
                                                            echo'<li><a href="admin_dashboard.php">Dashboard </a></li>';
                                                         }
                                                         else if($_SESSION['User_type']=="Staff")
                                                         {
                                                            echo'<li><a href="staff_dashboard.php">Dashboard </a></li>';
                                                         }
                                                         else if($_SESSION['User_type']=="Pathologist")
                                                         {
                                                            echo'<li><a href="pathologist_dashboard.php">Dashboard </a></li>';
                                                         }
                                                          echo'<li><a href="logout.php?logout">Logout ('.$_SESSION['Email'].')</a></li>';
                                                      }
                                                      else
                                                      {
                                                         echo'<li><a href="login_form.php">Login</a></li>';
                                                      }
                                                  ?>

                                              </ul>
                                         </nav>
                                    </div>
                              </div>
                       </div>
                  </div>
             </div>
      </header>
</body>
</html>

