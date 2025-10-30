<?php
session_start(); // Start session to read error messages
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up</title>
  <link rel="stylesheet" href="css/signup.css" />
</head>
<body>
  <!-- Modal -->
  <div class="modal" id="signupModal">
    <div class="modal-content">
      <span class="close" id="closeModal">&times;</span>
      <h2>Create Account</h2>

      <!-- Display error message if set -->
      <?php
      if (isset($_SESSION['signup_error'])) {
          echo '<div class="error-message">' . $_SESSION['signup_error'] . '</div>';
          unset($_SESSION['signup_error']); // Clear after displaying
      }

      if (isset($_SESSION['signup_success'])) {
          echo '<div class="success-message">' . $_SESSION['signup_success'] . '</div>';
          unset($_SESSION['signup_success']);
      }
      ?>

      <form method="POST" action="php/signup.php">
        <input
          type="text"
          name="full_name"
          placeholder="Full Name"
          required
        />
        <input
          type="email"
          name="email"
          placeholder="Email Address"
          required
        />
        <input
          type="password"
          name="password"
          placeholder="Password"
          required
        />
        <input
          type="password"
          name="confirm_password"
          placeholder="Confirm Password"
          required
        />
        <button type="submit">Sign Up</button>
      </form>

      <div class="login-link">
        Already have an account? <a href="login.php">Log in</a>
      </div>
    </div>
  </div>

  <script src="js/signup.js"></script>
</body>
</html>
