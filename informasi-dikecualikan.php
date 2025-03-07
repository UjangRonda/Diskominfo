<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Dikecualikan</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/keyframes.css" />
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />
    
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        table,
        td,
        th {
            font-family: 'Poppins', sans-serif !important;
        }

        .title-data {
            padding: 40px 20px;
            background: linear-gradient(rgba(139, 69, 19, 0.9), rgba(139, 69, 19, 0.7)), url('images/bg\ lagi.png');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            margin-bottom: 30px;
            border-radius: 0 0 20px 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .title-data h1 {
            font-size: 30px;
            font-weight: 600;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            margin: 0;
            padding: 0 20px;
        }

        .catalog-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .catalog-section {
            opacity: 0;
            border: #5c4033 solid 5px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            animation: fadeIn 1.5s ease-out forwards;
            animation-delay: 0s;
        }

        .catalog-section:nth-child(1) {
            animation-delay: 0s;
        }

        .catalog-section:nth-child(2) {
            animation-delay: 0.2s;
        }

        .catalog-section:nth-child(3) {
            animation-delay: 0.4s;
        }

        .catalog-section:nth-child(4) {
            animation-delay: 0.6s;
        }
        .catalog-section:nth-child(5) {
            animation-delay: 0.8s;
        }
        .catalog-section:nth-child(6) {
            animation-delay: 1s;
        }



        .catalog-section:hover {
            transform: translateY(-5px);
        }

        .section-title {
            color: #5c4033;
            font-size: 20px;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid #8b4513;
        }

        .link-container {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .catalog-link {
            text-decoration: none;
            color: #6b4423;
            padding: 10px 15px;
            background-color: rgba(139, 69, 19, 0.1);
            border-radius: 8px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .catalog-link:hover {
            background-color: #8b4513;
            color: #fff;
            padding-left: 20px;
        }

        .catalog-link::before {
            content: "\f02d";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            font-size: 1.2em;
        }



        @media (max-width: 768px) {
            .catalog-container {
                grid-template-columns: 1fr;
            }
        }

        header {
            background: linear-gradient(135deg, rgba(139, 62, 47, 0.9), rgba(184, 78, 58, 0.9)),
                url("images/bg3.png") center/cover no-repeat;
            color: white;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 80%;
            margin: 0 auto;
            border-radius: 12px;
            max-width: 1200px;
            animation: fadeIn 0.8s ease-out;
        }

        .loading-status {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
        }
        .btn-primary{
            background-color: #5c4033 !important;
            border-color:  #5c4033 !important;
        }
        .load-more-container{
            animation: fadeIn 1s ease-out forwards;
        }
    </style>
</head>

<body>
    <?php include 'includes/navbar.html'; ?>
    <section class="main-content" style="margin-top: 100px;">
        <header>
            <h1>Katalog Informasi Dikecualikan</h1>
        </header>
        <div class="catalog-container" id="catalogContainer">
            <div class="catalog-section">
                <h2 class="section-title">Tata Cara Memperoleh Informasi Publik dan Pengajuan Keberatan</h2>
                <div class="link-container">
                    <a href="#" class="catalog-link">Informasi Seputar Manusia Ikan</a>
                    <a href="#" class="catalog-link">Informasi Seputar Manusia Ikan</a>
                    <a href="#" class="catalog-link">Informasi Seputar Manusia Ikan</a>
                    <a href="#" class="catalog-link">Informasi Seputar Manusia Ikan</a>
                </div>
            </div>
            <div class="catalog-section">
                <h2 class="section-title">Informasi tentang Regulasi Badan Publik</h2>
                <div class="link-container">
                    <a href="#" class="catalog-link">Informasi Seputar Manusia Ikan</a>
                    <a href="#" class="catalog-link">Informasi Seputar Manusia Ikan</a>
                    <a href="#" class="catalog-link">Informasi Seputar Manusia Ikan</a>
                    <a href="#" class="catalog-link">Informasi Seputar Manusia Ikan</a>
                </div>
            </div>
            <div class="catalog-section">
                <h2 class="section-title">Informasi tentang Regulasi Badan Publik</h2>
                <div class="link-container">
                    <a href="#" class="catalog-link">Informasi Seputar Manusia Ikan</a>
                    <a href="#" class="catalog-link">Informasi Seputar Manusia Ikan</a>
                    <a href="#" class="catalog-link">Informasi Seputar Manusia Ikan</a>
                    <a href="#" class="catalog-link">Informasi Seputar Manusia Ikan</a>
                </div>
            </div>
            <div class="catalog-section">
                <h2 class="section-title">Informasi tentang Regulasi Badan Publik</h2>
                <div class="link-container">
                    <a href="#" class="catalog-link">Informasi Seputar Manusia Ikan</a>
                    <a href="#" class="catalog-link">Informasi Seputar Manusia Ikan</a>
                    <a href="#" class="catalog-link">Informasi Seputar Manusia Ikan</a>
                    <a href="#" class="catalog-link">Informasi Seputar Manusia Ikan</a>
                </div>
            </div>
            <div class="catalog-section">
                <h2 class="section-title">Informasi tentang Regulasi Badan Publik</h2>
                <div class="link-container">
                    <a href="#" class="catalog-link">Informasi Seputar Manusia Ikan</a>
                    <a href="#" class="catalog-link">Informasi Seputar Manusia Ikan</a>
                    <a href="#" class="catalog-link">Informasi Seputar Manusia Ikan</a>
                    <a href="#" class="catalog-link">Informasi Seputar Manusia Ikan</a>
                </div>
            </div>
            <div class="catalog-section">
                <h2 class="section-title">Informasi tentang Regulasi Badan Publik</h2>
                <div class="link-container">
                    <a href="#" class="catalog-link">Informasi Seputar Manusia Ikan</a>
                    <a href="#" class="catalog-link">Informasi Seputar Manusia Ikan</a>
                    <a href="#" class="catalog-link">Informasi Seputar Manusia Ikan</a>
                    <a href="#" class="catalog-link">Informasi Seputar Manusia Ikan</a>
                </div>
            </div>
        </div>
    </section>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <?php include 'includes/footer.html'; ?>
</body>

</html>