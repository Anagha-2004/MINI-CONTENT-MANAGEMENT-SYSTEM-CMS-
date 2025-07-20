<?php
require_once 'db.php';

// Fetch all posts
function getAllPosts() {
    global $db;
    return $db->posts->find([], ['sort' => ['created_at' => -1]]);
}

// Get a single post
function getPost($id) {
    global $db;
    return $db->posts->findOne(['_id' => new MongoDB\BSON\ObjectID($id)]);
}

// Create post
function createPost($title, $content) {
    global $db;
    $db->posts->insertOne([
        'title' => $title,
        'content' => $content,
        'created_at' => new MongoDB\BSON\UTCDateTime()
    ]);
}

// Update post
function updatePost($id, $title, $content) {
    global $db;
    $db->posts->updateOne(
        ['_id' => new MongoDB\BSON\ObjectID($id)],
        ['$set' => ['title' => $title, 'content' => $content]]
    );
}

// Delete post
function deletePost($id) {
    global $db;
    $db->posts->deleteOne(['_id' => new MongoDB\BSON\ObjectID($id)]);
}
?>
