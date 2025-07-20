
<?php
// Autoload Composer dependencies
require_once __DIR__ . '/vendor/autoload.php';

try {
    // Create MongoDB client instance
    $client = new MongoDB\Client("mongodb://localhost:27017");

    // Select the database (change the name if you want a different DB)
    $db = $client->php_mini_cms;

} catch (MongoDB\Driver\Exception\Exception $e) {
    // Catch connection errors
    die("Connection error: " . $e->getMessage());
}
