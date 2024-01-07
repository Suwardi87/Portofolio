<?php
    //Include file koneksi, untuk koneksikan ke database
    require_once ("config/koneksi.php");
       
            $nama=$_POST["nama"];
            $username=$_POST["username"];
            $password=md5($_POST["password"]);
            $level=$_POST["level"];

        $sql="INSERT INTO tb_user values ('','$nama','$username','$password','$level')";


        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($koneksi,$sql);

        // Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            echo "<script>
                    alert('Register Berhasil');
                    document.location.href='login.php';
                  </script>";
           

        }
        else {
          echo  "Gagal".$sql.mysqli_error($koneksi);
        }
        

    
    ?>