<?php
include ("db.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
            $name=$_POST["name"];
            $email=$_POST["email"];

            $sql = "INSERT INTO users (name, email) values ('$name', '$email')";

            if($conn->query($sql)===TRUE){
                echo "inserted successfully";
            } else{
                echo "error: " . $sql . $conn->error; 
            }
}
?>

<form method="POST">
    <lable>Name</lable><br/>
    <input type="text" name="name"> <br/><br/>
    <lable>Email</lable><br/>
    <input type="text" name="email"> <br/><br/>
    <input type = "submit" value="Add">

</form>