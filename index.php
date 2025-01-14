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
    function isInViewport(element) {
      const rect = element.getBoundingClientRect();
      const viewportHeight = window.innerHeight;

      return (rect.top < viewportHeight * 0.6 && rect.bottom > viewportHeight * 0.5);

    }

    document.addEventListener("DOMContentLoaded", function() {
      const contentElements = document.querySelectorAll('.fade-content, .pop-content');
      const groupElements = document.querySelectorAll('.groupInfo');

      window.addEventListener('scroll', function() {
        contentElements.forEach((element) => {
          if (isInViewport(element)) {
            if (element.classList.contains('fade-content')) {
              element.classList.add('fade-in');
            } else if (element.classList.contains('pop-content')) {
              element.classList.add('pop-in');
            }
          }
        });

        contentElements.forEach((element) => {
          if (element.classList.contains('pop-content') && isInViewport(element)) {
            document.querySelectorAll('.pop-content').forEach((popElement) => {
              popElement.classList.add('pop-in');
            });
          }
        });
      });
    });
  </script>


</body>

</html>