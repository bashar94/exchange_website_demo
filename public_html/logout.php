<?php

# Session start:
session_start();

unset($_SESSION['username']); #username key deleted
unset($_SESSION['fullname']);
unset($_SESSION['KCFINDER']);
header('Location: index.php?page=default'); #redirecting to Deafult page

?>
