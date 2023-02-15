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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
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

    <!-- Daftar Barang -->
    <div class="container text-center" style="margin-top: 20px">
        <h2 class="display-4">Daftar Barang</h2>
        <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>No. ID</th>
                <th>Nama Barang </th>
                <th>Merk </th>
                <th>Warna</th>
                <th>Jumlah</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php
                //siapkan query untuk mengmbil semua data barang yang ada
                include "koneksi.php";
                $sql = "SELECT * FROM data";
                $kueri = mysqli_query($koneksi, $sql);
                //karena datanya lebih dari 1 record maka gunakan while
                //semua data disimpan dalam array
                //loopnr untuk menampilkan data barang
                $no = 1;
                while($data = mysqli_fetch_array($kueri)){
            ?>
            <tr>
                <td><?php echo $no?></td>
                <td><?php echo $data['no'];?></td>
                <td><?php //tampilin data dari database
                //$data adalah nama array yg kita buat
                // kodebarang adalah nama field yang ada di tabel
                echo $data['nama_barang'];?></td>
                <td><?php echo $data['nama_merek'];?></td>
                <td><?php echo $data['warna'];?></td>
                <td><?php echo $data['jumlah'];?></td>
                <td><!-- buat link untuk edit dan delete dan berikan parameter dgn nama "kode"--><a class="bi bi-pencil-square text-white" href="editbarang.php?kode=<?php echo $data['no']?>"></a> </td><td><a class="bi bi-x-square-fill text-white" href="delete.php?kode=<?php echo $data['no']?>"></a></td>
            </tr>
            <?php
                $no++;}
            ?>
        </tbody>    
        </table>
        <button class="btn btn-primary justify-content-center" onclick="document.location='jadiexcel.php'">Download</button>
        <a href="tambah.php" class="btn btn-primary justify-content-center" href>Tambah barang</a>
        <a href="menubarang.php" class="btn btn-primary justify-content-center" href>kembali ke menu</a>
    </div>
    <!-- Akhir Daftar Barang -->

    <!-- Footer -->
    <footer class="text-center text-white bg-dark fixed-bottom">
          <p>Cretead by <a href="https://www.instagram.com/dicky_athalla33/" target="_blank" class="text-white"
            >Muhammad Dicky Athalla</a>©</p>
    </footer>
  <!-- Akhir Footer -->
</body>