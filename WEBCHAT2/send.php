<?php
session_start();
include 'dbh.php';
$msg=$_POST['msg'];
$name=$_SESSION