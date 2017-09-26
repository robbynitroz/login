<?php


if(!isset($_COOKIE["users"])) {
    $cookie_name = "users";
    $cookie_value = "John Doe";
    setcookie($cookie_name, $cookie_value, time() + (8640 * 3), "/"); // 86400 = 1 day

    header('location: http://login.com');

}else{
    http_response_code(204);
}



//http_response_code(204);
/*header("HTTP/1.1 404 No Content")*/


?>