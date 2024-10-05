<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="insert.css" />

  <title>IWT assignment</title>
</head>

<body>
  <h1>insert user Details </h1>

</body>

<body>
  <nav class="navbar">
    <div class="logo">
      <img
        src="images/Logoo.png"
        alt="Logo"
        width="75px"
        height="auto" />
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
      height="400px" />
    <div class="hero-text">
      <html lang="en">

      <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Create Ad</title>

      </head>

      <body>

        <div class="container">

          <h2>Create New Ad</h2>

          <form action="./insert.inc.php" method="post" id="adForm">

            <label for="advertiserName">Advertiser Name</label>
            <div class="container-1">
              <input type="text" id="advertiserName" name="advertiserName" required>
            </div>

            <label for="publisher">Select Publisher</label>
            <select id="publisher" name="publisher" required>
              <option value="">-- Select Publisher --</option>
              <option value="Publisher1">Publisher 1</option>
              <option value="Publisher2">Publisher 2</option>
              <option value="Publisher3">Publisher 3</option>
            </select>

            <label for="adContent">Ad Content</label>
            <textarea id="adContent" name="adContent" rows="5" required></textarea>

            <label for="adBudget">Budget ($)</label>
            <input type="text" id="adBudget" name="adBudget" required>

            <button type="submit" class="btn-submit">Submit Ad</button>

          </form>



        </div>




      </body>

      </html>
    </div>
  </section>

  <!-- Footer -->
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

  <script src="insert.js"></script>
</body>

</html>