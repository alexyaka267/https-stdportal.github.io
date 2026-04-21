<?php
session_start();
$conn = new mysqli("localhost","root","","student_db");

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM students_login WHERE username=?");
$stmt->bind_param("s",$username);
$stmt->execute();
$res = $stmt->get_result();

if($res->num_rows>0){
$row=$res->fetch_assoc();
if(password_verify($password,$row['password'])){
$_SESSION['student']=$username;
header("Location: student_dashboard.php");
exit();
}else{echo "Wrong password";}
}else{echo "User not found";}
?>
