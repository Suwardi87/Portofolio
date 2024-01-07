<?php
include (__DIR__. "/../config/koneksi.php");
if (isset($_GET["no_faktur"])) {
    $no_faktur = mysqli_real_escape_string($koneksi, $_GET['no_faktur']);
    $sql = "DELETE FROM tb_penjualan WHERE no_faktur = '$no_faktur'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        echo "<script>
                alert('Data Dihapus');
                document.location.href='index.php?penjualan=dataPenjualan';
            </script>";
    } else {
        echo "<script>
                alert('Data gagal diupdate');
                document.location.href='index.php?penjualan=dataPenjualan';
            </script>";
    }
}  

?>