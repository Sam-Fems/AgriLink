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
          <form
            class="d-flex collapse navbar-collapse"
            id="navbarNavDropdown"
            role="search"
          >
          <input
            class="form-control me-2"
            type="search"
            placeholder="Search Farmer Name or Produce"
            aria-label="Search"
          />
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto gap-3">
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
    
    <div class="container con">
        <h1 class="text-success">My orders</h1>
        <p class="small text-muted">
          Orders you placed as a consumer.
        </p>

      <div class="table-responsive-md mt-4">
        <table class="table table-borderless">
          <thead>
            <tr>
              <th>Order #</th>
              <th>Product</th>
              <th>Farmer</th>
              <th>Qty</th>
              <th>Price</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1001</td>
              <td>Tomato — 1 crate</td>
              <td>Farmer Ade</td>
              <td>1</td>
              <td>₦10,000</td>
              <td><span class="badge bg-warning text-dark">Pending</span></td>
              <td><a class="btn btn-sm btn-outline-secondary">Details</a></td>
            </tr>
            <tr>
              <td>1002</td>
              <td>Rice — 50kg</td>
              <td>Greenfields</td>
              <td>1</td>
              <td>₦45,000</td>
              <td><span class="badge bg-success">Delivered</span></td>
              <td><a class="btn btn-sm btn-outline-secondary">Invoice</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
  </body>
</html>
