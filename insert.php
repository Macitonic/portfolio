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
        echo"NEW client Message received</br>";
        echo"<a href='view.php'>View received messages</a>";
    }else{
        echo"Error:".$conn->error;
    }
}
$conn->close();
?>