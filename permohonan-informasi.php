<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Permohonan Keberatan</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/animations.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
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

        .image-container {
            position: relative;
            display: inline-block;
        }

        .image-container img {
            display: block;
            width: 300px;
        }

        .upload-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            font-size: 18px;
            opacity: 0;
            transition: opacity 0.3s;
            cursor: pointer;
        }

        .image-container:hover .upload-overlay {
            opacity: 1;
        }

        .upload-overlay input[type="file"] {
            display: none;
        }

        :root {
            --primary-color: #8b3e2f;
            --secondary-color: #b84e3a;
            --bg-color: #f5f5f5;
            --text-color: #333;
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

        .page-content {
            margin-top: 110px;
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
            background: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 80%;
            margin: 20px auto;
            max-width: 1200px;
        }
        form{
            display: flex;
        }

        .form-container {
            flex: 2;
            padding: 30px;
        }

        .sub {
            flex: 1;
        }

        .form-container label {
            color: var(--text-color);
            font-weight: 600;
            margin-bottom: 8px;
        }

        .form-container input,
        .form-container textarea {
            border-radius: 8px;
            border: 2px solid var(--primary-color);
            padding: 10px;
            width: 100%;
            margin-bottom: 20px;
            background: #f9f3f1;
        }

        .form-container input:focus,
        .form-container textarea:focus {
            outline: none;
            box-shadow: 0 0 0 2px rgba(139, 62, 47, 0.2);
            background: #f5e4e1;
        }

        .form-container button {
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 12px 20px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        .form-container button:hover {
            background-color: var(--secondary-color);
            transform: scale(1.05);
        }

        .radio-container {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }

        .radio-container input {
            width: auto;
            margin-right: 5px;
        }

        .radio-container label {
            margin-bottom: 0;
        }

        h1 {
            color: var(--primary-color);
            margin-bottom: 30px;
            font-size: 1.5em;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php include 'includes/navbar.html'; ?>
    <div class="page-content">
        <header>
            <h1>Form Permohonan Informasi</h1>
        </header>
        <div class="content-wrapper">
            <form>
                <div class="form-container">
                    <label for="nik">NIK</label>
                    <input type="number" id="nik" name="nik" placeholder="Masukkan NIK anda" required>

                    <label for="kategori">Kategori Permohonan</label>
                    <input type="text" id="kategori" name="kategori" placeholder="Pilih Kategori Permohonan" required>

                    <label for="tujuan">Tujuan Penggunaan Informasi</label>
                    <textarea id="tujuan" name="tujuan" placeholder="Sebutkan Tujuan Penggunaan Informasi" required></textarea>

                    <label for="rincian">Rincian Informasi</label>
                    <textarea id="rincian" name="rincian" placeholder="Rincian Informasi" required></textarea>

                    <label>Salinan Informasi</label>
                    <div class="radio-container">
                        <div><input type="radio" id="softcopy" name="salinan"><label for="softcopy">Softcopy</label></div>
                        <div><input type="radio" id="hardcopy" name="salinan"><label for="hardcopy">Hardcopy</label></div>
                    </div>

                    <label>Cara Mendapatkan Salinan Informasi</label>
                    <div class="radio-container">
                        <div><input type="radio" id="faksimili" name="cara"><label for="faksimili">Faksimili</label></div>
                        <div><input type="radio" id="langsung" name="cara"><label for="langsung">Mengambil Langsung</label></div>
                        <div><input type="radio" id="takeemail" name="cara"><label for="takeemail">E-mail</label></div>
                    </div>
                </div>
                <div class="form-container sub">
                    <div class="image-container">
                        <img src="images/idcard.png" alt="ID Card">
                        <label class="upload-overlay">
                            <span>Upload KTP Disini</span>
                            <input type="file" accept="image/*">
                        </label>
                    </div>
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" required>

                    <label for="alamat">Alamat</label>
                    <textarea id="alamat" name="alamat" placeholder="Masukkan Alamat Anda"></textarea>

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan Email anda" required>

                    <label for="nomor">Nomor Telepon</label>
                    <input type="number" id="nomor" name="telp" placeholder="Masukkan Nomor Telepon anda" required>
                    <button type="submit">Kirim Permohonan</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>