<?php
// Sertakan file functions.php untuk mengakses fungsinya
require 'functions.php';
if(isset($_POST['submit'])){
    if(regristasi($_POST) > 0){
        echo "<script>
        alert ('Nama anda telah ditambahkan');
        window.location.href = 'login.php'; 
        </script>";
    }
    else {
        echo "Gagal Daftar";
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Elevate Socials</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            background-color: #e9f2f9;
        }
        .register-card {
            border: none;
            border-radius: 1.5rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            position: relative;
            margin-top: 60px; /* Memberi ruang untuk logo di atas */
        }
        .register-card .card-body {
            padding: 2.5rem;
        }
        .logo-container {
            position: absolute;
            top: -60px; /* Mengatur posisi logo di atas kartu */
            left: 50%;
            transform: translateX(-50%);
            background-color: #e0e0e0;
            padding: 1.5rem 2rem;
            border-radius: 1.5rem;
            text-align: center;
            width: 80%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        .logo-container img {
            width: 50px; /* Sesuaikan ukuran logo */
            margin-bottom: 0.5rem;
        }
        .logo-container h2 {
            font-weight: 700;
            font-size: 1.5rem;
            margin: 0;
        }
        .logo-container p {
            font-size: 0.9rem;
            color: #6c757d;
            margin-top: 0.25rem;
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
        .btn-register {
            background-color: #1a1e34;
            border: none;
            border-radius: 50px;
            padding: 0.8rem;
            font-weight: 600;
            letter-spacing: 0.5px;
        }
        .btn-register:hover {
            background-color: #2a2e44;
        }
        .back-link {
            font-size: 0.9rem;
            color: #6c757d;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
        .card-body-content {
            margin-top: 80px; /* Memberi ruang di bawah logo */
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row min-vh-100 justify-content-center align-items-center">
            <div class="col-md-5 col-lg-4">
                <div class="card register-card">
                    <div class="logo-container">
                       <i class="bi bi-rocket-takeoff-fill"></i>
                        <h2>Elevate Socials</h2>
                        <p>Viral dan Hype</p>
                    </div>
                    <div class="card-body">
                        <div class="card-body-content">
                            
                          <?php if(!empty($message)): ?>
                                <div class="alert alert-<?php echo $message_type; ?>" role="alert">
                                    <?php echo htmlspecialchars($message); ?>
                                </div>
                            <?php endif; ?> 

                            <form action="" method="POST" novalidate>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"></span>
                                    <input type="email" class="form-control" name="email" placeholder="@gmail.com atau nomor hp" required>
                                    <span class="dark-box"><i class="bi bi-person fs-5"></i></span>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text"></span>
                                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                                    <span class="dark-box"><i class="bi bi-briefcase fs-5"></i></span>
                                </div>
                                
                                <div class="input-group mb-4">
                                    <span class="input-group-text"></span>
                                    <input type="password" class="form-control" name="confirm_password" placeholder="Konfirmasi Password" required>
                                    <span class="dark-box"><i class="bi bi-key fs-5"></i></span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <a href="login.php" class="back-link"><i class="bi bi-arrow-left"></i> Back</a>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-register text-white" type="submit" name="submit">REGISTER</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>