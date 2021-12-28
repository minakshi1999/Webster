<?php
if (isset($_POST['login'])) {
    $login = false;
    $showError = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'dbconnect.php';
        $email = $_POST["email"];
        $pswd = $_POST["pswd"];
      //  $usertype = $_POST['usertype'];

        $sql = "Select * from `signup` where email='$email' AND pswd='$pswd' ";

        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            $login = true;
            echo "you are logged in";
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            if ($email == "r@gmail.com")
                header("location: admin/admin.php");
                
            else 
                header("location: OurServices/services.html");
                
       // } else {
           // echo "password do not match or sign up first";
           // $showError = "Password do not match or sign up first";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="overflow-auto">

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
                        <a href="login.php" class="nav-link" style="color: white;">Login</a>
                    </li>
                    </li>
                    <li class="nav-item me-3">
                        <a href="signup.php" class="nav-link" style="color: white;">Signup</a>
                    </li>
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


    <!-- login -->

    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <h2>Login</h2>
                <form action="login.php" method="post">
                   
                    
                    <div class="mb-3 mt-3">
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
                    </div>

           <!--         <div class=" ">
                        <h5>Login as: </h5>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="usertype" id="inlineRadio1" value="patient">
                            <label class="form-check-label" for="inlineRadio1">Patient</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="usertype" id="inlineRadio2" value="doctor">
                            <label class="form-check-label" for="inlineRadio2">Admin</label>
                        </div>
                    </div>-->


                    <div class="form-check mt-1">
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
                    <p><a class="text-white" href="login.php">Login</a></p>
                    <p><a class="text-white" href="signup.php">Sign up</a></p>
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