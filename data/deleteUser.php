<?php
include (__DIR__. "/../config/koneksi.php");

    $id = mysqli_real_escape_string($koneksi, $_GET['id']);
    $sql = "DELETE FROM tb_user WHERE id = '$id'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        echo "<script>
                alert('Data Dihapus');
                document.location.href='index.php?user=dataUser';
            </script>";
    } else {
        echo "<script>
                alert('Data gagal diupdate');
                document.location.href='index.php?user=dataUser';
            </script>";
    }


?>