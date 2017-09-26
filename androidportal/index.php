<?php



session_start();

if(isset($_SESSION['caa7'])){
    if($_SESSION['caa7']>=5){
        http_response_code(204);

    }
}

if(isset($_SESSION['caa7'])){
    $_SESSION['caa7'] = $_SESSION['caa7']+ 1;

}else{
    $_SESSION['caa7'] = 1;
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