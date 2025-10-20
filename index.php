<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/all.css" />
    <title>AgriLink - Farmers to Consumers</title>

    <style>
      :root{
        --accent: #0f5132;
        --accent-2: #1fa97a;
      }

      /* Base */
      html,body{height:100%}
      body {
        font-family: "Poppins", monospace;
        background: linear-gradient(90deg,#e8f5e9 0%, #c8e6c9 100%);
        color:#1b4332;
        -webkit-font-smoothing:antialiased;
        -moz-osx-font-smoothing:grayscale;
        margin:0;
        padding-bottom:4rem;
      }

      <?php if (file_exists("style.php")) { include("style.php"); } ?>

      .hero-header { font-weight:700; font-size: clamp(1.6rem, 4vw, 2.8rem); line-height:1.05; }
      .hero-para { font-size: clamp(1rem, 2.6vw, 1.25rem); color: #234; }

      .hero {
        margin-top: 3rem;
        padding: 3rem 1rem;
        background: rgba(255,255,255,0.35);
        border-radius: 12px;
        box-shadow: 0 6px 18px rgba(31, 169, 122, 0.06);
      }
      .category-pill {
        background: rgba(31, 169, 122, 0.12);
        color: var(--accent);
        border-radius: 999px;
        padding: 0.35rem 0.75rem;
        display:inline-block;
        font-weight:600;
        margin: 0.25rem 0.35rem;
        white-space:nowrap;
        font-size: .9rem;
      }

      .product-card, 
      .farmer-card { 
        border: none; 
        border-radius: 12px; 
        overflow: hidden; 
        transition: transform .18s ease, box-shadow .18s ease; 
      }
      .product-card:hover, 
      .farmer-card:hover { 
        transform: translateY(-6px); 
        box-shadow: 0 12px 30px rgba(20, 80, 50, 0.08); 
      }
      .card-img-top {
        width:100%;
        height:190px;
        object-fit:cover;
      }
      @media(min-width:992px){
        .card-img-top { 
          height:160px; 
        }
      }

      .small-muted { color: #6c757d; font-size:.9rem; }
      .product-header { font-size: clamp(1.25rem, 2.6vw, 1.6rem); font-weight:700; }
      .why-header { font-size: clamp(1.3rem, 3vw, 1.9rem); font-weight:700; }
      .why-para { font-size: clamp(.95rem, 2.2vw, 1.05rem); color:#345; }

      .search-input .form-control {
        border-radius: 999px 0 0 999px;
        min-height:48px;
      }
      .search-input .btn {
        border-radius: 0 999px 999px 0;
        min-height:48px;
      }

      footer { 
        margin-top: 3.5rem; 
        padding-top:1.5rem; 
      }

      .btn-outline-success { 
        border-color: rgba(31,169,122,.9); 
      }
      .text-success { 
        color: var(--accent-2) !important; 
      }

      .hero .gap-2 { 
        display:flex; 
        flex-wrap:wrap; 
        gap:.5rem; 
        justify-content:center; 
      }
    </style>
  </head>

  <body>
    <div class="container-fluid px-3 px-md-5">
      <!-- Navigation -->
      <?php include("header.php"); ?>

      <!-- HERO -->
      <section class="hero mx-auto" style="max-width:1200px;">
        <div class="row align-items-center">
          <div class="col-lg-7 text-center text-lg-start mb-3 mb-lg-0">
            <h1 class="hero-header">
              Connecting <span class="text-success">Farmers & Consumers</span> Seamlessly
            </h1>
            <p class="hero-para mb-3">
              Empowering <span class="text-success">agriculture</span> through digital innovation
            </p>

            <!-- Search Input -->
            <form class="row g-2 align-items-center justify-content-center justify-content-lg-start" role="search" aria-label="Search products">
              <div class="col-12 col-md-9 col-lg-8 search-input">
                <div class="input-group">
                  <span class="input-group-text bg-white border-0" id="search-icon" style="border-radius:999px 0 0 999px;">
                    <i class="bi bi-search" aria-hidden="true"></i>
                  </span>
                  <input type="search" class="form-control" placeholder="Search products, farmers, locations..." aria-label="Search" aria-describedby="search-icon">
                  <button class="btn btn-success d-none d-md-inline" type="submit">Search</button>
                  <!-- on very small screens show icon-only button -->
                  <button class="btn btn-success d-md-none" type="submit" aria-label="Search"><i class="bi bi-search"></i></button>
                </div>
              </div>
            </form>

            <div class="mt-3 d-flex gap-2 justify-content-center justify-content-lg-start">
              <a href="register-farmer.php" class="btn btn-outline-success btn-lg">Register as Farmer</a>
              <a href="register-consumer.php" class="btn btn-success btn-lg text-white">Register as Consumer</a>
            </div>
          </div>

          <div class="col-lg-5 text-center">
            <img src="images/hero-farm.png" alt="AgriLink hero image" class="img-fluid" style="max-height:260px; object-fit:contain;">
            <div class="mt-3 d-flex gap-2 justify-content-center flex-wrap">
              <span class="category-pill">Vegetables</span>
              <span class="category-pill">Fruits</span>
              <span class="category-pill">Grains</span>
              <span class="category-pill">Livestock</span>
              <span class="category-pill">Dairy</span>
              <span class="category-pill">Organic</span>
            </div>
          </div>
        </div>
      </section>

      <!-- Popular products -->
      <section class="products mt-5 mx-auto" style="max-width:1200px;">
        <div class="d-flex align-items-center justify-content-between mb-3">
          <h2 class="mb-0 product-header">Popular products</h2>
          <a href="products.php" class="link-success">See all</a>
        </div>

        <div class="row g-4">
          <div class="col-6 col-sm-6 col-md-4 col-lg-3">
            <div class="card product-card">
              <img src="images/vegetables/tomato.png" class="card-img-top" alt="Tomatoes — 1 crate" />
              <div class="card-body">
                <h6 class="card-title mb-1">Tomato — 1 crate</h6>
                <p class="mb-1 text-success fw-bold">&#8358;10,000</p>
                <p class="small-muted mb-2">From: <a href="farmers.php" class="link-dark">Farmer Ade</a></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="small-muted">Kano</div>
                  <a class="btn btn-outline-success btn-sm" href="pages/product_details.php">View</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-6 col-sm-6 col-md-4 col-lg-3">
            <div class="card product-card">
              <img src="images/fruits/banana.png" class="card-img-top" alt="Banana — 25kg" />
              <div class="card-body">
                <h6 class="card-title mb-1">Banana — 25kg</h6>
                <p class="mb-1 text-success fw-bold">&#8358;12,500</p>
                <p class="small-muted mb-2">From: <a href="farmers.php" class="link-dark">Mama Joy</a></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="small-muted">Sokoto</div>
                  <a class="btn btn-outline-success btn-sm" href="pages/product_details.php">View</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-6 col-sm-6 col-md-4 col-lg-3">
            <div class="card product-card">
              <img src="images/roots/cotton.png" class="card-img-top" alt="Cotton — 50kg" />
              <div class="card-body">
                <h6 class="card-title mb-1">Cotton — 50kg</h6>
                <p class="mb-1 text-success fw-bold">&#8358;25,000</p>
                <p class="small-muted mb-2">From: <a href="farmers.php" class="link-dark">FarmCo</a></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="small-muted">Ibadan</div>
                  <a class="btn btn-outline-success btn-sm" href="pages/product_details.php">View</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-6 col-sm-6 col-md-4 col-lg-3">
            <div class="card product-card">
              <img src="images/grains_legumes/rice.png" class="card-img-top" alt="Local Rice — 50kg" />
              <div class="card-body">
                <h6 class="card-title mb-1">Local Rice — 50kg</h6>
                <p class="mb-1 text-success fw-bold">&#8358;45,000</p>
                <p class="small-muted mb-2">From: <a href="farmers.php" class="link-dark">Greenfields</a></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="small-muted">Lagos</div>
                  <a class="btn btn-outline-success btn-sm" href="pages/product_details.php">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Top farmers -->
      <section class="mt-5 mx-auto" style="max-width:1200px;">
        <div class="d-flex align-items-center justify-content-between mb-3">
          <h3 class="mb-0">Top farmers</h3>
          <a href="farmers.php" class="link-success">Explore farmers</a>
        </div>

        <div class="row g-4">
          <div class="col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card farmer-card">
              <img src="" class="card-img-top" alt="Farmer Ade profile" />
              <div class="card-body">
                <h6 class="mb-1">Farmer Ade</h6>
                <p class="small-muted">Location: Kano</p>
                <p class="small-muted">Products: Tomatoes, Peppers, Okra</p>
                <div class="d-flex justify-content-between align-items-center mt-2">
                  <a href="farmers.php" class="btn btn-outline-success btn-sm">View profile</a>
                  <div class="small-muted">
                    <i class="bi bi-star-fill text-warning" aria-hidden="true"></i> 4.6
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card farmer-card">
              <img src="" class="card-img-top" alt="Mama Joy profile" />
              <div class="card-body">
                <h6 class="mb-1">Mama Joy</h6>
                <p class="small-muted">Location: Sokoto</p>
                <p class="small-muted">Products: Onions, Garri</p>
                <div class="d-flex justify-content-between align-items-center mt-2">
                  <a href="farmers.php" class="btn btn-outline-success btn-sm">View profile</a>
                  <div class="small-muted">
                    <i class="bi bi-star-fill text-warning" aria-hidden="true"></i> 4.8
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card farmer-card">
              <img src="" class="card-img-top" alt="FarmCo profile" />
              <div class="card-body">
                <h6 class="mb-1">FarmCo</h6>
                <p class="small-muted">Location: Ibadan</p>
                <p class="small-muted">Products: Garri, Yam</p>
                <div class="d-flex justify-content-between align-items-center mt-2">
                  <a href="farmers.php" class="btn btn-outline-success btn-sm">View profile</a>
                  <div class="small-muted">
                    <i class="bi bi-star-fill text-warning" aria-hidden="true"></i> 4.4
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- How AgriLink works -->
      <section class="mt-5 mx-auto text-center" style="max-width:1100px;">
        <h2 class="product-header mb-4">How <span class="text-success">AgriLink</span> Works</h2>
        <div class="row g-4">
          <div class="col-12 col-md-4">
            <i class="fa-solid fa-user-plus fa-3x text-success" aria-hidden="true"></i>
            <h5 class="mt-3">1. Register</h5>
            <p>Create an account as a farmer or buyer.</p>
          </div>
          <div class="col-12 col-md-4">
            <i class="fa-solid fa-box-open fa-3x text-success" aria-hidden="true"></i>
            <h5 class="mt-3">2. List or browse products</h5>
            <p>Farmers upload available produce, buyers explore fresh items.</p>
          </div>
          <div class="col-12 col-md-4">
            <i class="fa-solid fa-truck fa-3x text-success" aria-hidden="true"></i>
            <h5 class="mt-3">3. Order & Get Delivery</h5>
            <p>Make orders and get farm-fresh goods delivered fast.</p>
          </div>
        </div>
      </section>

      <!-- Why choose us -->
      <section class="mt-5 mx-auto text-center" style="max-width:1100px;">
        <h2 class="why-header">Why <span class="text-success">Choose Us</span></h2>
        <p class="why-para mb-4">Empowering farmers, connecting buyers, and delivering fresh produce the smart way.</p>

        <div class="row g-4">
          <div class="col-12 col-md-4">
            <i class="fa-solid fa-hand-holding-dollar fa-3x mb-3 text-success" aria-hidden="true"></i>
            <h5 class="fw-bold">Fair Prices</h5>
            <p>Farmers earn more while buyers pay less with transparent pricing.</p>
          </div>

          <div class="col-12 col-md-4">
            <i class="fa-solid fa-leaf fa-3x mb-3 text-success" aria-hidden="true"></i>
            <h5 class="fw-bold">Fresh & Organic</h5>
            <p>All produce comes directly from trusted, verified farms.</p>
          </div>

          <div class="col-12 col-md-4">
            <i class="fa-solid fa-truck-fast fa-3x mb-3 text-success" aria-hidden="true"></i>
            <h5 class="fw-bold">Fast Delivery</h5>
            <p>With integrated logistics, we ensure your order arrives quickly and safely.</p>
          </div>

          <div class="col-12 col-md-4">
            <i class="fa-solid fa-users fa-3x mb-3 text-success" aria-hidden="true"></i>
            <h5 class="fw-bold">Farmer Empowerment</h5>
            <p>We connect farmers directly to national markets.</p>
          </div>

          <div class="col-12 col-md-4">
            <i class="fa-solid fa-lock fa-3x mb-3 text-success" aria-hidden="true"></i>
            <h5 class="fw-bold">Secure Transactions</h5>
            <p>Your data and payments are protected by secure systems.</p>
          </div>

          <div class="col-12 col-md-4">
            <i class="fa-solid fa-globe fa-3x mb-3 text-success" aria-hidden="true"></i>
            <h5 class="fw-bold">Nationwide Reach</h5>
            <p>Connecting farmers and buyers across regions with ease and trust.</p>
          </div>
        </div>
      </section>

      <!-- Footer  -->
      <?php if(file_exists("footer.php")) {include("footer.php");} ?>

    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
