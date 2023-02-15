<!-- <a href='tambah.php'>Tambah Barang</a> | <a href='daftarbarang.php'>Daftar Barang</a> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sleepwalker | Get to Know Me!</title>    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/custom.css"/>
    <link type="image/x-icon" href="../image/logoku.png" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,300&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="../index.php">Sleepwalker.-</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Tambah Barang -->
    <section class="container" style="margin-top: 20px">
        <h2 class="display-4 text-center">Tambah Barang</h2>
        <form action="" method="post" name="frmbarang" id="frmbarang" onsubmit="return cekform()">
          <table class="table">
            <tr>
              <td>Nomor ID</td>
              <td>
                <input name="no" type="text" id="idNumber"/>
              </td>
            </tr>
            <tr>
              <td>Nama Barang</td>
              <td>
                <input name="nama_barang" type="text" id="namaBarang"/>
              </td>
            </tr>
            <tr>
              <td>Merk</td>
              <td>
                <input name="nama_merek" type="text" id="merk"/>
              </td>
            </tr>
            <tr>
              <td>Warna</td>
                <td><input name="warna" type="text" id="warna"/>
              </td>
            </tr>
            <tr>
              <td>Jumlah</td>
              <td>
                <input name="jumlah" type="text" id="jumlah"/>
              </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>
                <input name="tblIsi" class="btn btn-primary" type="submit" id="tblIsi" value="Tambah Barang"/>
                <a href="menubarang.php" class="btn btn-primary justify-content-center" href>kembali ke menu</a>
              </td>
            </tr>
          </table>
        </form>
</section>
    <!-- Tambah Barang -->

    <!-- Footer -->
    <footer class="text-center text-white bg-dark fixed-bottom">
    
          <p>Cretead by <a href="https://www.instagram.com/dicky_athalla33/" target="_blank" class="text-white"
            >Muhammad Dicky Athalla</a>©</p>
    </footer>
  <!-- Akhir Footer -->     
</body>
<?php
//include file koneksi ke mysql
include "koneksi.php";
//ini kalo tombol submitnya diklik
//perhatikan nama dari tombol tsb (tblIsi)
if(isset($_POST['tblIsi'])){
    //ini adalah variabel untuk menampung inputan dari form (nama variabel bebas)
    // yang ada di dalam $_POST[''] adalah nama dari masing-masing textbox
    $no = $_POST['no'];
    $nama_barang = $_POST['nama_barang'];
    $nama_merek = $_POST['nama_merek'];
    $warna = $_POST['warna'];
    $jumlah = $_POST['jumlah'];
    //siapkan sebuah variabel untuk menampung query mysql
    //yang ada di dalam VALUES harus berurutan sesuai dengan uturan field yang ada dalam tabel
    $sql = "INSERT INTO data (no, nama_barang, nama_merek, warna, jumlah) 
    VALUES('$no', '$nama_barang', '$nama_merek', '$warna', '$jumlah')";
    //jalankan kuerynya
    $kueri = mysqli_query($koneksi, $sql);
    //cek apakah variabel $kueri bernilai TRUE atau FALSE
    if($kueri){
    //ini kalo TRUE
    //tampilin alert pake javascript aja deh
        echo "<script>alert('Data barang berhasil dimasukkan ke database')</script>";
        header('Location: ../databarang/daftarbarang.php');
    } else {
    //ini kalo FALSE
        echo "<script>alert('Data barang gagal dimasukkan ke database')</script>";
        //tampilkan pesan error mysqlnya
        echo mysqli_error();
    }
}
?>