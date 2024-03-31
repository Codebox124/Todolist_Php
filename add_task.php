<?php
include 'db_connection.php';
$title = $_POST['title'];
$description = $_POST['description'];

$sql = "INSERT INTO todos (title, description) VALUES ('$title', '$description')";

if ($conn->query($sql) == TRUE) {
    header("Location: index.php?success==Todo added successfully");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
