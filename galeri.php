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
  <link rel="stylesheet" href="css/animation.css" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }

    .galeri-section {
      background-image: url('images/bg lagi.png');
      background-size: cover;
      background-position: center;
      height: 90vh;
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
      text-align: left;
      text-transform: uppercase;
      font-family: 'Poppins', sans-serif;
      margin-top: 40px;
    }

    .h1-title-sub-galeri::after {
      content: '';
      display: block;
      width: 90px;
      height: 5px;
      background-color: #a55a42;
      margin: 15px auto 15px auto;
    }

    .subtitle-sub-galeri {
      font-size: 19px;
      margin-bottom: 10px;
      font-family: 'Poppins', sans-serif;
      text-align: center;
    }
  </style>
</head>

<body>
  <?php include 'includes/navbar.html'; ?>

  <!-- Main Content -->
  <section>
    <div class="container-fluid galeri-section">
      <div class="row text-overlay">
        <div class="col-12 text-center">
          <div class="logo-galeri-section mb-3">
            <img src="images/Logo Diskominfo.png" alt="Logo Solo: The Spirit of Java" class="img-logo-galeri" style="max-width: 180px; height: auto; padding-top: -30px;" />
          </div>
          <h1 class="title-galeri text-white">GALERI</h1>
          <h3 class="subtitle-galeri text-white">PEJABAT PENGELOLA INFORMASI DAN DOKUMENTASI ( PPID )<br>KOTA SURAKARTA</h3>
        </div>
      </div>
    </div>

    <div class="title-sub-profile text-center">
      <h1 class="h1-title-sub-galeri text-center">GALERI KEGIATAN</h1>
      <p class="subtitle-sub-galeri text-center">Pejabat Pengelola Informasi dan Dokumentasi Kota Surakarta</p>
    </div>

    <div class="title-sub-profile text-center">
      <h1 class="h1-title-sub-galeri text-center">VIDEO KEGIATAN</h1>
      <p class="subtitle-sub-galeri text-center">Pejabat Pengelola Informasi dan Dokumentasi Kota Surakarta</p>
    </div>

  </section>

  <?php include 'includes/footer.html'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
