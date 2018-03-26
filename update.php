<?php
/**
 * Created by PhpStorm.
 * User: alfi
 * Date: 26/03/18
 * Time: 15:46
 */
    include "koneksi.php";
    $query = "update tbl_mahasiswa set nim = '$_POST[nim]', nama = '$_POST[nama]', no_tlp = '$_POST[no_tlp]', alamat = '$_POST[alamat]' where nim='$_GET[id]'";
    if( $mysqli->query($query) ) {
        header("location:index.php");
    }else{
        echo "Data tidak tersimpan";
    }
    $mysqli->close();
?>