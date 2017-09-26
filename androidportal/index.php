<?php


if($_GET['give_access']){


        setcookie("give_access", "Yes", time() + (60 * 5), "/"); // 86400 = 1 day
        http_response_code(204);

}else{

    $address = 'http://'.$_SERVER['SERVER_NAME'].'/welcome.php';

    header("location: $address ");
}



//http_response_code(204);
/*header("HTTP/1.1 404 No Content")*/


?>