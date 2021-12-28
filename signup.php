<?php
$showAlert = false;
if (isset($_POST['signup'])) {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'dbconnect.php';
        $FirstName = $_POST["FirstName"];
        $LastName = $_POST["LastName"];
        $email = $_POST["email"];
        $city = $_POST["city"];
        $pswd = $_POST["pswd"];
        $rpswd = $_POST["rpswd"];

    //    $pass = password_hash($pswd, PASSWORD_BCRYPT);
    //    $rpass = password_hash($rpswd, PASSWORD_BCRYPT);
        

        $existSql = "SELECT * FROM signup WHERE email='$email'";
        $result = mysqli_query($conn, $existSql);
        $numExistRows = mysqli_num_rows($result);
        if ($numExistRows > 0) {
?>
            <script>
                alert("Email already exist");
            </script>
            <?php
           
        } else {

            if ($pswd == $rpswd) {
                $sql = "INSERT INTO signup (FirstName, LastName, email, city, pswd, rpswd, usertype) VALUES ('$FirstName', '$LastName', '$email', '$city', '$pswd', '$rpswd','$usertype')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
            ?>
                    <script>
                        alert("signup successfuly");
                    </script>
                <?php
                } else {

                ?>
                    <script>
                        alert("User already exist");
                    </script>
                <?php
                }
            } else {
                ?>
                <script>
                    alert("Password do not match");
                </script>
<?php
                $showError = "password do not match";
                
            }
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
                        <a href="login.php" class="nav-link" style="color: white;" >Login</a>
                    </li>
                    </li>
                    <li class="nav-item me-3">
                        <a href="signup.php" class="nav-link" style="color: white;" >Signup</a>
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


    <!-- //Signup -->
    <!-- <div class="modal fade" id="SignUpModal" role="dialog"> -->
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

                            <div class="overflow-hidden ">
                                <div class="row">
                                    <div class="col-sm">
                                        <input type="password" class="form-control" placeholder="Password" name="pswd" >
                                    </div>
                                    <div class="col-sm">
                                        <input type="password" class="form-control" placeholder="confirm password" name="rpswd" >
                                    </div>
                                </div>
                            </div>
                            <br>

                   

                           
                            <div class="form-check mt-1">
                                <input class="form-check-input" type="checkbox" name="remember" value="" id="defaultCheck1">
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
    <!-- </div> -->

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