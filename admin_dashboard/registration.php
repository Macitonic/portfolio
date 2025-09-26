<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO aunthetication(email,username,password) VALUES (?,?,?)");
    $stmt->bind_param("sss", $email, $username, $password);
    $stmt->execute();
    echo "You have been Registerd Successfuly!<a href='index.php'>Go to login</a>";
}
?>

<form method="POST">
    <input type="email" name="email" id="email" placeholder="Enter your email" required>
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="password" required>
    <button type="submit">Submit</button>
</form>