<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Permohonan Keberatan</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/animations.css" />
    <style>
        :root {
            --primary-color: #8B4513;
            --secondary-color: #D2691E;
            --bg-color: #FFF8DC;
            --text-color: #5D4037;
        }

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
            font-size: 2.2rem;
            font-weight: 600;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            margin: 0;
            padding: 0 20px;
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

        .content-wrapper {
            gap: 2px;
            display: flex;
            flex-direction: row;
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            margin: 0 20px 40px 20px;
        }

        .form-container {
            padding: 30px;
        }

        .form-container label {
            color: var(--text-color);
            font-weight: 600;
        }

        .form-container input,
        .form-container textarea {
            border-radius: 6px;
            border: 2px solid var(--primary-color);
            padding: 10px;
            width: 100%;
            margin-bottom: 20px;
        }

        .form-container input:focus,
        .form-container textarea:focus {
            outline: none;
            box-shadow: 0 0 0 2px rgba(139, 69, 19, 0.2);
        }

        .form-container button {
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 6px;
            padding: 12px 20px;
            font-weight: 600;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: var(--secondary-color);
        }

        .img-container {
            height: 500px;
            width: 900px;
            overflow: hidden;
        }

        .img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
        @media (max-width: 768px) {
            .content-wrapper{
                flex-direction: column;
            }
            .img-container {
                width: 100%;
                height: 100%;
                background-size: contain;
                background-position: center;
                background-repeat: no-repeat;
            }
            .img-container img{
                object-fit: cover;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/navbar.html'; ?>
    <section class="main-content" style="margin-top: 100px;">
        <header>
            <h1>Form Permohonan Keberatan</h1>
        </header>
        <div class="content-wrapper">
            <div class="img-container">
                <img src="images/pengajuan.jpg">
            </div>
            <div class="form-container">
                <form>
                    <label for="nama">Kode Permohonan</label>
                    <input type="text" id="kode" name="kode" placeholder="Masukkan kode permohonan" required>

                    <label for="email">NIK</label>
                    <input type="number" id="nik" name="nik" placeholder="Masukkan NIK anda" required>

                    <button type="submit">Kirim Permohonan</button>
                </form>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>