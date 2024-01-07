<div class="container">
        <h2>Edit Penjualan</h2>

        <?php      
        include (__DIR__. "/../config/koneksi.php");
       
            $no_faktur = mysqli_real_escape_string($koneksi, $_GET['no_faktur']);
            $sql = "SELECT tb_barang.kd_brg, tb_barang.nama_brg, tb_penjualan.no_faktur,tb_penjualan.tanggal, tb_penjualan.customer, tb_penjualan.alamat, tb_penjualan.tipe, tb_penjualan.harga_brg, tb_penjualan.jumlah_brg 
            FROM tb_barang 
            INNER JOIN tb_penjualan ON tb_barang.kd_brg = tb_penjualan.kd_brg";
            $query = mysqli_query($koneksi, $sql);
        
            if (mysqli_num_rows($query) > 0) {
                $data = mysqli_fetch_assoc($query);
                
                // Now, $data contains the information of the product with the specified kd_brg.
                // You can access it like $data['nama_brg'], $data['tanggal'], etc.
            } else {
                echo "<script>
                        alert('Data not found');
                        window.location.href = 'index.php?penjualan=editPenjualan';
                      </script>";
            }
        
        ?>
      

        <form action="index.php?penjualan=ProsesEditPenjualan" method="post">

            <div class="form-group">
                <!-- <label type="hidden">No Faktur :</label> -->
                <input type="hidden" name="no_faktur" value="<?php echo $no_faktur ?>" class="form-control" placeholder="Masukan Nama" required />

            </div>
            
            <div class="form-group">
                        <label class="visually-hidden" for="autoSizingSelect">Nama Barang</label>
                        <select class="form-control" name="nama_brg">
                        <option >nama : </option>
                            <?php while ($ds = mysqli_fetch_array($query) ) {
                                $no++
                            ?>
                        <option value="<?php echo $ds["kd_brg"]?>" selected><?= $ds["nama_brg"]; ?></option>
                        <?php } ?>
                        </select>
            </div>
            <div class="form-group">
                <label>Tanggal :</label>
                <input type="date" name="tanggal" value="<?= $data['tanggal']; ?>"  class="form-control" rows="5" placeholder="" required />
            </div>
            <div class="form-group">
                <label>Nama Customer:</label>
                <input type="text" name="customer" value="<?= $data['customer']; ?>"  class="form-control" rows="5" placeholder="Masukan Nama Customer" required />
            </div>
            <div class="form-group">
                <label>Alamat :</label>
                <input type="text" name="alamat"value="<?= $data['alamat']; ?>"  class="form-control" placeholder="Masukan Alamat" required />
            </div>
            <div class="form-group">
                <label>Tipe :</label>
                <select class="form-control" name="tipe">
                    <option>Pilih Pembayaran</option>
                    <option value="Tunai" <?php echo ($data['tipe']=="Tunai")?"selected": "" ?>>Tunai</option>
                    <option value="Kredit" <?php echo ($data['tipe']=="Kredit")?"selected": "" ?>>Kredit</option>
                    <option value="QRIS" <?php echo ($data['tipe']=="QRIS")?"selected": "" ?>>QRIS</option>
                </select>
            </div>
            <div class="form-group">
                <label>Harga Barang:</label>
                <input type="text" name="harga_brg" value="<?= $data['harga_brg']; ?>"  class="form-control" placeholder="Masukan Harga Barang" required />
            </div>
            <div class="form-group">
                <label>Jumlah Barang:</label>
                <input type="text" name="jumlah_brg" value="<?= $data['jumlah_brg']; ?>"  class="form-control" rows="5" placeholder="Masukan Jumlah Barang" required />
            </div>

            <button type="submit"  name="update" value="update" class="btn btn-primary">Submit</button>
        </form>
    </div>