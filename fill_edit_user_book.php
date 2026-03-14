<?php
require_once("connection.php");

// Get values
// get id from GET
$user_id = $_POST["user_id"];
$title = $_POST["title"];
$content = $_POST["content"];

// statement query
// ADD & UPDATE

$stmt = $conn->prepare(
    "INSERT INTO tasks (user_id, title, content) VALUES(?,?,?) ON DUPLICATE KEY UPDATE title = VALUES(title), content = VALUES(content)"
);

// check if error
if(!$stmt->execute([$user_id, $title, $content])) {
    die("Query  error :" . $stmt->error);
}

// 
$conn->close();
header("location: book.php?id=" . urlencode($user_id));
exit();
?>