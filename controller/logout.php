<?php
session_start();

// Hapus semua data session
$_SESSION = array();

// Hapus cookie session jika ada
if(ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Hapus cookie remember me jika ada
if(isset($_COOKIE['id_user'])) {
    setcookie('id_user', '', time() - 3600, '/');
}
if(isset($_COOKIE['key'])) {
    setcookie('key', '', time() - 3600, '/');
}

// Hancurkan session
session_destroy();

// Redirect ke halaman utama
header("Location: ../index.php");
exit();
?>