<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register for Event</title>
  <link rel="stylesheet" href="css/register.css">
</head>
<body>

  <div id="registerModal" class="modal">
    <div class="modal-content">
      <span class="close-btn" id="closeBtn">&times;</span>
      <h2>Register for Event</h2>

      <?php if (isset($_SESSION['register_message'])): ?>
        <div style="color: green; margin-bottom:10px;">
          <?php
            echo $_SESSION['register_message'];
            unset($_SESSION['register_message']);
          ?>
        </div>
      <?php endif; ?>

      <form method="POST" action="php/register.php">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Submit</button>
      </form>
    </div>
  </div>

  <script src="js/register.js"></script>
</body>
</html>
