<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> HK: Duty Finder</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="assets/img/1.png">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    .back-vid {
      position: absolute;
      right: 0;
      bottom: 0;
      z-index: -1;
      object-fit: cover;
      width: 100%;
      background-position: center;
    }

    
  </style>
</head>

<body>

  <!-- Modal Registration as Faculty  -->
  <div class="modal fade" id="fact" tabindex="-1" aria-hidden="true">

    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-success fw-bold" required>Faculty Registration</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="process.php" method="POST" enctype="multipart/form-data">

            <div class="row">

            <div class="col-4 ">
                <div class="input-group">
                  <div class="input-group-text  bg-success">
                    <i class="bi bi-envelope-check-fill text-light"></i>
                  </div>
                  <input type="file" class="form-control" name="profile" placeholder="Email" required>
                </div>
              </div>


              <div class="col-4 ">
                <div class="input-group">
                  <div class="input-group-text  bg-success">
                    <i class="bi bi-envelope-check-fill text-light"></i>
                  </div>
                  <input type="text" class="form-control" name="email" placeholder="Email" required>
                </div>
              </div>

              <div class="col-4 ">
                <div class="input-group">
                  <div class="input-group-text bg-success">
                    <i class="bi bi-person-fill text-light"></i>

                  </div>
                  <input type="text" class="form-control" name="fullname" aria-label="Text input with radio button" placeholder="Full Name" required>
                </div>
                <br>
              </div>
              <div class="col-6 mb-3">
                <div class="input-group ">
                  <div class="input-group-text bg-success">
                    <i class="bi bi-telephone-fill text-light"></i>
                  </div>
                  <input type="text" class="form-control" name="contact" aria-label="Text input with radio button" placeholder=" Contact ">
                </div>
              </div>
              <div class="col-6 mb-3">
                <div class="input-group">
                  <div class="input-group-text bg-success">
                    <i class="bi bi-person-vcard-fill text-light"></i>
                  </div>
                  <input type="text" class="form-control" name="id_num" aria-label="Text input with radio button" placeholder=" I.D Number">
                </div>
              </div>
              <div class="col-12 mb-3">
                <div class="input-group ">
                  <div class="input-group-text bg-success">
                    <i class="bi bi-book-fill text-light" ></i>
                  </div>
                  <input type="text" class="form-control" name="address" aria-label="Text input with radio button" placeholder="Address">
                </div>
              </div>

              <div class="col-12 mb-3">

                <div class="input-group ">
                  <div class="input-group-text bg-success">
                    <i class="bi bi-house-fill text-light"></i>
                  </div>
                  <select class="form-select" name="department" id="">
                    <option value="">--Select Department</option>
                    <?php
                    $get_dept  = mysqli_query($conn, "SELECT * FROM department");
                    while ($dept = mysqli_fetch_array($get_dept)) {

                    ?>
                      <option value="<?php echo $dept['department']; ?>"><?php echo $dept['department']; ?></option>
                    <?php
                    }
                    ?>
                  </select>


                </div>
              </div>

              <div class="col-12 mb-3">
                <div class="input-group ">
                  <div class="input-group-text bg-success">
                    <i class="bi bi-key-fill text-light "></i>
                  </div>

                  <input type="password" class="form-control" name="password" required placeholder="Enter Password" id="myInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">


                </div>
                <input type="checkbox" onclick="myFunction()"> Show Password
                <script>
                  function myFunction() {
                    var x = document.getElementById("myInput");
                    if (x.type === "password") {
                      x.type = "text";
                    } else {
                      x.type = "password";
                    }
                  }
                </script>
              </div>
            </div>

            <div class="modal-footer">
              <input type="reset" class="btn btn-danger" name="clear" value="CLEAR">
              <input type="submit" class="btn btn-success" name="register_faculty" value="REGISTER">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent bg bg-success ">
    <div class="container d-flex align-items-center justify-content-between  " >

      <div class="logo">
    
        <h1><a href="index.php"><img src="assets/img/ui.png" alt="" height="60px" width="45px" style="padding-bottom: 8px; padding-right: 8px; float: left;" ><span  >HK: Duty Finder</span></a></h1>
        
        <!-- Uncomment below if you prefer to use an image logo -->
      </div>

      <nav id="navbar" class="navbar ">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#features">Features</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li class="dropdown"><a href="#"><span>Account</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#" data-bs-toggle="modal" style="color: #198754;" data-bs-target="#admin">Login as Admin</a></li>
              <li><a href="#" data-bs-toggle="modal" style="color: #198754;" data-bs-target="#faculty">Login as Faculty</a></li>
              <li><a href="#" data-bs-toggle="modal" style="color: #198754;" data-bs-target="#scholar">Login as Scholar</a></li>
            </ul>
          </li>
          <li class="dropdown " > <a href="#"><span>Registration</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#" data-bs-toggle="modal" style="color: #198754;" data-bs-target="#reg_scholar">Register as Scholar</a></li>
              <li><a href="#" data-bs-toggle="modal" style="color: #198754;" data-bs-target="#fact">Register as Faculty</a></li>



            </ul>
          </li>

          <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <video autoplay loop muted src="assets/img/sasamahan.mp4"  class="back-vid mb-3l"></video>
    <div class="container  ">
      <div class="row justify-content-between ">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center ">
          <div data-aos="zoom-out ">
            <h1>User friendly website for you<span> HK Duty Finder</span></h1>
            <h2>We are team of designers making websites.</h2>
            <div class="text-center text-lg-start ">
              <a href="#home" class="btn-get-started scrollto" style="background-color: #198754; border: 2px solid white"> See  it yourself!</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img"  data-aos="zoom-out" data-aos-delay="300">
          <img src="assets/img/ui.png" class="img-fluid animated" alt="" style="width: 100%; height: 100%;">
        </div>
      </div>
    </div>

    <svg class="hero-waves "  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid text-success">

        <div class="row">
          <div class="col-xl-5 col-lg-6 " style="margin-top: 75px;"> 
          <img src="assets/img/UIPC.png" height="90%" width="100%">
            
          </div>

          <div class=" text-success col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5 " data-aos="fade-left ">
         
            <h3 style="color: #198754;">ABOUT OUR SYSTEM</h3>
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon "><i class="bx bx-fingerprint "></i></div>
              <h4 class="title "><a href="" style="color: #198754;">CONVENIENT</a></h4>
              <p class="description">It is convenient for all scholars to find a faculty or facility where they can render their duty hours.</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="" style="color: #198754;">ACCESSIBLE</a></h4>
              <p class="description">Both scholars and faculty can use our system using any device as long as it has internet access.</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="" style="color: #198754;">SAFE</a></h4>
              <p class="description">Amazingly safe for users informations and data.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title"  data-aos="fade-up">
          <h2 style="color: #198754;">Features</h2>
          <p style="color: #198754;">Check The Features</p>
        </div>

        <div class="row"  data-aos="fade-left ">
          <div class="col-lg-3 col-md-4  text-success">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
              <i class="ri-store-line  text-success" ></i>
              <h3>User Friendly<h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0 text-success">
            <div class="icon-box " data-aos="zoom-in" data-aos-delay="100">
              <i class="ri-bar-chart-box-line text-success"></i>
              <h3>Easy to Use</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0 text-success">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
              <i class="ri-calendar-todo-line text-success"></i>
              <h3>Organized</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0 text-success">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <i class="bi bi-bookmark-check text-success"></i>
              <h3>Provides Informations</h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mt-4 text-success">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
              <i class="ri-price-tag-2-line text-success"></i>
              <h3>Educational benefits</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 text-success">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="450">
              <i class="bi bi-book text-success"></i>
              <h3>Benefit for Teachers</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 text-success">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="450">
              <i class="bi bi-award text-success"></i>
              <h3>Simple System</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 text-success">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="500">
              <i class="bi bi-person-check text-success"></i>
              <h3>Safe for Users</h3>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Details Section ======= -->
    <!-- End Details Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2 style="color: #198754;">Gallery</h2>
          <p style="color: #198754;">Check our Gallery</p>
        </div>

        <div class="row g-0" data-aos="fade-left">

          <div class="col-lg-3 col-md-4" style="border: 2px solid #198754">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
              <a href="assets/img/hk.jpg" class="gallery-lightbox">
                <img src="assets/img/hk2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4"  style="border: 2px solid #198754">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
              <a href="assets/img/hk1.jpg" class="gallery-lightbox">
                <img src="assets/img/hk1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4"  style="border: 2px solid #198754">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
              <a href="assets/img/hk3.jpg" class="gallery-lightbox">
                <img src="assets/img/hk3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4"  style="border: 2px solid #198754">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
              <a href="assets/img/hk4.jpg" class="gallery-lightbox">
                <img src="assets/img/hk4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4"  style="border: 2px solid #198754">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
              <a href="assets/img/hk5.jpg" class="gallery-lightbox">
                <img src="assets/img/hk5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4" style="border: 2px solid #198754">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
              <a href="assets/img/hk6.jpg" class="gallery-lightbox">
                <img src="assets/img/hk6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4" style="border: 2px solid #198754">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
              <a href="assets/img/hk7.jpg" class="gallery-lightbox">
                <img src="assets/img/hk7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4" style="border: 2px solid #198754">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
              <a href="assets/img/hk8.jpg" class="gallery-lightbox">
                <img src="assets/img/hk8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- End Testimonials Section -->

   


    <!-- ======= F.A.Q Section ======= -->
    <!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2 style="color: #198754;">Contact</h2>
          <p style="color: #198754;">Contact Us</p>
        </div>

        <div class="row">

          <div class="col-lg-4 " data-aos="fade-right" data-aos-delay="100">
            <div class="info ">
              <div class="address ">
                <i class="bi bi-geo-alt text-dark" ></i>
                <h4 style="color: #198754;">Location:</h4>
                <p style="color: #198754;">Rizal St, Iloilo City Proper, Iloilo City, 5000 Iloilo</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope text-dark"></i>
                <h4 style="color: #198754;">Email:</h4>
                <p style="color: #198754;">csdl@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone text-dark"></i>
                <h4 style="color: #198754;">Call:</h4>
                <p style="color: #198754;">09636646148</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" style="border: 3px solid #198754; border-radius: 50px; "class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" style="border: 3px solid #198754; border-radius: 50px; "name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3 ">
                <input type="text " class="form-control" style="border: 3px solid #198754; border-radius: 50px; "name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3 ">
                <textarea class="form-control" style="border: 3px solid #198754; border-radius: 20px;" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3 ">
                <div class="loading">Loading</div>
                <div class="error-message "></div>
                <div class="sent-message ">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" style="background-color: white; color: #198754; font-weight: bold; border-radius: 50px;" class=" text-light btn btn-success bg bg-success">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" style="background-color: #198754;">


    <div class="container">
      <div class="copyright" style="color: white;">
        &copy; Copyright <strong><span>RSR</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
        Designed by <a href="index.php" style="color: white;">RSR</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center bg-success"><i class="bi bi-arrow-up-short "></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Modal LOGIN as Admin -->
  <div class="modal fade" id="admin" tabindex="-1" aria-labelledby="adminLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-success">
          <h5 class="modal-title" id="adminLabel">LOGIN as Admin</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="process.php" method="POST" autocomplete="off" >
            <div class="input-group mb-3">
              <div class="input-group-text bg-success">
                <i class="bi bi-envelope-check-fill text-light "></i>
              </div>
              <input type="email" class="form-control" name="email" placeholder="Enter email here..." required autocomplete="off">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-text bg-success">
                <i class="bi bi-key-fill text-light"></i>
              </div>
              <input type="password" class="form-control" name="password" required  placeholder="Enter password here..." id="myInput1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
            </div>
            <input type="checkbox" onclick="myFunction1()"> Show Password


        </div>
        <div class="modal-footer">
          <input type="reset" class="btn btn-danger" value="CLEAR">
          <input type="submit" class="btn btn-success" name="login_admin" value="LOGIN">
        </div>
        </form>
      </div>
    </div>
  </div>
  <script>
    function myFunction1() {
      var x = document.getElementById("myInput1");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
  </script>

  <!-- Modal End -->

  <!-- Modal LOGIN as Faculty -->
  <div class="modal fade" id="faculty" tabindex="-1" aria-labelledby="facultyLabel" aria-hidden="true">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header text-success">
          <h5 class="modal-title" id="facultyLabel">LOGIN as faculty </h5></br>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <form action="process.php" method="POST">
            <div class="input-group mb-3 ">
              <div class="input-group-text bg-success">
                <i class="bi bi-envelope-check-fill text-light"></i>
              </div>
              <input type="email" class="form-control" name="email" placeholder="Enter Email here..." required>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-text bg-success">
                <i class="bi bi-key-fill text-light"></i>
              </div>
              <input type="password" class="form-control" name="password" required placeholder="Enter Password here..." id="myInput2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
            </div>
            <input type="checkbox" onclick="myFunction2()"> Show Password

        </div>
        <div class="modal-footer">
          <input type="reset" class="btn btn-danger" value="CLEAR">
          <input type="submit" class="btn btn-success" name="login_faculties" value="LOGIN">
        </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    function myFunction2() {
      var x = document.getElementById("myInput2");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
  </script>

  <!-- Modal End -->

  <!-- Modal LOGIN as scholar -->
  <div class="modal fade" id="scholar" tabindex="-1" aria-labelledby="scholarLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <div class="modal-header text-success">
          <h5 class="modal-title" id="scholarLabel">LOGIN as Scholar </h5></br>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <form action="process.php" method="POST">
            <div class="input-group mb-3">
              <div class="input-group-text bg-success">
                <i class="bi bi-envelope-check-fill text-light"></i>
              </div>
              <input type="email" class="form-control" name="email" placeholder="Enter Email here..." required>
            </div>

            <div class="input-group mb-3 ">
              <div class="input-group-text bg-success">
                <i class="bi bi-key-fill text-light"></i>
              </div>
              <input type="password" class="form-control " name="password" required placeholder="Enter Password here..." id="myInput3" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
            </div>
            <input type="checkbox" onclick="myFunction3()"> Show Password

        </div>
        <div class="modal-footer">
          <input type="reset" class="btn btn-danger" value="CLEAR">
          <input type="submit" class="btn btn-success" name="login_scholar" value="LOGIN">
        </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    function myFunction3() {
      var x = document.getElementById("myInput3");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
  </script>

  <!-- Modal End -->

  <!-- Modal Registration as scholar  -->
  <div class="modal fade" id="reg_scholar" tabindex="-1" aria-labelledby="reg_scholar" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-success fw-bold" id="reg_scholarLabel" required>Scholar Registration</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="process.php" method="POST">

            <div class="row">
              <div class="col-4 ">
                <div class="input-group">
                  <div class="input-group-text  bg-success">
                    <i class="bi bi-envelope-check-fill text-light"></i>
                  </div>
                  <input type="text" class="form-control" name="email" placeholder="Email" required>
                </div>
              </div>

              <div class="col-4 ">
                <div class="input-group">
                  <div class="input-group-text bg-success">
                    <i class="bi bi-person-fill text-light"></i>

                  </div>
                  <input type="text" class="form-control" name="student_name" aria-label="Text input with radio button" placeholder="Student Name" required>
                </div>
                <br>
              </div>
              <div class="col-4 mb-3">
                <div class="input-group ">
                  <div class="input-group-text bg-success">
                    <i class="bi bi-telephone-fill text-light"></i>
                  </div>
                  <input type="text" class="form-control" name="contact" aria-label="Text input with radio button" placeholder=" Contact" required>
                </div>
              </div>
              <div class="col-4 mb-3">
                <div class="input-group">
                  <div class="input-group-text bg-success">
                    <i class="bi bi-person-vcard-fill text-light"></i>
                  </div>
                  <input type="text"  class="form-control" name="id_no" aria-label="Text input with radio button" placeholder=" I.D Number"  required>
                </div>
              </div>
              <div class="col-4 mb-3">
                <div class="input-group ">
                  <div class="input-group-text bg-success">
                    <i class="bi bi-book-fill text-light"></i>
                  </div>
                  <input type="text" class="form-control" name="year_level" aria-label="Text input with radio button" placeholder="Year Level">
                </div>
              </div>
              <div class="col-4 mb-3 ">

                <div class="input-group ">
                  <div class="input-group-text bg-success">
                    <i class="bi bi-book-fill text-light"></i>
                  </div>
                  <input type="text" class="form-control" name="course" aria-label="Text input with radio button" placeholder="Course" required>
                </div>
              </div>
              <div class="col-12 mb-3">

                <div class="input-group ">
                  <div class="input-group-text bg-success">
                    <i class="bi bi-house-fill text-light"></i>
                  </div>
                  <select class="form-select" name="department" id="">
                    <option value="">--Select Department</option>
                    <?php
                    $get_dept  = mysqli_query($conn, "SELECT * FROM department");
                    while ($dept = mysqli_fetch_array($get_dept)) {

                    ?>
                      <option value="<?php echo $dept['department']; ?>"><?php echo $dept['department']; ?></option>
                    <?php
                    }
                    ?>
                  </select>


                </div>
              </div>

              <div class="col-12 mb-3 ">
                <div class="input-group ">
                  <div class="input-group-text bg-success">
                    <i class="bi bi-key-fill text-light"></i>
                  </div>

                  <input type="password" class="form-control " name="password" required placeholder="Enter Password" id="myInput5" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">

                </div>
                <input type="checkbox" onclick="myFunction6()"> Show Password
                <script>
                  function myFunction6() {
                    var x = document.getElementById("myInput5");
                    if (x.type === "password") {
                      x.type = "text";
                    } else {
                      x.type = "password";
                    }
                  }
                </script>
              </div>
            </div>
        </div>


        <div class="modal-footer">
          <input type="reset" class="btn btn-danger" name="clear" value="CLEAR">
          <input type="submit" class="btn btn-success" name="register" value="REGISTER">
        </div>
        </form>
      </div>
    </div>
  </div>


</body>

</html>