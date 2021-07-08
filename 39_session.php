<?php
echo "Welcome to session in pHp <br>";

//What is session
// Used to manage information across difference pages

session_start();

$_SESSION['username'] = "Sagar";
$_SESSION['category'] = "Books";
echo "we have saved your session";




?>