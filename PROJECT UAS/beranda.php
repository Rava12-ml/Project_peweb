<?php
require_once 'functions.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Elevate Socials</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffffff;
        }

        /* SECTION 1: HEADER & HERO */
        .header-custom {
            background-color: #ffffff;
            padding: 1rem 0;
            border-bottom: 1px solid #e0e0e0;
        }
        .search-bar {
            background-color: #f1f3f5;
            border: none;
            border-radius: 50px;
        }
        .header-icons .btn {
            background-color: #e6e9f2;
            border-radius: 50%;
            width: 45px;
            height: 45px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        .filter-tags .btn {
            border-radius: 50px;
            padding: 0.3rem 1.2rem;
            font-size: 0.9rem;
            background-color: #f1f3f5;
            border: none;
            color: #6c757d;
        }
        .filter-tags .btn.active {
            background-color: #651fff;
            color: #ffffff;
        }
        .hero-carousel {
            background-color: #c4b5fd;
            color: #ffffff;
            border-radius: 2rem;
        }
        .hero-carousel h1 {
            font-weight: 700;
            font-size: 3.5rem;
        }
        .hero-carousel p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: auto;
        }

        /* SECTION 2: MAIN CONTENT */
        .content-section {
            padding: 4rem 0;
        }
        .social-grid {
            background-color: #0d1117;
            padding: 2rem;
            border-radius: 1.5rem;
        }
        .social-card {
            background-color: #ffffff;
            border-radius: 1rem;
            height: 120px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 3rem;
            cursor: pointer;
            transition: transform 0.2s;
        }
        .social-card:hover {
            transform: translateY(-5px);
        }
        .promo-card {
            padding: 2rem;
        }
        .promo-card h2 {
            font-weight: 700;
        }
        .promo-card .btn {
            background-color: #e0e0e0;
            border: none;
            border-radius: 50px;
            color: #000;
        }

        /* SECTION 3: FOOTER */
        .footer-dark {
            background-color: #0d1117;
            color: #aab8c2;
            font-size: 0.9rem;
        }
        .footer-dark h5 {
            color: #ffffff;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        .footer-dark a {
            color: #aab8c2;
            text-decoration: none;
        }
        .footer-dark a:hover {
            color: #ffffff;
        }
        .social-icons-footer a {
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 0.5rem;
            font-size: 1.2rem;
        }
        .bottom-nav {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background-color: white;
            border-radius: 50px;
            padding: 0.5rem 1rem;
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
            z-index: 1030;
        }
        .bottom-nav .nav-link {
            color: #6c757d;
        }
        .bottom-nav .nav-link.active {
            background-color: #ffc107;
            border-radius: 50%;
            color: #0d1117;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: -25px;
            border: 5px solid white;
        }

    </style>
