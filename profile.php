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
    body, h1, h2, h3, h4, h5, h6, p, table, td, th {
      font-family: 'Poppins', sans-serif !important;
    }

    header {
      background: linear-gradient(135deg, rgba(139, 62, 47, 0.9), rgba(184, 78, 58, 0.9)), url("images/bg3.png") center/cover no-repeat;
      color: white;
      padding: 20px;
      text-align: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      width: 80%;
      margin: 120px auto 0;
      border-radius: 12px;
      max-width: 1200px;
      animation: fadeIn 1s ease-out;
    }

    section {
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
      margin-bottom: 15px;
    }

    .subtitle-profile {
      font-size: 30px;
      font-weight: bold;
      margin-bottom: 30px;
    }

    .title-visi-misi {
      margin: 60px 0 20px;
    }

    .title-visi-misi h1 {
      font-size: 32px;
      font-weight: bold;
      text-align: left;
      text-transform: uppercase;
    }

    .sub-title-visi-misi {
      font-size: 18px;
      margin-bottom: 10px;
      text-align: left;
    }

    .title-visi-misi::after, .h1-title-sub-profile::after {
      content: '';
      display: block;
      width: 90px;
      height: 5px;
      background-color: #a55a42;
      margin: 5px 0 15px;
    }

    .content-section {
      text-align: left;
      padding-left: 15px;
    }

    .content-section ul {
      list-style-type: decimal;
    }

    .h1-title-sub-profile {
      font-size: 32px;
      font-weight: bold;
      text-align: left;
      text-transform: uppercase;
      margin-top: 40px;
    }

    .subtitle-sub-profile {
      font-size: 19px;
      margin-bottom: 10px;
      text-align: center;
    }

    .shadow-box {
      display: flex;
      border: 1px solid #ddd;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      background-color: #a55a42;
      margin: 20px 0;
      flex-direction: row-reverse;
      height: 500px;
      width: 100%;
      box-sizing: border-box;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .shadow-box:hover {
      transform: scale(1.02);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
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

    .shadow-box .text-content h2, .shadow-box .text-content h4, .shadow-box .text-content p {
      margin: 0;
      padding-bottom: 10px;
    }

    .shadow-box .text-content p {
      font-size: 13px;
    }

    .desk-layanan .col-md-6 {
      margin-bottom: 20px;
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
      transition: transform 0.3s ease;
    }

    .item-img-tugas-bagan:hover {
      transform: scale(1.02);
    }

    .custom-btn {
      background-color: #a55a42;
      border-color: #a55a42;
    }

    .custom-btn:hover {
      background-color: #8e4e39;
      border-color: #8e4e39;
    }

    .card.card-profile {
      background-color: #8e4e39;
      border-radius: 12px;
      padding: 10px;
      color: white;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
      max-width: 630px;
      width: 100%;
      max-height: 390px;
      margin: 0 auto;
      animation: slideInLeft 1s ease-out;
    }

    .container1 {
      display: flex;
      justify-content: center;
      align-items: center;
      height: auto;
      margin: 20px 0;
    }

    .card.card-profile .text-content iframe {
      width: 100%;
      height: auto;
      aspect-ratio: 16 / 9;
      margin: 0 auto;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }

    @media (max-width: 768px) {
      .sub-title-visi-misi{
        font-size: 14px;
      }
      .title-profile {
        font-size: 22px;
      }

      .subtitle-profile {
        font-size: 10px;
      }

      .card.card-profile {
        max-width: 100%;
        padding: 15px;
      }

      .container1 {
        flex-direction: column;
        align-items: center;
      }

      .card.card-profile .text-content iframe {
        width: 100%;
        height: auto;
      }
      .shadow-box{
        display: flex;
        flex-direction: column;
      }
      .shadow-box img{
        max-width: 100%;
      }
      .shadow-box .text-content {
        width: 100%;
        font-size: 10px;
      }
      .shadow-box .text-content p {
        font-size: 10px;
      }
      .shadow-box .text-content h2 {
        font-size: 15px;
        text-align: center;
      }
    }

    .btn {
      transition: transform 0.3s ease, background-color 0.3s ease;
    }

    .btn:hover {
      transform: scale(1.05);
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

    @keyframes slideInLeft {
      from {
        opacity: 0;
        transform: translateX(-50px);
      }

      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes fadeInText {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .title-visi-misi, .sub-title-visi-misi, .content-section, .title-sub-profile {
      animation: fadeInText 1s ease-out;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes slideInFromLeft {
      from {
        opacity: 0;
        transform: translateX(-50px);
      }

      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes slideInAndFade {
      from {
        opacity: 0;
        transform: translateX(50px);
      }

      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes scaleIn {
      from {
        opacity: 0;
        transform: scale(0.9);
      }

      to {
        opacity: 1;
        transform: scale(1);
      }
    }

    .title-visi-misi, .sub-title-visi-misi, .content-section, .shadow-box, .card-profile, .item-img-tugas-bagan {
      opacity: 0;
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
      <div class="container1">
        <div class="card card-profile">
          <div class="text-content">
            <iframe
              width="600"
              height="360"
              src="https://www.youtube.com/embed/dBmqtoBlJYg?autoplay=1&mute=1&si=4ifZhqsV_PFf2aXY"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin"
              allowfullscreen></iframe>
          </div>
        </div>
      </div>

      <div class="title-visi-misi">
        <h1>Profil</h1>
      </div>
      <p class="sub-title-visi-misi">Berdasarkan amanah Pasal 13 Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi publik, Pemerintah Kota Surakarta sebagai salah satu Badan Publik telah membentuk Pengelola Informasi dan Dokumentasi sesuai dengan Keputusan Walikota Surakarta Nomor 067/21.1 Tahun 2022 tentang Kelembagaan Pengelola Informasi dan Dokumentasi Pemerintah Kota Surakarta.</p>
      <p class="sub-title-visi-misi">Menurut Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik, informasi adalah keterangan, pernyataan, gagasan, dan tanda-tanda yang mengandung nilai, makna, dan pesan, baik data, fakta maupun penjelasannya yang dapat dilihat, didengar, dan dibaca yang disajikan dalam berbagai kemasan dan format sesuai dengan perkembangan teknologi informasi dan komunikasi secara elektronik ataupun nonelektronik.</p>
      <p class="sub-title-visi-misi">Informasi merupakan kebutuhan pokok setiap orang. Oleh karena itu, hak memperoleh informasi termasuk hak asasi manusia. Bahkan, keterbukaan informasi publik merupakan salah satu ciri penting negara demokratis yang menjunjung tinggi kedaulatan rakyat untuk mewujudkan penyelenggaraan negara yang baik. Keterbukaan informasi publik merupakan sarana mengoptimalkan pengawasan publik terhadap penyelenggaraan negara dan Badan Publik lainnya.</p>

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

      <div class="title-visi-misi">
        <h1>Dasar Hukum</h1>
      </div>
      <div class="content-section">
        <ul class="sub-title-visi-misi">
          <li>Undang-Undang Republik Indonesia Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik;</li>
          <li>Peraturan Pemerintah Nomor 61 Tahun 2010 tentang Pelaksanaan Undang-Undang Nomor 14 Tahun 2008 yentang Keterbukaan Informasi Publik;</li>
          <li>Peraturan Menteri Dalam Negeri Nomor 3 Tahun 2017 tentang Pedoman Pengeloaan Pelayanan Informasi dan Dokumentasi Kementerian Dalam Negeri dan Pemerintahan Daerah</li>
          <li>Peraturan Komisi Informasi Nomor 1 Tahun 2013 tentang Prosedur Penyelesaian Sengketa Informasi Publik;</li>
          <li>Peraturan Komisi Informasi Nomor 1 Tahun 2021 tentang Standar Layanan Informasi Publik;</li>
          <li>Peraturan Daerah Kota Surakarta Nomor 11 Tahun 2013 tentang Keterbukaan Informasi Publik Kota Surakarta;</li>
          <li>Perwali No. 4.3 Tahun 2023 Tentang Standar Layanan Informasi Publik di Lingkungan Pemkot Surakarta</li>
          <li>Keputusan Walikota Surakarta Nomor 478.05/60 Tahun 2024 tentang Kelembagaan Pengelola Informasi dan Dokumentasi Pemerintah Kota Surakarta.</li>
        </ul>
      </div>

      <div class="title-sub-profile text-center">
        <h1 class="h1-title-sub-profile text-center">TUGAS DAN FUNGSI PPID</h1>
        <p class="subtitle-sub-profile text-center">Pejabat Pengelola Informasi dan Dokumentasi Kota Surakarta</p>
        <img src="images/tugas.png" alt="#" class="item-img-tugas-bagan">
      </div>

      <div class="title-sub-profile text-center">
        <h1 class="h1-title-sub-profile text-center">BAGAN ORGANISASI</h1>
        <p class="subtitle-sub-profile text-center">Pejabat Pengelola Informasi dan Dokumentasi Kota Surakarta</p>
        <img src="images/bagan.png" alt="#" class="item-img-tugas-bagan">
      </div>

      <div class="title-sub-profile text-center">
        <h1 class="h1-title-sub-profile text-center">DESK LAYANAN</h1>
        <p class="subtitle-sub-profile text-center">Pejabat Pengelola Informasi dan Dokumentasi Kota Surakarta</p>
      </div>

      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="shadow-box">
            <img src="images/ppid utama.png" alt="Layanan PPID Utama">
            <div class="text-content">
              <h2 class="fw-bold mb-2 text-white">PPID UTAMA</h2>
              <p class="text-white">
                Pejabat Pengelola Informasi dan Dokumentasi menyediakan informasi publik secara gratis (Tidak dipungut biaya). untuk penggandaan informasi publik dibebankan kepada pemohon informasi
              </p>
              <ul class="list-unstyled text-white">
                <li class="mb-2"><i class="bi bi-geo-alt-fill text-white"></i> Jl. Jend. Sudirman No.2, Kota Surakarta</li>
                <li class="mb-2"><i class="bi bi-envelope-fill text-white"></i> ppidutama@surakarta.go.id</li>
                <li><i class="bi bi-clock-fill text-white"></i> Senin s/d Kamis 07.30 - 16.00, Jumat 07.30 - 16.30</li>
              </ul>
              <a href="#" class="btn btn-warning text-white fw-bold mt-3">Kunjungi Sekarang →</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mb-4">
          <div class="shadow-box">
            <img src="images/mall layanan.png" alt="Layanan PPID Utama">
            <div class="text-content">
              <h2 class="fw-bold mb-2 text-white">MALL PELAYANAN PUBLIK</h2>
              <p class="text-white">
                Pejabat Pengelola Informasi dan Dokumentasi menyediakan informasi publik secara gratis (Tidak dipungut biaya). untuk penggandaan informasi publik dibebankan kepada pemohon informasi
              </p>
              <ul class="list-unstyled text-white">
                <li class="mb-2 text-white"><i class="bi bi-geo-alt-fill"></i> Jl. Jend. Sudirman No.2, Kota Surakarta</li>
                <li class="mb-2 text-white"><i class="bi bi-envelope-fill"></i> ppidutama@surakarta.go.id</li>
                <li text-white><i class="bi bi-clock-fill text-white"></i> Senin s/d Jumat 08.30 - 14.30</li>
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
  <script>
    const observerOptions = {
      root: null,
      rootMargin: '0px',
      threshold: 0.2
    };

    function createScrollAnimations() {
      const animatedElements = document.querySelectorAll('.title-visi-misi, .sub-title-visi-misi, .content-section, .shadow-box, .card-profile, .item-img-tugas-bagan');

      const scrollObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            if (entry.target.classList.contains('shadow-box')) {
              entry.target.style.animation = 'slideInAndFade 1s ease forwards';
            } else if (entry.target.classList.contains('title-visi-misi')) {
              entry.target.style.animation = 'slideInFromLeft 1s ease forwards';
            } else if (entry.target.classList.contains('item-img-tugas-bagan')) {
              entry.target.style.animation = 'scaleIn 1s ease forwards';
            } else {
              entry.target.style.animation = 'fadeInUp 1s ease forwards';
            }
            scrollObserver.unobserve(entry.target);
          }
        });
      }, observerOptions);

      animatedElements.forEach(element => {
        scrollObserver.observe(element);
      });
    }

    document.addEventListener('DOMContentLoaded', createScrollAnimations);
  </script>
</body>

</html>