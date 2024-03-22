<?php
require_once __DIR__ . '/vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");
$database = $client->selectDatabase("user_profile");
$collection = $database->selectCollection("profiles");

$username = $_POST['username'];
$dob = $_POST['dob'];
$number = $_POST['number'];

$document = [
    'username' => $username,
    'dob' => $dob,
    'number' => $number
];

$result = $collection->insertOne($document);

if ($result->getInsertedCount() > 0) {
    echo "Profile stored successfully!";
} else {
    echo "Error storing profile.";
}
?>
       

