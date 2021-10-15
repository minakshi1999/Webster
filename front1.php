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
    $exists=false;

    $existSql="SELECT * FROM `signup` WHERE email='$email'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        echo "username already exist";
        $showError = "username already exist";
    }
    else{

    if($pswd == $rpswd){
        $sql="INSERT INTO `signup` (`FirstName`, `LastName`, `email`, `city`, `pswd`, `rpswd`) VALUES ('$FirstName', '$LastName', '$email', '$city', '$pswd', '$rpswd')";
        $result = mysqli_query($conn,$sql);
        if($result){
            $showAlert = true;
            echo "signup successfuly";
        }
    }
        else{
            $showError="password do not match";
            echo "password do not match";
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
 
        $sql = "Select * from signup where email='$email' AND pswd='$pswd'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if($num == 1){
            $login = true;
            echo "you are logged in";
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['email']= $email;
            header("location: welcome.php");
        }
        else{
            echo "password do not match";
            $showError = "Password do not match";
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

<body>
    <section class="header">
        <nav>
            <a href="index.html"><img src="images/logo.PNG"></a>
            <div class="nav-link">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#myModal">Login</a></li>
                    <li><a href=""  data-bs-toggle="modal" data-bs-target="#SignUpModal">Register/Signup</a></li>
                    <li><a href=""> Our doctors</a></li>
                    <li><a href="">My Appointment</a></li>
                    <li><a href=""> About us</a</li>
                    <li><a href=""> Contact</a></li>
                </ul>
            </div>
        </nav>

        <div class="myslide">
            <img src="images/doctors1.png" style="height: 300px; width:380px;">
            <div class="text">
                <h1>
                    India's best online medical consultation platform
                </h1>
                </br>
                <p style="color: white;">Talk to a Doctor Within Minutes
                    </br>Access Top Doctors for Online Consultations from Anywhere,</br> Anytime through VIDEO/PHONE or CHAT</p>
                <a href="index.html" class="hero-btn">KNOW MORE</a>
            </div>
        </div>

    </section>

    <!-- login -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                        <h2>Login</h2>
                        <form action="front1.php" method="post">
                            <div class="mb-3 mt-3">
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
                            </div>
                            <div class="form-check mb-3">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember" required> Remember me
                                </label>
                            </div>
                            <button type="submit" name="login" class="btn btn-primary">Submit</button>
                           
                        </form>
                </div>
      
          </div>
        </div>
    </div>
     
    
    <!-- //Signup -->
    <div class="modal fade" id="SignUpModal" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
      
                    <div class="container mt-3">
                    <h2>Sign Up</h2>
            
                        <form action="front1.php" method="post">
                            <div class=" mt-3 ">
                                <div class="row">
                                    <div class="col-sm">
                                        <input type="text" class="form-control" placeholder="First Name" name="FirstName">
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" class="form-control" placeholder="Last Name" name="LastName">
                                    </div>
                                </div>
                            </div>
                            <br>
                        
                            <div class="" >
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

                            <div class=" " >
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
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Patient</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Doctor</label>
                                </div>
                            </div>
                    
                            <div class=" form-check mt-3">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember"> Accept our<a href="#" style="text-decoration: none; "> Terms & Conditions</a>
                                </label>
                            </div>
                            <br>
                        
                            <button type="submit" name="signup" class="btn btn-primary">Submit</button>
                            <?php
                                if($showAlert)
                                {
                                    echo "submitted successfully";
                                }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
      
</body>

</html>
