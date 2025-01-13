<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Prosedur Pelayanan Informasi Publik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/animation.css" />
    <style>
        .prosedur {
            align-content: center;
            justify-content: center;
            align-items: center;
            display: flex;
            align-items: flex-start;
            gap: 20px;
        }

        .prosedur-img {
            flex: 0 0 auto;
            max-width: 50vw;
        }

        .prosedur-img img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .prosedur-text {
            font-family: 'Poppins', sans-serif;
        }

        .prosedur-text h1 {
            font-size: 30px;
            font-weight: bold;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        section {
            margin-top: 60px;
            padding: 50px 0;
        }

        .section-title-layout {
            background-size: cover;
            background-image: url('images/bg lagi.png');
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 20vh;
            border-radius: 30px;
        }

        .section-title {
            color: white;
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .section-content {
            padding: 30px;
            font-size: 18px;
            line-height: 1.6;
            color: #333;
        }

        .section-content p {
            font-family: 'Poppins', sans-serif;
            margin-bottom: 15px;
        }

        @media (max-width: 768px) {
            .section-title {
                font-size: 20px;
            }

            .section-content {
                font-size: 16px;
            }

            .prosedur {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 20px;
            }

            .prosedur-text {
                font-size: 15px;
            }
            .prosedur-text h1{
                font-size: 18px;
            }

            .prosedur-img {
                width: 100%;
                max-width: 100%;
                margin: 0 auto;
            }

            .prosedur-img img {
                width: 100%;
                height: auto;
                border-radius: 8px;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/navbar.html'; ?>

    <!-- Main Content -->
    <section>
        <div class="container-fluid">
            <div class="section-title-layout">
                <h1 class="section-title">Prosedur Pelayanan Informasi Publik</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="section-content">
                        <div class="prosedur flex">
                            <div class="prosedur-img">
                                <img src="images/template.jpg">
                            </div>
                            <div class="prosedur-text">
                                <h1>
                                    Mekanisme Pelayanan Informasi Publik
                                </h1>
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
                                    <li><a href="link/to/form">Unduh formulir permohonan informasi publik</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php include 'includes/footer.html'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>