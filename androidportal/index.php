<?php



session_start();

if(isset($_SESSION['views'])){
    $_SESSION['views'] = $_SESSION['views']+ 1;
    echo "<h1>". $_SESSION['views'] ." </h1>";

    //http_response_code(204);

}else{
    $_SESSION['views'] = 1;

    echo "<h1>". $_SESSION['views'] ." </h1>";
    require 'welcome.php';
}



/*

if ($_GET['give_access']) {


    setcookie("give_access", "Yes", time() + (60 * 5), "/"); // 86400 = 1 day
    header('location:http://login.com');

} else {

    $address = 'http://' . $_SERVER['SERVER_NAME'] . '/welcome.php';

    header("location: $address ");
}


if ($_COOKIE["give_access"]) {
    http_response_code(204);
}*/





?>