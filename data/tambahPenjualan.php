<div class="container">        
        <h2>Tambah Penjualan</h2>

        <?php
include (__DIR__. "/../config/koneksi.php");

$sql = "SELECT * FROM tb_barang";
// $sql = "SELECT * FROM tb_barang where nama_brg";
$products = mysqli_query($koneksi, $sql);
?>

<form action="index.php?penjualan=prosesPenjualan" method="post">
    <div class="form-group">
        <label class="visually-hidden" for="autoSizingSelect">KodeBarang</label>
        <select class="form-control" name="kd_brg" onchange="autoFillNamaBrg(this)">
            <option value="">Kode Barang : </option>
            <?php while ($data = mysqli_fetch_array($products)) { ?>
                <option value="<?php echo $data["nama_brg"]; ?>"><?php echo $data["kd_brg"]; ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label class="visually-hidden" for="autoSizingSelect">Nama Barang</label>
        <input type="text" id="nama_brg" name="nama_brg" class="form-control" rows="5" placeholder="" readonly />
    </div>
    <script>
    function autoFillNamaBrg() {
        // Get the selected value from the dropdown
        var kd_brg = $("#kd_brg").val();

        // Send an AJAX request to fetch nama_brg based on kd_brg
        $.ajax({
            type: "GET",
            url: "get_name.php",
            data: { kd_brg: kd_brg },
            dataType: "json",
            success: function (data) {
                // Populate the 'nama_brg' input field with the retrieved data
                $("#nama_brg").val(data.nama_brg);
            },
            error: function () {
                alert("Error fetching data.");
            }
        });
    }
</script>

            <div class="form-group">
                <label>Tanggal :</label>
                <input type="date" name="tanggal" class="form-control" rows="5" placeholder="" required />
            </div>
            <div class="form-group">
                <label>Nama Customer :</label>
                <input type="text" name="customer" class="form-control" rows="5" placeholder="Masukan Nama Customer" required />
            </div>
            <div class="form-group">
                <label>Alamat :</label>
                <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" required />
            </div>
            <div class="form-group">
                <label>Tipe :</label>
                <select class="form-control" name="tipe">
                    <option>Pilih Pembayaran</option>
                    <option value="Tunai">Tunai</option>
                    <option value="Kredit">Kredit</option>
                    <option value="QRIS">QRIS</option>
                </select>
            </div>
            <div class="form-group">
                <label>Harga Barang:</label>
                <input type="text" name="harga_brg" class="form-control" placeholder="Masukan Harga Barang" required />
            </div>
            <div class="form-group">
                <label>Jumlah Barang:</label>
                <input type="text" name="jumlah_brg" class="form-control" placeholder="Masukan Jumlah Barang" required />
            </div>

            <button type="submit" value="SIMPAN" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script>
        function autoTabSelect(select, nextFieldId) {
            // Check if an option is selected
            if (select.value !== "nama_brg") {
                // Move focus to the next field
                var nama_brg = document.getElementById(nextFieldId);
                if (nama_brg) {
                    nama_brg.focus();
                }
            }
        }
    </script>