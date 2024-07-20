<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login E-Surat</title>
    <link rel="stylesheet" href="user/assets/CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Tambahkan reCAPTCHA site key -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <div class="login-container">
        <div class="logo-container">
            <img src="user/assets/IMG/RESKRIM.png" alt="Logo" class="logo">
        </div>
        <h2>Form Login</h2>
        <form action="user/panel_user/proses_login.php" method="POST">
            <div class="container">
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Email" name="email" required>

                <label for="password"><b>Password</b></label>
                <div class="password-container">
                    <input type="password" placeholder="Enter Password" name="password" id="password" required>
                    <span class="toggle-password" onclick="togglePasswordVisibility()">
                        <i class="fas fa-eye" id="togglePasswordIcon"></i>
                    </span>
                </div>

                <div class="g-recaptcha" data-sitekey="your-recaptcha-site-key"></div>
                <button class="login" type="submit">LOGIN</button>
                <div class="button-akun">
                    <a href="daftar.php">Buat Akun</a>
                    <a href="">Lupa Password</a>
                </div>
            </div>
        </form>
    </div>
    <script src="user/assets/JS/script.js"></script>
</body>
</html>
