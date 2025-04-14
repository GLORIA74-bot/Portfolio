<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio | SENOU ABLAVI GLORIA</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="index.css" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #1f1c2c, #928dab);
      color: #fff;
    }

    .navbar {
      backdrop-filter: blur(10px);
    }

    header {
      position: relative;
      overflow: hidden;
    }

    header::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background: url('img/bg.jpg') center/cover no-repeat;
      filter: brightness(0.4);
      z-index: -1;
    }

    .glow-box {
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.15);
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
      backdrop-filter: blur(15px);
      border-radius: 20px;
      animation: fadeIn 1.5s ease;
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
        transform: translateY(30px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .profile-img {
      width: 200px;
      height: 200px;
      object-fit: cover;
      border-radius: 50%;
      border: 4px solid #fff;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);
    }

    .profile-img:hover {
      transform: scale(1.05);
      box-shadow: 0 0 30px rgba(255, 255, 255, 0.4);
    }

    h1 {
      font-size: 3rem;
    }

    h2 {
      color: #ddd;
      font-weight: 300;
    }

    .btn-outline-light {
      border-radius: 30px;
      transition: all 0.3s ease;
    }

    .btn-outline-light:hover {
      background-color: #fff;
      color: #000;
      transform: scale(1.05);
    }
    nav {
    display: flex;
    gap: 30px;
  }

 nav a {
    text-decoration: none;
    color: #a31212;
    font-weight: 500;
    position: relative;
    padding: 5px 0;
    transition: color 0.3s ease;
  }
  nav a::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -4px;
    width: 100%;
    height: 2px;
    background: #16a085;
    transform: scaleX(0);
    transition: transform 0.3s ease;
    transform-origin: right;
  }
  nav a:hover {
    color: #16a085;
  }

  nav a:hover::after {
    transform: scaleX(1);
    transform-origin: left;
  }
  </style>
</head>
<body>

  <!-- Navbar -->
  <header class="bg-black text-white py-3 px-4 shadow sticky-top d-flex justify-content-between align-items-center">
  <div class="d-flex align-items-center">
    <img src="img/1.jpg" alt="Photo de Gloria" class="rounded-circle me-2" width="50" height="50">
    <h1 class="fs-4 m-0">SENOU ABLAVI GLORIA</h1>
  </div>
  <nav>
    <ul class="nav">
      <li class="nav-item"><a href="ex.php" class="nav-link text-white">Accueil</a></li>
      <li class="nav-item"><a href="pro.html" class="nav-link text-white active">Projets</a></li>
      <li class="nav-item"><a href="apropos.html" class="nav-link text-white">À propos</a></li>
      <li class="nav-item"><a href="contact.php" class="nav-link text-white">Contact</a></li>
    </ul>
  </nav>
</header>

  <!-- Header -->
  <header class="vh-100 d-flex justify-content-center align-items-center px-3">
    <div class="glow-box d-flex flex-column flex-md-row align-items-center text-center p-4 rounded-4">
      <div class="me-md-5 mb-4 mb-md-0">
        <img src="img/1.jpg" alt="SENOU ABLAVI GLORIA" class="profile-img">
      </div>
      <div>
        <h1 class="fw-bold mb-3">SENOU ABLAVI GLORIA</h1>
        <h2 class="fs-4 mb-4" id="typed-text"></h2>
        <a href="pro.html" class="btn btn-outline-light btn-lg mt-3">Voir mes projets</a>
      </div>
    </div>
  </header>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
  <script>
    const typed = new Typed("#typed-text", {
      strings: [
        "Étudiante en réseau",
        "Développeuse Web",
        "Passionnée de technologie",
        "Toujours prête à apprendre"
      ],
      typeSpeed: 50,
      backSpeed: 25,
      loop: true
    });
  </script>
</body>
</html>