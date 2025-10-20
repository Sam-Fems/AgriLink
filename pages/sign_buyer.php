<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../images/logo.png" />
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../animate.min.css" />
    <link rel="stylesheet" href="../fontawesome/css/all.css" />
    <title>AgriLink - Farmers to Consumers</title>
    <style>
      body {
        background: linear-gradient(to left, #e8f5e9, #c8e6c9);
        font-family: "poppins", monospace;
      }
      <?php include("../style.php"); ?>
      .con {
        margin-top: 3%;
      }
    </style>
  </head>
  <body class="container">
    <div class="container con">
      <div class="row justify-content-center">
        <div class="col-md-7">
          <div class="p-4">
            <h1 class="mb-3 text-center">Register as a <span class="text-success">consumer</span></h1>
            <p class="small text-muted text-center">
              Create an account to place orders, save addresses and view order
              history.
            </p>

            <form action="process/process_sign_buyer.php" method="post">
              <div class="row g-4">
                <div class="col-md-6">
                  <label class="form-label">Full name</label>
                  <input class="form-control" name="fullname" required />
                </div>

                <div class="col-md-6">
                  <label class="form-label">Phone</label>
                  <input class="form-control" name="phone" type="tel" required />
                </div>

                <div class="col-md-12">
                  <label class="form-label">Email</label>
                  <input class="form-control" name="email" type="email" required />
                </div>

                <div class="col-md-12">
                  <label class="form-label">Delivery address</label>
                  <input
                    class="form-control"
                    placeholder="Street, city, state"
                    name="delvaddr"
                    required
                  />
                </div>

                <div class="col-md-6">
                  <label class="form-label">Password</label>
                  <input class="form-control" name="password" type="password" required />
                </div>
                <div class="col-md-6">
                  <label class="form-label">Confirm password</label>
                  <input class="form-control" name="cpassword" type="password" required />
                </div>

                <div class="col-12 d-grid">
                  <button class="btn btn-success" name="btn">Create account</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
  </body> 
</html>
