<?php
include (__DIR__. "/../config/koneksi.php");
if (isset($_GET["kd_brg"])) {
    $kd_brg = mysqli_real_escape_string($koneksi, $_GET['kd_brg']);
    $sql = "DELETE FROM tb_barang WHERE kd_brg = '$kd_brg'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        echo "<script>
                alert('Data Dihapus');
                document.location.href='index.php?barang=dataBarang';
            </script>";
    } else {
        echo "<script>
                alert('Data gagal diupdate');
                document.location.href='index.php?barang=dataBarang';
            </script>";
    }
}  

?>