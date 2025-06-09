<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "kishkinda_university";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO applications (full_name, email, phone, dob, course, address) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $_POST['full_name'], $_POST['email'], $_POST['phone'], $_POST['dob'], $_POST['course'], $_POST['address']);

if ($stmt->execute()) {
    echo "Application submitted successfully!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>