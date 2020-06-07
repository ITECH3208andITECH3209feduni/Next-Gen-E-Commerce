<?php
session_start();

include 'Welcome.php';
session_destroy();
header("Location: Signup.php");
?>