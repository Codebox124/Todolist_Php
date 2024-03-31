<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "todolist";


$conn = mysqli_connect($servername, $username, $password, $database);

// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
function getTask($conn)
{
    $query = "SELECT * FROM task";
    $result = mysqli_query($conn, $query);
    $task = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $task[] = $row;
    }
    return $task;
}
