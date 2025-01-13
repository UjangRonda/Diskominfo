<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile PPID Kota Surakarta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/animation.css" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }

    .profile-section {
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

    .title-visi-misi h1{
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
  </style>
</head>

<body>
  <?php include 'includes/navbar.html'; ?>

  <!-- Main Content -->
  <section>
    <div class="container-fluid profile-section">
      <div class="row text-overlay">
        <div class="col-12 text-center">
          <div class="logo-profile-section mb-3">
            <img src="images/Logo Diskominfo.png" alt="Logo Solo: The Spirit of Java" class="img-logo-profile"
              style="max-width: 180px; height: auto; padding-top: -30px;" />
          </div>
          <h1 class="title-profile text-white">PROFILE</h1>
          <h3 class="subtitle-profile text-white">PEJABAT PENGELOLA INFORMASI DAN DOKUMENTASI ( PPID )<br>KOTA
            SURAKARTA</h3>
        </div>
      </div>
    </div>

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
          <li>Meningkatkan kualitas dan daya saing pemuda dan masyarakat umum, di bidang pendidikan, ekonomi, seni
            budaya, dan olahraga.</li>
          <li>Mengembangkan tata kelola pemerintahan dan pelayanan publik yang gesit dan kolaboratif berlandaskan
            semangat gotong royong dan kebinekaan.</li>
          <li>Mewujudkan kemakmuran dan kesejahteraan bersama warga kota yang berkeadilan dan inklusif.</li>
          <li>Mewujudkan daerah yang kondusif dan kerukunan antar umat beragama dalam tata kehidupan bermasyarakat yang
            saling menghormati.</li>
        </ul>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <?php include 'includes/footer.html'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
