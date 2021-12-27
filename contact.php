<?php
if (isset($_POST['send'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'dbconnect.php';
        $Fname = $_POST["Fname"];
        $Lname = $_POST["Lname"];
        $email = $_POST["email"];
        $phoneNo = $_POST["phoneNo"];
        $message = $_POST["message"];

        $sql = "INSERT INTO `contact` (`Fname`, `Lname`, `email`, `phoneNo`, `message`) VALUES ('$Fname', '$Lname', '$email', '$phoneNo', '$message')";
        $result = mysqli_query($conn, $sql);
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
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="background">

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
                            <a class="nav-link" style="color: white;" href="aboutUs.html"> About us</a>
                        </li>
                        <li class="nav-item me-5" style="padding-right: 110px;">
                            <a class="nav-link" style="color: white;" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>



        <!-- Contact Us -->
        <section class="contact-section">
            <div class="contact-bg">
                <h3>Get in touch with us</h3>
                <h2>contact us</h2>
                <p class="text">We Would Love to Hear From You! The first step we need to take is for us to understand your needs, so give us a way to reach out to you and let's get to work.
                </p>
            </div>
            <div class="contact-body">
                <div class="contact-info">
                    <div>
                        <span><i class='fas fa-mobile-alt'></i></span>
                        <span style="color: white;">Phone No.</span>
                        <span style="color: white;" class="text">0532 2545404</span>
                    </div>
                    <div>
                        <span><i class="fas fa-envelope-open"></i></span>
                        <span style="color: white;">E-mail</span>
                        <span style="color: white;" class="text">abc.2020caxxx@mnnit.ac.in</span>
                    </div>
                    <div>
                        <span><i class="fas fa-map-marker-alt"></i></span>
                        <span style="color: white;">Address</span>
                        <span style="color: white;" class="text">Teliarganj, Allahabad, Uttar Pradesh 211004, India</span>
                    </div>
                    <div>
                        <span><i class="fas fa-clock"></i></span>
                        <span style="color: white;">Opening hours</span>
                        <span style="color: white;" class="text">Monday - friday(9:00 AM to 5:PM)</span>
                    </div>
                </div>
                <div class="contact-form">
                    <form action="contact.php" method="post">
                        <div>
                            <input type="text" class="form-control" name="Fname" placeholder="first Name">
                            <input type="text" class="form-control" name="Lname" placeholder="Last Name">
                        </div>
                        <div>
                            <input type="email" class="form-control" name="email" placeholder="E-mail">
                            <input type="text" class="form-control" name="phoneNo" placeholder="Phone">
                        </div>
                        <textarea rows="6" class="form-control" name="message" placeholder="message"></textarea>
                        <input type="submit" name="send" class="send-btn" value="send message">
                    </form>

                    <div>
                        <img src="images/get_started_now-min-min.jpg">
                    </div>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7202.773150498935!2d81.86168972498274!3d25.492150935039202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399aca789e0c84a5%3A0x2c27733a7529bf08!2sMNNIT%20Allahabad%20Campus%2C%20Teliarganj%2C%20Prayagraj%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1634290006009!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>
    <!-- </div> -->
    <!-- <br> -->
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
    </div>
</body>
</html>