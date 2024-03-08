<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Verify Email</title>
  <link rel="stylesheet" href="../assets/css/form.css">
  <style>
    #login #formLogin {
      padding: 120px 50px;
      height: 450px;
    }

    h3 {
      margin-bottom: 20px;
    }
    .error-text {
    display: block;
}
  </style>
</head>

<body>
  <div class="wrapper">
    <section class="form signup">
      <div id="login">
        <div id="formLogin">
          <h2>Enter Code→
          </h2>
          <form action="" method="POST" autocomplete="off">
            <?php
            session_start();
            if (isset($_SESSION['email'])) {
              $email=$_SESSION['email'];
              $info = "We've sent a verification code to your email - $email";}
              else{
                $info;
              }
              ?>
              <div class="error-text">
                <?php echo $info; ?>
              </div>
            <div class="inputContainer">
              <input type="text" class="inputLogin" placeholder=" " name="otp">
              <label class="labelLogin">Verification Code </label>
            </div>
            <div class="field button">
            <input type="submit" class="submitButton" value="Confirm Verification Code">
            </div>
            <div class="register">
            </div>

        </div>
      </div>
      </form>
    </section>
  </div>
</body>
<script src="js/code.js"></script>
</html>