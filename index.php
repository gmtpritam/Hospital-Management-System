<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Hospital Management System</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <div class="logo mr-auto">
                <h3 class="text-light"><a href="index.html"><span>Hosptital Management System</span></a></h3>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>
            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#index.html">Home</a></li>
                    <li><a href="doctor/home.php">Doctor</a></li>
                    <li><a href="patient/home.php">Patient</a></li>
                    <li><a href="bill/home.php">Bills</a></li>
                    <li><a href="staff/home.php">Staff</a></li>
                    <li><a href="blood/home.php">Blood</a></li>
                </ul>
            </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <div class="container">
                        <div class="row">
                            <div class="menu">
                                <input type="checkbox" id="toggle" />
                                <label id="show-menu" for="toggle">
                                    <div class="btn" style="margin-right: 50%;">
                                        <i class="material-icons md-36 toggleBtn menuBtn">menu</i>
                                        <i class="material-icons md-36 toggleBtn closeBtn">close</i>
                                    </div>
                                    <div class="btn">
                                        <a href="doctor/home.php">
                                        <img src="doctor.jpg" alt="Docor"> </a>
                                    </div>
                                    <div class="btn">
                                        <a href="staff/home.php">
                                        <img src="staff.jpg" alt="staff"></a>
                                    </div>
                                    <div class="btn">
                                        <a href="payment/home.php">
                                        <i class="material-icons md-36">payments</i></a>
                                    </div>
                                    <div class="btn">
                                        <a href="blood/home.php">
                                        <img src="blood.jpg" alt="blood"></a>
                                    </div>
                                    <div class="btn">
                                        <a href="patient/home.php">
                                        <img src="patient.jpg" alt="patient"></a>
                                      </div>
                                    <div class="btn">
                                        <a href="department/home.php">
                                        <img src="department.jpg" alt="department"></a>
                                    </div>
                                    <div class="btn">
                                        <a href="room/home.php">
                                        <img src="room.jpg" alt="room"></a>

                                    </div>
                                    <div class="btn">
                                        <a href="#">
                                        <i class="material-icons md-36">local_hospital</i></a>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                    <img src="hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>
    </section>
</body>

</html>