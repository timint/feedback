<?php
session_start();
$_SESSION['data'] = $_POST['data'];
echo 1;
?>