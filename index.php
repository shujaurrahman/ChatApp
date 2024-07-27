<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require './assets/config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $mssg = $_POST["msg"];

  $sql = "INSERT INTO contacus (`name`,`email`,`mssg`)
          VALUES('$name','$email','$mssg');";
  $result = mysqli_query($conn, $sql);

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chat App</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Mulish:wght@600;700;900&family=Quicksand:wght@400;500;600;700&display=swap"
    rel="stylesheet">
</head>

<body>

  <!-- 
    - HEADER
  -->

  <header class="header" data-header>
    <div class="container">



      <button class="menu-toggle-btn" data-nav-toggle-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar">
        <ul class="navbar-list">
        </ul>

        <div class="header-actions">
          <a href="login/index.php" class="header-action-link">Log in</a>

          <a href="register/index.php" class="header-action-link">Register</a>
        </div>
      </nav>

    </div>
  </header>





  <main>
    <article>


      <section class="about">
        <div class="container">

          <div class="about-content">

            <div class="about-icon">
              <ion-icon name="chatbox-outline"></ion-icon>
            </div>

            <h2 class="h2 about-title">Why Chat?</h2>

            <p class="about-text">
              A minimal Chat app where people can to do the tiny biny gossip of the day. so why not?
            </p>


          </div>

          <ul class="about-list">

            <li>
              <div class="about-card">

                <div class="card-icon">
                  <ion-icon name="thumbs-up"></ion-icon>
                </div>

                <h3 class="h3 card-title">Esay To Use</h3>

                <p class="card-text">
                  A simple sign up with minimal details and a photo and you are up for a chit-chat.
                </p>

              </div>
            </li>

            <li>
              <div class="about-card">

                <div class="card-icon">
                  <ion-icon name="trending-up"></ion-icon>
                </div>

                <h3 class="h3 card-title">Grow your social</h3>

                <p class="card-text">
                  Git along with more than one chitty-buddy and explore the different world out there.
                </p>

              </div>
            </li>

            <li>
              <div class="about-card">

                <div class="card-icon">
                  <ion-icon name="shield-checkmark"></ion-icon>
                </div>

                <h3 class="h3 card-title">Full Secure</h3>

                <p class="card-text">
                  what you chat is none of our bussniss. Never gonna monetize.
                </p>

              </div>
            </li>

            <li>
              <div class="about-card">

                <div class="card-icon">
                  <ion-icon name="server"></ion-icon>
                </div>

                <h3 class="h3 card-title">Data Privacy</h3>

                <p class="card-text">
                  Full secure signup and login using encrytion techniques.
                </p>

              </div>
            </li>

          </ul>

        </div>
      </section>

      <!-- 
        - CONTACT
      -->

      <section class="contact" id="contact">
        <div class="container">

          <h2 class="h2 section-title">Contact Us</h2>

          <p class="section-text">
            In you need me I am always there to help. I appear as Shujaurrahman in every friendlist while i am not
            active there raise a querry
            or report any unusal activity or bug.
          </p>

          <div class="contact-wrapper">

            <form action="" class="contact-form" action="./index.php" method="POST">

              <div class="wrapper-flex">

                <div class="input-wrapper">
                  <label for="name">Name*</label>

                  <input type="text" name="name" id="name" required placeholder="Enter Your Name" class="input-field">
                </div>

                <div class="input-wrapper">
                  <label for="emai">Email*</label>

                  <input type="text" name="email" id="email" required placeholder="Enter Your Email"
                    class="input-field">
                </div>

              </div>

              <label for="message">Message*</label>

              <textarea name="msg" id="message" required placeholder="Type Your Message" class="input-field"></textarea>

              <button type="submit" class="btn btn-primary">
                <span>Send Message</span>

                <ion-icon name="paper-plane-outline"></ion-icon>
              </button>

            </form>

            <ul class="contact-list">

              <li>
                <a href="mailto:support@website.com" class="contact-link">
                  <ion-icon name="mail-outline"></ion-icon>

                  <span>: shujaurrehman210@gmail.com</span>
                </a>
              </li>

              <li>
                <a href="tel:+0011234567890" class="contact-link">
                  <ion-icon name="call-outline"></ion-icon>

                  <span>: +91 7579966178</span>
                </a>
              </li>

              <li>
                <div class="contact-link">
                  <ion-icon name="time-outline"></ion-icon>

                  <span>: 9:00 AM - 6:00 PM</span>
                </div>
              </li>

              <li>
                <a href="#" class="contact-link">
                  <ion-icon name="location-outline"></ion-icon>

                  <address>: Muzzammil 48 , VM Hall AMU</address>
                </a>
              </li>

            </ul>

          </div>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - FOOTER
  -->

  <footer>
    <div class="footer-bottom">
      <div class="container">
        <p class="copyright">
          &copy; 2024 <a href="">Shuja ur Rahman</a>. All Right Reserved
        </p>
      </div>
    </div>

  </footer>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>