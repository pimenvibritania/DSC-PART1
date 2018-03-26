<?php
/**
 * Created by PhpStorm.
 * User: alfi
 * Date: 26/03/18
 * Time: 15:23
 */
    include "koneksi.php";
    $query = "insert into tbl_mahasiswa set nim = '$_POST[nim_mhs]', nama = '$_POST[nama]', no_tlp = '$_POST[no_tlp]', alamat = '$_POST[alamat]'";
    if($mysqli->query($query)) {
        header("location:index.php");
        //echo "Data tersimpan";
    }else{
        echo "Data tidak tersimpan";
    }
    $mysqli->close();
?>
