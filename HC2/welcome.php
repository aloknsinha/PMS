<?php
include("config.php");
session_start();
$cur_user = $_SESSION['login_user'];
$user_type = $_SESSION['login_type'];
$user_type1 = $_SESSION['login_type'];

if($user_type == "fac")
  $user_type = "Faculty";
else if($user_type == "reg")
  $user_type = "Student";
else if($user_type == "doctors")
  $user_type = "Doctor";

$_SESSION['atdn'] = $cur_user;
$sql = "SELECT Name FROM $user_type1  WHERE Username = '$cur_user'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_row($result);
$temp = $row[0];
//echo "$cur_user";//---working
?>
<html>
   <head>

     <link rel = "icon" href ="images/uohlogo.jpg">
     <title>Health Centre University Of Hyderabad</title>
     <link rel="stylesheet" href="css/bootstrap.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/tooplate.css"><link rel="stylesheet" href="css/temp.css">
     <link rel="stylesheet" type="text/css" href="css/home.css">
     <link rel="stylesheet" href="css/slidetest.css">
   </head>
   <body  id="top" bgcolor="#470a0a">
      
<header>
          <div class="container">
               <div class="row">
                    <!-- <div class="col-md-4 col-sm-5"> <p><font color="red" size="6px">University Of Hyderabad</font></p> </div> -->
                    <a href="https://www.uohyd.ac.in"><img src="images/uoh2.png" height="50" width="350" align="left"></a>     
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i><a href="tel:0401234567">040-123-4567</a></span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 24 Hours open All Days</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="mailto:hc@uohyd.ac.in">hc@uohyd.ac.in</a></span>
                    </div>

               </div>
          </div>
     </header>

     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container" id="abc">               
               <div class="navbar-header" id="top-health-centre">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>
                    <!-- lOGO TEXT HERE -->

                    <a href="index.html" class="navbar-brand"><font size="7px" color="green">Health Centre</font></a>
                    <div id="logohc">A primary Health Care and Emergency Services</div>
               </div>
               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="usr_prof.php" class="smoothScroll">My profile</a></li>
                         <li><a href="#about" class="smoothScroll">My Repports </a></li>
                         <li><a href="#Lab" class="smoothScroll">Medical History</a></li>
                         <li><a href="#team" class="smoothScroll">Make Appointmnet</a></li>
                         <li><a href="logout.php" class="smoothScroll">Sign out</a></li>
                    </ul>
               </div>



          </div>
     </section>
      
     <!--
      <div id="ddown">
      <div class="dropdown">
         <button onmouseover="myFunction()" class="drop">Profile</button>
            <div id="myDropdown" class="dropdown-content">
               <a href ="profile.php">Profile</a>
               <a href ="usr-report.php">Reports</a>
               <a href ="Appointmnet.php">Make Appointments</a>
               <a href ="logout.php">Sign out</a>
            </div>
      </div>
      


      <script>
         function myFunction()
         {
            document.getElementById("myDropdown").classList.toggle("show");
         }
         window.onclick = function(event) 
         {
         if (!event.target.matches('.drop')) 
         {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) 
            {
               var openDropdown = dropdowns[i];
               if (openDropdown.classList.contains('show')) 
               {
                  openDropdown.classList.remove('show');
               }
            }
         }
         }
</script>
</div>  
-->
      <center>
      <div id="welcome_user">
         welcome <?php echo $temp; ?>
        <!-- you are  <?php  $user_type; ?> -->    <!-- working-->
      </div>
      </center>
      
         </a>
      <div class="container">
        <a href="report.php"><img src="report.jpg" height="250" width="250"></a>
        <div class="centered"><a href="report.php"><font color="red">Download Report</font></a></div>
      </div>
<center>
    <label>Token No.  :</label><input type = "text" name = "username"/><input type = "submit" value = "SHOW"/>
</center>
  <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">
                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                              <p>India Post Lingampally, Hyderabad Central University Rd, CUC, Gachibowli, Hyderabad, Telangana 500046</p>

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i><a href="tel:0401234567">040-123-4567</a></p>
                                   <p><i class="fa fa-envelope-o"></i><a href="mailto:doc1@uohtd.ac.in">doc1@uohtd.ac.in</a></p>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Open 24 Hours All Days</h4>
                              </div> 
                              <li><a href="#Med" class="smoothScroll">Insurance Policy</a></li>

                              
                         </div>
                    </div>                    
               </div>
          </div>
  </footer>   
   </body>
</html>