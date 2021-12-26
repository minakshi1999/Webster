<?php
//  include 'dbconnect.php';

if (isset($_POST['submit'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'dbconnect.php';
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
        $address = $_POST["address"];
        $city = $_POST["city"];
        $pin = $_POST["pin"];
        $state = $_POST["state"];

        $iquery = "INSERT INTO `callbackform` (`Firstname`, `Lastname`, `Email`, `Mobile`, `Address`, `City`, `PIN`, `State`) VALUES ('$firstname', '$lastname', '$email', '$mobile','$address','$city', '$pin','$state')";
        $query = mysqli_query($conn, $iquery);
        if ($query) {
            ?>
              <script>
                  alert("Submittesd successfuly");
              </script>
          <?php
          } else {
          ?>
              <script>
                  alert("There is error in submission");
              </script>
  <?php
          }
    }
}
?>

<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>Medline Services</title>
    <meta charset="utf-8">
    <meta name="viewport" content="with=device-width, initial scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="callback.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <nav class="container-fluid navbar navbar-expand-sm py-3 d-flex navbar-dark fs-4 fw-bold">
        <div class="container-fluid ">
            <a class="navbar-brand" href="../index.php"><img class="img-fluid" src="../images/logo.PNG" alt="Logo" style=" padding-top: 8px; padding-left: 80px; width:220px; height: 70px; "></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon navbar-light"></span>
            </button>

            <div class="collapse navbar-collapse " id="collapsibleNavbar">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item me-3 ">
                            <a class="nav-link" style="color: white;" href="../OurServices/services.html">Services</a>
                        </li>
                    <li class="nav-item me-3">
                        <a href="../login.php" class="nav-link" style="color: white;" >Login</a>
                    </li>
                    </li>
                    <li class="nav-item me-3">
                        <a href="../signup.php" class="nav-link" style="color: white;" >Signup</a>
                    </li>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" style="color: white;" href="#">My Appointment</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" style="color: white;" href="../aboutUs.html">About us</a>
                    </li>
                    <li class="nav-item me-5" style="padding-right: 110px;">
                        <a class="nav-link" style="color: white;" href="../contact.php">Contact</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <div class="container">
        <h2>Request Callback</h2>
        <form action="callbackForm.php" method="POST">
            <div class="col-90">
                <input type="text" id="fname" name="firstname" placeholder="Enter your first name" required>
            </div>
            <div class="col-90">
                <input type="text" id="lname" name="lastname" placeholder="Enter your last name" required>
            </div>
            <div class="col-90">
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>

            <div class="col-90">
                <input type="tel" id="mobile" name="mobile" placeholder="Enter 10 digit Mobile no." required>
            </div>

            <div class="col-90">
                <textarea name="address" id="address" cols="30" rows="10" placeholder="Address"></textarea>
            </div>


            <div class="col-90">
                <input type="text" id="city" name="city" maxlength="10" placeholder="city">
            </div>


            <div class="col-90">
                <input type="number" id="pin" name="pin" maxlength="6" placeholder="PIN code">
            </div>


            <div class="col-90">
                <input type="text" id="state" name="state" placeholder="State">
            </div>


            <button type="submit" name="submit">Submit</button>

        </form>
    </div>

    
    <br>
    <footer class="text-center mt-5  text-lg-start text-white" style=" background-color: black; left: 0; right: 0; width: 100%;">
        <div class="container p-4 pb-0 ">
            <div class="row overflow-hidden">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <img class="img-fluid " src="../images/logo.PNG" alt="Logo" style=" padding-top: 8px; padding-left: 0px; width:150px; height: 70px; ">
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
                    <p><a class="text-white" href="#" data-bs-toggle="modal" data-bs-target="#myModal">Login</a></p>
                    <p><a class="text-white" href="#" data-bs-toggle="modal" data-bs-target="#SignUpModal">Sign up</a></p>
                    <p><a class="text-white" href="#">Appointment</a></p>
                    <p><a class="text-white" href="../aboutUs.html">About Us</a></p>
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