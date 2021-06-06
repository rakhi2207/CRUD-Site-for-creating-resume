<?php
session_start();
echo '<script>alert("You are successfully Logged out")</script>';
session_destroy();
header('location:home.php');
?>