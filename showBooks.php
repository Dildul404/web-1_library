<?php
require_once "connection.php";

// Get id user
$user_id = $_POST['user_id'];

// get title $ content from db
$stmt = $conn->prepare(
    'SELECT title, content FROM tasks WHERE user_id = ?'
);

if (!$stmt->execute([$user_id])) {
    echo "mysql error: can't get title and content" . $stmt->error;
} else {
    $result = $stmt->get_result();
    $book = $result->fetch_assoc();

    // Convert to json 
    $json = [];

    if ($book) {
        $json = [
            'title' => $book['title'],
            'content' => $book['content']
        ];
    } else {
        $json = [
            'title' => '',
            'content' => ''
        ];
    }

    // Send to js
    header("Content-Type: application/json");
    echo json_encode($json);
}

$conn->close();
exit();
?>