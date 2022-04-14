<?php
include("../koneksi.php");
?>
<?php
if (isset($_POST['kirim'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST ['email'];
  $query = mysqli_query($koneksi, "insert into user_login values (NULL, 1, '$username', sha1('$password'), '$email')");
  
  if($query){
    $pesan = "<div class='alert alert-success'>Akun berhasil dibuat!</div>";
  } else {
    $pesan = "<div class='alert alert-success'>Terjadi kesalahan!</div>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
        Registrasi
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="bg-gray-200">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign Up</h4>
                </div>
              </div>
              <div class="card-body">
              <form action="" method="POST">
                <div class="form-group">
                    <input type="text" name="username" placeholder="username" class="form-control" autofocus required>
                </div>
                <div class="form-group">
                    <input type="text" name="email" placeholder="email" class="form-control" autofocus required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="password" class="form-control" required>
                </div>
                  <div class="text-center">
                  <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2 " name="kirim">Sign Up</button>
                  </div>
                  <p class="mt-4 text-sm text-center">
                  Already have an account?
                    <a href="index.php?menu=login" class="text-primary text-gradient font-weight-bold"> Sign In</a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>

</html>
