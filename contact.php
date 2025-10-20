<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/logo.png" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="animate.min.css" />
    <title>AgriLink - Farmers to Consumers</title>
    <style>
      body {
        background: linear-gradient(to left, #e8f5e9, #c8e6c9);
        font-family: "poppins", monospace;
      }
      <?php include("style.php"); ?>
      .con {
        margin-top: 10%;
      }
    </style>
  </head>
  <body class="container">
    <nav class="navbar bar fixed-top navbar-expand-lg mb-5 glass-navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img width="60" height="60" src="images/logo.png" alt=""/>
        </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav mx-auto gap-5">
            <li class="nav-item">
              <a
                class="bar-link active"
                href="index.php"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="bar-link" href="farmers.php">Farmers</a>
            </li>
            <li class="nav-item">
              <a class="bar-link" href="products.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="bar-link" href="orders.php">Orders</a>
            </li>
            <li class="nav-item">
              <a class="bar-link" href="admin.php">Admin</a>
            </li>
            <li class="nav-item">
              <a class="bar-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
  </body>
  <div class="container con">
    <div class="row">
      <div class="col-md-6">
        <h2 class="text-success">Contact us</h2>
        <p class="small text-muted">
          Have a question? Send a message and we'll get back to you within
          48 hours.
        </p>

        <form action="process/process_contact.php" method="post">
          <div class="mb-3">
            <input name="fullname" class="form-control" placeholder="Fullname" required />
          </div>
          <div class="mb-3">
            <input name="email" class="form-control" type="email" placeholder="Email" required />
          </div>
          <div class="mb-3">
            <textarea name="message" class="form-control" rows="5" placeholder="Message" required></textarea>
          </div>
          <button class="btn btn-success" name="btn">Send message</button>
        </form>
      </div>

      <div class="col-md-6">
        <h6>Office</h6>
        <p class="small text-muted">Lagos . Nigeria</p>
        <h6>Support</h6>
        <p class="small text-muted">
          support@agrilink.com . +234 704 297 2024
        </p>

        <div class="mt-3">
          <div
            style="
              background: #e9ecef;
              height: 220px;
              display: flex;
              align-items: center;
              justify-content: center;
            "
            class="rounded"
          >
            Map placeholder
          </div>
        </div>
      </div>
    </div>
  </div>
</html>
