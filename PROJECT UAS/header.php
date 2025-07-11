<?php
// This will start the session and include db functions for every page
require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa; /* Light gray background for contrast */
            padding-bottom: 120px; /* Space for the bottom nav */
        }
        .header-custom {
            background-color: #ffffff; padding: 1rem 0;
            border-bottom: 1px solid #e0e0e0;
        }
        .search-bar {
            background-color: #f1f3f5; border: none; border-radius: 50px;
        }
        .header-icons .btn {
            background-color: #e6e9f2; border-radius: 50%;
            width: 45px; height: 45px;
            display: inline-flex; align-items: center; justify-content: center;
        }
        .footer-dark {
            background-color: #0d1117; color: #aab8c2; font-size: 0.9rem;
        }
        .footer-dark h5 {
            color: #ffffff; font-weight: 600; margin-bottom: 1rem;
        }
        .footer-dark a { color: #aab8c2; text-decoration: none; }
        .footer-dark a:hover { color: #ffffff; }
        .social-icons-footer a {
            color: white; width: 40px; height: 40px; border-radius: 50%;
            display: inline-flex; justify-content: center; align-items: center;
            margin: 0 0.5rem; font-size: 1.2rem;
        }
        .bottom-nav {
            position: fixed; bottom: 20px; left: 50%;
            transform: translateX(-50%); background-color: white;
            border-radius: 50px; padding: 0.5rem 1rem;
            box-shadow: 0 5px 20px rgba(0,0,0,0.15); z-index: 1030;
        }
        .bottom-nav .nav-link { color: #6c757d; }
        .bottom-nav .nav-link.active {
            background-color: #651fff; /* Changed to theme color */
            border-radius: 50%; color: #ffffff;
            width: 50px; height: 50px;
            display: flex; justify-content: center; align-items: center;
            margin-top: -25px; border: 5px solid white;
        }
        /* Custom styles for profile pages */
        .profile-form-card {
            background: #ffffff;
            border-radius: 1rem;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            border: none;
        }
        .profile-form-card .card-header {
            background-color: #651fff;
            color: white;
            font-weight: 600;
            border-top-left-radius: 1rem;
            border-top-right-radius: 1rem;
            padding: 1rem 1.5rem;
        }
        .btn-profile-save {
            background-color: #651fff;
            color: white;
            font-weight: 500;
            border-radius: 50px;
            padding: 0.75rem 1.5rem;
            transition: all 0.3s ease;
        }
        .btn-profile-save:hover {
            background-color: #561ad6;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.15);
        }
    </style>
</head>
<body>

    <header class="header-custom">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <a href="beranda.php" class="d-flex align-items-center text-dark text-decoration-none">
                    <img src="logo.png" alt="Elevate Socials Logo" style="height: 40px; margin-right: 10px;">
                    <span class="fs-5 fw-bold">Elevate Socials</span>
                </a>
                <div class="flex-grow-1 mx-5 d-none d-lg-block">
                    <input type="text" class="form-control search-bar" placeholder="Cari...">
                </div>
                <div class="d-flex align-items-center header-icons">
                    <a href="#" class="btn me-2"><i class="bi bi-bell-fill fs-5"></i></a>
                    <a href="akun.php" class="btn"><i class="bi bi-person-fill fs-5"></i></a>
                </div>
            </div>
        </div>
    </header>

    <main class="py-5">