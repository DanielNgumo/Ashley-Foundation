<?php include 'sendermail.php'; ?>
<!DOCTYPE html>
<?php echo $alert; ?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hotel &amp; chefs Academy</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
   <link href="assets/img/hcalogonew.jpg" rel="icon">
  <link hhref="assets/img/hcalogonew.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="index.html" class="logo me-auto"><img src="assets/img/hcalogonew24.png" width="170px" height="170px" alt="" class="img-fluid"></a>
		<!--
       <a href="index.html" class="logo me-auto"><img src="assets/img/hcalogonew.jpg" width="170px" height="170px" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html" >Home</a></li>

          <li class="dropdown"><a href="#" ><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="who-we-are.html" >Who we are</a></li>
              <li><a href="whyhca.html">Why HCA? </a></li>
            <!--  <li><a href="courses.html">Courses</a></li>
              <li><a href="admission.html">Admissions</a></li>-->
            </ul>
          </li>
          <li class="dropdown"><a href="#" ><span>Courses </span><i class="bi bi-chevron-down"></i></a>
			 <ul>
              <li><a href="cookery.html" >Certificate in Professional Cookery</a></li>
              <li><a href="pastry.html">Certificate in Pastry and Baking</a></li>
              <li><a href="cake_making.html">Cake Making and Decoration</a></li>
              <li><a href="fees.html">Fees Payment and Academic Calenders</a></li>
            </ul>
			</li>
          <li class="dropdown"><a href="#"><span>Admissions</span> 
			 <i class="bi bi-chevron-down"></i> </a>
						 <ul>
              <li><a href="admission_requirements.html">Admission Requirements</a></li>
              <li><a href="application_procedure.html">Application Procedure</a></li>
             <!-- <li><a href="">Admissions Enquiry </a></li>-->
            </ul>  
			</li>
          <li><a href="#">News &amp; Events</a></li>
          <li><a href="#">Gallery</a></li>
          <li><a href="#" class="active">Contact us</a></li>
          <li><a href="#">Blog</a></li>

          <li><a href="apply.html" class="getstarted">Apply Now</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.9243784388514!2d36.921123973843585!3d-1.2128967355479523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f3fd997032edb%3A0x1f7928423bfee739!2sHotel%20%26%20Chefs%20Academy!5e0!3m2!1sen!2ske!4v1685370980827!5m2!1sen!2ske"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Located in Nairobi Metropolitan, Githurai 45</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@hcacademy.co.ke</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+254 757 212 725</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

           <!-- <form action="forms/contact.php" method="post" role="form" class="php-email-form">-->
			  <!--
            <form action="assets/vendor/phpmailer/smtp2go.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form> -->
			      <div id="FormDiv" onSubmit="MM_validateForm('name','','R','email','','RisEmail','phone','','R','message','','R');return document.MM_returnValue">
<form class="contact" action=" " method="post" >
<!-- <form action="mailscript.php" method="post" name="ContactForm">-->
<div class="elem-group">
    <label for="name">Your Name</label>
    <input type="text" id="name" name="visitor_name" placeholder="Your Name" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="elem-group">
    <label for="email">Your E-mail</label>
    <input type="email" id="email" name="visitor_email" placeholder="email" required>
  </div>
	<div class="elem-group">
		<label for="phone">Your phone number:</label>
		<input type="phone" id="phone" name="visitor_phone" placeholder="0712345678" required>
	</div>
 <!-- <div class="elem-group">
    <label for="department-selection">Choose Concerned Department</label>
    <select id="department-selection" name="concerned_department" required>
        <option value="">Select a Department</option>
        <option value="billing">Billing</option>
        <option value="marketing">Marketing</option>
        <option value="technical support">Technical Support</option>
    </select>
  </div> 
  <div class="elem-group">
    <label for="title">Reason For Contacting Us</label>
    <input type="text" id="title" name="email_title" required placeholder="Unable to Reset my Password" pattern=[A-Za-z0-9\s]{8,60}>
  </div> -->
  <div class="elem-group">
    <label for="message">Write your message</label>
    <textarea id="message" name="visitor_message" placeholder="How can we help" required></textarea>
  </div>
  <button type="submit" name="submit" class="send-btn" value="send">Send Message</button>
	<button type="reset">reset</button>
</form>
 &nbsp; <br> 
         
</div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Hotel &amp; Chefs Academy</h3>
              <p>
               <strong> Located in Nairobi Metropolis.</strong>
 <br>
              <strong>  Githurai 45<br><br></strong>
                <strong>Phone:</strong> <strong>+254 757 212 725</strong><br>
                <!-- <strong>Email:</strong> info@hcacademy.co.ke<br>-->
				  <strong>Email <a href = "mailto: info@hcacademy.co.ke">info@hcacademy.co.ke</a></strong>
              </p>
              <div class="social-links mt-3">
                <a href="https://twitter.com/HotelandchefsAc" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/Hoteln.Chefs" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/hca_2023/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-youtube"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="who-we-are.html">Who we are</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="courses.html">Courses</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="admission_requirements.html">Admissions</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="whyhca.html">Why HCA?</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Courses</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="cookery.html">Professional Cookery </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="pastry.html">Pastry &amp; Baking</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="cake_making.html">Cake making &amp; decorations</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="application_procedure.html">Apply Now</a></li>
              
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Subscribe to our news letter</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; <strong>2023</strong> <strong><span>Hotel &amp; Chefs Academy.</span></strong> <strong>All Rights Reserved</strong>
      </div>
      <div class="credits">
        
        Designed by <a href="#">Waweru Craft</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

 
  <script src="assets/js/main.js"></script>

</body>

</html>