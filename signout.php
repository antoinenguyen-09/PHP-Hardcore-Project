<?php
session_start();
session_destroy();
// Redirect them to the login page
header("Location: login.php");
?>