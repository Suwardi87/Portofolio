<div class="container">
        <h2>Edit Barang</h2>

        <?php      
        include (__DIR__. "/../config/koneksi.php");
        if (isset($_GET["kd_brg"])) {
            $kd_brg = mysqli_real_escape_string($koneksi, $_GET['kd_brg']);
            $sql = "SELECT * FROM tb_barang WHERE kd_brg = '$kd_brg'";
            $query = mysqli_query($koneksi, $sql);
        
            if (mysqli_num_rows($query) > 0) {
                $data = mysqli_fetch_assoc($query);
                // Now, $data contains the information of the product with the specified kd_brg.
                // You can access it like $data['nama_brg'], $data['tanggal'], etc.
            } else {
                echo "<script>
                        alert('Data not found');
                        window.location.href = 'index.php?barang=editBarang';
                      </script>";
            }
        } else {
            echo "kd_brg parameter is not set.";
        }
        
        ?>
      

        <form action="index.php?barang=ProsesEdit" method="post">

            <div class="form-group">
                <!-- <label type="hidden">Kode Barang :</label> -->
                <input type="hidden" name="kd_brg" value="<?= $data['kd_brg']; ?>"  class="form-control" placeholder="Masukan Nama" required />

            </div>
            <div class="form-group">
                <label>Nama Barang :</label>
                <input type="text" name="nama_brg" value="<?= $data['nama_brg']; ?>" class="form-control" placeholder="Masukan Nama" required />

            </div>
            <div class="form-group">
                <label>Tanggal :</label>
                <input type="date" name="tanggal" value="<?= $data['tanggal']; ?>"  class="form-control" rows="5" placeholder="" required />
            </div>
            <div class="form-group">
                <label>Jumlah Barang:</label>
                <input type="text" name="jumlah_brg" id="jumlah_brg" value="<?= $data['jumlah_brg']; ?>"  class="form-control" rows="5" placeholder="Masukan Jumlah Barang" required />
            </div>
            <div class="form-group">
                <label>Harga Barang:</label>
                <input type="text" name="harga_brg" id="harga_brg" value="<?= $data['harga_brg']; ?>"  class="form-control" placeholder="Masukan Harga Barang" required />
            </div>
            <div class="form-group">
                <label>Total Bayar:</label>
                <input type="text" name="total_byr" id="total_byr" value="<?= $data['total_byr']; ?>"  class="form-control" placeholder="Total Bayar" required />
            </div>

            <button type="submit"  name="update" value="update" class="btn btn-primary">Submit</button>
        </form>
    </div>