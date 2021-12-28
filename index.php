<?php
$showAlert = false;
    if(isset($_POST['signup']))
    {
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';
    $FirstName=$_POST["FirstName"];
    $LastName=$_POST["LastName"];
    $email=$_POST["email"];
    $city=$_POST["city"];
    $pswd=$_POST["pswd"];
    $rpswd=$_POST["rpswd"];
   // $usertype=$_POST["usertype"];

   // $pass= password_hash($pswd,PASSWORD_BCRYPT);
    //$rpass= password_hash($rpswd,PASSWORD_BCRYPT);
  //  $exists=false;

    $existSql="SELECT * FROM signup WHERE email='$email'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        ?>
        <script>
            alert("Email already exist");
        </script>
        <?php
        // echo "username already exist";
        // $showError = "username already exist";
    }
    else{

    if($pswd == $rpswd){
        $sql="INSERT INTO signup (FirstName, LastName, email, city, pswd, rpswd) VALUES ('$FirstName', '$LastName', '$email', '$city', '$pswd', '$rpswd')";
        $result = mysqli_query($conn,$sql);
        if($result){
            ?>
            <script>
                alert("signup successfuly");
            </script>
            <?php
        }
        else{

            ?>
            <script>
                alert("User already exist");
            </script>
            <?php
        }
    }
        else{
            ?>
            <script>
                alert("Password do not match");
            </script>
            <?php
            $showError="password do not match";
            // echo "password do not match";
        }
    
    }
    }
}
?>

<?php
   if(isset($_POST['login']))
   {
    $login = false;
    $showError = false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'dbconnect.php';
        $email = $_POST["email"];
        $pswd = $_POST["pswd"];
      //  $usertype = $_POST['usertype'];

        $sql = "Select * from `signup` where email='$email' AND pswd='$pswd' ";
        
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if($num == 1){
            $login = true;
            echo "you are logged in";
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['email']= $email;
            
            if ($email == "r@gmail.com")
                header("location: admin/admin.php");
                
            else 
                header("location: OurServices/services.html");
                
        }
        else{?>
                    <script>
                        alert("Password do not match or sign up first");
                    </script>
                    <?php
        }
     }
    
     
   }

?>

<!DOCTYPE html>
<html>

<head>
    <title>Medline Services</title>
    <meta charset="utf-8">
    <meta name="viewport" content="with=device-width, initial scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>

<body class="overflow-auto">
    <!-- <div class="container-fluid bg "> -->

        <nav class="container-fluid navbar navbar-expand-sm py-3 d-flex navbar-dark fs-4 fw-bold">
            <div class="container-fluid ">
                <a class="navbar-brand" href="index.php"><img class="img-fluid" src="images/logo.PNG" alt="Logo" style=" padding-top: 8px; padding-left: 80px; width:220px; height: 70px; "></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon navbar-light"></span>
                </button>

                <div class="collapse navbar-collapse " id="collapsibleNavbar">
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-3 ">
                        <a class="nav-link" style="color: white;" href="./OurServices/services.html">Services</a>
                    </li>
                        <li class="nav-item me-3">
                            <a href="login.php" class="nav-link" style="color: white;" >Login</a></li>
                        </li>
                        <li class="nav-item me-3">
                            <a href="signup.php" class="nav-link" style="color: white;" >Signup</a></li>
                        </li>
                       
                        <li class="nav-item me-3">
                            <a class="nav-link" style="color: white;" href="aboutUs.html">About us</a>
                        </li>
                        <li class="nav-item me-5" style="padding-right: 110px;">
                            <a class="nav-link" style="color: white;" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>

        
        <div class="container-fluid bg ">

        <div class="row container-fluid  mt-5">
            <div class=" col-sm-4 ">
                <img src="images/doctors1.png " class="img-fluid" alt="image">
            </div>
            <div class=" col-sm-8 display-6 text-white fw-bold text-center">
                <p class="textSize mt-3 overflow-visible">India's best</p>
                <p class="textSize1 overflow-visible"> online medical consultation </p>
                <p class="textSize1 overflow-visible">platform</p>
            </div>
        </div>

        <div class="row container-fluid  ">
            <div class="col-sm-1"></div>

            <div class=" col-sm-6 mt-5 text-white ">
                <div class="container p-5 display-6  ">
                    <p class="overflow-visible" style="font-size: 28px;"><b>Talk to a Doctor Within Minutes!</b></p>
                    <p class="overflow-visible" style="font-size: 28px; "><b>Access Top Doctors for Online Consultations </b></p>
                    <p class="overflow-visible " style="font-size: 28px;"><b>from Anywhere, Anytime through VIDEO/PHONE or CHAT</b></p>
                </div>
                <!-- <button type="button" class="btn btn-outline-dark btn-light text-light">Light</button> -->
                <!-- <a href="OurServises/services.html" class="hero-btn ms-5 ">KNOW MORE</a> -->
            </div>

            <div class="col-sm-1"></div>
            <div class=" col-sm mt-3">
                <img src="images/doctrors2.png " class="img-fluid" alt="image">
            </div>

        </div>
    </div>

    <!-- login
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                        <h2>Login</h2>
                        <form action="index.php" method="post">
                            <div class="mb-3 mt-3">
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
                            </div>

                            <div class=" ">
                            <h5>Register as: </h5>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="usertype" id="inlineRadio1" value="patient">
                                <label class="form-check-label" for="inlineRadio1">Patient</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="usertype" id="inlineRadio2" value="doctor">
                                <label class="form-check-label" for="inlineRadio2">Doctor</label>
                            </div>
                        </div>
