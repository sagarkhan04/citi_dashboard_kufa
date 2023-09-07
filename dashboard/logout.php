<?php 

// jodi logout page a click kori tahole sob page ke over come kore login.php page niye asbe

session_start();
session_unset();

header('location: ../login.php');

?>