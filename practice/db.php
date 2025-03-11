<?php
$localhost = "localhost";
$username = "root";
$password ='';
$dbname = "crud_db";

$conn = new mysqli($localhost, $username, $password, $dbname);

if($conn->connect_error) {
    die("connection failed : " . $conn->connect_error);
} else {
    echo "Successfully connected <br/>";
}
?>