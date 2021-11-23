<?php
require 'koneksi.php';

$id = $_GET["id"];

$sw = $query("SELECT * FROM siswa WHERE id = $id")[0];




if ( isset($_POST ["submit"])){

    //cek data berhasil atau tidak
    if (ubah($_POST) > 0){
        echo "
            <script>
                alert('data berhasil diubah !');
                document.location.href = 'tampildata.php';
            </script>
        ";
    }else {
        echo "
        <script>
            alert('data gagal diubah !');
            document.location.href = 'tampildata.php';
        </script>
        ";
    }


}
?>
