<?php
include_once 'db.php';
session_start();
session_destroy();
header('location:login.php');

?>