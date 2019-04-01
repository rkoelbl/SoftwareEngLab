<?php
$username = $_GET['username'];
$saltFront = "sdgwergwesg";
$saltBack = "12454125";
$saltedPassword = password_hash($saltFront + $_GET['password'] + $saltBack);
?>
