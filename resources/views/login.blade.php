<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sewa PlayStation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .login-container {
            width: 100%;
            max-width: 420px;
            padding: 20px;
        }

        .login-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
        }

        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-header .icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #00AC9F 0%, #007b72 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            box-shadow: 0 10px 30px rgba(0, 172, 159, 0.3);
        }

        .login-header .icon i {
            font-size: 36px;
            color: white;
        }

        .login-header h2 {
            color: #1a1a2e;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .login-header p {
            color: #6c757d;
            font-size: 14px;
        }

        .form-floating {
            margin-bottom: 20px;
        }

        .form-floating .form-control {
            border: 2px solid #e9ecef;
            border-radius: 12px;
            padding: 20px 15px 10px;
            height: 60px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .form-floating .form-control:focus {
            border-color: #00AC9F;
            box-shadow: 0 0 0 4px rgba(0, 172, 159, 0.1);
        }

        .form-floating label {
            padding: 20px 15px;
            color: #6c757d;
        }

        .form-check {
            margin-bottom: 25px;
        }

        .form-check-input:checked {
            background-color: #00AC9F;
            border-color: #00AC9F;
        }

        .form-check-label {
            color: #495057;
            font-size: 14px;
        }

        .btn-login {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #00AC9F 0%, #007b72 100%);
            border: none;
            border-radius: 12px;
            color: white;
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            margin-bottom: 15px;
        }

        .btn-login:hover {
            background: linear-gradient(135deg, #007b72 0%, #005f59 100%);
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(0, 172, 159, 0.3);
        }

        .btn-back {
            width: 100%;
            padding: 15px;
            background: transparent;
            border: 2px solid #6c757d;
            border-radius: 12px;
            color: #6c757d;
            font-size: 16px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
            display: block;
            text-align: center;
        }

        .btn-back:hover {
            background: #6c757d;
            color: white;
            transform: translateY(-2px);
        }

        .alert {
            border-radius: 12px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .input-icon {
            position: relative;
        }

        .input-icon i {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #adb5bd;
        }

        @media (max-width: 480px) {
            .login-card {
                padding: 30px 25px;
            }
            
            .login-header .icon {
                width: 60px;
                height: 60px;
            }
            
            .login-header .icon i {
                font-size: 28px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <div class="icon">
                    <i class="fas fa-gamepad"></i>
                </div>
                <h2>Selamat Datang</h2>
                <p>Masuk ke akun Sewa PlayStation</p>
            </div>

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fas fa-exclamation-circle me-2"></i>{{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <form action="{{ route('login.proses') }}" method="POST">
                @csrf
                <div class="form-floating">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                    <label for="username"><i class="fas fa-user me-2"></i>Username</label>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    <label for="password"><i class="fas fa-lock me-2"></i>Password</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember" name="remember">
                    <label class="form-check-label" for="remember">
                        <i class="fas fa-check-circle me-1"></i>Ingat saya
                    </label>
                </div>

                <button type="submit" class="btn btn-login">
                    <i class="fas fa-sign-in-alt me-2"></i>Login
                </button>

                <a href="{{ route('home') }}" class="btn-back">
                    <i class="fas fa-arrow-left me-2"></i>Kembali ke Beranda
                </a>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>