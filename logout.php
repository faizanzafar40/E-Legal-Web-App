<?php
include 'connectdb.php';
include 'function.php';
session_destroy();
header('location: index.php');

?>