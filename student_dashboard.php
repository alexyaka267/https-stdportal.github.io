<?php
session_start();
$conn = new mysqli("localhost","root","","student_db");

if(!isset($_SESSION['student'])){
header("Location: welcome.html");
exit();
}

$username=$_SESSION['student'];

$student=$conn->query("SELECT * FROM students WHERE username='$username'")->fetch_assoc();
?>

<h2>Dashboard</h2>
<p>Name: <?php echo $student['fullname'] ?? ''; ?></p>
<p>District: <?php echo $student['district'] ?? ''; ?></p>
<p>Course: <?php echo $student['course'] ?? ''; ?></p>

<a href="download_admission.php">Download Admission Letter</a>
<br><a href="logout.php">Logout</a>
