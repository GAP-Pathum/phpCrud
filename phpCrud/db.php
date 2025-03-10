<? php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'sample1';

$conn = mysqli_connect($host, $user, $password, $database);
return $conn;

if(!$conn){
    die('Connection error: ' . mysquli_connect_error());
}

echo 'Connection succeed';
?>