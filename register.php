<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/register.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="signup-form">
    <form action="simpan.php" method="POST" enctype="multipart/form-data">
      <h2>Register</h2>
      <p class="hint-text">Create your account. It's free and only takes a minute.</p>

      
      <div class="form-group">
        <input type="number" class="form-control" name="nik" placeholder="Masukan NIK Anda" required="required">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Lengkap Anda" required="required">
      </div>
      <div class="form-group">
        <input type="file" class="form-control" name="foto" placeholder="" required="required">
      </div>        
      
      <div class="form-group">
        <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
        <br>
        <div class="text-center">Already have an account? <a href="#">Sign in</a></div>
      </div>
    </form>

  </div>
</body>
</html>