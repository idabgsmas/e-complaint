<?php
session_start();
unset($_SESSION['nama']);
session_destroy();

header('location:login_pemin.php');
?>