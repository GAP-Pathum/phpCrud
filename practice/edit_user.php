<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id=$id";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $conn->error;
    }
}

?>

<form method="POST">
    <label>Name:</label><br>
    <input type="text" name="name" value="<?php echo $user['name']; ?>"><br><br>
    <label>Email:</label><br>
    <input type="email" name="email" value="<?php echo $user['email']; ?>"><br><br>
    <input type="submit" value="Update User">
</form>
