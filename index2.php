<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pengaduan Masyarakat - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <style>
    body {
      background: #2C3E50; /* Sama seperti di index 1 */
    }

    .card {
      border-radius: 15px;
      overflow: hidden;
      background-color: #ECF0F1; /* Sama seperti di index 1 */
    }

    .card-header {
      background-color: #34495E; /* Sama seperti di index 1 */
      color: white;
      text-align: center;
      padding: 25px; /* Menyamakan padding header dengan index1 */
      border-radius: 10px;
    }

    .form-group {
      margin-top: 20px; /* Jarak antar elemen form sama seperti index 1 */
    }

    .btn-primary {
      background-color: #E74C3C; /* Sama seperti di index 1 */
      border: none;
      color: white;
    }

    .btn-primary:hover {
      background-color: #C0392B; /* Sama seperti di index 1 */
    }

    .btn-success {
      background-color: #3498DB; /* Sama seperti di index 1 */
      border: none;
      color: white;
    }

    .btn-success:hover {
      background-color: #2980B9; /* Sama seperti di index 1 */
    }

    .form-control {
      background-color: #ECF0F1; /* Sama seperti di index 1 */
      border: 2px solid #7F8C8D; /* Sama seperti di index 1 */
      border-radius: 5px;
      padding: 12px; /* Menyamakan padding input dengan index1 */
      color: #34495E;
    }

    .form-control:focus {
      border-color: #3498DB; /* Sama seperti di index 1 */
      box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
    }

    .form-control::placeholder {
      color: #7F8C8D;
    }

    .card-body {
      padding: 40px; /* Menyamakan padding body form dengan index1 */
    }
  </style>

</head>

<body>

  <?php
  session_start(); // Memulai sesi
  if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true) {
      // Jika sudah login sebagai masyarakat, redirect ke halaman lain atau tampilkan pesan
      header("Location: halaman_dashboard.php"); // Ganti dengan halaman yang sesuai
      exit;
  }
  ?>

  <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="col-xl-6 col-lg-6 col-md-9">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-header">
          <h1 class="h5 text-white mb-0">Selamat Datang Di Aplikasi Pengaduan! Login Petugas / Admin</h1>
        </div>
        <div class="card-body">
          <form class="user" method="post" action="proses-login2.php">
            <div class="form-group">
              <input name="username" type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Username Anda..." required>
            </div>
            <div class="form-group">
              <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukan Password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
              Login
            </button>
            <hr>
            <a href="index.php" class="btn btn-success btn-user btn-block">
              <i class="fa fa-laptop fa-fw"></i>Kembali Ke Login Masyarakat
            </a>
          </form>
          <hr>
          <div class="text-center">
            <a class="small" href="forgot-password.html">Forgot Password?</a>
          </div>
          <div class="text-center">
            <a class="small" href="register.html">Create an Account!</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
