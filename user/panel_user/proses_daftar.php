<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Sertakan file koneksi database
include '../koneksi/koneksi.php'; // Sesuaikan path dengan lokasi file koneksi Anda

require '../../vendor/autoload.php';

// Ambil data dari form
$email = $_POST['email'];
$password = $_POST['password'];

// Hash password dan buat token verifikasi
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);
$token = bin2hex(random_bytes(16)); // Token verifikasi

// Simpan data ke database
$query = "INSERT INTO users (email, password, token, verified) VALUES ('$email', '$hashedPassword', '$token', 0)";

if ($conn->query($query) === TRUE) {
    // Kirim email verifikasi
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'robyakshay144@gmail.com';
        $mail->Password = 'Rusdianah123';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('robyakshay144@gmail.com', 'oby');
        $mail->addAddress($email);

        $mail->isHTML(true);
        $mail->Subject = 'Verifikasi Email';
        $mail->Body    = 'Klik link berikut untuk verifikasi email kamu: <a href="http://resmuba.com/user/panel_user/verify_email.php?token=' . $token . '">Verifikasi Email</a>';

        $mail->send();
        echo 'Email verifikasi telah dikirim!';
    } catch (Exception $e) {
        echo "Gagal mengirim email. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Gagal mendaftar: " . $conn->error;
}

$conn->close();
?>
