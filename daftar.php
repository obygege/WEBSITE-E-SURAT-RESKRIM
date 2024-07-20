<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi E-Surat</title>
    <link rel="stylesheet" href="user/assets/CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="register-container">
        <div class="logo-container">
            <img src="user/assets/IMG/RESKRIM.png" alt="Logo" class="logo">
        </div>
        <h2>Form Registrasi</h2>
        <form action="user/panel_user/proses_daftar.php" method="POST">
            <div class="container">
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Email" name="email" required>

                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <button class="register" type="submit">Daftar</button>
                <!-- Gantilah email@example.com dengan email yang sesuai jika sudah terdaftar -->
                <a href="user/panel_user/send_verification.php?email=email@example.com" class="verify-email">Verifikasi Email</a>
            </div>
        </form>
    </div>
</body>
</html>
