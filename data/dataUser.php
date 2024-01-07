<!-- Begin Page Content -->
<div class="container-fluid" >
    <div class="container">
        <br>
        <h4 class="text-dark">Data User</h4>
        <button type="button" class="btn btn-dark m-3" data-toggle="modal" data-target="#tambahKamar">
                Update  
        </button>
        <table class="table table-bordered-dark text-dark text-center table-hover">
            <br>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>level</th>
                    <th colspan='2'>Aksi</th>

                </tr>
            </thead>
            <?php
            include __DIR__."/../config/koneksi.php";
            $sql = "SELECT * FROM tb_user ORDER BY id DESC";
            $hasil = mysqli_query($koneksi, $sql);
            $idUser = 0;
            while ($data = mysqli_fetch_array($hasil)) {
                $idUser++;
            ?>
            <tbody>
                <tr>
                    <td><?php echo $idUser; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td> <?php echo $data['username']; ?></td>
                    <td> <?php echo $data['password']; ?></td>
                    <td> <?php echo $data['level']; ?></td>
                    <td>
                    <!-- <a href="dataKamar.php?idUser=<?= $data["id"] ?>" type="button" class="btn btn-warning m-3" data-toggle="modal" data-target="#UpdateKamar">Update</button> -->
                    <a href="index.php?user=deleteUser&id=<?php echo $data['id']; ?>" class=" btn btn-danger" role="button">Delete</a>
                </tr>
            </tbody>
            <?php
            }
            ?>
        </table>
    </div>
</div>
