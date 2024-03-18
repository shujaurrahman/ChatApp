<?php

$boolAdminLoggedIn = false;
if(isset($_SESSION) and isset($_SESSION["AdminUsername"])){  
    $boolAdminLoggedIn = true;   
}
else{
    $boolAdminLoggedIn = false;
    header("location: ./index.php");
}

$cardBlock = "";
$boolContactFetch = false;

if($boolAdminLoggedIn){
    require "dbAdmin.php";
    $sql = "SELECT * FROM contacus;";
    $result = mysqli_query($conn,$sql);

    $aff = mysqli_affected_rows($conn);

    if($aff<1){
        $boolContactFetch = false;
    }
    else{
        $boolContactFetch = true;

        while($data = mysqli_fetch_object($result)){
            $contactName = $data->{"name"};
            $contactEmail = $data->{"email"};
            $contactMssg = $data->{"mssg"};
            $contactTime = $data->{"time"};
            $newDate = date("j F Y", strtotime($contactTime));
            $newTime = date("l, g:i a", strtotime($contactTime));


            $cardBlock .= "
                            <div class='container my-3'>  
                   
                                <div class='card  border-dark '>
                                    <div class='card-header'>
                                        $contactName || $contactEmail
                                    </div>
                                    <div class='card-body card-title'>
                                        <blockquote class='blockquote mb-0'>
                                        <p>$contactMssg.</p>
                                        <footer class='blockquote-footer'>$newDate  <cite title='Source Title'> $newTime</cite></footer>
                                        </blockquote>
                                    </div>
                                </div>
                          
                            </div>   ";
        }
    }

}

?>
