<div class="container">        
        <h2>Tambah Barang</h2>

        <form action="index.php?barang=proses" method="post">
            <div class="form-group">
                <label>Nama Barang :</label>
                <input type="text" name="nama_brg" class="form-control" placeholder="Masukan Nama" required />

            </div>
            <div class="form-group">
                <label>Tanggal :</label>
                <input type="date" name="tanggal" class="form-control" rows="5" placeholder="" required />
            </div>
            <div class="form-group">
                <label>Jumlah Barang :</label>
                <input type="text" name="jumlah_brg" id="jumlah_brg" class="form-control" rows="5" placeholder="Masukan Jumlah Barang" required />
            </div>
            <div class="form-group">
                <label>Harga Barang :</label>
                <input type="text" name="harga_brg" id="harga_brg" class="form-control" placeholder="Masukan Harga Barang" required />
            </div>
            <div class="form-group">
                <label>Total Bayar :</label>
                <input type="text" name="total_byr" id="total_byr" class="form-control" placeholder="Total Bayar" required />
            </div>

            <button type="submit" value="SIMPAN" class="btn btn-primary">Submit</button>
        </form>
    </div>