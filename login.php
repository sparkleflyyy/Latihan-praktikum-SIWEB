<?php
session_start();

if(isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CIBADUYUT SHOES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <!-- LOGIN FORM -->
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <h3>Selamat Datang</h3>
                <p>Silakan login untuk melanjutkan</p>
            </div>
            <div class="login-body">
                <form method="POST" action="controller/proses_login.php">
                    <?php if(isset($_GET['error'])): ?>
                    <div class="alert alert-danger">
                        Username atau password salah!
                    </div>
                    <?php endif; ?>

                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control"
                            placeholder="Masukkan username"
                            value="<?php echo $_COOKIE['id_user'] ?? ''; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control"
                            placeholder="Masukkan password" required>
                    </div>

                    <div class="form-check mb-4">
                        <input type="checkbox" name="remember" class="form-check-input" id="remember">
                        <label class="form-check-label" for="remember">Remember Me</label>
                    </div>

                    <button type="submit" class="btn btn-warning w-100 mb-3">
                        Login
                    </button>

                    <div class="text-center">
                        <a href="index.php" class="text-decoration-none">Kembali ke Beranda</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>