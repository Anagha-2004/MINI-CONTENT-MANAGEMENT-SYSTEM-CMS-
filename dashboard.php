<?php
require_once 'functions.php';
$posts = getAllPosts();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: background-color: rgba(139, 69, 19, 0.9);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image:url('https://c4.wallpaperflare.com/wallpaper/822/121/166/vintage-magnifier-watch-book-wallpaper-preview.jpg')
        }

        .container {
    background-color: #f5deb3; /* wheat / biscuit brown */
    padding: 40px;
    border-radius: 15px;
    max-width: 700px;
    width: 90%;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    text-align: center;
    color: #333; /* dark text for readability */
}
        h1 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        .message {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #c3e6cb;
            border-radius: 8px;
            text-align: center;
        }

        .post {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
            background-color: #f9f9f9;
        }

        .post h3 {
            margin: 0 0 10px;
            color: #222;
        }

        .post p {
            margin: 0 0 12px;
            color: #444;
        }

        .actions {
            text-align: right;
        }

        .actions a {
            color: #0066cc;
            text-decoration: none;
            margin-left: 10px;
        }

        .actions a:hover {
            text-decoration: underline;
        }

        .create-btn {
            display: block;
            margin: 0 auto 25px;
            padding: 10px 20px;
            background-color: #0066cc;
            color: white;
            border: none;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            width: fit-content;
        }

        .create-btn:hover {
            background-color: #0055aa;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📋 Dashboard</h1>

        <?php if (isset($_GET['success'])): ?>
            <div class="message">✅ Post added successfully!</div>
        <?php endif; ?>

        <a class="create-btn" href="create.php">+ Create New Post</a>

        <?php foreach ($posts as $post): ?>
            <div class="post">
                <h3><?php echo htmlspecialchars($post['title']); ?></h3>
                <p><?php echo nl2br(htmlspecialchars($post['content'])); ?></p>
                <div class="actions">
                    <a href="edit.php?id=<?php echo $post['_id']; ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $post['_id']; ?>">Delete</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
