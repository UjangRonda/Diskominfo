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
</head>
<style>
  body,
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

  h1 {
    font-family: 'Poppins', sans-serif !important;
    font-size: 28px !important;
  }

  :root {
    --primary-color: #8b3e2f;
    --secondary-color: #b84e3a;
    --bg-color: #f5f5f5;
    --text-color: #333;
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
    animation: fadeIn 1s ease-out;
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

<body>
  <?php include 'includes/navbar.html'; ?>

  <!-- Main Content -->
  <section>
    <div class="container-fluid">
      <header>
        <h1> Upaya atas Tidak Ditanggapinya Jawaban Keberatan terhadap Permohonan Informasi Publik</h1>
      </header>
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

  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <?php include 'includes/footer.html'; ?>

</body>

</html>