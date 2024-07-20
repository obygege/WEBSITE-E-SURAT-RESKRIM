<?php
session_start();
include '../koneksi/koneksi.php';

// Mengambil data dari form login
$email = $_POST['email'];
$password = $_POST['password'];
$recaptchaResponse = $_POST['g-recaptcha-response'];

// Validasi reCAPTCHA
$secretKey = 'your-recaptcha-secret-key'; // Ganti dengan secret key Anda
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$recaptchaResponse");
$responseKeys = json_decode($response, true);

if (intval($responseKeys["success"]) !== 1) {
    echo "Verifikasi reCAPTCHA gagal. Silakan coba lagi.";
    exit;
}

// Mencegah SQL Injection
$email = $conn->real_escape_string($email);
$password = $conn->real_escape_string($password);

// Memeriksa apakah email terverifikasi
$result = $conn->query("SELECT * FROM users WHERE email='$email' AND verified=1");

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $_SESSION['user'] = $row['id'];
        header("Location: dashboard.php"); // Ganti dengan halaman dashboard Anda
    } else {
        echo "Password salah!";
    }
} else {
    echo "Email belum terverifikasi atau tidak terdaftar!";
}

$conn->close();
?>
