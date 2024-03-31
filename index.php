<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .container {
            background-color: black;
            color: white;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="max-w-lg container  mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">To-Do List</h1>
        <form action="add_task.php" method="post" class="mb-4">
            <input name="title" id="todo-input" type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md mb-4 text-black" placeholder="Add a new task..." required>
            <input name="description" id="todo-input" type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md mb-4 text-black" placeholder="Description" required>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Add Task</button>
        </form>
        <h2>Tasks:</h2>
        <?php include 'todos.php' ?>
    </div>
</body>

</html>