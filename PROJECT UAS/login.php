<?php
session_start();

require 'functions.php';

if(isset($_SESSION['login'])){
    header("Location: beranda.php");
    exit; 
}
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $stmt = mysqli_prepare($conn, "SELECT email, password FROM register WHERE email = ?");
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            $_SESSION["login"] = true ; 
            header("Location: loading.php");
            exit;
        } else {
            $error = "Password salah.";
        }
    } else {
        $error = "Email atau No HP belum terdaftar.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Elevate Socials</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            background-color: #e9f2f9; /* Latar belakang abu-abu kebiruan */
        }
        .login-card {
            border: none;
            border-radius: 1.5rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        .login-card .card-body {
            padding: 2.5rem;
        }
        .logo-container {
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .logo-container .bi-rocket-takeoff-fill {
            font-size: 3rem;
            color: #212529;
        }
        .logo-container h2 {
            font-weight: 700;
            margin-top: 0.5rem;
            letter-spacing: 1px;
        }
        .form-control, .input-group-text {
            background-color: #f1f3f5;
            border: none;
        }
        .form-control {
            height: 50px;
            padding-left: 1rem;
        }
        .form-control:focus {
            background-color: #f1f3f5;
            box-shadow: none;
        }
        .input-group-text {
            padding: 0 1rem;
        }
        .dark-box {
            background-color: #212529;
            width: 50px;
            border-top-right-radius: 0.375rem;
            border-bottom-right-radius: 0.375rem;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            cursor: pointer;
        }
        .btn-login {
            background-color: #1a1e34;
            border: none;
            border-radius: 50px; /* Membuat tombol menjadi lonjong/pil */
            padding: 0.8rem;
            font-weight: 600;
            letter-spacing: 0.5px;
        }
        .btn-login:hover {
            background-color: #2a2e44;
        }
        .form-links a {
            font-size: 0.9rem;
            color: #6c757d;
            text-decoration: none;
        }
        .form-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="row min-vh-100 justify-content-center align-items-center">
            <div class="col-md-5 col-lg-4">
                <div class="card login-card">
                    <div class="card-body">

                        <div class="logo-container">
                            <i class="bi bi-rocket-takeoff-fill"></i>
                            <h2>Elevate Socials</h2>
                            <p class="text-muted small">Yukk naikin follower dan viewers mu!</p>
                        </div>

                        <?php if(isset($error)): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $error; ?>
                            </div>
                        <?php endif; ?>

                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" novalidate>
                            <div class="input-group mb-3">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name="username" placeholder="Username" required>
                                <span class="dark-box"><i class="bi bi-person fs-5"></i></span>
                            </div>

                            <div class="input-group mb-4">
                                <span class="input-group-text"></span>
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                                <span class="dark-box"><i class="bi bi-briefcase fs-5"></i></span>
                            </div>
                            
                            <div class="d-flex justify-content-between align-items-center mb-4 form-links">
                                <a href="#">Sing up</a> <a href="register.php">Register</a>
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-primary btn-login text-white" type="submit"name="login">LOGIN</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>