<?php
include 'db.php';
session_start();

// Get all items
$sql = "SELECT * FROM items";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Products</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>

<style>
  body {
    background: url('images/body_bg.png') no-repeat center center fixed;
    background-size: cover;
    color: white;
  }

  .card {
    background-color: rgba(0, 0, 0, 0.7);
    color: white;
  }

  .card img {
    border-radius: 4px;
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

<body>
  <?php include 'nav2.php'; ?>
  <div class="container mt-5">
    <h2 class="mb-4 text-center display-4">Our Products</h2>
    <p class="lead text-center">We offer a wide range of products to help you grow, focus, and thrive</p>
    <hr class="my-5">
    <div class="row">
      <?php while ($row = $result->fetch_assoc()) { ?>
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img src="<?= $row['item_url'] ?>" class="card-img-top" alt="<?= $row['item_name'] ?>"
              style="height: 250px; object-fit: cover;">
            <div class="card-body">
              <h5 class="card-title"><?= $row['item_name'] ?></h5>
              <p class="card-text"><?= $row['item_description'] ?></p>
              <p><strong>Price:</strong> R<?= $row['item_price'] ?>.00</p>
              <a href="login.php"><button class="btn btn-outline-warning">Login to purchase</button></a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
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

</body>

</html>