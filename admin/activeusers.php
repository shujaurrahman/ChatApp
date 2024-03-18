
<?php

$boolAdminLoggedIn = false;
if(isset($_SESSION) and isset($_SESSION["AdminUsername"])){  
    $boolAdminLoggedIn = true;   
}
else{
    $boolAdminLoggedIn = false;
    header("location: ./index.php");
}

$UsercardBlock = "";
$boolContactFetch = false;

if($boolAdminLoggedIn){
    require "dbAdmin.php";
    $sql = "SELECT * FROM `users` WHERE `status` ='Active now'";
    $result = mysqli_query($conn,$sql);

    $aff = mysqli_affected_rows($conn);

    if($aff<1){
        $boolContactFetch = false;
    }
    else{
        $boolContactFetch = true;

        while($data = mysqli_fetch_object($result)){
            $fname = $data->{"fname"};
            $lname = $data->{"lname"};
            $email = $data->{"email"};
            $status = $data->{"status"};
            $img = $data->{"img"};
            $name=$fname.$lname;

            $UsercardBlock .= " <div class='card my-2 mx-2' >
            <img src='../assets/images/$img' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>$name</h5>
              <p class='card-text'>$email</p>
            </div>
            <div class='card-footer'>
              <small class='text-body-secondary'>$status</small>
            </div>
          </div>";

          $UserBlock="<div class='card-group'>
          $UsercardBlock
          </div>";
        }
    }

}

?>
