<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <title>Form Layanan Pengaduan Gangguan Jaringan Telekomunikasi</title>
</head>
<body style="background-image: url('img/bg.jpeg');">
  <div class="container">
    <h2 class="alert alert-primary text-center mt-3">Form Pengaduan Gangguan Jaringan Telekomunikasi</h2>

    <!-- Membuat form -->
    <form method = "post" action= "simpan_data.php">
      <div class="form-group">
        <label class="text-white" for="no_internet">No. Internet</label>
        <input type="text" name="no_internet" class="form-control" placeholder="Masukkan No. Internet">
      </div>
      <div class="form-group">
        <label class="text-white" for="nama">Nama</label>
        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
      </div>
      <div class="form-group">
        <label class="text-white" for="no_telp">No. Telepon</label>
        <input type="text" name="no_telp" class="form-control" placeholder="Masukkan No. Telepon">
      </div>
      <div class="form-group">
        <label class="text-white" for="alamat">Alamat</label>
        <textarea name="Alamat" class="form-control">Masukkan Alamat</textarea>
      </div>
      <div class="form-group">
        <label class="text-white" for="waktu_janjian">Waktu Janjian</label>
        <input type="text" name="waktu_janjian" class="form-control" placeholder="Masukkan Waktu Janjian">
      </div>
      <div class="form-group">
        <label class="text-white" for="ket_gangguan">Ket. Gangguan</label>
        <input type="text" name="ket_gangguan" class="form-control" placeholder="Masukkan Ket. Gangguan">
      </div>
      <button type="submit" class="btn btn-primary">KIRIM</button>
      <button type="reset" class="btn btn-danger">RESET</button>
    </form>
    <?php 
  session_start();
 
  // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['level']==""){
    header("location:login.php");
  }
   ?>
   <a href="logout.php">LOGOUT</a>
  </div>

</body>
</html>