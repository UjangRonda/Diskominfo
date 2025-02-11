<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Prosedur Pelayanan Informasi Publik</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="font/bootstrap-icons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/animations.css" />
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

        :root {
            --primary-color: #8b3e2f;
            --secondary-color: #b84e3a;
            --bg-color: #f5f5f5;
            --text-color: #333;
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

        section {
            margin-top: 110px;
            padding: 50px 0;
        }

        .section-title-layout {
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
            height: 20vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .section-title {
            color: white;
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 0;
            text-align: center;
        }

        .section-content {
            background: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 80%;
            margin: 20px auto;
            max-width: 1200px;
            animation: slideInUp 1s ease-out;
        }

        .prosedur {
            align-content: center;
            justify-content: center;
            align-items: flex-start;
            display: flex;
            gap: 20px;
            padding: 20px 0;
        }

        .prosedur-img {
            flex: 0 0 auto;
            max-width: 50vw;
            animation: fadeInRight 1s ease-out;
        }

        .prosedur-img img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .prosedur-img img:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .prosedur-text {
            font-family: 'Poppins', sans-serif;
            animation: fadeInLeft 1s ease-out;
        }

        .prosedur-text h1 {
            font-size: 30px;
            font-weight: bold;
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        .prosedur-text ul {
            list-style-type: none;
            padding-left: 0;
        }

        .prosedur-text ul li {
            margin-bottom: 15px;
            padding-left: 24px;
            position: relative;
        }

        .prosedur-text ul li::before {
            content: "•";
            color: var(--primary-color);
            font-weight: bold;
            position: absolute;
            left: 0;
        }

        .prosedur-text a {
            color: var(--primary-color);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .prosedur-text a:hover {
            color: var(--secondary-color);
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .section-title {
                font-size: 20px;
            }

            .section-content {
                font-size: 16px;
                padding: 20px;
            }

            .prosedur {
                flex-direction: column;
                align-items: center;
                gap: 20px;
            }

            #prosedur-second {
                flex-direction: column-reverse;
            }

            .prosedur-text {
                font-size: 15px;
            }

            .prosedur-text h1 {
                font-size: 18px;
            }

            .prosedur-img {
                width: 100%;
                max-width: 100%;
                margin: 0 auto;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/navbar.html'; ?>

    <div id="particles-js" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;"></div>

    <section>
        <div class="container-fluid">
            <header>
                <h1>Prosedur Informasi Publik</h1>
            </header>
            <div class="column">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content">
                            <div class="prosedur flex">
                                <div class="prosedur-img">
                                    <img src="images/template_ril.jpeg">
                                </div>
                                <div class="prosedur-text">
                                    <h1>Mekanisme Pelayanan Informasi Publik</h1>
                                    <ul>
                                        <li>Pemohon informasi publik mengajukan permohonan kepada PPID melalui website PPID, aplikasi mobile DPS fitur pengaduan, SP4N Lapor, surat, email, atau ke petugas layanan informasi publik.</li>
                                        <li>Pemohon informasi publik mengisi formulir permohonan informasi publik dan memenuhi persyaratan:
                                            <ul>
                                                <li>KTP (perorangan)</li>
                                                <li>Akta notaris/SK Organisasi (lembaga/organisasi)</li>
                                            </ul>
                                        </li>
                                        <li>Petugas meregistrasi dan memberikan tanda bukti penerimaan permintaan informasi publik kepada pemohon informasi publik.</li>
                                        <li>Pemohon menerima pemberitahuan dari PPID paling lambat 10 hari kerja sejak permohonan diterima dan dapat diperpanjang 7 (tujuh) hari kerja.</li>
                                        <li><a href="https://drive.google.com/file/d/1CUq-gD30Ho5GqXRx27fKzCiQjad5-wUx/view?pli=1">Unduh formulir permohonan informasi publik</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="section-content">
                            <div class="prosedur flex" id="prosedur-second">
                                <div class="prosedur-text">
                                    <h1>Mekanisme Pelayanan Informasi Publik bagi Disabilitas</h1>
                                    <ul>
                                        <li>Pemohon informasi publik disabilitas datang ke PPID Surakarta.</li>
                                        <li>Petugas menyiapkan protokol kesehatan (prokes) untuk memastikan keamanan dan kenyamanan pemohon.</li>
                                        <li>Petugas menerapkan 3S (Senyum, Salam, Sapa) kepada pemohon sebagai bagian dari pelayanan ramah disabilitas.</li>
                                        <li>Petugas membantu pemohon mengisi formulir permohonan informasi publik sesuai kebutuhan.</li>
                                        <li><a href="https://dropbox.surakarta.go.id/index.php/s/X3vl8vJTEPRU1lc#pdfviewer">SOP</a></li>
                                    </ul>
                                </div>
                                <div class="prosedur-img">
                                    <img src="images/template.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <?php include 'includes/footer.html'; ?>
</body>

</html>