<?php


if(isset($_GET['key'])) {

    http_response_code(204);
}else{
    http_response_code(404);

}




?>