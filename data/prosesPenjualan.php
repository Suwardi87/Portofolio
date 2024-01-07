<?php
    //Include file koneksi, untuk koneksikan ke database
    include (__DIR__. "/../config/koneksi.php");
       
            $kd_brg=$_POST["kd_brg"];
            $nama_brg=$_POST["nama_brg"];
            $tanggal=$_POST["tanggal"];
            $customer=$_POST["customer"];
            $alamat=$_POST["alamat"];
            $tipe=$_POST["tipe"];
            $harga_brg=$_POST["harga_brg"];
            $jumlah_brg=$_POST["jumlah_brg"];

        //Query input menginput data kedalam tabel anggota
        // $sql="insert into tb_mahasiswa (id,nobp,nama,tanggal_lahir,email,noHP) values 
        // ('','$nobp','$nama','$tanggal_lahir','$email','$noHP')";

        $sql = "INSERT INTO tb_penjualan (kd_brg, nama_brg, tanggal, customer, alamat, tipe, harga_brg, jumlah_brg)
        VALUES ('$kd_brg', '$nama_brg', '$tanggal', '$customer', '$alamat', '$tipe', '$harga_brg', '$jumlah_brg')";


        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($koneksi,$sql);

        // Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            echo "<script>
                    alert('Data berhasil disimpan');
                    document.location.href='index.php?penjualan=dataPenjualan';
                  </script>";
        }
        else {
          echo  "Gagal".$sql.mysqli_error($koneksi);
        }
        

    
    ?>