<?php
session_start();
session_destroy();
$url = "index.php";
echo "<script>";
echo "window.location.href='$url'";
echo "</script>";
?>