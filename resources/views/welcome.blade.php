<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>School Alumni</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .hero-section {
      background-color: #f8f9fa;
      padding: 80px 0;
      text-align: center;
    }
    .section-title {
      font-size: 2rem;
      margin-bottom: 30px;
    }
    .alumni-card {
      border: 1px solid #ddd;
      border-radius: 5px;
      padding: 20px;
      margin-bottom: 20px;
    }
    .footer {
      background-color: #343a40;
      color: #fff;
      padding: 30px 0;
      text-align: center;
    }
  </style>
</head>
<body>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Alumni Stories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Upcoming Events</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <h1 class="display-4">Welcome to the School Alumni Network</h1>
      <p class="lead">Stay connected, relive memories, and be a part of our growing alumni community.</p>
      <a href="#" class="btn btn-primary">Join the Network</a>
    </div>
  </section>

  <!-- Alumni Achievements -->
  <section class="container my-5">
    <h2 class="section-title">Alumni Achievements</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="alumni-card">
          <h4>John Doe</h4>
          <p>CEO at Tech Innovators Inc.</p>
          <p>Class of 2005</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="alumni-card">
          <h4>Jane Smith</h4>
          <p>Software Engineer at Web Solutions</p>
          <p>Class of 2010</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="alumni-card">
          <h4>Samuel Green</h4>
          <p>Doctor at City Medical Center</p>
          <p>Class of 2000</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Upcoming Events -->
  <section class="bg-light py-5">
    <div class="container">
      <h2 class="section-title">Upcoming Alumni Events</h2>
      <div class="row">
        <div class="col-md-4">
          <h4>Annual Reunion</h4>
          <p>Date: March 15, 2025</p>
          <p>Location: School Campus</p>
          <a href="#" class="btn btn-info">Learn More</a>
        </div>
        <div class="col-md-4">
          <h4>Networking Dinner</h4>
          <p>Date: June 20, 2025</p>
          <p>Location: Downtown Hall</p>
          <a href="#" class="btn btn-info">Learn More</a>
        </div>
        <div class="col-md-4">
          <h4>Career Development Workshop</h4>
          <p>Date: September 10, 2025</p>
          <p>Location: Online</p>
          <a href="#" class="btn btn-info">Learn More</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <p>&copy; 2025 {{ config('app.name') }} Network | All Rights Reserved</p>
  </footer>

  <!-- Bootstrap JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
