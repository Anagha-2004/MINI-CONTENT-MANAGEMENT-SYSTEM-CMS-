<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header("Location: dashboard.php");
exit;


require_once 'functions.php';

$posts = $db->posts->find();
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Mini CMS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>All Posts</h1>
    <a href="create.php">+ Create Post</a>
    <ul>
        <?php foreach ($posts as $post): ?>
            <li>
                <strong><?php echo $post['title']; ?></strong><br>
                <?php echo $post['content']; ?><br>
                <a href="edit.php?id=<?php echo $post['_id']; ?>">Edit</a> |
                <a href="delete.php?id=<?php echo $post['_id']; ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
