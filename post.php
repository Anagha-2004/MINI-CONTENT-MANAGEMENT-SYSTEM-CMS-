<?php
require 'functions.php';
$post = getPost($_GET['id']);
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= htmlspecialchars($post['title']) ?></title>
</head>
<body>
    <h1><?= htmlspecialchars($post['title']) ?></h1>
    <p><?= nl2br(htmlspecialchars($post['content'])) ?></p>
    <a href="index.php">Back to All Posts</a>
</body>
</html>
