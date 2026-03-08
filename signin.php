<?php

require_once("connection.php");

// get variabel
$username = $_POST["username"];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
$email = $_POST["email"];
$phone_numb = $_POST["phonenumb"];

// statement query
$stmt = $conn->prepare(
    "INSERT INTO login (username, password, email, phonenumb) VALUES(?,?,?,?)"
);

if (!$stmt->execute([$username, $password, $email, $phone_numb])) {
    $error = $stmt->error;
    die("Error query: " . $error );
}

// get user id
$id = $conn->insert_id;
header('location: book.php?id=' . urlencode($id));

// close
$conn = null;
exit();
?>