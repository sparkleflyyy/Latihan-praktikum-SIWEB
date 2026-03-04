<?php
session_start();

// Cek apakah form dikirim dengan method POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: ../login.php");
    exit;
}

// Ambil data dari form dengan pengecekan
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// Anggap ini validasi login sukses (Dummy Data)
if ($username == "rynn" && $password == "123") {

    // 1. Set Session (Wajib untuk login standar)
    $_SESSION['login'] = true;
    $_SESSION['user']  = $username;

    // 2. Cek apakah "Remember Me" dicentang?
    if (isset($_POST['remember'])) {
        // Buat Cookie: Namanya 'id_user', isinya username, expired 1 jam
        setcookie('id_user', $username, time() + 3600, "/");

        // Buat Cookie lain untuk memastikan keamanan ganda (opsional tapi bagus)
        // Menggunakan hash sederhana agar tidak terbaca langsung
        $key = hash('sha256', $username);
        setcookie('key', $key, time() + 3600, "/");
    }

    header("Location: ../index.php");
    exit;

} else {
    // Redirect kembali ke login dengan pesan error
    header("Location: ../login.php?error=1");
    exit;
}
?>