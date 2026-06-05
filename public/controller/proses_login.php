<?php
session_start();

$valid_users = [
    'admin' => 'admin123',
    'user' => 'user123',
    'iqbal' => 'iqbal123'
];

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $remember = isset($_POST['remember']) ? true : false;

    if(empty($username) || empty($password)) {
        $_SESSION['login_error'] = 'Username dan password wajib diisi!';
        header("Location: ../login.php");
        exit();
    }

    if(array_key_exists($username, $valid_users) && $valid_users[$username] === $password) {

        $_SESSION['username'] = $username;
        $_SESSION['login_time'] = time();

        if($remember) {
            $cookie_expiry = time() + (30 * 24 * 60 * 60); // 30 hari
            setcookie('remember_user', $username, $cookie_expiry, '/');
        }

        header("Location: ../index.php");
        exit();
        
    } else {
        $_SESSION['login_error'] = 'Username atau password salah!';
        header("Location: ../login.php");
        exit();
    }
    
} else {
    header("Location: ../login.php");
    exit();
}
?>
