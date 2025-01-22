<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile PPID Kota Surakarta</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/animation.css" />
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
        

        header {
        background: linear-gradient(
            135deg,
            rgba(139, 62, 47, 0.9),
            rgba(184, 78, 58, 0.9)
          ),
          url("images/bg3.png") center/cover no-repeat;
        color: white;
        padding: 20px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        width: 80%;
        margin: 0 auto;
        border-radius: 12px;
        max-width: 1200px;
        margin-top: 120px;
      }

      section{
        margin: 20px auto;
        padding: 10px;
        width: 80%;
      }

      .text-overlay {
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        padding-top: 50px;
      }

      .text-center {
        text-align: center;
      }

      .text-white {
        color: white;
      }

      .title-profile {
        font-size: 45px;
        font-weight: bold;
        color: white;
        margin-bottom: 15px;
      }

      .subtitle-profile {
        font-size: 30px;
        font-weight: bold;
        color: white;
        margin-bottom: 30px;
      }

      .title-visi-misi {
        margin-bottom: 20px;
        margin-top: 60px;
      }

      .title-visi-misi h1 {
        font-size: 32px;
        font-weight: bold;
        text-align: left;
        text-transform: uppercase;
        font-family: 'Poppins', sans-serif;
      }

      .sub-title-visi-misi {
        font-size: 18px;
        margin-bottom: 10px;
        font-family: 'Poppins', sans-serif;
        text-align: left;
      }

      .title-visi-misi::after {
        content: '';
        display: block;
        width: 90px;
        height: 5px;
        background-color: #a55a42;
        margin-top: 5px;
        margin-bottom: 15px;
      }

      .content-section {
        text-align: left;
        padding-left: 15px;
      }

      .content-section ul {
        list-style-type: decimal;
      }

      @media (max-width: 768px) {
        .title-profile {
          font-size: 28px;
        }

        .subtitle-profile {
          font-size: 18px;
        }
      }

      .h1-title-sub-prpfile {
        font-size: 32px;
        font-weight: bold;
        text-align: left;
        text-transform: uppercase;
        font-family: 'Poppins', sans-serif;
        margin-top: 40px;
      }

      .h1-title-sub-prpfile::after {
        content: '';
        display: block;
        width: 90px;
        height: 5px;
        background-color: #a55a42;
        margin: 15px auto 15px auto;
      }

      .subtitle-sub-profile {
        font-size: 19px;
        margin-bottom: 10px;
        font-family: 'Poppins', sans-serif;
        text-align: center;
      }

      .shadow-box {
        display: flex;
        border: 1px solid #ddd;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: white;
        margin-bottom: 20px;
        flex-direction: row-reverse; 
      }

      .shadow-box img {
        max-width: 40%;
        height: auto;
        object-fit: cover;
        margin-left: 10px;
      }

      .shadow-box .text-content {
        padding-left: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 60%;
        font-size: 14px; 
        text-align: left;
      }

      .shadow-box .text-content h2, 
      .shadow-box .text-content h4, 
      .shadow-box .text-content p {
        margin: 0;
        padding-bottom: 10px;
        font-family: 'Poppins', sans-serif;
      }

      .shadow-box .text-content p {
        font-size: 13px;
        font-family: 'Poppins', sans-serif;
      }

      .desk-layanan .col-md-6 {
        margin-bottom: 20px;
        font-family: 'Poppins', sans-serif;
      }

      .desk-layanan .btn {
        text-transform: uppercase;
      }

      @media (min-width: 768px) {
        .desk-layanan .col-md-6 {
          display: flex;
          flex-direction: column;
          justify-content: center;
        }

        .desk-layanan .col-md-6 img {
          max-height: 300px;
          object-fit: cover;
          border-radius: 10px;
        }
      }

      .item-img-tugas-bagan {
        width: 100%; 
        height: 80%; 
        object-fit: cover;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
      }
  </style>
</head>

