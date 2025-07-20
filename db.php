
<?php

require_once __DIR__ . '/vendor/autoload.php';

try {
    
    $client = new MongoDB\Client("mongodb://localhost:27017");

    
    $db = $client->php_mini_cms;

} catch (MongoDB\Driver\Exception\Exception $e) {
    
    die("Connection error: " . $e->getMessage());
}
