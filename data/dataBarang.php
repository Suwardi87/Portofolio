<div class="container">
        <br>
        <h4>Data Barang</h4>
        <table class="table table-bordered table-hover">
            <br>
            <nav>
            <div class="btn btn-primary m-3 p-0" role="button">
                <a href="index.php?barang=tambahBarang" class="btn text-light">Tambah Barang</a>            
        </div>
    </nav> 
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Tanggal</th>
                    <th>Jumlah Barang</th>
                    <th>Harga Barang</th>
                    <th>Total Bayar</th>
                    <th colspan='2'>Aksi</th>

                </tr>
            </thead>
            <?php
            include (__DIR__. "/../config/koneksi.php");

            $sql = "SELECT * FROM tb_barang ORDER BY kd_brg asc";
            $hasil = mysqli_query($koneksi, $sql);
            $no = 0;
            while ($data = mysqli_fetch_array($hasil)) {
                $no++;
                
            ?>
            <tbody>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['nama_brg']; ?></td>
                    <td> <?php echo $data['tanggal']; ?></td>
                    <td> <?php echo $data['jumlah_brg']; ?></td>
                    <td> <?php echo $data['harga_brg']; ?></td>
                    <td><?php echo $data['total_byr']; ?> </td>
                    <td>
                        <a href="index.php?barang=editBarang&kd_brg=<?php echo $data['kd_brg']; ?>" class="btn btn-primary" role="button">Edit</a>
                        <a href="index.php?barang=deleteBarang&kd_brg=<?php echo $data['kd_brg']; ?>" class=" btn btn-danger" role="button">Hapus</a>
                    </td>
                </tr>
            </tbody>
            <?php
            }
            ?>
        </table> 
     </div>