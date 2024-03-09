<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>New Password</title>
    <link rel="stylesheet" href="../assets/css/form.css">
<style>
    #login #formLogin{
      padding: 120px 50px;
      height: 500px;
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

            <h3>Create New Password →
            </h3>
          <form action="" method="POST" autocomplete="off">
          <div class="error-text">
              </div>
            <div class="inputContainer">
                <input type="text" class="inputLogin" placeholder=" " name="password">
                <label class="labelLogin">New Password</label>
            </div>

            <div class="inputContainer">
                <input type="password" class="inputLogin" placeholder=" " name="cpassword">
                <label class="labelLogin">Confirm New Password</label>
            </div>

            <div class="field button">
            <input type="submit" class="submitButton" value="Reset">
            </div>
            <div class="register">
            </div>
            
          </form>
          </div>
        </div>
  </section>
    </div>
  </body>
  <script src="js/newpass.js"></script>
</html>