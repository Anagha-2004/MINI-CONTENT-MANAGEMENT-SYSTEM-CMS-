<?php
require 'functions.php';
$post = getPost($_GET['id']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    updatePost($_GET['id'], $_POST['title'], $_POST['content']);
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>
    <form method="POST">
        <input type="text" name="title" value="<?= htmlspecialchars($post['title']) ?>"><br>
        <textarea name="content"><?= htmlspecialchars($post['content']) ?></textarea><br>
        <button type="submit">Update</button>
    </form>
    <a href="index.php">Back</a>
</body>
</html>
