<?php
require_once 'db.php';


function getAllPosts() {
    global $db;
    return $db->posts->find([], ['sort' => ['created_at' => -1]]);
}

function getPost($id) {
    global $db;
    return $db->posts->findOne(['_id' => new MongoDB\BSON\ObjectID($id)]);
}


function createPost($title, $content) {
    global $db;
    $db->posts->insertOne([
        'title' => $title,
        'content' => $content,
        'created_at' => new MongoDB\BSON\UTCDateTime()
    ]);
}


function updatePost($id, $title, $content) {
    global $db;
    $db->posts->updateOne(
        ['_id' => new MongoDB\BSON\ObjectID($id)],
        ['$set' => ['title' => $title, 'content' => $content]]
    );
}


function deletePost($id) {
    global $db;
    $db->posts->deleteOne(['_id' => new MongoDB\BSON\ObjectID($id)]);
}
?>
