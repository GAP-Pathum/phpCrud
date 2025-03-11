<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Prepared statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $email);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!-- Corrected HTML Form -->
<form method="POST">
    <label>Name:</label><br>
    <input type="text" name="name" placeholder="Enter Name" required><br><br>
    <label>Email:</label><br>
    <input type="text" name="email" placeholder="Enter Email" required><br><br>
    <input type="submit" value="Add">
    <a href='View_user.php'>View</a>
</form>
