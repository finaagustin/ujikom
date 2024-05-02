<?php 
session_start();
include 'config/koneksi.php';
if (isset($_POST['l'])) {
  $terima1 = $_POST['nik'];
  $terima2 = $_POST['nama'];

  $sql = mysqli_query($conn,"SELECT * FROM user WHERE nik='$terima1' AND nama='$terima2'");
  $pisah = mysqli_fetch_array($sql);
  $cek = mysqli_num_rows($sql);

  $_SESSION['nik'] = $pisah['nik']; 
  $_SESSION['nama'] = $pisah['nama'];
  $_SESSION['foto'] = $pisah['foto'];

  if ($cek > 0) {
    echo "
    <script>
    alert('Selamat Datang');
    window.location = 'admin/index.php';
    </script>
    ";
  }else{
    echo "
    <script>
    alert('NIK / NAMA SALAH');
    window.location = 'index.php';
    </script>
    ";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/login.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>

<div class="login-form">
    <form action="" method="POST">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="number" class="form-control" name="nik"  placeholder="NIK" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="l" value="l" >Log in</button>
        </div>
               
    </form>
    <p class="text-center"><a href="register.php">Saya Pengguna Baru</a></p>
</div>
</body>
</html>