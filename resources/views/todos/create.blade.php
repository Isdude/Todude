<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Task</title>
    <style>
     body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            background: #f6eee6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #fffdf7;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #333;
        }

        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 0.75rem;
            margin: 0.5rem 0 1rem;
            border: 1px solid #ccc;
            border-radius: 8px;
            transition: border-color 0.3s;
            font-size: 1rem;
        }

        input:focus,
        select:focus {
            border-color: #620c0c;
            outline: none;
        }

        button {
            width: 100%;
            background-color: #620c0c;
            color: white;
            padding: 0.75rem;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #aa0f0f;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 1rem;
            color: #007BFF;
            text-decoration: none;
            transition: color 0.3s;
        }

        a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add New Task</h1>
        <form action="{{ route('todos.store') }}" method="POST">
            @csrf
            <input type="text" name="task" placeholder="Task Name" required>
            <input type="date" name="date">
            <select name="priority">
                <option value="" disabled selected>Select Priority</option>
                <option value="1">Priority 1</option>
                <option value="2">Priority 2</option>
                <option value="3">Priority 3</option>
            </select>
            <button type="submit">Save</button>
        </form>
        <a href="{{ route('todos.index') }}">← Back to List</a>
    </div>
</body>
</html>
