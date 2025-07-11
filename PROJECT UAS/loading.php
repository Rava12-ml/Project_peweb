<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memuat...</title>
    
    <meta http-equiv="refresh" content="5;url=beranda.php">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');

        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background-color: #0d1117; 
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .loader-container {
            width: 100%;
            position: relative;
            height: 150px; /* Area untuk roket terbang */
        }

        .text-container {
            text-align: center;
            animation: fadeIn 2s ease-out forwards;
        }

        h1 {
            color: #ffffff;
            font-size: 2.5em;
            margin: 0;
            letter-spacing: 2px;
        }

        p {
            color: #aab8c2;
            font-size: 1.2em;
            margin-top: 10px;
            font-style: italic;
        }
        
        #rocket {
            /* Animasi untuk jalur terbang roket */
            animation: flyStraight 4s linear infinite;
        }

        /* Api dibuat berkedip-kedip agar lebih hidup */
        #flame path {
            animation: flicker 0.15s infinite alternate;
        }
        #flame path:nth-child(2) { animation-delay: -0.05s; }


        /* --- Keyframes Animasi --- */

        @keyframes flyStraight {
            0% {
                /* Mulai dari luar layar kiri */
                transform: translateX(-30vw);
            }
            100% {
                /* Selesai di luar layar kanan */
                transform: translateX(110vw);
            }
        }

        @keyframes flicker {
            from { opacity: 1; transform: scaleX(1.2); }
            to { opacity: 0.8; transform: scaleX(1); }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

    </style>
</head>
<body>

    <div class="loader-container">
        <svg viewBox="0 0 400 200" preserveAspectRatio="xMidYMid meet" style="position:absolute; top:0; left:0; width:100%; height:100%;">
            
            <g id="rocket">
                <g transform="translate(150, 100) scale(0.9)">
                    
                    <g id="flame" transform="translate(-100, 0)">
                        <path d="M 0 -15 C -40 0, 0 15, 0 -15 Z" fill="#FFA500"/>
                        <path d="M 0 -10 C -30 0, 0 10, 0 -10 Z" fill="#FFD700"/>
                    </g>

                    <path d="M -90 -20 L -100 -20 L -100 20 L -90 20 Z" fill="#aab8c2" />

                    <path d="M -80 -18 L -80 -45 L -40 -12 Z" fill="#4285F4"/>
                    <path d="M -80 18 L -80 45 L -40 12 Z" fill="#4285F4"/>
                    
                    <path d="M -90 -25 L 40 -25 L 40 25 L -90 25 Z" fill="#e3e4e8" />
                    <path d="M -90 25 L 40 25 L 40 12 C 20 18, -70 18, -90 12 Z" fill="#d5d7de" />

                    <circle cx="-25" cy="0" r="14" fill="#aab8c2" stroke-width="2" stroke="#ffffff"/>
                    <circle cx="-25" cy="0" r="10" fill="#42a5f5" />
                    
                    <path d="M 40 -25 C 90 0, 40 25, 40 -25 Z" fill="#EA4335"/>
                </g>
            </g>
        </svg>
    </div>

    <div class="text-container">
        <h1>Elevate Socials</h1>
        <p>"Feed Hype"</p>
    </div>

</body>
</html>