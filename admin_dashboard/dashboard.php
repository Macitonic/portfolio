<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location: login.php");
    exit();
}
echo "Welcome, ".$_SESSION["username"]."</br></br><a href='view.php'>View Client List</a></br></br><a href='logout.php'>Logout</a>";
?>