<?php
    //Include file koneksi, untuk koneksikan ke database
    include (__DIR__. "/../config/koneksi.php");
       
            $nama_brg=$_POST["nama_brg"];
            $tanggal=$_POST["tanggal"];
            $jumlah_brg=$_POST["jumlah_brg"];
            $harga_brg=$_POST["harga_brg"];
            $total_byr=$_POST["total_byr"];

           // $ttl_brg= $jml_brg * $hrg_brg;

        //Query input menginput data kedalam tabel anggota
        // $sql="insert into tb_mahasiswa (id,nobp,nama,tanggal_lahir,email,noHP) values 
        // ('','$nobp','$nama','$tanggal_lahir','$email','$noHP')";

        $sql="INSERT INTO tb_barang values ('','$nama_brg','$tanggal','$jumlah_brg','$harga_brg','$total_byr')";


        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($koneksi,$sql);

        // Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            echo "<script>
                    alert('Data berhasil disimpan');
                    document.location.href='index.php?barang=dataBarang';
                  </script>";
        }
        else {
          echo  "Gagal".$sql.mysqli_error($koneksi);
        }
        

    
    ?>