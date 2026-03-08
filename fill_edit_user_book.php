<?php
require_once("connection.php");

// Get values
// get id from GET
$user_id = $_GET["id"];
$title = $_POST["title"];
$content = $_POST["content"];

// statement query
// ADD & UPDATE
// checking if there are row already exist
$stmt_check = $conn->prepare(
    "SELECT * FROM tasks WHERE user_id = ?"
);
$stmt_add = $conn->prepare(
    "INSERT INTO tasks (title, content) VALUES(?,?)"
);
$stmt_update = $conn->prepare(
    "ALTER TABLE tasks SET title = ? AND content = ? WHERE user_id = ?"
);

$stmt_check->execute($user_id);
$res = $stmt_check->get_result();
$id = $res->fetch_assoc();

if ($res->num_rows > 0) {

}


?>