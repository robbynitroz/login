<?php


if (isset($_GET['data'])) {
error_reporting(1);



$data=json_decode(urldecode($_GET['data']), 'assoc');

/*
 * MySQL connection
 * */

$servername = "localhost";
$username = "radius";
$password = "rcFGmPSu68ZY";
$dbname = "radius";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}





    $mac_address = $data['mac'];
    $hotel_id    = $data['hotelid'];
    $page_id     = $data['fb-id'];
    $email       = $data['email'];
    $url       = $data['url'];
    $ip       = $data['ip'];



//Security check

//Security for MAC
    $mac_address=mysqli_real_escape_string($conn, $mac_address);
    $hotel_id=mysqli_real_escape_string($conn, $hotel_id);
    $page_id=mysqli_real_escape_string($conn, $page_id);
    $email=mysqli_real_escape_string($conn, $email);


    $query = "SELECT  *  FROM facebook where email='$email' and page_id='$page_id'";

    $result = $conn->query($query);

    // Such user already exists
    if ($result->num_rows == 0) {

    //time

        $time= date("Y-m-d H:i:s");
        $record = $row = $result->fetch_assoc();

        $query = "INSERT INTO facebook (mac_address, hotel_id, email, page_id, login_time) VALUES ('$mac_address', '$hotel_id', '$email', '$page_id', '$time')";
        $result = $conn->query($query);

    }

    $conn->close();



    header("Location: http://$ip:64873/login?username=$mac_address&password=$mac_address&dst=$url");

    

}

exit();