<body>
  <?php include 'includes/navbar.html'; ?>

  <!-- Main Content -->
  <header>
      <h1>Profile PPID Kota Surakarta</h1>
  </header>

  <section>
    <div class="container my-5">
      <div class="title-visi-misi">
        <h1>Visi</h1>
      </div>
      <p class="sub-title-visi-misi">Mewujudkan Surakarta Sebagai Kota Budaya yang Modern, Tangguh, Gesit, Kreatif dan Sejahtera</p>

      <div class="title-visi-misi">
        <h1>Misi</h1>
      </div>
      <div class="content-section">
        <ul class="sub-title-visi-misi">
          <li>Meningkatkan kualitas kesehatan masyarakat yang tangguh.</li>
          <li>Memperkuat pertumbuhan ekonomi yang adaptif dan berkelanjutan.</li>
          <li>Mewujudkan tata ruang dan infrastruktur kota yang mendukung pemajuan kebudayaan dan pariwisata.</li>
          <li>Meningkatkan kualitas dan daya saing pemuda dan masyarakat umum, di bidang pendidikan, ekonomi, seni budaya, dan olahraga.</li>
          <li>Mengembangkan tata kelola pemerintahan dan pelayanan publik yang gesit dan kolaboratif berlandaskan semangat gotong royong dan kebinekaan.</li>
          <li>Mewujudkan kemakmuran dan kesejahteraan bersama warga kota yang berkeadilan dan inklusif.</li>
          <li>Mewujudkan daerah yang kondusif dan kerukunan antar umat beragama dalam tata kehidupan bermasyarakat yang saling menghormati.</li>
        </ul>
      </div>

      <div class="title-sub-prpfile text-center">
        <h1 class="h1-title-sub-prpfile text-center">TUGAS DAN FUNGSI PPID</h1>
        <p class="subtitle-sub-profile text-center">Pejabat Pengelola Informasi dan Dokumentasi Kota Surakarta</p>
        <img src="images/tugas.png" alt="#" class="item-img-tugas-bagan">
      </div>

      <div class="title-sub-prpfile text-center">
        <h1 class="h1-title-sub-prpfile text-center">BAGAN ORGANISASI</h1>
        <p class="subtitle-sub-profile text-center">Pejabat Pengelola Informasi dan Dokumentasi Kota Surakarta</p>
        <img src="images/bagan.png" alt="#" class="item-img-tugas-bagan">
      </div>

      <div class="title-sub-prpfile text-center">
        <h1 class="h1-title-sub-prpfile text-center">DESK LAYANAN</h1>
        <p class="subtitle-sub-profile text-center">Pejabat Pengelola Informasi dan Dokumentasi Kota Surakarta</p>
      </div>

      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="shadow-box">
          <img src="images/ppid utama.png" alt="Layanan PPID Utama">
            <div class="text-content">
              <h4 class="text-warning">DESK LAYANAN</h4>
              <h2 class="fw-bold mb-2">PPID UTAMA</h2>
              <p class="text-muted">
              Pejabat Pengelola Informasi dan Dokumentasi menyediakan informasi publik secara gratis (Tidak dipungut biaya). untuk penggandaan informasi publik dibebankan kepada pemohon informasi
              </p>
              <ul class="list-unstyled">
                <li class="mb-2"><i class="bi bi-geo-alt-fill"></i> Jl. Jend. Sudirman No.2, Kota Surakarta</li>
                <li class="mb-2"><i class="bi bi-envelope-fill"></i> ppidutama@surakarta.go.id</li>
                <li><i class="bi bi-clock-fill"></i> Senin s/d Kamis 07.30 - 16.00, Jumat 07.30 - 16.30</li>
              </ul>
              <a href="#" class="btn btn-warning text-white fw-bold mt-3">Kunjungi Sekarang →</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mb-4">
          <div class="shadow-box">
          <img src="images/mall layanan.png" alt="Layanan PPID Utama">
            <div class="text-content">
              <h4 class="text-warning">DESK LAYANAN</h4>
              <h2 class="fw-bold mb-2">MALL PELAYANAN PUBLIK</h2>
              <p class="text-muted">
              Pejabat Pengelola Informasi dan Dokumentasi menyediakan informasi publik secara gratis (Tidak dipungut biaya). untuk penggandaan informasi publik dibebankan kepada pemohon informasi
              </p>
              <ul class="list-unstyled">
                <li class="mb-2"><i class="bi bi-geo-alt-fill"></i> Jl. Jend. Sudirman No.2, Kota Surakarta</li>
                <li class="mb-2"><i class="bi bi-envelope-fill"></i> ppidutama@surakarta.go.id</li>
                <li><i class="bi bi-clock-fill"></i> Senin s/d Jumat 08.30 - 14.30</li>
              </ul>
              <a href="#" class="btn btn-warning text-white fw-bold mt-3">Kunjungi Sekarang →</a>
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
