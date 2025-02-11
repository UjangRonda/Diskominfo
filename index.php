<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PPID Kota Surakarta</title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="font/bootstrap-icons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/keyframe.css" />
  <script src="particle/particles.js"></script>
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

    /* Keyframe animations */
    @keyframes slideInFadeUp {
      0% {
        opacity: 0;
        transform: translateY(30px);
      }

      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }
    @keyframes slideInFadeDown {
      0% {
        opacity: 0;
        transform: translateY(-30px);
      }

      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeInScale {
      0% {
        opacity: 0;
        transform: scale(0.95);
      }

      100% {
        opacity: 1;
        transform: scale(1);
      }
    }

    .animate-content {
      opacity: 0;
      visibility: hidden;
    }

    .animate-content.visible {
      animation: slideInFadeUp 0.8s ease forwards;
      visibility: visible;
    }

    .navbar-animate {
      animation: slideInFadeDown 0.4s ease forwards;
    }

    .header-animate {
      animation: slideInFadeDown 0.8s ease forwards;
    }

    .footer-animate {
      animation: slideInFadeUp 1.2s ease forwards;
    }

    .informasi-animate {
      animation-delay: 0.2s;
    }

    .data-animate {
      animation-delay: 0.3s;
    }

    .penghargaan-animate {
      animation-delay: 0.4s;
    }

    .berita-animate {
      animation-delay: 0.5s;
    }

    .website-animate {
      animation-delay: 0.6s;
    }
  </style>
</head>

<body>
  <div id="particles-js" style="position: absolute; top: 0; left: 0; width: 100%; height: 50%; z-index: 1000; pointer-events: none;"></div>
 
  <?php include 'includes/navbar.html'; ?>

  <?php include 'includes/header.html'; ?>

  <div class="animate-content informasi-animate">
    <?php include 'main/informasi.html'; ?>
  </div>

  <div class="animate-content data-animate">
    <?php include 'main/data.html'; ?>
  </div>

  <div class="animate-content penghargaan-animate">
    <?php include 'main/penghargaan.html'; ?>
  </div>

  <div class="animate-content berita-animate">
    <?php include 'main/berita.html'; ?>
  </div>

  <div class="animate-content website-animate">
    <?php include 'main/website.html'; ?>
  </div>

  <?php include 'includes/footer.html'; ?>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const navbar = document.querySelector('nav');
      const header = document.querySelector('header');
      const footer = document.querySelector('footer');
      const sections = document.querySelectorAll('.animate-content');

      if (navbar) navbar.classList.add('navbar-animate');
      if (header) header.classList.add('header-animate');
      if (footer) footer.classList.add('footer-animate');

      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
          }
        });
      }, {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
      });

      sections.forEach(section => {
        observer.observe(section);
      });
    });
  </script>
  <script src="particle/particles.min.js"></script>
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