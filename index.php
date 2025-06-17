<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Care Group</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Font Awesome CDN for Social Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
    body {
      opacity: 0;
      animation: bodyFadeIn 1.2s ease forwards;
      font-family: "Poppins", sans-serif;
    }

    @keyframes bodyFadeIn {
      to {
        opacity: 1;
      }
    }

    /* animation base */
    .section-animate {
      opacity: 0;
      transform: translateY(30px);
      transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    .section-visible {
      opacity: 1 !important;
      transform: translateY(0) !important;
    }

    /* Fade-in for navbar and footer */
    .fade-in {
      opacity: 0;
      transition: opacity 1s ease-out;
    }

    .fade-in.visible {
      opacity: 1;
    }

    .navbar {
      background-color: #93E9BE !important;
    }

    .navbar .btn {
      transition: transform 0.3s ease, background-color 0.3s ease;
    }

    .navbar .btn:hover {
      transform: scale(1.05);
      background-color: #1c39bb !important;
      color: #ffffff;
    }

    .banner {
      background: url('assets/bg1.jpg') no-repeat center center;
      background-size: cover;
      background-attachment: fixed;
      text-align: center;
      padding: 160px 20px;
      color: white;
      position: relative;
      min-height: 500px;
    }

    .banner::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(28, 57, 187, 0.71);
      z-index: 1;
    }

    .banner h1,
    .banner p,
    .banner a {
      position: relative;
      z-index: 2;
    }

    .banner .btn {
      transition: all 0.3s ease;
      transform: scale(1);
    }

    .banner .btn:hover {
      transform: scale(1.08);
      background-color: #93E9BE;
      box-shadow: 0 0.5rem 1rem rgba(29, 214, 78, 0.4);
    }

    .banner-btn {
      background-color: #1c39bb;
      color: white;
    }

    .banner-btn:hover {
      background-color: #93E9BE;
      color: white;
      transform: scale(1.08);
      box-shadow: 0 0.5rem 1rem rgba(29, 214, 78, 0.4);
    }

    .about-us {
      padding: 60px 20px;
    }

    .footer-social {
      background-color: #1c39bb;
      color: white;
    }

    .footer-social i {
      font-size: 1.4rem;
      /* Increase size */
      transition: transform 0.3s ease, color 0.3s ease;
    }

    .footer-main {
      background-color: #002a66;
      color: white;
    }

    footer a.text-white:hover {
      color: #93E9BE !important;
      text-decoration: underline;
      transition: color 0.3s ease;
    }

    footer a i:hover {
      transform: scale(1.2);
      color: #93E9BE;
      transition: all 0.3s ease;
    }

    footer .btn-success {
      transition: all 0.3s ease;
      transform: scale(1);
      background-color: #1c39bb;
      border: none;
    }

    footer .btn-success:hover {
      transform: scale(1.08);
      background-color: #93E9BE;
      box-shadow: 0 0.5rem 1rem rgba(29, 214, 78, 0.4);
      color: white;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light px-4 section-animate fade-in">
    <a class="navbar-brand text-white" href="#">
      <h3><b>Care Group</b></h3>
    </a>
    <div class="ms-auto">
      <a class="btn btn-primary" href="./login.php">Login</a>
      <a class="btn btn-primary" href="./registered.php">Register</a>
    </div>
  </nav>

  <!-- Banner Section -->
  <div class="banner section-animate">
    <h1 class="section-animate">Book Medical Appointments <br>Online with Ease</h1>
    <p class="lead section-animate">
      Find specialist doctors near you, view availability, and book appointments <br>in just a few clicks anytime,
      anywhere.<br>
      No more waiting in queues.
    </p>
    <a href="#" class="btn btn-lg mt-3 banner-btn section-animate">Book Your Doctor Appointment</a>
  </div>

  <!-- About Us Section -->
  <div class="about-us container section-animate">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h2><b>About Us</b></h2>
        <p>
          We provide a seamless platform that connects patients<br>
          with qualified doctors across various specialties.<br>
          Our goal is to eliminate long queues and simplify<br>
          the appointment process through real-time booking,<br>
          personalized profiles, and instant access to care.<br>
          With user-friendly tools and modern technology,<br>
          we make healthcare more accessible, efficient,<br>
          and available anytime, from anywhere.
        </p>
      </div>
      <div class="col-md-6">
        <img src="assets/bg2.jpg" alt="About us image" class="img-fluid rounded">
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="text-white fade-in">

    <!-- Social media section -->
    <section class="footer-social text-center text-lg-start p-4">
      <div class="container d-flex justify-content-between align-items-center flex-wrap">
        <span class="mb-2 mb-lg-0">Get connected with us on social networks:</span>
        <div>
          <a href="https://www.facebook.com" class="me-4 text-white">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://www.whatsapp.com" class="me-4 text-white">
            <i class="fa-brands fa-whatsapp"></i>
          </a>
          <a href="https://www.phone.com" class="me-4 text-white">
            <i class="fa-solid fa-phone"></i>
          </a>
          <a href="https://www.instagram.com" class="me-4 text-white">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
      </div>
    </section>

    <!-- Main footer content -->
    <section class="footer-main pt-5 pb-4">
      <div class="container text-center text-md-start">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Care Group
            </h6>
            <p>
              We provide a seamless healthcare experience by connecting you with top medical professionals in just a few
              clicks.
            </p>
          </div>

          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">Categories</h6>
            <p><a href="#!" class="text-white text-decoration-none">Find Doctors</a></p>
            <p><a href="#!" class="text-white text-decoration-none">Book Appointments</a></p>
            <p><a href="#!" class="text-white text-decoration-none">Teleconsultation</a></p>
            <p><a href="#!" class="text-white text-decoration-none">Health Packages</a></p>
          </div>

          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">Apoinments</h6>
            <p><a href="#!" class="text-white text-decoration-none">Dr. Anjali Mehra</a></p>
            <p><a href="#!" class="text-white text-decoration-none">Dr. Ravi Patel</a></p>
            <p><a href="#!" class="text-white text-decoration-none">Dr. Sneha Kumar</a></p>
            <p><a href="#!" class="text-white text-decoration-none">Dr. Arjun Rao</a></p>
          </div>

          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase fw-bold mb-4">Subscribe to our newsletter</h6>
            <form>
              <div class="form-outline mb-3">
                <input type="email" class="form-control" placeholder="Enter your email" required />
              </div>
              <button type="submit" class="btn btn-success btn-block">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.85);">
      © 2025 Care Group
    </div>
  </footer>

  <!-- Scroll animation JS -->
  <script>
    const observer = new IntersectionObserver(entries => {
      entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
          setTimeout(() => {
            entry.target.classList.add('section-visible');
          }, index * 150);
        }
      });
    });

    document.querySelectorAll('.section-animate').forEach(section => {
      observer.observe(section);
    });

    // Fade-in navbar and footer on page load
    window.addEventListener('DOMContentLoaded', () => {
      document.querySelectorAll('.fade-in').forEach(el => {
        el.classList.add('visible');
      });
    });
  </script>

</body>

</html>
