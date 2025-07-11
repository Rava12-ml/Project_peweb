<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elevate Socials</title>
    
    <meta http-equiv="refresh" content="4;url=login.php">

    <style>
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background-color: #ffffff; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        svg {
            width: 90%;
            height: 90%;
        }

        /* Styling dan animasi untuk teks "Elevate Socials" */
        #targetText {
            font-size: 80px;
            font-weight: 800;
            fill: none;
            /* DIUBAH: Warna garis animasi menjadi hitam */
            stroke: #000000; 
            stroke-width: 2;
            stroke-dasharray: 1200; 
            stroke-dashoffset: 1200;
            /* Animasi "menggambar" teks selama 3 detik, setelah jeda 1 detik */
            animation: drawText 3s ease-out forwards;
            animation-delay: 1s;
        }

        /* Definisi animasi untuk menggambar teks */
        @keyframes drawText {
            to {
                stroke-dashoffset: 0; /* Menggambar garis hingga penuh */
                /* DIUBAH: Warna isian teks menjadi hitam */
                fill: #000000; 
            }
        }
    </style>
</head>
<body>

    <svg viewBox="0 0 1600 800">
        <text id="targetText" x="50%" y="52%" text-anchor="middle">Elevate Socials</text>
    </svg>

</body>
</html>