<?php
require 'db.php';
use MongoDB\BSON\ObjectId;

$id = $_GET['id'];
$db->posts->deleteOne(['_id' => new ObjectId($id)]);
header("Location: dashboard.php");
?>
