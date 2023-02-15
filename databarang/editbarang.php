<?php
  include "koneksi.php";
//cek dulu apakah parameter kode ada atau tidak
if(isset($_GET['kode'])){
   $kode = $_GET['kode'];
} else {
    //kalo gak ada  parameternya
    echo "<script>alert('Kode Barang Belum Dipilih');document.location='daftarbarang.php'</script>";
}

//ambil data barang dengan kode yang dipilih dan tampilkan dalam form
   $sql = "SELECT * FROM data WHERE no='$kode'";
   $kueri = mysqli_query($koneksi, $sql);
   $data = mysqli_fetch_array($kueri);
   //tampung masing-masing data ke dalam variabel
   $kodebrg = $data['no'];
   $namabrg = $data['nama_barang'];
   $namamerk = $data['nama_merek'];
   $warnabrg = $data['warna'];
   $jumlahbrg = $data['jumlah'];
?>
<!-- sekarang bikin formnya -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sleepwalker | Get to Know Me!</title>    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/custom.css"/>
    <link type="image/x-icon" href="../image/logoku.png" rel="shortcut icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,300&display=swap" rel="stylesheet">
    <script language="javascript">
    function cekform(){
        //ini untuk ngecek formnya (semua form tidak boleh kosong)
        if(document.frmbarang.txtno.value==""){
            alert('Nomor ID Harus Diisi');
            document.frmbarang.txtno.focus();
            return false;
        } else if(document.frmbarang.txtbarang.value==""){
            alert('Nama Barang Harus Diisi');
            document.frmbarang.txtbarang.focus();
            return false;
        } else if(document.frmbarang.txtmerk.value==""){
            alert('Merk Harus Diisi');
            document.frmbarang.txtmerk.focus();
            return false;
        } else if(document.frmbarang.txtwarna.value==""){
            alert('Warna Barang Harus Diisi');
            document.frmbarang.txtwarna.focus();
            return false;
        } else if(document.frmbarang.txtjumlah.value==""){
            alert('Jumlah Barang Harus Diisi');
            document.frmbarang.txtjumlah.focus();
            return false;
        } else {
            return true;
        }
    }
    </script>
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

    <!-- Edit Barang -->
    <section class="container" style="margin-top: 20px">
        <h2 class="display-4">Edit Barang</h2>
        <form action="" method="post" name="frmbarang" onsubmit="return cekform()">
        <table class="table">
            <tr>
                <td>No ID</td>
                <td> 
                    <input name="txtno" type="text" id="txtno" size="10" maxlength="10" value="<?php echo $kodebrg ?>" readonly/></td>
            </tr>
            <tr>
                <td>Nama Barang </td>
                <td> 
                    <input name="txtbarang" type="text" id="txtbarang" value="<?php echo $namabrg ?>"/></td>
            </tr>
            <tr>
                <td>Merk </td>
                <td>
                    <input name="txtmerk" type="text" id="txtmerk" value="<?php echo $namamerk?>"/></td>
            </tr>
            <tr>
                <td>Warna</td>
                <td>
                    <input name="txtwarna" type="text" id="txtwarna" value="<?php echo $warnabrg?>"/></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>
                    <input name="txtjumlah" type="text" id="txtjumlah" value="<?php echo $jumlahbrg?>"/></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <input name="tblEdit" class="btn btn-primary" type="submit" id="tblEdit" value="Edit Barang" />
                    <button name="btnCancel" class="btn btn-primary" type="button" id="btnCancel" onclick="location.href='daftarbarang.php'">kembali ke daftar barang</button>
                    </td>
            </tr>
        </table>
        </form>
    </section>
    <!-- Akhir Edit Barang -->

    <!-- Footer -->
    <footer class="text-center text-white bg-dark fixed-bottom">
          <p>Cretead by <a href="https://www.instagram.com/dicky_athalla33/" target="_blank" class="text-white"
            >Muhammad Dicky Athalla</a>©</p>
    </footer>
  <!-- Akhir Footer -->
</body>
</html>


<?php
//ini kalo tombol editnya diklik
//perhatikan nama dari tombol edit nya (tblEdit)
if(isset($_POST['tblEdit'])){
    //ini adalah variabel untuk menampung inputan dari form (nama variabel bebas)
    // yang ada di dalam $_POST[''] adalah nama dari masing-masing textbox
    $noID = $_POST['txtno'];
    $namaBarang = $_POST['txtbarang'];
    $merk = $_POST['txtmerk'];
    $warna = $_POST['txtwarna'];
    $jumlah = $_POST['txtjumlah'];
    //siapkan sebuah variabel untuk menampung query mysql
    //yang ada di dalam VALUES harus berurutan sesuai dengan uturan field yang ada dalam tabel
    $sql = "UPDATE data SET nama_barang='$namaBarang', nama_merek='$merk', warna='$warna', jumlah='$jumlah' WHERE no='$noID'";
    //jalankan kuerynya
    $kueri = mysqli_query($koneksi, $sql);
    //cek apakah variabel $kueri bernilai TRUE atau FALSE
    if($kueri){
    //ini kalo TRUE
    //tampilin alert pake javascript aja deh
        echo "<script>alert('Data barang berhasil diedit'); document.location='daftarbarang.php'</script>";
    } else {
    //ini kalo FALSE
        echo "<script>alert('Data barang gagal diedit')</script>";
        //tampilkan pesan error mysqlnya
        echo mysqli_error();
    }
}
?>