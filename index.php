<?php
// index.php - home page
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>LifeChoices Shop</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
    body,
    html {
      height: 100%;
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .hero {
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
        url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?fit=crop&w=1500&q=80') no-repeat center center;
      background-size: cover;
      color: white;
      text-align: center;
      height: 90vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .hero h1 {
      font-size: 4rem;
      font-weight: bold;
      animation: fadeInDown 1s ease-in-out;
    }

    .hero p {
      font-size: 1.5rem;
      margin-top: 10px;
      animation: fadeInUp 1.2s ease-in-out;
    }

    .hero .btn {
      margin-top: 25px;
      padding: 12px 28px;
      font-size: 1.2rem;
      animation: fadeIn 2s ease-in-out;
    }

    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-30px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    footer a {
      transition: color 0.3s ease !important;
    }

    footer a:hover {
      color: #ffc107 !important;
      /* gold/yellow hover */
    }

    footer p {
      margin: 0;
    }
  </style>
</head>

<body>
  <?php include 'nav2.php'; ?>
  <div class="hero">
    <h1><i class="fas fa-seedling"></i> LifeChoices Shop</h1>
    <p>Tools to help you grow, focus, and thrive</p>
    <a href="products-def.php" class="btn btn-warning shadow-lg"><i class="fas fa-shopping-bag me-2"></i>Browse
      Products</a>
  </div>
  <footer class="bg-dark text-white pt-4 pb-3">
    <div class="container text-center">
      <div class="mb-3">
        <a href="#" class="text-white mx-2"><i class="fab fa-facebook-f fa-lg"></i></a>
        <a href="#" class="text-white mx-2"><i class="fab fa-twitter fa-lg"></i></a>
        <a href="#" class="text-white mx-2"><i class="fab fa-instagram fa-lg"></i></a>
        <a href="#" class="text-white mx-2"><i class="fab fa-linkedin-in fa-lg"></i></a>
      </div>
      <hr>
      <p class="mb-1">© <?= date("Y") ?> LifeChoices. All rights reserved.</p>
      <p class="small">Empowering your growth, one product at a time.</p>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/js/all.min.js"></script>
</body>

</html>