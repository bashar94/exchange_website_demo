<?php

# Session start:
session_start();

unset($_SESSION['email']); // username key deleted


header('Location: login.php'); //redirecting to Login page

?>