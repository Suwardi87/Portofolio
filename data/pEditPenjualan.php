<?php
include (__DIR__. "/../config/koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $no_faktur = mysqli_real_escape_string($koneksi, $_POST["no_faktur"]);
    $nama_brg = mysqli_real_escape_string($koneksi, $_POST["nama_brg"]);
    $tanggal = mysqli_real_escape_string($koneksi, $_POST["tanggal"]);
    $customer = mysqli_real_escape_string($koneksi, $_POST["customer"]);
    $alamat = mysqli_real_escape_string($koneksi, $_POST["alamat"]);
    $tipe = mysqli_real_escape_string($koneksi, $_POST["tipe"]);
    $harga_brg = mysqli_real_escape_string($koneksi, $_POST["harga_brg"]);
    $jumlah_brg = mysqli_real_escape_string($koneksi, $_POST["jumlah_brg"]);

    // Start a transaction to ensure both updates succeed or fail together
    mysqli_begin_transaction($koneksi);

    try {
        // Update tb_penjualan
        $sqlPenjualan = "UPDATE tb_penjualan
                         SET nama_brg = '$nama_brg',
                             tanggal = '$tanggal',
                             customer = '$customer',
                             alamat = '$alamat',
                             tipe = '$tipe',
                             harga_brg = '$harga_brg',
                             jumlah_brg = '$jumlah_brg'
                         WHERE no_faktur = '$no_faktur'";
        
        mysqli_query($koneksi, $sqlPenjualan);

        // Update tb_barang
        $sqlBarang = "UPDATE tb_barang
                      SET 
                          nama_brg = '$nama_brg'
                      WHERE no_faktur = '$no_faktur'";

        mysqli_query($koneksi, $sqlBarang);

        // Commit the transaction if everything is successful
        mysqli_commit($koneksi);

        echo "Data updated successfully.";
    } catch (Exception $e) {
        // An error occurred, rollback the transaction
        mysqli_rollback($koneksi);
        echo "Error: " . $e->getMessage();
    }
}

mysqli_close($koneksi);
?>
