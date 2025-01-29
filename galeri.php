<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Galeri PPID Kota Surakarta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/animations.css" />
  <style>
    body, h1, h2, h3, h4, h5, h6, p, table, td, th {
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
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
      width: 80%;
      margin: 0 auto;
      border-radius: 12px;
      max-width: 1200px;
      margin-top: 120px;
    }

    section {
      margin: 20px auto;
      padding: 10px;
      width: 90%;
    }

    .text-overlay {
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .title-galeri {
      font-size: 45px;
      font-weight: bold;
      color: white;
      margin-bottom: 15px;
    }

    .subtitle-galeri {
      font-size: 30px;
      font-weight: bold;
      color: white;
      margin-bottom: 30px;
    }

    .h1-title-sub-galeri {
      font-size: 32px;
      font-weight: bold;
      text-transform: uppercase;
      margin-top: 40px;
    }

    .h1-title-sub-galeri::after {
      content: '';
      display: block;
      width: 90px;
      height: 5px;
      background-color: #a55a42;
      margin: 15px auto;
    }

    .subtitle-sub-galeri {
      font-size: 19px;
      margin-bottom: 10px;
      text-align: center;
    }

    .galeri-container .card1 {
      border: 2px solid #a55a42; /* Border berwarna */
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s, box-shadow 0.3s;
      height: 300px;
      overflow: hidden;
      border-radius: 10px;
      opacity: 0; /* Awalnya tidak terlihat */
      transform: translateY(20px); /* Geser ke bawah */
      animation: slideIn 0.5s forwards; /* Animasi masuk */
    }

    .galeri-container .card1:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    }

    .galeri-container .card1-body {
      padding: 15px;
      padding-top: 10px;
    }

    .galeri-container .card1-title {
      font-size: 14px;
      font-weight: bold;
      margin-bottom: 10px;
      color: grey;
    }

    .galeri-container .btn-2 {
      background-color: #a55a42;
      color: white;
      font-size: 16px;
      font-weight: bold;
      padding: 10px 0;
      border-radius: 5px;
      box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
      transition: transform 0.2s ease, background-color 0.2s ease, box-shadow 0.2s ease;
      border: none;
    }

    .galeri-container .btn-2:hover {
      transform: scale(1.1);
      background-color: #8e4e38;
      box-shadow: 0px 6px 8px rgba(0, 0, 0, 0.2);
    }

    .galeri-container .card1-img-top {
      width: 100%;
      height: 150px;
      object-fit: cover;
      transition: transform 0.3s;
    }

    .galeri-container .card1:hover .card1-img-top {
      transform: scale(1.05);
    }

    /* Animasi masuk */
    @keyframes slideIn {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>

<body>
  <?php include 'includes/navbar.html'; ?>

  <header>
    <h1>Galeri PPID Kota Surakarta</h1>
  </header>

  <section>
    <div class="text-center">
      <h1 class="h1-title-sub-galeri">GALERI KEGIATAN</h1>
      <p class="subtitle-sub-galeri">Pejabat Pengelola Informasi dan Dokumentasi Kota Surakarta</p>
    </div>

    <section class="galeri-container">
      <div class="container my-5">
        <div class="row">
          <!-- Card 1 -->
          <div class="col-md-3 mb-4">
            <div class="card1">
              <img src="https://ppid.surakarta.go.id/wp-content/uploads/2022/12/Rapat-Persiapan-Presentasi-dan-Verifikasi-PPID-Tahun-2022-1.jpeg" class="card1-img-top" alt="Galeri 1" />
              <div class="card1-body">
                <small class="text-muted"><i class="bi bi-calendar"></i> Senin, 20 Januari 2025</small>
                <h6 class="card1-title">Rapat Persiapan Presentasi dan Verifikasi PPID Tahun 2022</h6>
              </div>
            </div>
          </div>
          <!-- Card 2 -->
          <div class="col-md-3 mb-4">
            <div class="card1">
              <img src="https://ppid.surakarta.go.id/wp-content/uploads/2022/12/Koordinasi-Persiapan-Tim-Visitasi-Keterbukaan-Informasi-Tahun-2022.jpeg" class="card1-img-top" alt="Galeri 2" />
              <div class="card1-body">
                <small class="text-muted"><i class="bi bi-calendar"></i> Senin, 20 Januari 2025</small>
                <h6 class="card1-title">Koordinasi Persiapan Tim Visitasi Keterbukaan Informasi Tahun 2022</h6>
              </div>
            </div>
          </div>
          <!-- Card 3 -->
          <div class="col-md-3 mb-4">
            <div class="card1">
              <img src="https://ppid.surakarta.go.id/wp-content/uploads/2022/12/Pencermatan-Website-PPID-Kota-Surakarta-1.jpeg" class="card1-img-top" alt="Galeri 3" />
              <div class="card1-body">
                <small class="text-muted"><i class="bi bi-calendar"></i> Senin, 20 Januari 2025</small>
                <h6 class="card1-title">Pencermatan Website PPID Kota Surakarta</h6>
              </div>
            </div>
          </div>
          <!-- Card 4 -->
          <div class="col-md-3 mb-4">
            <div class="card1">
              <img src="https://ppid.surakarta.go.id/wp-content/uploads/2022/04/Pendampingan-Pengisian-DIP-Pada-14-Website-Kelurahan-2.jpeg" class="card1-img-top" alt="Galeri 4" />
              <div class="card1-body">
                <small class="text-muted"><i class="bi bi-calendar"></i> Senin, 20 Januari 2025</small>
                <h6 class="card1-title">Pendampingan Pengisian DIP Pada 14 Website Kelurahan</h6>
              </div>
            </div>
          </div>
          <!-- Add more cards as needed -->
        </div>
      </div>
    </section>

    <div class="text-center">
      <h1 class="h1-title-sub-galeri">VIDEO KEGIATAN</h1>
      <p class="subtitle-sub-galeri">Pejabat Pengelola Informasi dan Dokumentasi Kota Surakarta</p>
    </div>

    <section class="galeri-container">
      <div class="container my-5">
        <div class="row">
          <div class="col-md-3 mb-4">
            <div class="card1">
              <iframe width="100%" height="150px" src="https://www.youtube.com/embed/o1TSkllUneU?si=Q5Mb8bxSTnzxVPSt" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <div class="card1-body">
                <small class="text-muted"><i class="bi bi-calendar"></i> Senin, 20 Januari 2025</small>
                <h6 class="card1-title">Solo Ramah Difabel</h6>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="card1">
              <iframe width="100%" height="150px" src="https://www.youtube.com/embed/wKDhDnYnR9k?si=01Jakm-0L8xBlbLn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              <div class="card1-body">
                <small class="text-muted"><i class="bi bi-calendar"></i> Senin, 20 Januari 2025</small>
                <h6 class="card1-title">Bimtek Pengelola Informasi dan Dokumentasi dan Studi Banding ke PPID Kota Surakarta</h6>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="card1">
              <iframe width="100%" height="150px" src="https://www.youtube.com/embed/dBmqtoBlJYg?si=FnmpH6ci1mA4JbLs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              <div class="card1-body">
                <small class="text-muted"><i class="bi bi-calendar"></i> Senin, 20 Januari 2025</small>
                <h6 class="card1-title">Profil PPID Kota Surakarta</h6>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="card1">
              <iframe width="100%" height="150px" src="https://www.youtube.com/embed/wKDhDnYnR9k?si=01Jakm-0L8xBlbLn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              <div class="card1-body">
                <small class="text-muted"><i class="bi bi-calendar"></i> Senin, 20 Januari 2025</small>
                <h6 class="card1-title">Bimtek Pengelola Informasi dan Dokumentasi dan Studi Banding ke PPID Kota Surakarta</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>

  <?php include 'includes/footer.html'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>