</head>
<body>

    <header class="header-custom">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <a href="#" class="d-flex align-items-center text-dark text-decoration-none">
                    <img src="logo.png" alt="Elevate Socials Logo" style="height: 40px; margin-right: 10px;">
                    <span class="fs-5 fw-bold">Elevate Socials</span>
                </a>
                
                <div class="flex-grow-1 mx-5 d-none d-lg-block">
                    <input type="text" class="form-control search-bar" placeholder="Cari...">
                </div>

                <div class="d-flex align-items-center header-icons">
                    <a href="#" class="btn me-2"><i class="bi bi-bell-fill fs-5"></i></a>
                    <a href="profile2.php" class="btn"><i class="bi bi-person-fill fs-5"></i></a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container my-4">
            <div class="d-flex gap-2 filter-tags mb-4">
                <button class="btn active">Follower</button>
                <button class="btn">Viewers</button>
                <button class="btn">Likes</button>
                <button class="btn">Comment</button>
                <button class="btn">Mitra</button>
                <button class="btn">Klipper Content</button>
                <button class="btn">Akun Premium</button>
            </div>
            
            <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-block w-100 hero-carousel text-center p-5">
                            <h1>Tingkatkan Followermu</h1>
                            <p class="mt-3">"Tembus Sampe 10.000 Follower Dalam Perhari. Jadi Tunggu Apalagi Segera Beli Langgana Kami"</p>
                        </div>
                    </div>
                    </div>
                </div>
        </div>

        <section class="content-section">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-5">
                        <div class="social-grid">
                            <div class="row g-3">
                                <div class="col-6"><div class="social-card"><i class="bi bi-tiktok" style="color:#ff0050;"></i></div></div>
                                <div class="col-6"><div class="social-card"><i class="bi bi-youtube" style="color:#FF0000;"></i></div></div>
                                <div class="col-6"><div class="social-card"><i class="bi bi-instagram"></i></div></div>
                                <div class="col-6"><div class="social-card"><i class="bi bi-facebook" style="color:#1877F2;"></i></div></div>
                                <div class="col-6"><div class="social-card"><i class="bi bi-twitter-x"></i></div></div>
                                <div class="col-6"><div class="social-card"><i class="bi bi-at"></i></div></div>
                            </div>
                            <div class="d-grid mt-3">
                                <button class="btn btn-light">Other</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="promo-card mb-4 d-flex align-items-center justify-content-between">
                            <div>
                                <h2>Up You Follower</h2>
                            </div>
                            <div>
                                <img src="2.png" alt="Up Follower" style="width: 150px;">
                                <a href="#" class="btn d-block mt-2">Shop Now</a>
                            </div>
                        </div>
                        <div class="promo-card d-flex align-items-center justify-content-between">
                             <div>
                                <h2>Promo</h2>
                            </div>
                            <div>
                                <img src="1.png" alt="Promo" style="width: 150px;">
                                <a href="#" class="btn d-block mt-2">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer-dark pt-5 pb-4">
            <div class="container text-md-start">
                <div class="row">
                    <div class="col-md-3 col-lg-3 mx-auto mb-4">
                        <h5>Tentang Kami</h5>
                        <p>Zuqo Store, Inc.<br>Jln Laswi Rt 08 Rw 05, Klasemen, Kec Manggahang, Kota Baleendah, Kab Bandung.<br>Phone, (62)+ 89530948308<br>Contact Us: ravaferizqo@gmail.com</p>
                    </div>
                    <div class="col-md-3 col-lg-2 mx-auto mb-4">
                        <h5>Visi dan Misi</h5>
                        <p>" Memberikan Kualitas terbaik kepada konsumen Dan Menjaga kualitas pelayanan".</p>
                        <h5 class="mt-3">Kata Kunci</h5>
                        <p>#zuqostore, #trend terkini, #kaos kualitas terbaik, #kaos cottoncombat #bestseller.</p>
                    </div>
                    <div class="col-md-3 col-lg-2 mx-auto mb-4">
                        <h5>Instagram</h5>
                        <p><a href="#">ZuqoStore_#1</a></p>
                    </div>
                    <div class="col-md-3 col-lg-3 mx-auto mb-md-0 mb-4 text-center">
                        <img src="logo.png" alt="Logo" style="height:60px; margin-bottom:1rem;">
                        <div>
                           <a href="#"><img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg" alt="App Store" style="height: 40px;"></a>
                        </div>
                        <div class="mt-2">
                           <a href="#"><img src="https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png" alt="Google Play" style="height: 55px;"></a>
                        </div>
                    </div>
                </div>
                 <hr>
                <div class="text-center py-3">
                    <h5 class="text-white">Social media kami</h5>
                    <div class="social-icons-footer mt-3">
                        <a href="#" style="background-color: #E1306C;"><i class="bi bi-instagram"></i></a>
                        <a href="#" style="background-color: #1877F2;"><i class="bi bi-facebook"></i></a>
                        <a href="#" style="background-color: #1DA1F2;"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" style="background-color: #000000;"><i class="bi bi-tiktok"></i></a>
                        <a href="#" style="background-color: #0088cc;"><i class="bi bi-telegram"></i></a>
                        <a href="#" style="background-color: #25D366;"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </main>

    <nav class="bottom-nav d-flex justify-content-around align-items-center">
        <a href="#" class="nav-link"><i class="bi bi-emoji-smile fs-4"></i></a>
        <a href="#" class="nav-link"><i class="bi bi-heart fs-4"></i></a>
        <a href="#" class="nav-link active"><i class="bi bi-house-door-fill fs-3"></i></a>
        <a href="#" class="nav-link"><i class="bi bi-cart3 fs-4"></i></a>
        <a href="#" class="nav-link"><i class="bi bi-chat-dots fs-4"></i></a>
        <a href="#" class="nav-link"><i class="bi bi-person fs-4"></i></a>
    </nav>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>