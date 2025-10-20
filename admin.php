<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/logo.png" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="animate.min.css" />
  <link rel="stylesheet" href="fontawesome/css/all.css" />
  <title>AgriLink - Farmers to Consumers</title>
  <style>
    :root{
      --brand-green: #1fa97a;
      --soft-green: #e8f8f0;
      --card-bg: rgba(255,255,255,0.85);
      --sidebar-bg: linear-gradient(180deg,#f3fff8 0%, #e6fff2 100%);
      --glass: rgba(255,255,255,0.55);
    }
    body {
      background: linear-gradient(180deg, #f3fff8 0%, #e8f5e9 100%);
      font-family: "Poppins", system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial;
      color: #123;
      min-height: 100vh;
      padding-top: 80px;
    }
    <?php include("style.php"); ?>

    /* Navbar */
    .glass-navbar{
      background: rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border-bottom: 1px solid rgba(255, 255, 255, 0.3);
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    .navbar .navbar-brand img{ 
      border-radius:12px; 
    }
    .bar-link{ 
      color: #0b6b4a; 
      font-weight:600; 
    }
    .bar-link:hover{ 
      color: var(--brand-green); 
      text-decoration:none; 
    }

    /* Layout */
    .con { margin-top: 2rem; }
    .atb { margin-top: 1.5rem; }

    /* Sidebar */
    .admin-sidebar{
      min-height: calc(100vh - 140px);
      background: var(--sidebar-bg);
      border-right: none;
      padding: 2rem 1.5rem;
      border-radius: 12px;
      box-shadow: 0 8px 24px rgba(31,169,122,0.06);
      position: sticky; top: 100px;
    }
    .brand{ 
      color: var(--brand-green); 
      font-weight:800; 
    }
    .admin-sidebar 
    .nav-link{
      color: #0a3b2c; 
      padding: .6rem 0; 
      border-radius: 8px; 
      display:flex; 
      align-items:center; 
      gap:.6rem;
    }
    .admin-sidebar .nav-link i{ 
      font-size:1.05rem; 
      width:22px; 
      text-align:center; }
    .admin-sidebar .nav-link:hover{ 
      background: rgba(31,169,122,0.07); 
      color: var(--brand-green); 
      text-decoration:none; 
      transform: translateX(4px); 
    }

    /* Cards */
    .stat-card{ 
      border-left: 6px solid rgba(31, 169, 122, 0.16); 
      border-radius: 10px; 
      color:#083; }
    .stat-card 
    .small{ 
      color: rgba(255,255,255,0.9); 
    }
    .stat-card 
    .h4{ 
      color: rgba(0,0,0,0.7); 
    }

    .card-ghost{ 
      background: var(--card-bg); 
      border:none; border-radius:12px; 
      box-shadow: 0 6px 18px rgba(17,24,39,0.05); 
    }

    .badge-status{ padding:.45rem .6rem; border-radius:10px; font-weight:600; }

    /* Small Utilities */
    .icon-circle{ 
      width:52px; 
      height:52px; 
      display:inline-flex; 
      align-items:center; 
      justify-content:center; 
      border-radius:12px; 
      background: rgba(31,169,122,0.08); 
    }

    @media (max-width: 767px){
      .admin-sidebar{ 
        position: static; 
        margin-bottom:1rem; 
        min-height: auto; }
      body{
         padding-top: 70px; 
      }
    }
  </style>
</head>
<body>
  <nav class="navbar bar fixed-top navbar-expand-lg mb-5 glass-navbar">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="index.php">
        <img width="56" height="56" src="images/logo.png" alt=""/>
        <div class="ms-2 d-none d-md-block">
          <div style="font-weight:800; color:var(--brand-green);">AgriLink</div>
          <small class="text-muted">Farmers → Consumers</small>
        </div>
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
        <form class="d-flex ms-3 me-auto" role="search">
          <div class="input-group">
            <span class="input-group-text bg-white border-end-0"><i class="bi bi-search"></i></span>
            <input class="form-control border-start-0" type="search" placeholder="Search farmer or produce" aria-label="Search" />
          </div>
        </form>

        <ul class="navbar-nav ms-auto gap-3 align-items-center">
          <li class="nav-item d-none d-md-block">
            <a class="bar-link" href="index.php">Home</a>
          </li>
          <li class="nav-item d-none d-md-block">
            <a class="bar-link" href="farmers.php">Farmers</a>
          </li>
          <li class="nav-item d-none d-md-block">
            <a class="bar-link" href="products.php">Products</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-success btn-sm" href="#"><i class="bi bi-people-fill"></i> Farmers</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown">
              <img src="images/user.jpg" width="36" height="36" class="rounded-circle border" alt="avatar" />
              <span class="ms-2 d-none d-md-inline">Admin</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid con">
    <div class="row">
      <aside class="col-md-3 p-4 admin-sidebar">
        <div class="d-flex align-items-center mb-3">
          <div class="icon-circle me-2"><i class="bi bi-bar-chart-line-fill" style="font-size:1.15rem"></i></div>
          <div>
            <h6 class="brand mb-0">AgriLink Admin</h6>
            <small class="text-muted">Dashboard</small>
          </div>
        </div>

        <ul class="nav flex-column mt-4">
          <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-house-door-fill"></i> Dashboard</a></li>
          <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-bag-fill"></i> Manage Products</a></li>
          <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-people-fill"></i> Manage Farmers</a></li>
          <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-list-check"></i> Orders</a></li>
          <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-gear-fill"></i> Settings</a></li>
        </ul>

        <div class="mt-4">
          <h6 class="mb-2">Quick stats</h6>
          <div class="d-flex gap-2">
            <div class="card card-ghost p-2 w-100">
              <small class="text-muted">Revenue</small>
              <div class="fw-bold">₦1.2M</div>
            </div>
            <div class="card card-ghost p-2 w-100">
              <small class="text-muted">Messages</small>
              <div class="fw-bold">24</div>
            </div>
          </div>
        </div>
      </aside>

      <main class="col-md-9 p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h4 class="mb-0">Dashboard</h4>
          <div class="small text-muted">Admin | Overview</div>
        </div>

        <div class="row g-3">
          <div class="col-md-4">
            <div class="card p-3 stat-card card-ghost">
              <div class="d-flex align-items-center justify-content-between">
                <div>
                  <div class="small">Total orders</div>
                  <div class="h4">1,230</div>
                </div>
                <div class="icon-circle"><i class="bi bi-cart-fill"></i></div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card p-3 stat-card card-ghost">
              <div class="d-flex align-items-center justify-content-between">
                <div>
                  <div class="small">Active farmers</div>
                  <div class="h4">430</div>
                </div>
                <div class="icon-circle"><i class="bi bi-people-fill"></i></div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card p-3 stat-card card-ghost">
              <div class="d-flex align-items-center justify-content-between">
                <div>
                  <div class="small">Products listed</div>
                  <div class="h4">2,901</div>
                </div>
                <div class="icon-circle"><i class="bi bi-box-seam"></i></div>
              </div>
            </div>
          </div>
        </div>

        <div class="atb">
          <h6>Recent orders</h6>
          <div class="table-responsive">
            <table class="table align-middle">
              <thead>
                <tr>
                  <th>Order</th>
                  <th>Product</th>
                  <th>Farmer</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>#1003</td>
                  <td>Garri</td>
                  <td>FarmCo</td>
                  <td>
                    <span class="badge badge-status" style="background:#fff3cd;color:#856404;border:1px solid rgba(0,0,0,0.05)">Pending</span>
                  </td>
                </tr>
                <tr>
                  <td>#1002</td>
                  <td>Rice</td>
                  <td>Greenfields</td>
                  <td><span class="badge badge-status" style="background:#d4edda;color:#155724">Delivered</span></td>
                </tr>
                <tr>
                  <td>#1001</td>
                  <td>Tomatoes</td>
                  <td>Sunny Farm</td>
                  <td><span class="badge badge-status" style="background:#cce5ff;color:#003366">Canceled</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </main>
    </div>
  </div>

  <script src="bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>