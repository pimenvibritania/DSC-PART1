<?php
/**
 * Created by PhpStorm.
 * User: alfi
 * Date: 26/03/18
 * Time: 15:35
 */
    include "koneksi.php";
    //$_GET[id] untuk mengambil nilai dari address bar ?id=nilainya
    $query = "delete from tbl_mahasiswa where nim = '$_GET[id]'";
    if( $mysqli->query($query) ) {
        header("location:index.php");
    }else{
        echo "Data tidak terhapus";
    }
    $mysqli->close();
?>
