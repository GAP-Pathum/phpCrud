<?php
$localhost = "localhost";
$username = "root";
$password ='';
$dbname = "sample1";

$conn = new mysqli($localhost, $username, $password, $dbname);

if($conn->connect_error) {
    die("connection failed : " . $conn->connect_error);
} else {
    // echo "Successfully connected <br/>";
    echo "<script>console.log('Successfully connected' );</script>";
}
?>