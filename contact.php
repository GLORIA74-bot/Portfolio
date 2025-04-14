<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Contact</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #1b1b1b, #111);
      color: #f1f1f1;
      font-family: 'Segoe UI', sans-serif;
      padding-top: 100px;
    }

    .container-contact {
      max-width: 600px;
      background: #222;
      border-radius: 20px;
      padding: 40px 30px;
      box-shadow: 0 0 25px rgba(22, 160, 133, 0.3);
      animation: fadeInUp 1s ease;
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
      color: #16a085;
      font-weight: 700;
    }

    label {
      margin-top: 10px;
      color: #ddd;
    }

    .form-control {
      background: #333;
      color: #fff;
      border: 1px solid #555;
      border-radius: 10px;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control:focus {
      border-color: #16a085;
      box-shadow: 0 0 8px rgba(22, 160, 133, 0.5);
    }

    .btn-custom {
      background-color: #16a085;
      color: #fff;
      border: none;
      border-radius: 30px;
      padding: 12px 25px;
      margin-top: 20px;
      transition: background 0.3s ease;
    }

    .btn-custom:hover {
      background-color: #138d75;
    }

    .infos {
      margin-bottom: 25px;
      font-size: 0.95rem;
    }

    .infos a {
      color: #1abc9c;
      text-decoration: none;
    }

    .infos a:hover {
      text-decoration: underline;
    }

    .alert-custom {
      background-color: rgba(22, 160, 133, 0.1);
      border-left: 4px solid #16a085;
      color: #16a085;
      padding: 15px;
      margin-bottom: 20px;
      border-radius: 10px;
      animation: fadeIn 1s ease;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(40px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeIn {
      from {opacity: 0;}
      to {opacity: 1;}
    }

    @media (max-width: 768px) {
      .container-contact {
        padding: 25px 20px;
      }
    }

    .spinner-border {
      width: 1.2rem;
      height: 1.2rem;
    }
  </style>
</head>
<body>

  <div class="container container-contact">

    <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
      <div class="alert-custom text-center">
        <strong>Message envoyé avec succès !</strong><br>
        <a href="index.html" class="btn btn-sm btn-outline-success mt-2">Retour à l’accueil</a>
      </div>
    <?php endif; ?>

    <h1>Contactez-moi</h1>

    <div class="infos">
      <div><strong>Email :</strong> <a href="mailto:senougloria@gmail.com">senougloria@gmail.com</a></div>
      <div><strong>WhatsApp :</strong> <a href="https://wa.me/22891842213?text=Bonjour%20j%27ai%20besoin%20d%27infos" target="_blank">
  +228 91 84 22 13
</a></div>
      <div><strong>Localisation :</strong> Lomé, Togo</div>
    </div>

    <form id="contactForm" action="envoyer.php" method="post">
      <div class="mb-3">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" class="form-control" placeholder="Votre nom" required>
      </div>

      <div class="mb-3">
        <label for="email">Adresse Email</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="exemple@mail.com" required>
      </div>

      <div class="mb-3">
        <label for="sujet">Sujet</label>
        <input type="text" id="sujet" name="sujet" class="form-control" placeholder="Sujet du message">
      </div>

      <div class="mb-3">
        <label for="message">Message</label>
        <textarea id="message" name="message" class="form-control" rows="4" placeholder="Votre message..." required></textarea>
      </div>

      <button type="submit" id="submitBtn" class="btn btn-custom w-100">
        <span id="btnText">Envoyer</span>
        <span id="spinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
      </button>
    </form>
  </div>

  <script>
    const form = document.getElementById("contactForm");
    const submitBtn = document.getElementById("submitBtn");
    const btnText = document.getElementById("btnText");
    const spinner = document.getElementById("spinner");

    form.addEventListener("submit", function () {
      submitBtn.disabled = true;
      btnText.textContent = "Envoi...";
      spinner.classList.remove("d-none");
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>