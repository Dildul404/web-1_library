<?php

require_once('connection.php');

$username = $_POST["username"];
$password = $_POST["password"];

$stmt = $conn->prepare(
    "SELECT * FROM login WHERE username = ?"
);
$stmt->bind_param("s", $username);
$stmt->execute();

$res = $stmt->get_result();

if ($res->num_rows > 0) {

    $user = $res->fetch_assoc();

    if (password_verify($password, $user['password'])) {
        header("location: book.php?id=" . urlencode($user['user_id']));
    } else {
        echo "Password salah";
    }

} else {
    echo "Username tidak ditemukan";
}

// close
$conn = null;
exit();
?>