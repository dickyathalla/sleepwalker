<?php
//cek dulu apakah parameter kode ada atau tidak
if(isset($_GET['kode'])){
   include "koneksi.php";
   //kalo ada berarti lakukan perintah delete
   $kode = $_GET['kode'];
   $sql = "DELETE FROM data WHERE no='$kode'";
   $kueri = mysqli_query($koneksi, $sql);
   if($kueri){
       //kalo deletenya berhasil
    //tampilkan alert dan pindah ke halaman daftar barang
    echo "<script>alert('Data barang berhasil dihapus');document.location='daftarbarang.php'</script>";
   } else{
   echo "<script>alert('Data barang Gagal dihapus');document.location='daftarbarang.php'</script>";
   }
} else {
    //kalo gak ada  parameternya
    echo "<script>alert('Silahkan pilih barang yang ingin dihapus');document.location='daftarbarang.php'</script>";
}
?>