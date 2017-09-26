<?php



session_start();

if(isset($_SESSION['cna'])){
    if($_SESSION['cna']>=4){
        http_response_code(204);

    }
}

if(isset($_SESSION['cna'])){
    $_SESSION['cna'] = $_SESSION['cna']+ 1;

}else{
    $_SESSION['cna'] = 1;
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