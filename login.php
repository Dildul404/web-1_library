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
        echo "<br> Login berhasil";
        echo "<br> email :" . $user['email'];
    } else {
        echo "Password salah";
    }

} else {
    echo "Username tidak ditemukan";
}

// close
$conn = null;

header("location: book.php");
?>