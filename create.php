<?php
require_once 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    createPost($_POST['title'], $_POST['content']);
    header("Location: dashboard.php?success=1");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
    <style>
        body {
            background-image: url('background.jpg'); /* Replace with your image */
            background-size: cover;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-box {
            background-color: rgba(255,255,255,0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.3);
            width: 400px;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-box">
        <h2>Create Post</h2>
        <form method="POST">
            <input type="text" name="title" placeholder="Title" required><br>
            <textarea name="content" placeholder="Content" rows="5" required></textarea><br>
            <input type="submit" value="Create">
        </form>
    </div>
</body>
</html>
