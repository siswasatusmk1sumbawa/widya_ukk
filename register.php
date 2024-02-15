<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <title>registrasi</title>
</head>

<body>
  <h1>Registrasi user</h1>
  <hr>
  <form action="registrasi_proses.php" method="post">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="card">
            <div class="card-body bg-light">
              <div class="text-center">
                <h5>Daftar Akun Baru</h5>
              </div>
              <form action="config/aksi_register.php" method="POST">
                <label class="form-label">Username</label>
                <input type="text" name="Username" class="form-control" required>
                <label class="form-label">Password</label>
                <input type="password" name="Password" class="form-control" required>
                <label class="form-label">Email</label>
                <input type="email" name="Email" class="form-control" required>
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="NamaLengkap" class="form-control" required>
                <label class="form-label">Alamat</label>
                <input type="text" name="Alamat" class="form-control" required>
                <div class="d-grid mt-2">
                  <button class="btn btn-primary" type="submit" name="kirim">DAFTAR</button>
                </div>
              </form>
              <hr>
              <p>Sudah Punya Akun? <a href="login.php">Login disini! </a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
      <p>&copy; UKK RPL | WIDYA FITRI</p>
    </footer>
    <!-- <label for="Username">Username</label>
        <input type="text" name="Username">
        <br>
        <label for="Password">Password</label>
        <input type="password" name="password">
        <br>
        <label for="Email">Email</label>
        <input type="email" name="Email">
        <br>
        <label for="NamaLengkap">Nama Lengkap</label>
        <input type="text" name="NamaLengkap">
        <br>
        <label for="Alamat">Alamat</label>
        <input type="text" name="Alamat">
        <br>
        <input type="submit" value="Kirim"> -->
  </form>

  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>