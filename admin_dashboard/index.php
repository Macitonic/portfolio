<?php
session_start();
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];


    $stmt = $conn->prepare("SELECT email, password FROM aunthetication WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($db_email, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $_SESSION["user_email"] = $db_email; 
            echo "Login Successful! <a href='dashboard.php'>Go to Dashboard</a>";
        } else {
            echo "Invalid Email or Password";
        }
    } else {
        echo "Invalid Email or Password";
    }

    $stmt->close();
}
?>

<form method="POST" class="form">
    <h2>Welcome back,</h2>
    <img src="brian-logo.png" alt="logo" width="110px">
    <input type="email" name="email" id="email" placeholder="Email" required class="input">
    <input type="password" name="password" placeholder="password" required class="input">
    <button type="submit">Log in</button>
    <p>Don’t have an account, <br><a href="registration.php">create one</a></p>

</form>



<style>
    body {
        background: url("https://i.pinimg.com/1200x/33/01/a5/3301a53e04f42fba73e081fa6777aa63.jpg") no-repeat center/cover;
        width: 90vw;
        height: 100vh;
        overflow: hidden;
    }

    .form {
        display: flex;
        flex-direction: column;
        align-self: center;
        align-items: center;
        width: 350px;
        margin: 6rem auto;
        padding: 10px auto;
        background: rgba(175, 179, 190, 0.4);
        backdrop-filter: blur(50px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        box-shadow: -8px 0 32px rgba(0, 0, 0, 0.4);


    }



    .input {
        height: 35px;
        border-radius: 5px;
        padding: 5px;
        width: 300px;
        margin-bottom: 40px;
        border: 1px solid transparent;
    }

    button {
        background-color: #397FFA;
        width: 305px;
        height: 40px;
        border: 1px solid transparent;
        border-radius: 5px;
        margin: 0 auto 8px;
        font-weight: 600;
        font-size: 1.1rem;
    }

    h2 {
        margin-bottom: 1px;
        text-align: center;
        font-size: 2rem;
    }

    p {
        font-size: 0.9rem;
    }

    a {
        color: #1d0bc5;
        text-align: center;
        margin-left: 41px;
        font-size: 0.9rem;
    }

    img {
        margin-bottom: 5px;
    }
</style>