<?php
// Database connection
include (__DIR__. "/../config/koneksi.php");

if (isset($_GET['query'])) {
    $searchQuery = $_GET['query'];

    // Prepare and execute a SQL query to search for data in multiple tables/columns
    $query = $db->prepare("SELECT 'tb_user' as source, name as result FROM tb_user WHERE name LIKE :searchQuery 
                            UNION 
                            SELECT 'tb_barang' as source, nama_brg as result FROM tb_barang WHERE nama_brg LIKE :searchQuery
                            UNION
                            SELECT 'tb_penjualan' as source, nama_brg as result FROM tb_penjualan WHERE nama_brg LIKE :searchQuery
                            ");
    
    $query->execute(['searchQuery' => '%' . $searchQuery . '%']);

    if ($query->rowCount() > 0) {
        // Display the search results
        echo "<h2>Search Results:</h2>";
        echo "<ul>";
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            echo "<li>" . $row['source'] . ": " . $row['result'] . "</li>";
            // This will display which table the data comes from.
        }
        echo "</ul>";
    } else {
        echo "No results found.";
    }
}
?>
