<?php

session_start();
unset($_SESSION['cart']); // Unset cart session
unset($_SESSION['wishlist']); // Unset wishlist session
session_destroy(); // Destroy session
header("Location: signin.php"); // Redirect to login page
exit();
?>
?>