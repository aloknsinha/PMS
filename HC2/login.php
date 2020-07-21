<?php   
include("config.php");
session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
      $myusername = $_POST['username'];
      $mypassword = $_POST['pass']; 
    
      $sql = "SELECT Username,Password FROM reg WHERE Username = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $count = mysqli_num_rows($result);

      $sql2 = "SELECT Username,Password FROM fac WHERE Username = '$myusername' and Password = '$mypassword'";
      $result2 = mysqli_query($db,$sql2);
      $count2 = mysqli_num_rows($result2);

      $sql3 = "SELECT Username,Password FROM doctors WHERE Username = '$myusername' and Password = '$mypassword'";
      $result3 = mysqli_query($db,$sql3);
      $count3 = mysqli_num_rows($result3);

      if($count > 0){
        $_SESSION['login_user'] = $myusername;
        $_SESSION['login_time'] = time();
        $_SESSION['login_type'] ="reg";
        header("location: welcome.php");
      }
      else if($count2 > 0){
       $_SESSION['login_user'] = $myusername;
       $_SESSION['login_time'] = time();
       $_SESSION['login_type'] ="fac";
        header("location: welcome.php"); 
      }
      else if($count3 > 0){
      	$_SESSION['login_user'] = $myusername;
        $_SESSION['login_time'] = time();
        $_SESSION['login_type'] ="doctors";
        header("location: wel_doc.php");	
      }
      else{
         echo  "<script type ='text/javascript'>alert('wrong credential. Enter again !');</script>";
      }
   }
?>

<html>
<title>Health Centre | UOH | User Login</title>
<head>
<link rel = "icon" href ="images/uohlogo.jpg">
     <title>Health Centre University Of Hyderabad</title>
     <link rel="stylesheet" href="css/bootstrap.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/tooplate.css"><link rel="stylesheet" href="css/temp.css">
     <link rel="stylesheet" href="css/slidetest.css"> 
</head>
  <center>
  <body style="background-color:lightblue;" id="top" bgcolor="#470a0a">
    <script type="text/javascript" language="javascript"></script>
      <link rel="stylesheet" type="text/css" href="css/home.css">
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
                         <li><a href="index.html" class="smoothScroll">About Us</a></li>
                         <li><a href="#Lab" class="smoothScroll">Laboratory</a></li>
                         <li><a href="#Med" class="smoothScroll">Medical</a></li>
                         <li class="appointment-btn"><a href="#usr-report">Download report </a></li>
                    </ul>
               </div>
          </div>
     </section>
    
    <div id = "all">
    <table width="40%" border="4">
    <tr>
    <td width="20%" bgcolor="gray">
    <div id ="userlogin" align="center" class="style1">User Login </div><br>
  <form action = "" method = "post" onsubmit = "error()" enctype='multipart/form-data'>
      <div id="loginphp">
        <label>UserName  :</label><input type = "text" name = "username"/><br><br>
        <label>Password  : </label><input type = "password" name = "pass" class = "box" /><br>
      </div>
      <div id="login_submit">
        <input type = "submit" value = " Submit "/><br>
      </div>
   </form>
 </td>
</tr>
</table>
</div>
   
    <a href = "index.html">Go to Home
 
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

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>
     <script src="js/slidetest.js"></script>
 </body>
</center>
</html>
