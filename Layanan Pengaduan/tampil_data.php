<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<h1>Tabel Laporan Pelanggan Gangguan</h1>
    <?php 
    session_start();
 
    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['level']==""){
        header("location:login.phpl");
    }
 
    ?>
    
    <a href="logout.php">LOGOUT</a>
 
    <br/>
         
<table border="1">
    <thead>
      <tr>
        <th>Nomor</th>
        <th>No. Internet</th>
        <th>Nama</th>
        <th>No. Telp</th>
        <th>Alamat</th>
        <th>Ket. Gangguan</th>
        <th>Jadwal Janjian</th>
      </tr>
    </thead>
    <?php 
    include "koneksi.php";
    $sql="select * from form_gangguan";
    
    $hasil=mysqli_query($koneksi,$sql);
    $no=0;
    while ($data = mysqli_fetch_array($hasil)) {
    $no++;

    ?>
    <tbody>
           <tr> 
        <td><?php echo $no;?></td> 
        <td><?php echo $data["no_internet"]; ?></td> 
        <td><?php echo $data["nama"];   ?></td> 
        <td><?php echo $data["no_telp"];   ?></td>
        <td><?php echo $data["Alamat"];   ?></td>
        <td><?php echo $data["ket_gangguan"];   ?></td>
        <td><?php echo $data["waktu_janjian"];   ?></td> 
           </tr>
       </tbody>  
    <?php 
    }
    ?>          
</table>
</div>
</body>
</html>