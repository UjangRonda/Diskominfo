<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PPID Kota Surakarta</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/animation.css" />
</head>

<body>
  <?php include 'includes/navbar.html'; ?>
  <?php include 'includes/header.html'; ?>

  <!-- Main Content -->
  <div class="fade-content">
    <?php include 'main/layanan-kami.html'; ?>
  </div>
  <div class="">
    <?php include 'main/informasi-publik.html'; ?>
  </div>
  <div class="fade-content">
    <?php include 'main/Pusat-Informasi-Terpadu.html'; ?>
  </div>
  <div class="fade-content">
    <?php include 'main/Keunggulan.html'; ?>
  </div>
  <div class="fade-content">
    <?php include 'main/penghargaan.html'; ?>
  </div>
  <div class="fade-content">
    <?php include 'main/berita.html'; ?>
  </div>

  <?php include 'includes/footer.html'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>

    /* BUAT NGILANG!!! */
    function isInViewport(element) {
      const rect = element.getBoundingClientRect();
      return rect.top >= 0 && rect.bottom <= window.innerHeight;
    }

    document.addEventListener("DOMContentLoaded", function() {
      const contentElements = document.querySelectorAll('.fade-content');

      window.addEventListener('scroll', function() {
        contentElements.forEach((element, index) => {
          if (isInViewport(element)) {
            element.classList.add('fade-in');
          }
        });
      });
    });
  </script>

</body>

</html>
