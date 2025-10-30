<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EventHub</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
  <!-- Navbar -->
  <header>
    <nav class="navbar">
      <div class="logo">EventHub</div>
      <ul class="nav-links">
        <li><a href="index.php" class="active"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="events.html"><i class="fa fa-calendar"></i> Events</a></li>
        <li><a href="about.html"><i class="fa fa-info-circle"></i> About</a></li>
        <li><a href="gallery.html"><i class="fa fa-image"></i> Gallery</a></li>
        <li><a href="contact.html"><i class="fa fa-envelope"></i> Contact</a></li>
      </ul>
      <div class="auth-buttons">
        <?php if(isset($_SESSION['user_name'])): ?>
          <span style="margin-right:10px;">Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?></span>
          <a href="php/logout.php" class="btn">Logout</a>
        <?php else: ?>
          <a href="login.html" class="btn">Login</a>
          <a href="signup.php" class="btn btn-primary">Sign Up</a>
        <?php endif; ?>
      </div>
    </nav>
  </header>

  <section class="hero">
    <div class="hero-content">
      <h1>Discover Amazing<br>Events Near You</h1>
      <p>Join thousands of people attending conferences, workshops, networking events, and more. Find your next favorite event today.</p>
      <div class="hero-buttons">
        <a href="events.html" class="btn btn-primary">Browse Events</a>
        <a href="about.html" class="btn">Learn More</a>
      </div>
    </div>
    <div class="hero-image">
      <img src="images/homepageImage.jpeg" alt="Event Image">
    </div>
  </section>

  <section class="stats">
    <div class="stat">
      <h2>200+</h2>
      <p>Events Hosted</p>
    </div>
    <div class="stat">
      <h2>50K+</h2>
      <p>Happy Attendees</p>
    </div>
    <div class="stat">
      <h2>98%</h2>
      <p>Secure Rate</p>
    </div>
    <div class="stat">
      <h2>4.9</h2>
      <p>Average Rating</p>
    </div>
  </section>

  <section class="events">
    <h2>Upcoming Events</h2>
    <div class="event-grid">

      <div class="event-card">
        <img src="images/digitalMarketingWorkshop.jpeg" alt="Event 1">
        <div class="event-info">
          <h3>Digital Marketing Workshop</h3>
          <p>Learn the latest digital marketing strategies from industry experts. This hands-on workshop covers SEO, social media, and more.</p>
          <p><i class="fa-regular fa-calendar"></i> Sun, Sep 22, 2025</p>
          <p><i class="fa-regular fa-clock"></i> 10:00 AM</p>
          <p><i class="fa-solid fa-location-dot"></i> Mumbai Marketing Hub, India</p>
          <p><i class="fa-solid fa-user-group"></i> 142/150 registered</p>
          <div class="event-footer">
            <strong class="prices">₹12,499</strong>
            <div>
              <a href="event-details.html?id=1" class="btn-outline">View Details</a>
              <a href="register.html" class="btn">Register</a>
            </div>
          </div>
        </div>
      </div>

      <div class="event-card">
        <img src="images/startupImage.jpg" alt="Event 2">
        <div class="event-info">
          <h3>Startup Networking Meet</h3>
          <p>Connect with budding entrepreneurs, investors, and mentors in this exciting networking event to grow your business.</p>
          <p><i class="fa-regular fa-calendar"></i> Fri, Oct 11, 2025</p>
          <p><i class="fa-regular fa-clock"></i> 6:00 PM</p>
          <p><i class="fa-solid fa-location-dot"></i> Bangalore Startup Hub, India</p>
          <p><i class="fa-solid fa-user-group"></i> 98/120 registered</p>
          <div class="event-footer">
            <strong class="prices">₹999</strong>
            <div>
              <a href="event-details.html?id=2" class="btn-outline">View Details</a>
              <a href="register.html" class="btn">Register</a>
            </div>
          </div>
        </div>
      </div>

      <div class="event-card">
        <img src="images/concert.jpg" alt="Event 3">
        <div class="event-info">
          <h3>Music Concert</h3>
          <p>Experience live performances from top artists across India in this electrifying music concert.</p>
          <p><i class="fa-regular fa-calendar"></i> Sat, Nov 16, 2025</p>
          <p><i class="fa-regular fa-clock"></i> 7:30 PM</p>
          <p><i class="fa-solid fa-location-dot"></i> Delhi Concert Arena, India</p>
          <p><i class="fa-solid fa-user-group"></i> 480/500 registered</p>
          <div class="event-footer">
            <strong class="prices">₹2,499</strong>
            <div>
              <a href="event-details.html?id=3" class="btn-outline">View Details</a>
              <a href="register.html" class="btn">Register</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="cta">
    <h2>Ready to Join Our Community?</h2>
    <p>Create an account to register for events, track your attendance, and get personalized event recommendations.</p>
    <a href="signup.html" class="btn btn-primary">Sign Up Now</a>
  </section>

  <footer>
    <p>&copy; 2025 EventHub. All Rights Reserved.</p>
  </footer>
</body>
</html>
