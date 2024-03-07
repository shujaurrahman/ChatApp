<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
  <link rel="stylesheet" href="../assets/css/form.css">
  <link rel="stylesheet" href="../assets/style.css">

  <style>
    #header {
      background-color: var(--background-primary);
    }

    .links a:hover {
      color: var(--secondary) !important;
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <section class="form signup">
      <div id="login">
        <div id="formLogin">
          <h1>Chat App →
          </h1>


          <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="error-text"></div>
            <div class="inputContainer">
              <input type="text" class="inputLogin" placeholder=" " name="fname">
              <label class="labelLogin">First Name</label>
            </div>
            <div class="inputContainer">
              <input type="text" class="inputLogin" placeholder=" " name="lname">
              <label class="labelLogin">Last Name</label>
            </div>
            <div class="inputContainer">
              <input type="text" class="inputLogin" placeholder=" " name="email">
              <label class="labelLogin">Email</label>
            </div>
            <div class="inputContainer">
              <input type="password" class="inputLogin" placeholder=" " name="password">
              <label class="labelLogin">Password</label>
              <ion-icon id="togglePassword" name="eye-outline"></ion-icon>
            </div>
            <div class="field image">
              <label class="labelLogin" style="padding:5px;">Select DP</label>
              <input style="padding: 5px; outline:none;" type="file" name="image"
                accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
            </div><br>
            <div class="field button">
              <input type="submit" class="submitButton" value="Continue to Chat">
            </div>
          </form>




          <div class="register">
            <span class="breaker">
              <b>Already signedup up?</b>
            </span>
            <a href="../login/">login</a>
          </div>
        </div>
    </section>
  </div>
</body>
<script src="../assets/js/pass-show-hide.js"></script>
<script src="../assets/js/signup.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>