-->
                          <!--  <div class="form-check mb-3">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember" required> Remember me
                                </label>
                            </div>  -->

                       <!--     <div class="form-check mt-1">
                            <input class="form-check-input" type="checkbox" name="remember" value="" id="defaultCheck1" required>
                            <label class="form-check-label" for="defaultCheck1">
                                Remember me
                            </label>
                        </div>
                        
                        <button type="submit" name="login" class="btn btn-primary">Log in</button>
                        
                        <div class="mt-2 ms-1">
                            <a href="#" style="text-decoration:none;"><span>Forgotten password?</span></a>
                          </div>
                        </form>
                </div>
      
          </div>
        </div>
    </div> -->
     
    
    <!-- //Signup
    <div class="modal fade" id="SignUpModal" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
      
                    <div class="container mt-3">
                    <h2>Sign Up</h2>
            
                        <form action="index.php" method="POST">
                            <div class=" mt-3 overflow-hidden">
                                <div class="row">
                                    <div class="col-sm">
                                        <input type="text" class="form-control" placeholder="First Name" name="FirstName">
                                    </div>
                                    <div class="col-sm overflow-hidden">
                                        <input type="text" class="form-control" placeholder="Last Name" name="LastName">
                                    </div>
                                </div>
                            </div>
                            <br>
                        
                            <div class=" overflow-hidden">
                                <div class="row">
                                    <div class="col">
                                        <input type="email" class="form-control" placeholder="Email" name="email">
                                    </div>
                                    <div class="col">
                                        <input type="city" class="form-control" placeholder="City" name="city">
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="overflow-hidden " >
                                <div class="row">
                                    <div class="col-sm">
                                        <input type="password" class="form-control" placeholder="Password" name="pswd">
                                    </div>
                                    <div class="col-sm">
                                        <input type="password" class="form-control" placeholder="Retype password" name="rpswd">
                                    </div>
                                </div>
                            </div>
                            <br>
                            
                            <div class=" " >
                                <h5>Register as: </h5>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="usertype" id="inlineRadio1" value="patient">
                                    <label class="form-check-label" for="inlineRadio1">Patient</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="usertype" id="inlineRadio2" value="doctor">
                                    <label class="form-check-label" for="inlineRadio2">Doctor</label>
                                </div>
                            </div>
-->
                            <!-- <div class=" form-check mt-3">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember"> Accept our<a href="#" style="text-decoration: none; "> Terms & Conditions</a>
                                </label>
                            </div> --><!--  <div class="form-check mt-1">
                                <input class="form-check-input" type="checkbox" name="remember" value="" id="defaultCheck1" required>
                                <label class="form-check-label" for="defaultCheck1">
                                    Accept our<a href="#" style="text-decoration: none; "> Terms & Conditions</a>
                                </label>
                            </div>
                            
                            <br>
                        
                            <button type="submit" name="signup" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
      
    <br>
    <footer class="text-center mt-5  text-lg-start text-white" style=" background-color: black; left: 0; right: 0; width: 100%;">
        <div class="container p-4 pb-0 ">
            <div class="row overflow-hidden">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <img class="img-fluid " src="images/logo.PNG" alt="Logo" style=" padding-top: 8px; padding-left: 0px; width:150px; height: 70px; ">
                    <p class="text-uppercase mt-4 font-weight-bold">
                        We offer distinctive patient care, treat patients with compassion and understanding
                    </p>
                </div>

                <hr class="w-100 clearfix d-md-none" />
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Services</h6>
                    <p><a class="text-white" href="consultation.html">Online consultation</a> </p>
                    <p><a class="text-white" href="talkToexpert.html">Talk to medical expert</a></p>
                    <p><a class="text-white" href="HomeCare.html">Home Care</a></p>
                    <p><a class="text-white" href="shop.html">Order Medicines</a></p>
                </div>

                <hr class="w-100 clearfix d-md-none" />
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">links</h6>
                    <p><a class="text-white" href="login.php" >Login</a></p>
                    <p><a class="text-white" href="signup.php" >Sign up</a></p>
                    <p><a class="text-white" href="#">Appointment</a></p>
                    <p><a class="text-white" href="aboutUs.html">About Us</a></p>
                </div>

                <hr class="w-100 clearfix d-md-none" />
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                    <p> Teliarganj, Allahabad, Uttar Pradesh 211004, India</p>
                    <p> abc.2020caxxx@mnnit.ac.in</p>
                    <p> 0532 2545404</p>
                </div>
            </div>

            <hr class="my-3">
            <div class="row d-flex p-3 pt-0 align-items-center">
                © 2021 Copyright
            </div>
        </div>
    </footer>

</body>

</html>
