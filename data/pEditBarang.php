<?php
include (__DIR__. "/../config/koneksi.php"); 

$kd_brg = $_POST["kd_brg"];
$nama_brg = $_POST["nama_brg"];
$tanggal = $_POST["tanggal"];
$jumlah_brg = $_POST["jumlah_brg"];
$harga_brg = $_POST["harga_brg"];
$total_byr = $_POST["total_byr"];

// Construct the SQL query
$sql = "UPDATE tb_barang
        SET nama_brg = '$nama_brg',
            tanggal = '$tanggal',
            jumlah_brg = '$jumlah_brg',
            harga_brg = '$harga_brg',
            total_byr = '$total_byr'
        WHERE kd_brg = '$kd_brg'";

$hasil = mysqli_query($koneksi, $sql);

if ($hasil) {
    echo "<script>
            alert('Data berhasil diupdate');
            window.location.href = 'index.php?barang=dataBarang';
          </script>";
} else {
    echo "<script>
            alert('Data gagal diupdate');
            window.location.href = 'update.php?id=$kd_brg';
          </script>";
}
?>
