<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/form.css">
    <link rel="stylesheet" href="../assets/style.css">
    <style>
      #header{
        background-color: var(--background-primary);
      }
      .links a:hover{
        color: var(--secondary) !important;
      }
      #login #formLogin{
      padding: 160px 50px;
}

    </style>
  </head>
  <body>

    <div class="wrapper">
    <section class="form login">
    <div id="login">
        <div id="formLogin">

            <h1>Sign In →
            </h1>

          <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text"></div>
                  <div class="inputContainer">
                      <input type="text" class="inputLogin" placeholder=" " name="email">
                      <label class="labelLogin">Email</label>
                  </div>

                  <div class="inputContainer">
                      <input type="password" class="inputLogin" placeholder=" " name="password">
                      <label class="labelLogin">Password</label>
                  </div>

                  <div class="field button">
                  <input type="submit" class="submitButton" value="Sign In">
                  </div>
          </form>

            <div class="register">
            <span class="breaker">
                or 
            </span>    
                <a href="../register/">Register</a>
            </div>
            <div class="register">
            <span class="breaker">
              <b>Fotgot password?</b>
            </span>  
            <a href="../auth/">Reset Now</a>
            </div>

        </div>
    </div>
  </section>
  </div>
  </body>
  <script src="../assets/js/login.js"></script>
</html>