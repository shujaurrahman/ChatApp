<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forgot Password</title>
    <link rel="stylesheet" href="../assets/css/form.css">
    <style>
            #login #formLogin{
      padding: 120px 50px;
      height: 450px;
}
h3 {
    margin-bottom: 20px;
}
    </style>
  </head>
  <body>
  <div class="wrapper">
  <section class="form signup">
    <div id="login">
        <div id="formLogin">

            <h2>Reset Password →
            </h2>
            <form action="" method="POST" autocomplete="off">
            <div class="error-text">
              </div>
            <div class="inputContainer">
                <input type="text" class="inputLogin" placeholder=" " name="email">
                <label class="labelLogin">Registered Email </label>
            </div>
            <div class="field button">
            <input type="submit" class="submitButton" value="Rest Password">
            </div>
            <div class="register">
            </div>
           </form>
            <div class="register">
            <span class="breaker">
              <b>Go Back to Sign In</b>
            </span>  
            <a href="../login/">Sign In</a>
            </div>

        </div>
    </div>
    </section>
  </div>
  </body>
<script src="js/forgotpass.js"></script>
</html>