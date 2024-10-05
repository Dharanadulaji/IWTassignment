<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Display.css" />
    <title>Display Page</title>
  </head>

  <body>
    <!-- Navbar Section -->
    <nav class="navbar">
      <div class="logo">
        <img src="images/Logoo.png" alt="Logo" width="75px" height="auto" />
      </div>
      <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <div class="auth-buttons">
        <button class="login-btn">Login</button>
        <button class="signup-btn">Sign Up</button>
      </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
      <img
        src="images/agency-hero-3.webp"
        alt="Hero Image"
        class="hero-img"
        height="400px"
      />
      <div class="hero-text">
        <h1>Display Page</h1>
      </div>
    </section>

    <!-- Table Section -->
    <section class="table-section">
      <table>
        <thead>
          <tr>
            <th>Advertiser Name</th>
            <th>Select Publisher</th>
            <th>Ad Content</th>
            <th>Budget</th>
          </tr>
        </thead>
        <tbody>
          <?php include 'Display.inc.php'; ?>
        </tbody>
      </table>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
      <div class="footer-content">
        <div class="footer-text">
          <div class="footer-text-content footer-1">
            <h4>About Us</h4>
            <a href="#">Blog</a>
            <a href="#">Our Mission</a>
            <a href="#">Our Vision</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
          </div>
          <div class="footer-text-content footer-2">
            <h4>Contact Us</h4>
            <a href="#">Jobs</a>
            <a href="#">Support</a>
          </div>

          <div class="footer-text-content footer-3 social-media">
            <h4>Social Media</h4>
            <a href="#">Facebook</a>
            <a href="#">Instagram</a>
            <a href="#">LinkedIn</a>
            <a href="#">Twitter</a>
          </div>
        </div>
        <div class="footer-logo">
          <img src="images/Logoo.png" alt="Logo" />
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2024 BrightSpark Ads. All rights reserved.</p>
      </div>
    </footer>

    <script src="script.js"></script>
  </body>
</html>
