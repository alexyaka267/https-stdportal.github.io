<?php
session_start();
$conn = new mysqli("localhost","root","","student_db");

if(!isset($_SESSION['student'])) die("Login required");

$username = $_SESSION['student'];

$stmt = $conn->prepare("INSERT INTO students(fullname,district,course,nin,username) VALUES(?,?,?,?,?)");
$stmt->bind_param("sssss",
$_POST['fullname'],
$_POST['district'],
$_POST['course'],
$_POST['nin'],
$username
);
$stmt->execute();

echo "Registered successfully";
?>
