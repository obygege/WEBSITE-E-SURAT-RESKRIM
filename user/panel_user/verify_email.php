<?php
include '../koneksi/koneksi.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];
    
    // Memeriksa token di database
    $result = $conn->query("SELECT * FROM users WHERE token='$token'");
    
    if ($result->num_rows > 0) {
        $conn->query("UPDATE users SET verified=1 WHERE token='$token'");
        echo "Email Anda telah diverifikasi!";
    } else {
        echo "Token tidak valid!";
    }
} else {
    echo "Token tidak ditemukan!";
}

$conn->close();
?>
