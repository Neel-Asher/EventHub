<?php
session_start();
if (isset($_SESSION['user_name'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css" />
  </head>
  <body>
    <div class="modal" id="loginModal">
      <div class="modal-content">
        <span class="close" id="closeModal">&times;</span>
        <h2>Welcome Back</h2>

        <?php if (isset($_SESSION['login_error'])): ?>
          <div id="loginMessage" style="color:red; margin-bottom:10px;">
            <?php
              echo $_SESSION['login_error'];
              unset($_SESSION['login_error']);
            ?>
          </div>
        <?php endif; ?>

        <form method="POST" action="php/login.php">
          <input type="email" name="email" placeholder="Email Address" required />
          <input type="password" name="password" placeholder="Password" required />
          <button type="submit">Login</button>
        </form>

        <div class="signup-link">
          Don’t have an account? <a href="signup.php">Sign Up</a>
        </div>
      </div>
    </div>

    <script src="js/login.js"></script>
  </body>
</html>
