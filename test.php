<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Particles.js Example</title>
    <!-- Link CSS (opsional) -->
    <link rel="stylesheet" href="style.css">
    <!-- Tambahkan Particles.js via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/particles.js"></script>
</head>
<body>

    <!-- Elemen yang akan digunakan untuk partikel -->
    <div id="particles-js"></div>

    <div class="content">
        <h1>Selamat Datang!</h1>
        <p>Ini adalah contoh menggunakan Particles.js.</p>
    </div>
    <script>
        // Inisialisasi Particles.js
        particlesJS('particles-js', {
            particles: {
                number: {
                    value: 80, // Jumlah partikel
                    density: {
                        enable: true,
                        value_area: 800
                    }
                },
                shape: {
                    type: 'circle', // Bentuk partikel
                },
                opacity: {
                    value: 0.5, // Transparansi partikel
                },
                size: {
                    value: 3, // Ukuran partikel
                },
                move: {
                    enable: true, // Gerakan partikel
                    speed: 2, // Kecepatan gerakan
                    direction: 'none', // Arah gerakan
                }
            },
            interactivity: {
                detect_on: 'canvas',
                events: {
                    onhover: {
                        enable: true,
                        mode: 'repulse' // Efek saat mouse berada di atas partikel
                    }
                }
            }
        });
    </script>
</body>
<script src=" https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js "></script>
</html>
