<nav class="navbar bar fixed-top navbar-expand-md mb-5 glass-navbar">
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
      <ul class="navbar-nav mx-auto gap-4">
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
  <div class="dropdown collapse navbar-collapse" id="navbarNavDropdown">
    <button
      class="btn btn-success dropdown-toggle m-3"
      type="button"
      data-bs-toggle="dropdown"
      aria-expanded="false"
    >
      Register
    </button>
    <ul class="dropdown-menu">
      <li>
        <a href="pages/sign_farmer.php" class="dropdown-item"
          >As a farmer</a
        >
      </li>
      <li>
        <a href="pages/sign_buyer.php" class="dropdown-item"
          >As a buyer</a
        >
      </li>
    </ul>
  </div>
  <div class="dropdown collapse navbar-collapse" id="navbarNavDropdown">
    <button
      class="btn button btn-success dropdown-toggle m-3"
      type="button"
      data-bs-toggle="dropdown"
      aria-expanded="false"
    >
      Login
    </button>
    <ul class="dropdown-menu">
      <li>
        <a href="#" class="dropdown-item">As a farmer</a>
      </li>
      <li>
        <a href="#" class="dropdown-item">As a buyer</a>
      </li>
    </ul>
  </div>
</nav>