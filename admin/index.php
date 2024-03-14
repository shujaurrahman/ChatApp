<?php
 error_reporting(E_ALL); 
 ini_set('display_errors', 1);
if (isset($_SESSION) and isset($_SESSION['AdminUsername']) ) {
  header("Location: ./index.php");
}

require "./dbAdmin.php";


//Run for only one Time so that Admin info's, username and Password is stored in database 

// $name = "Shuja ur Rahman";
// $email = "shujaurrehman210@gmail.com";
// $adminPassword = "shujaurrahman";
// $username = "shujaurrahman";

// $passwordHash = password_hash($adminPassword,PASSWORD_DEFAULT);

// $sql = "INSERT INTO $tableName(`name`,`email`,`username`,`password`)
//         VALUES('$name','$email','$username','$passwordHash')";

// $result = mysqli_query($conn,$sql);



$boolAdminUserFound = false;
$boolAdminPasswordMatch = false;
$boolAdminPasswordMatch = false;


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $currentUsername = $_POST["username"];
    $userPassword = $_POST["password"];
    $sql = "SELECT * FROM `$tableName` where `username` = '$currentUsername'";
    $result = mysqli_query($conn,$sql);

    $aff = mysqli_affected_rows($conn);

    if($aff<1){
        $boolAdminUserFound = false;
    }
    else{
        $boolAdminUserFound = true;
    }


    if($boolAdminUserFound){
        $data = mysqli_fetch_object($result);
        $passwordInDatabase = $data->{"password"};
        if(password_verify($userPassword,$passwordInDatabase)){
            $boolAdminPasswordMatch = true;   
            session_start();
            $_SESSION["AdminUsername"] = $currentUsername; 
            $_SESSION["unique_id"] = '12345678'; 
            $status = "Active now";
            $sql = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE email = 'shujaurrehman210@gmail.com'");
            // $_SESSION['email'] = 'adminshuja@gmail.com';    
            header("location: ./dashboard.php");
        }
        else{
            $boolAdminPasswordMatch == false;
        }
    }
}

$loginForm='<div class="form-section ">
<form action="index.php" method="POST">
    <p class="h4">Admin Login</p>
    <br>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text" class="form-control" name="username" >
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <button type="submit" class="btn btn-outline-dark">Login</button>
</form>
</div>';
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .form-section {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 80vh;
            margin: 0;
        }

        form {
            max-width: 500px;
            width: 100%;
            border: 1px solid #ccc; /* Add border style */
            padding: 60px 50px; /* Add padding for better appearance */
            border-radius: 10px; /* Add border-radius for rounded corners */
        }

    </style>
</head>

<body >
    <?php
    require "nav.php";
    ?>

</body>

<?php
echo $loginForm;
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>
