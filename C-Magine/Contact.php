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
  <title>C-Magine</title>

  <!-- Font Awesome & Bootstrap CSS -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    rel="stylesheet" />
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css"
    rel="stylesheet" />

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

    /* Heading Image Styling */
    .heading-image {
      background: none;
      padding: 30px 0;
      text-align: center;
    }

    .heading-image img {
      max-width: 50%;
      height: auto;
      background: none;
    }

    /* Theory Section */
    .theory-section {
      background-color: white;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
      max-width: 100%;
      margin: 0 auto 30px;
      position: relative;
      top: -20px;
    }

    .theory-text {
      font-size: 1.3rem;
      font-weight: bold;
      color: black;
      text-align: justify;
    }

    .cmagine {
      color: #c70039;
    }

    /* Category Card Section */
    .card {
      background-color: white;
      border: none;
      border-radius: 15px;
      color: #900c3f;
      cursor: pointer;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
    }

    .card-title {
      color: #c70039;
      font-size: 1.4rem;
      font-weight: bold;
    }

    .card i {
      color: #c70039;
      font-size: 3rem;
      margin-bottom: 10px;
    }

    /* Footer Padding */
    .footer-spacing {
      margin-bottom: 60px;
    }

    /* Full-screen Vanta Background */
    #vanta-bg {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
    }
  </style>
</head>

<body>
  <!-- Vanta Background Container -->
  <script>
    addEventListener("click")
  </script>

  <!-- Vanta Animated Background Container -->
  <div id="vanta-bg"></div>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">

        <!-- Replace the src below with the correct path to the Somaiya Vidyavihar logo -->
        <a class="navbar-brand" href="https://kjsit.somaiya.edu.in/en" target="_blank">
          <img
            src="Images/somaiya_logo.jpg"
            alt="Somaiya Vidyavihar Logo"
            style="height: 40px" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav">
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
              <a class="nav-link active" href="Login/logout.php">Logout</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="About.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
          </ul>
          <img src="Images/Somaiya Trust Logo.jpg" alt="Somaiya Logo" style="height: 40px" />
        </div>
    </div>
  </nav>

  <!-- Contact Page Content -->
  <div class="container">
    <div class="content mt-5" style="color:azure;">
      <h1>Contact Us</h1>
      <p>If you have any questions or feedback, feel free to send us a message!</p>
      <form action="send_message.php" method="post">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" required />
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" required />
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
      </form>
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