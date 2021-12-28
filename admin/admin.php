<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

    <title>patient_profile</title>
</head>

<body style=" background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)), url(../images/abstract-technological-background_23-2148897676.jpg);
            background-size: cover;">

    <nav class="container-fluid navbar navbar-expand-sm py-3 d-flex navbar-dark fs-4 fw-bold">
        <div class="container-fluid ">
            <a class="navbar-brand" href="index.php"><img class="img-fluid" src="../images/logo.PNG" alt="Logo" style=" padding-top: 8px; padding-left: 80px; width:220px; height: 70px; "></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon navbar-light"></span>
            </button>

            <div class="collapse navbar-collapse " id="collapsibleNavbar">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item me-3 ">
                        <a class="nav-link" style="color: white;" href="./OurServices/services.html">Services</a>
                    </li>
                    <li class="nav-item me-3">
                        <a href="../logout.php" class="nav-link" style="color: white;">Logout</a>
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

    <div class="container">
        <div>
           <a href="users.php">Our Users</a><br>
           <a href="callbackform.php">Callback Request</a><br>
           <a href="contactInformation.php">Contact Request</a><br>
           <a href="homecareform.php">HomeCare Request</a><br>
           <a href="booking.php">Booking Slot Datails</a><br>
           <a href="onlineAppointment.php">offline Booking Datails</a><br>
        </div>
    </div>
</body>

</html>