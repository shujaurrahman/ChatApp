

<?php
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">';
if (!isset($_SESSION)) {
    session_start();    
}

$boolAdminLoggedIn = false;
if (isset($_SESSION) and isset($_SESSION['AdminUsername']) and isset($_SESSION['unique_id'])) {
    $boolAdminLoggedIn = true;     
}

$navBar="";

if(!$boolAdminLoggedIn){
    $navBar ='<nav class="bg-body-tertiary">
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link" href="../index.php"><button type="button" class="btn btn-outline-dark">Homepage</button></a>
        </li>
    </ul>
</nav>'
    ;
}
else{
    $navTitle = $_SESSION["AdminUsername"];
    $adminName= "<a class='nav-link' href='dashboard.php'><button type='button' class='btn btn-outline-dark'>$navTitle</button></a>";
    $navBar = "<nav class='bg-body-tertiary'>
    <ul class='nav justify-content-end'>
        <li class='nav-item'>
            $adminName
        </li>
        <li class='nav-item'>
            <a class='nav-link' href='../app/users.php'><button type='button' class='btn btn-outline-dark'>Chat</button></a>
        </li>
        <li class='nav-item'>
            <a class='nav-link' href='logout.php'><button type='button' class='btn btn-outline-dark'>Logout</button></a>
        </li>
    </ul>
</nav>";
    
    
}


echo $navBar;


?>