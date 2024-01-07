<div class="container">
        <br>
        <h4>Data Penjualan</h4>
        <table class="table table-bordered table-hover">
            <br>
            <nav>
                <a href="index.php?penjualan=tambahPenjualan" class="btn btn-primary m-3" role="button">Tambah Penjualan</a>            
       
    </nav> 
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Tanggal</th>
                    <th>Customer</th>
                    <th>Alamat</th>
                    <th>Tipe</th>
                    <th>Harga Barang</th>
                    <th>Jumlah Barang</th>
                    <th colspan='2'>Aksi</th>

                </tr>
            </thead>
            <?php
            include (__DIR__. "/../config/koneksi.php");

            $sql = "SELECT tb_barang.kd_brg, tb_barang.nama_brg, tb_penjualan.no_faktur,tb_penjualan.tanggal, tb_penjualan.customer, tb_penjualan.alamat, tb_penjualan.tipe, tb_penjualan.harga_brg, tb_penjualan.jumlah_brg 
            FROM tb_barang 
            INNER JOIN tb_penjualan ON tb_barang.kd_brg = tb_penjualan.kd_brg";
            $result = mysqli_query($koneksi, $sql);
            $no = 0;

            while ($data = mysqli_fetch_array($result)) {
                $no++;           
            ?>

            <tbody>
                <tr>
                    <td ><?php echo $no; ?></td>
                    <td width=15><?php echo $data['kd_brg']; ?></td>
                    <td width=50><?php echo $data['nama_brg']; ?></td>
                    <td> <?php echo $data['tanggal']; ?></td>
                    <td> <?php echo $data['customer']; ?></td>
                    <td width=100> <?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['tipe']; ?> </td>
                    <td> <?php echo $data['harga_brg']; ?></td>
                    <td><?php echo $data['jumlah_brg']; ?> </td>
                    <td>
                        <a href="index.php?penjualan=editPenjualan&no_faktur=<?php echo $data['no_faktur']; ?>" class="btn btn-primary" role="button">Edit</a>
                        <a href="index.php?penjualan=deletePenjualan&no_faktur=<?php echo $data['no_faktur']; ?>" class=" btn btn-danger" role="button">Hapus</a>
                    </td>
                </tr>
            </tbody>
            <?php
            }
    
        
            ?>
        </table> 
     </div>