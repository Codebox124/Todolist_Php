<?php
include 'db_connection.php';

$sql = "SELECT * FROM todos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<h2 class="text-xl font-bold mb-4">Records</h2>';
    echo '<table class="w-full border-collapse border ">';
    echo '<tr class="">';
    echo '<th class="border border-gray-300 px-4 py-2">ID</th>';
    echo '<th class="border border-gray-300 px-4 py-2">Name</th>';
    echo '<th class="border border-gray-300 px-4 py-2">Description</th>';
    echo '<th class="border border-gray-300 px-4 py-2">Actions</th>';
    echo '</tr>';




    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td class="border border-gray-300 px-4 py-2">' . $row['id'] . '</td>';
        echo '<td class="border border-gray-300 px-4 py-2">' . $row['title'] . '</td>';
        echo '<td class="border border-gray-300 px-4 py-2">' . $row['description'] . '</td>';
        echo '<td class="border border-gray-300 px-4 py-2">';
        echo '<a href="edit.php?id=' . $row['id'] . '" class="text-blue-500 hover:underline mr-2">Edit</a>';
        echo '<a href="delete.php?id=' . $row['id'] . '" class="text-red-500 hover:underline">Delete</a>';
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo '<p>No records found.</p>';
}
$conn->close();
