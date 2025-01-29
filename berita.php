<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Berita PPID Kota Surakarta</title>
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

    section {
      margin: 20px auto;
      padding: 10px;
      width: 80%;
    }

    .berita-container .card1 {
      border: none;
      box-shadow: 0 5px 9px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
      height: 300px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      margin-top: 70px;
    }

    .berita-container .card1:hover {
      transform: scale(1.05); 
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); 
      height: 320px; 
    }

    .berita-container .card1-body {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      flex-grow: 1;
      padding: 15px;
      padding-top: 10px;
    }

    .berita-container .card1-title {
      font-size: 14px;
      font-weight: bold;
      margin-bottom: 10px;
      line-height: 1.5;
      color: grey;
      font-family: "Poppins", sans-serif;
    }

    .berita-container .btn-read-more1 {
      color: #a55a42;
      width: 45%;
      text-align: left;
      font-size: 14px;
      font-weight: bold;
      padding: 5px 0;
      line-height: 1;
      border-radius: 5px;
      margin-top: auto;
      text-decoration: none;
      display: inline-block;
      transition: background-color 0.2s ease;
      font-family: "Poppins", sans-serif;
    }

    .berita-container .d-flex.justify-content-between {
      margin-top: auto;
    }

    .berita-container .card1-img-top {
      width: 100%;
      height: 190px;
      object-fit: cover;
    }

    .search-container {
      margin-top: 60px;
      margin-bottom: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 10px;
    }

    .search-container input {
      padding: 10px;
      width: 65%;
      border-radius: 20px;
      border: 2px solid #a55a42;
    }

    .search-container button {
      background-color: #a55a42;
      border: none;
      color: white;
      padding: 10px;
      border-radius: 50%;
    }

    .berita-section {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      gap: 5px;
      padding: 5px;
    }

    .rekomendasi-card {
      background: linear-gradient(135deg, #8b3e2f, #b84e3a);
      color: white;
      padding: 15px;
      border-radius: 12px;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s, box-shadow 0.3s;
      width: 65%;
      margin: 0 10px;
      margin-bottom: 30px;
    }

    .rekomendasi-card:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .rekomendasi-card .icon {
      font-size: 50px;
      color: white;
      font-weight: bold;
    }

    .rekomendasi-card h6 {
      font-weight: bold;
      margin-top: 10px;
    }

    @keyframes slideIn {
      from {
        transform: translateX(-100%); 
        opacity: 0;
      }
      to {
        transform: translateX(0); 
        opacity: 1;
      }
    }

    .card1 {
      animation: slideIn 0.5s ease-out forwards;
    }

    .card1:nth-child(1) {
      animation-delay: 0.1s;
    }

    .card1:nth-child(2) {
      animation-delay: 0.3s;
    }

    .card1:nth-child(3) {
      animation-delay: 0.5s;
    }

    /* Responsiveness */
    @media (max-width: 768px) {
      .rekomendasi-card {
        width: 100%;
      }

      .berita-section {
        flex-direction: column;
        align-items: flex-start;
      }

      .col-md-4 {
        flex: 0 0 100%;
      }
    }
  </style>
</head>

<body>
  <?php include 'includes/navbar.html'; ?>

  <header>
    <h1>Berita Kota Surakarta</h1>
  </header>

  <section class="berita-container">
    <div class="container my-5">
      <div class="row">
        <div class="col-lg-3 col-md-4">
          <div class="search-container">
            <input type="text" placeholder="Cari berita..." />
            <button>
              <i class="bi bi-search"></i>
            </button>
          </div>
          <div class="rekomendasi-card">
            <div class="icon"><i class="bi bi-star"></i></div>
            <h6>Berita Terbaru</h6>
          </div>
          <div class="rekomendasi-card">
            <div class="icon"><i class="bi bi-fire"></i></div>
            <h6>Berita Viral</h6>
          </div>
          <div class="rekomendasi-card">
            <div class="icon"><i class="bi bi-clock"></i></div>
            <h6>Berita Terkini</h6>
          </div>
        </div>

        <div class="col-lg-9 col-md-8">
          <div class="row">
          <div class="col-md-4 mb-4">
          <div class="card1">
            <img
              src="https://akcdn.detik.net.id/community/media/visual/2025/01/20/jokowi_169.jpeg?w=700&q=90"
              class="card1-img-top"
              alt="Berita 1" />
            <div class="card1-body">
              <h6 class="card1-title">
                Jokowi Puji 100 Hari Prabowo-Gibran: Lebih Baik dari yang Dulu
              </h6>
              <div class="d-flex justify-content-between align-items-center">
                <a
                  href="https://www.detik.com/jateng/berita/d-7740914/jokowi-puji-100-hari-prabowo-gibran-lebih-baik-dari-yang-dulu"
                  class="btn btn-read-more1 btn-sm">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card1">
            <img
              src="https://akcdn.detik.net.id/community/media/visual/2025/01/20/suasana-rsjd-solo-senin-2012025_169.jpeg?w=700&q=90"
              class="card1-img-top"
              alt="Berita 2" />
            <div class="card1-body">
              <h6 class="card1-title">
                RSJ Solo Ungkap Detik-detik Pasien Kabur Lalu Nyebur Bengawan Solo
              </h6>
              <div class="d-flex justify-content-between align-items-center">
                <a
                  href="https://www.detik.com/jateng/berita/d-7740741/rsj-solo-ungkap-detik-detik-pasien-kabur-lalu-nyebur-bengawan-solo"
                  class="btn btn-read-more1 btn-sm">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card1">
            <img
              src="https://akcdn.detik.net.id/community/media/visual/2019/10/10/d7496793-9e50-42f6-b787-eccdaa502083_43.jpeg?w=700&q=90"
              class="card1-img-top"
              alt="Berita 3" />
            <div class="card1-body">
              <h6 class="card1-title">
                Tokoh Mega Bintang Mudrick Sangidu Dimakamkan Hari Ini
              </h6>
              <div class="d-flex justify-content-between align-items-center">
                <a
                  href="https://www.detik.com/jateng/berita/d-7740097/tokoh-mega-bintang-mudrick-sangidu-dimakamkan-hari-ini"
                  class="btn btn-read-more1 btn-sm">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card1">
            <img
              src="https://akcdn.detik.net.id/community/media/visual/2025/01/19/rumah-duka-politikus-senior-ppp-almarhum-mudrick-sangidu-di-kartopuran-jayengan-kota-solo-minggu-1912025-malam-1_43.jpeg?w=700&q=90"
              class="card1-img-top"
              alt="Berita 4" />
            <div class="card1-body">
              <h6 class="card1-title">
                Wasiat Mudrick Sangidu: Lawan Kezaliman-Minta Maaf Bila Salah
              </h6>
              <div class="d-flex justify-content-between align-items-center">
                <a
                  href="https://www.detik.com/jateng/berita/d-7740079/wasiat-mudrick-sangidu-lawan-kezaliman-minta-maaf-bila-salah"
                  class="btn btn-read-more1 btn-sm">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card1">
            <img
              src="https://akcdn.detik.net.id/community/media/visual/2025/01/19/rumah-duka-politikus-senior-ppp-almarhum-mudrick-sangidu-di-kartopuran-jayengan-kota-solo-minggu-1912025-malam-2_43.jpeg?w=700&q=90"
              class="card1-img-top"
              alt="Berita 2" />
            <div class="card1-body">
              <h6 class="card1-title">
                Kisah Almarhum Mudrick Pendiri Mega Bintang-Lawan Kuningisasi Orba
              </h6>
              <div class="d-flex justify-content-between align-items-center">
                <a
                  href="https://www.detik.com/jateng/berita/d-7740061/kisah-almarhum-mudrick-pendiri-mega-bintang-lawan-kuningisasi-orba"
                  class="btn btn-read-more1 btn-sm">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card1">
            <img
              src="https://akcdn.detik.net.id/community/media/visual/2025/01/19/lokasi-kaburnya-seorang-pasien-rsjd-dr-arif-zainuddin-solo-minggu-1912025-sore-1_169.jpeg?w=700&q=90"
              class="card1-img-top"
              alt="Berita 3" />
            <div class="card1-body">
              <h6 class="card1-title">
                Pasien RSJ di Solo Kabur Lompat Pagar Lalu Nyebur ke Sungai Bengawan Solo
              </h6>
              <div class="d-flex justify-content-between align-items-center">
                <a
                  href="https://news.detik.com/berita/d-7740050/pasien-rsj-di-solo-kabur-lompat-pagar-lalu-nyebur-ke-sungai-bengawan-solo"
                  class="btn btn-read-more1 btn-sm">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card1">
            <img
              src="https://akcdn.detik.net.id/community/media/visual/2019/10/10/d7496793-9e50-42f6-b787-eccdaa502083_43.jpeg?w=700&q=90"
              class="card1-img-top"
              alt="Berita 4" />
            <div class="card1-body">
              <h6 class="card1-title">
                Hari-hari Terakhir Tokoh Senior PPP Mudrick Sangidu: Dongakke Ya Le
              </h6>
              <div class="d-flex justify-content-between align-items-center">
                <a
                  href="https://www.detik.com/jateng/berita/d-7739925/hari-hari-terakhir-tokoh-senior-ppp-mudrick-sangidu-dongakke-ya-le"
                  class="btn btn-read-more1 btn-sm">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card1">
            <img
              src="https://akcdn.detik.net.id/community/media/visual/2024/08/08/rumah-sakit-jiwa-daerah-rsjd-dr-arif-zainudin-solo_43.jpeg?w=700&q=90"
              class="card1-img-top"
              alt="Berita 2" />
            <div class="card1-body">
              <h6 class="card1-title">
                Seorang Pasien RS Jiwa Solo Kabur!
              </h6>
              <div class="d-flex justify-content-between align-items-center">
                <a
                  href="https://www.detik.com/jateng/berita/d-7739902/seorang-pasien-rs-jiwa-solo-kabur"
                  class="btn btn-read-more1 btn-sm">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card1">
            <img
              src="https://akcdn.detik.net.id/community/media/visual/2025/01/19/lomba-menangis-di-solo_169.jpeg?w=700&q=90"
              class="card1-img-top"
              alt="Berita 3" />
            <div class="card1-body">
              <h6 class="card1-title">
                Peserta Menjerit Histeris Saat Lomba menangis di Solo
              </h6>
              <div class="d-flex justify-content-between align-items-center">
                <a
                  href="https://news.detik.com/foto-news/d-7739495/peserta-menjerit-histeris-saat-lomba-menangis-di-solo"
                  class="btn btn-read-more1 btn-sm">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card1">
            <img
              src="https://akcdn.detik.net.id/community/media/visual/2025/01/18/mensos-gus-ipul-1_169.jpeg?w=700&q=90"
              class="card1-img-top"
              alt="Berita 4" />
            <div class="card1-body">
              <h6 class="card1-title">
                Mensos: Kemiskinan di Solo Turun, tapi Masih di Atas Rata-rata Nasional
              </h6>
              <div class="d-flex justify-content-between align-items-center">
                <a
                  href="https://news.detik.com/berita/d-7738558/mensos-kemiskinan-di-solo-turun-tapi-masih-di-atas-rata-rata-nasional"
                  class="btn btn-read-more1 btn-sm">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card1">
            <img
              src="https://akcdn.detik.net.id/community/media/visual/2025/01/11/suasana-simpang-joglo-solo-saat-dibuka-sabtu-1112025_169.jpeg?w=700&q=90"
              class="card1-img-top"
              alt="Berita 2" />
            <div class="card1-body">
              <h6 class="card1-title">
                Tulisan Aksara Jawa Underpass Simpang Joglo Solo Tipo, Pemkot Akan Perbaiki
              </h6>
              <div class="d-flex justify-content-between align-items-center">
                <a
                  href="https://news.detik.com/berita/d-7737353/tulisan-aksara-jawa-underpass-simpang-joglo-solo-tipo-pemkot-akan-perbaiki"
                  class="btn btn-read-more1 btn-sm">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card1">
            <img
              src="https://akcdn.detik.net.id/community/media/visual/2019/10/18/d8639d7b-7e0d-4f57-a0a2-3ad07509e34d_169.jpeg?w=700&q=90"
              class="card1-img-top"
              alt="Berita 3" />
            <div class="card1-body">
              <h6 class="card1-title">
                Curi Besi Proyek Museum di Solo Senilai Rp 36 Juta, 4 Sekuriti Dibekuk
              </h6>
              <div class="d-flex justify-content-between align-items-center">
                <a
                  href="https://www.detik.com/jateng/hukum-dan-kriminal/d-7737053/curi-besi-proyek-museum-di-solo-senilai-rp-36-juta-4-sekuriti-dibekuk"
                  class="btn btn-read-more1 btn-sm">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card1">
            <img
              src="https://akcdn.detik.net.id/community/media/visual/2025/01/16/petugas-damkar-masih-mencari-orang-yang-dilaporkan-hilang-saat-kebakaran-glodok-plaza-salah-satu-lantai-yang-disisir-ialah-lan-3_169.jpeg?w=700&q=90"
              class="card1-img-top"
              alt="Berita 4" />
            <div class="card1-body">
              <h6 class="card1-title">
                10 Korban Kebakaran Glodok Plaza Belum Ditemukan
              </h6>
              <div class="d-flex justify-content-between align-items-center">
                <a
                  href="https://www.detik.com/jateng/berita/d-7736083/10-korban-kebakaran-glodok-plaza-belum-ditemukan"
                  class="btn btn-read-more1 btn-sm">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card1">
            <img
              src="https://akcdn.detik.net.id/community/media/visual/2025/01/16/tampang-nanang-gimbal-pembunuh-sandy-permana-2_169.jpeg?w=700&q=90"
              class="card1-img-top"
              alt="Berita 2" />
            <div class="card1-body">
              <h6 class="card1-title">
                Rentetan Kekesalan Nanang 'Gimbal' hingga Bunuh Sandy Permana
              </h6>
              <div class="d-flex justify-content-between align-items-center">
                <a
                  href="https://www.detik.com/jateng/hukum-dan-kriminal/d-7735986/rentetan-kekesalan-nanang-gimbal-hingga-bunuh-sandy-permana"
                  class="btn btn-read-more1 btn-sm">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card1">
            <img
              src="https://akcdn.detik.net.id/community/media/visual/2025/01/15/megahnya-proyek-rel-layang-di-simpang-tujuh-joglo-solo_169.jpeg?w=700&q=90"
              class="card1-img-top"
              alt="Berita 3" />
            <div class="card1-body">
              <h6 class="card1-title">
                Megahnya Proyek Rel Layang Simpang Tujuh Joglo di Solo
              </h6>
              <div class="d-flex justify-content-between align-items-center">
                <a
                  href="https://finance.detik.com/foto-bisnis/d-7733440/megahnya-proyek-rel-layang-simpang-tujuh-joglo-di-solo"
                  class="btn btn-read-more1 btn-sm">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card1">
            <img
              src="https://akcdn.detik.net.id/community/media/visual/2025/01/13/laga-persis-solo-melawan-psm-makassar-pada-pekan-ke-18-liga-1-20242025-di-stadion-manahan-solo-senin-1312025-malam_43.jpeg?w=700&q=90"
              class="card1-img-top"
              alt="Berita 4" />
            <div class="card1-body">
              <h6 class="card1-title">
                Persis Solo Evaluasi Debut 3 Pemain Barunya Saat Menjamu PSM
              </h6>
              <div class="d-flex justify-content-between align-items-center">
                <a
                  href="https://www.detik.com/jateng/sepakbola/d-7731165/persis-solo-evaluasi-debut-3-pemain-barunya-saat-menjamu-psm"
                  class="btn btn-read-more1 btn-sm">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card1">
            <img
              src="https://akcdn.detik.net.id/community/media/visual/2025/01/13/makan-bergizi-gratis-3_169.jpeg?w=700&q=90"
              class="card1-img-top"
              alt="Berita 2" />
            <div class="card1-body">
              <h6 class="card1-title">
                Makan Bergizi Gratis Solo Dimulai Hari Ini, Sasar 7 Sekolah-2.787 Murid
              </h6>
              <div class="d-flex justify-content-between align-items-center">
                <a
                  href="https://www.detik.com/jateng/berita/d-7729756/makan-bergizi-gratis-solo-dimulai-hari-ini-sasar-7-sekolah-2-787-murid"
                  class="btn btn-read-more1 btn-sm">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card1">
            <img
              src="https://akcdn.detik.net.id/community/media/visual/2023/07/16/logo-bri-liga-1-logo-liga-1-illustrasi-liga-1-2_169.jpeg?w=700&q=90"
              class="card1-img-top"
              alt="Berita 3" />
            <div class="card1-body">
              <h6 class="card1-title">
                Prediksi Line Up Persis Solo Vs PSM Makassar Malam Nanti
              </h6>
              <div class="d-flex justify-content-between align-items-center">
                <a
                  href="https://www.detik.com/jateng/sepakbola/d-7729551/prediksi-line-up-persis-solo-vs-psm-makassar-malam-nanti"
                  class="btn btn-read-more1 btn-sm">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card1">
            <img
              src="https://akcdn.detik.net.id/community/media/visual/2025/01/19/rumah-duka-politikus-senior-ppp-almarhum-mudrick-sangidu-di-kartopuran-jayengan-kota-solo-minggu-1912025-malam-1_43.jpeg?w=700&q=90"
              class="card1-img-top"
              alt="Berita 4" />
            <div class="card1-body">
              <h6 class="card1-title">
                Wasiat Mudrick Sangidu: Lawan Kezaliman-Minta Maaf Bila Salah
              </h6>
              <div class="d-flex justify-content-between align-items-center">
                <a
                  href="https://www.detik.com/jateng/berita/d-7740079/wasiat-mudrick-sangidu-lawan-kezaliman-minta-maaf-bila-salah"
                  class="btn btn-read-more1 btn-sm">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card1">
            <img
              src="https://akcdn.detik.net.id/community/media/visual/2025/01/20/suasana-rsjd-solo-senin-2012025_169.jpeg?w=700&q=90"
              class="card1-img-top"
              alt="Berita 2" />
            <div class="card1-body">
              <h6 class="card1-title">
                RSJ Solo Ungkap Detik-detik Pasien Kabur Lalu Nyebur Bengawan Solo
              </h6>
              <div class="d-flex justify-content-between align-items-center">
                <a
                  href="https://www.detik.com/jateng/berita/d-7740741/rsj-solo-ungkap-detik-detik-pasien-kabur-lalu-nyebur-bengawan-solo"
                  class="btn btn-read-more1 btn-sm">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card1">
            <img
              src="https://akcdn.detik.net.id/community/media/visual/2025/01/20/suasana-rsjd-solo-senin-2012025_169.jpeg?w=700&q=90"
              class="card1-img-top"
              alt="Berita 2" />
            <div class="card1-body">
              <h6 class="card1-title">
                RSJ Solo Ungkap Detik-detik Pasien Kabur Lalu Nyebur Bengawan Solo
              </h6>
              <div class="d-flex justify-content-between align-items-center">
                <a
                  href="https://www.detik.com/jateng/berita/d-7740741/rsj-solo-ungkap-detik-detik-pasien-kabur-lalu-nyebur-bengawan-solo"
                  class="btn btn-read-more1 btn-sm">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <?php include 'includes/footer.html'; ?>
</body>

</html>
