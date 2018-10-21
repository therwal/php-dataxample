<?php
include 'config.php';

header("Content-Type: application/json");

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_errno) {
    echo "connection error";
    exit;
}

$sql = "SELECT articles.title, articles.content, articles.publish_date, authors.first_name, authors.last_name "
    . "FROM articles INNER JOIN authors ON articles.author_id=authors.author_id";

if (!$result = $mysqli->query($sql)) {
    echo "query error";
    exit;
}

$arr = array();
while ($row =mysqli_fetch_assoc($result)) {
    $arr[] = $row;
}

echo json_encode($arr);

$result->free();
$mysqli->close();

