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

/* Prosedur Layout */
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

/* Responsive Styles */
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
                <h1 class="section-title">Prosedur Pelayanan Informasi Publik</h1>
            </div>
            <div class="column">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content">
                            <div class="prosedur flex">
                                <div class="prosedur-img">
                                    <img src="images/template_ril.jpeg">
                                </div>
                                <div class="prosedur-text">
                                    <h1>
                                        Mekanisme Pelayanan Informasi Publik
                                    </h1>
                                    <ul>
                                        <li>Pemohon informasi publik mengajukan permohonan kepada PPID melalui website PPID, aplikasi mobile DPS fitur pengaduan, SP4N Lapor, surat, email, atau ke petugas layanan informasi publik.</li>
                                        <li>Pemohon informasi publik mengisi formulir permohonan informasi publik dan memenuhi persyaratan:
                                            <ul>
                                                <li>KTP (perorangan)</li>
                                                <li>Akta notaris/SK Organisasi (lembaga/organisasi)</li>
                                            </ul>
                                        </li>
                                        <li>Petugas meregistrasi dan memberikan tanda bukti penerimaan permintaan informasi publik kepada pemohon informasi publik.</li>
                                        <li>Pemohon menerima pemberitahuan dari PPID paling lambat 10 hari kerja sejak permohonan diterima dan dapat diperpanjang 7 (tujuh) hari kerja.</li>
                                        <li><a href="https://drive.google.com/file/d/1CUq-gD30Ho5GqXRx27fKzCiQjad5-wUx/view?pli=1">Unduh formulir permohonan informasi publik</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="section-content">
                            <div class="prosedur flex" id="prosedur-second">
                                <div class="prosedur-text">
                                    <h1>
                                        Mekanisme Pelayanan Informasi Publik bagi Disabilitas
                                    </h1>
                                            <ul>
                                                <li>Pemohon informasi publik disabilitas datang ke PPID Surakarta.</li>
                                                <li>Petugas menyiapkan protokol kesehatan (prokes) untuk memastikan keamanan dan kenyamanan pemohon.</li>
                                                <li>Petugas menerapkan 3S (Senyum, Salam, Sapa) kepada pemohon sebagai bagian dari pelayanan ramah disabilitas.</li>
                                                <li>Petugas membantu pemohon mengisi formulir permohonan informasi publik sesuai kebutuhan.</li>
                                            
                                            <li><a href="https://dropbox.surakarta.go.id/index.php/s/X3vl8vJTEPRU1lc#pdfviewer">SOP</a></li>
                                            </ul>
                                </div>
                                <div class="prosedur-img">
                                    <img src="images/template.png">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>