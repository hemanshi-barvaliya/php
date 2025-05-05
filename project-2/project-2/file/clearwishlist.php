<?php 
session_start();
unset($_SESSION['wishlist']); // Clear the session variable
header('Location: wishlist.php'); // Redirect to the wishlist page
?>
