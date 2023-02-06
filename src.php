<?php
require "dst.php";

$fname =  $_POST['fname'] ?? isset($_POST['fname']);
$lname = $_POST['lname'] ?? isset($_POST['lname']);
$email = $_POST['email'] ?? isset($_POST['email']);
$phone = $_POST['phone'] ?? isset($_POST['phone']);
send($fname,$lname,$email,$phone);