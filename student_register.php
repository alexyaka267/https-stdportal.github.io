<?php
$conn = new mysqli("localhost","root","","student_db");

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO students_login(username,password) VALUES(?,?)");
$stmt->bind_param("ss",$username,$password);
$stmt->execute();

echo "Account created successfully";
?>
