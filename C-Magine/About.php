<?php
/*
session_start();

if (!isset($_SESSION['user_id'])) {
  header("Location: LOGIN/login.html"); // Redirect to login if no session
  exit();
}
  */
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About - C-Magine</title>

  <!-- Font Awesome & Bootstrap CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="CSS/index.css">
  <style>
    /* General Body Styling */
    body {
      font-family: 'Arial', sans-serif;
      background: #f4f4f4;
      overflow-x: hidden;
    }

    /* Navbar Styling */
    .navbar {
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    /* Vanta Background Container */
    #vanta-bg {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
    }

    /* Content Container */
    .content {
      margin-top: 80px;
      padding: 40px;
      background-color: white;
      border-radius: 15px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    /* Developer Cards Styling */
    .dev-card img {
      width: 100%;
      height: auto;
      border-radius: 50%;
    }

    .dev-card {
      text-align: center;
      padding: 20px;
      border: none;
      border-radius: 15px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      background-color: white;
    }

    .dev-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>

<body>
  <!-- Vanta Animated Background Container -->
  <div id="vanta-bg"></div>

  <!-- Navbar (same as index.php) -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <a class="navbar-brand" href="https://kjsit.somaiya.edu.in/en" target="_blank">
          <img src="Images/somaiya_logo.jpg" alt="Somaiya Vidyavihar Logo" style="height: 40px" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <?php if (isset($_SESSION['user_id'])): ?>
              <!-- Display user's profile picture and name/ID -->
              <li class="nav-item">
                <div class="nav-link user-info">
                  <span style="font-family:'Times New Roman', Times, serif; color: black"><?php echo htmlspecialchars($_SESSION['first_name']); ?></span>
                </div>
              </li>
            <?php endif; ?>
            <li class="nav-item">
              <a class="nav-link" href="Login/logout.php">Logout</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Contact.php">Contact</a>
            </li>
          </ul>
          <img src="Images/Somaiya Trust Logo.jpg" alt="Somaiya Logo" style="height: 40px" />
        </div>
    </div>
  </nav>

  <div class="heading-image">
    <img src="Images/image.png" alt="C-Magine Heading" />
  </div>

  <!-- About Page Content -->
  <div class="container">
    <div class="content mt-5">
      <p>
        Welcome to <span style="color: #c70039;">C-Magine</span>—your interactive virtual lab for C programming.
        Our platform is designed to make learning C both fun and engaging. By visualizing core concepts of C
        programming such as variables, functions, and data structures, as well as some more complex implementations,
        we help you understand the underlying mechanics of your code. Whether you are just beginning or looking to
        refine your skills, C-Magine is here to guide your journey.
      </p>
      <p>
        Our goal is to provide an immersive learning experience that combines theory with interactive practice.
        We continuously work on improving the platform and welcome your feedback!
      </p>
    </div>

    <!-- Developers Section -->
    <div class="content">
      <h2 class="text-center mb-4">Our Developers</h2>
      <div class="row g-4 justify-content-center">
        <!-- Developer 1 -->
        <div class="col-md-4">
          <div class="dev-card">
            <?php
            if (file_exists("Images/Shoubhik.jpg")) {
              echo '<img src="Images/Shoubhik.jpg" alt="Shoubhik">';
            } else {
              echo '<img src="Images/Empty Male Profile.jpg" alt="Shoubhik">';
            }
            ?>
            <h4 class="mt-3">Shoubhik Bhattacharjee</h4>
            <p>shoubhik.b@somaiya.edu</p>
            <a href="" target="_blank" class="btn btn-primary">Visit</a>
          </div>
        </div>
        <!-- Developer 2 -->
        <div class="col-md-4">
          <div class="dev-card">
            <?php
            if (file_exists("Images/Atharva.jpg")) {
              echo '<img src="Images/Atharva.jpg" alt="Atharva">';
            } else {
              echo '<img src="Images/Empty Male Profile.jpg" alt="Atharva">';
            }
            ?>
            <h4 class="mt-3">Atharva Bhandari</h4>
            <p>atharva.bhandari@somaiya.edu</p>
            <a href="" target="_blank" class="btn btn-primary">Visit</a>
          </div>
        </div>
        <!-- Developer 3 -->
        <div class="col-md-4">
          <div class="dev-card">
            <?php
            if (file_exists("Images/Ayush.jpg")) {
              echo '<img src="Images/Ayush.jpg" alt="Ayush">';
            } else {
              echo '<img src="Images/Empty Male Profile.jpg" alt="Ayush">';
            }
            ?>
            <h4 class="mt-3">Ayush Jangam</h4>
            <p>ayush.jangam@somaiya.edu</p>
            <a href="" target="_blank" class="btn btn-primary">Visit</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Mentors Section -->
    <div class="content">
      <h2 class="text-center mb-4">Mentor</h2>
      <div class="row g-4 justify-content-center">
        <!-- Project Guide -->
        <div class="col-md-4">
          <div class="dev-card">
            <?php
            if (file_exists("Images/Pallavi Patil.jpg")) {
              echo '<img src="Images/Pallavi Patil.jpg" alt="Pallavi Patil">';
            } else {
              echo '<img src="Images/Empty Female Profile.jpg" alt="Pallavi Patil">';
            }
            ?>
            <h4 class="mt-3">Prof. Pallavi Mahesh Patil</h4>
            <p>pallavi.mp@somaiya.edu</p>
            <a href="https://kjsit.somaiya.edu.in/en/view-member/220265/" target="_blank" class="btn btn-primary">Visit</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Vanta.js Script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.waves.min.js"></script>
  <script>
    VANTA.WAVES({
      el: "#vanta-bg",
      color: 0xc70039,
      shininess: 30,
      waveHeight: 20,
      waveSpeed: 0.75,
      zoom: 1,
    });
  </script>

  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>