<?php
include 'config.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO info(name,email,message) VALUES (
        '$name','$email', '$message'
    )";

    if($conn->query($sql)== TRUE){
        echo"Your Message has been received, we will get back to you...</br>";
    }else{
        echo"Error:".$conn->error;
    }
}
$conn->close();
?>