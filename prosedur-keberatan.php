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
    <link rel="stylesheet" href="css/animations.css" />
</head>
<style>
body {
  font-family: "Poppins", sans-serif;
  background-color: #ffffff;
  margin: 0;
  padding: 0;
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
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.section-title {
  color: white;
  font-size: 36px;
  font-weight: bold;
  margin-bottom: 20px;
  text-align: center;
}

.section-content {
  padding: 30px;
  font-size: 18px;
  line-height: 1.6;
  color: #333;
  background-color: #ffffff;
  border-radius: 10px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
}

.section-content p {
  font-family: 'Poppins', sans-serif;
  margin-bottom: 15px;
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
  max-width: 100vw;
}

.prosedur-img img {
  width: 60%;
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
}

.prosedur-text h1 {
  font-size: 30px;
  font-weight: bold;
  color: #a55a42;
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
  color: #a55a42;
  font-weight: bold;
  position: absolute;
  left: 0;
}

.prosedur-text a {
  color: #a55a42;
  text-decoration: none;
  transition: color 0.3s ease;
}

.prosedur-text a:hover {
  color: #8b452f;
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
</style>
<body>
    <?php include 'includes/navbar.html'; ?>

    <!-- Main Content -->
    <section>
    <div class="container-fluid">
        <div class="section-title-layout">
            <h1 class="section-title">Upaya atas Tidak Ditanggapinya Jawaban Keberatan terhadap Permohonan Informasi Publik</h1>
        </div>
        <div class="column">
            <div class="row">
                <div class="col-12">
                    <div class="section-content">
                        <p>Sesuai dengan Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik dan Peraturan Komisi Informasi Nomor 1 Tahun 2021 tentang Standar Layanan Informasi Publik, pemohon informasi publik berhak untuk mengajukan keberatan apabila tidak mendapat tanggapan atau tidak puas dengan tanggapan atas permohonan informasi. Adapun mekanisme pengajuan keberatan adalah sebagai berikut:</p>
                        <ul>
                            <li>
                                <strong>Keberatan terhadap Tidak Ditanggapinya Permohonan:</strong><br>
                                Jika dalam waktu 10 (sepuluh) hari kerja sejak permintaan informasi diterima, pemohon belum mendapatkan tanggapan, pemohon berhak untuk mengajukan keberatan.
                            </li>
                            <li>
                                <strong>Keberatan terhadap Tanggapan yang Diterima:</strong><br>
                                Jika dalam waktu 10 (sepuluh) hari kerja Pemohon sudah mendapatkan tanggapan namun tidak puas, Pemohon dapat mengajukan keberatan terhadap tanggapan tersebut.
                            </li>
                            <li>
                                <strong>Keberatan terhadap Tanggapan Atasan PPID Kota Surakarta:</strong><br>
                                Jika pemohon tetap berkeberatan atas tanggapan atasan PPID Kota Surakarta, maka langkah selanjutnya adalah mengajukan sengketa informasi ke Komisi Informasi.
                            </li>
                        </ul>
                        <p>Untuk mengajukan sengketa informasi, pemohon dapat menggunakan salah satu dari dua cara berikut:</p>
                        <ul>
                            <li>
                                <strong>Pengajuan Sengketa Secara Langsung:</strong><br>
                                Pemohon dapat mengirimkan surat atau formulir pengajuan sengketa ke Komisi Informasi.
                            </li>
                            <li>
                                <strong>Pengajuan Sengketa Secara Online:</strong><br>
                                Pemohon dapat mengisi formulir pengaduan online yang tersedia di situs web Komisi Informasi.
                            </li>
                        </ul>
                        <div class="prosedur-img">
                                    <img src="images/upaya.jpg">
                        </div>
                        <p>Ketika mengajukan sengketa informasi, pemohon diwajibkan untuk melampirkan dokumen-dokumen berikut:</p>
                        <ul>
                            <li>Salinan permintaan informasi (beserta tanda terima)</li>
                            <li>Salinan jawaban tertulis badan publik atas permintaan informasi (jika ada)</li>
                            <li>Salinan surat keberatan kepada atasan PPID (beserta tanda terima)</li>
                            <li>Salinan jawaban atas keberatan (jika ada)</li>
                        </ul>
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