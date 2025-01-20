<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PPID Kota Surakarta</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/animation.css" />
  <script src="https://cdn.jsdelivr.net/npm/particles.js"></script>
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

    #particles-js {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
    }
  </style>
</head>

<body>
<div id="particles-js" style="position: absolute; top: 0; left: 0; width: 100%; height: 50%; z-index: 1000; pointer-events: none;"></div>
  <?php include 'includes/navbar.html'; ?>
  <?php include 'includes/header.html'; ?>

  <!-- Main Content -->
  <div class="fade-content">
    <?php include 'main/informasi.html'; ?>
  </div>
  <div class="fade-content">
    <?php include 'main/data.html'; ?>
  </div>
  <div class="fade-content">
    <?php include 'main/penghargaan.html'; ?>
  </div>
  <div class="fade-content">
    <?php include 'main/berita.html'; ?>
  </div>
  <div class="fade-content">
    <?php include 'main/website.html'; ?>
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
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <script>
    particlesJS('particles-js', {
      "particles": {
        "number": {
          "value": 80,
          "density": {
            "enable": true,
            "value_area": 800
          }
        },
        "color": {
          "value": "#A52A2A"
        },
        "shape": {
          "type": "circle"
        },
        "opacity": {
          "value": 0.5,
          "random": false
        },
        "size": {
          "value": 3,
          "random": true
        },
        "line_linked": {
          "enable": true,
          "distance": 150,
          "color": "#dbdbdb",
          "opacity": 0.6,
          "width": 2
        },
        "move": {
          "enable": true,
          "speed": 2,
          "direction": "none",
          "random": false,
          "straight": false,
          "out_mode": "out",
          "bounce": false
        }
      },
      "interactivity": {
        "detect_on": "canvas",
        "events": {
          "onhover": {
            "enable": true,
            "mode": "repulse"
          },
          "onclick": {
            "enable": true,
            "mode": "push"
          },
          "resize": true
        }
      },
      "retina_detect": true
    });
  </script>
  <script src=" https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js "></script>

</body>

</html>