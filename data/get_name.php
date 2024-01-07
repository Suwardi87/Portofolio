<?php
// Include your database connection or any necessary configuration
include(__DIR__ . "/../config/koneksi.php");

// Assume you have a kd_brg parameter passed to the script
$kd_brg = $_GET['kd_brg'];

// Fetch data from the database based on the kd_brg
$sql = "SELECT nama_brg FROM tb_barang WHERE kd_brg = '$kd_brg'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of the first row
    $row = $result->fetch_assoc();
    $nama_brg = $row['nama_brg'];

    // Return the data as JSON
    header('Content-Type: application/json');
    echo json_encode(array('nama_brg' => $nama_brg));
} else {
    // If no data is found, return an empty value
    echo json_encode(array('nama_brg' => ''));
}

?>
