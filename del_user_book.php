<?php
require_once 'connection.php';

// get id
$user_id = $_POST['user_id'];

// stmt query
$stmt = $conn->prepare(
    "UPDATE tasks SET title = '', content = '' WHERE user_id = ?"
);

if (!$stmt->execute([$user_id])) {
    echo 'Query error: Error' . $stmt->error;
}

$conn->close();
header("location: book.php?id=" . urlencode($user_id));
exit();
?>