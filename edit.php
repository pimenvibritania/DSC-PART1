<!DOCTYPE html>
<html>
    <head>
        <title>Edit Data</title>
    </head>
    <body>
        <?php
            include 'koneksi.php';
            //$_GET[id] merupakan parameter yang berisikan nilai NIS, perhatikan pada address bar ada ?id=nilai
            $query = "select * from tbl_mahasiswa where nim='$_GET[id]'";
            //untuk menjalankan perinta sql
            $result = $mysqli->query($query);
            //untuk mendapatkan jumlah bari dari table
            $num_results = $result->num_rows;
            //cek jika data tidak 0
            if( $num_results > 0){
                $row = $result->fetch_assoc();
                //untuk mengektrak data
                extract($row);
            }else{
                //jika data kosong maka akan menampilkan data berikutnya
                echo "Data Kosong";
            }
            //menutup koneksi ke database
            $result->free();
            $mysqli->close();
        ?>
        <form method="POST" action="<?php echo "update.php"; ?>">
            NIM
            <br>
            <input type="number" min="0" name="nim" value="<?php echo "{$nim}"; ?>"/>
            <br>

            NAMA
            <br>
            <input type="text" name="nama" value="<?php echo "{$nama}"; ?>"/>
            <br>

            No Telepon
            <br>
            <input type="text" name="no_tlp" value="<?php echo "{$no_tlp}"; ?>"/>
            <br>

            Alamat
            <br>
            <textarea name="alamat"><?php echo "{$alamat}"; ?></textarea>
            <br>

            <input type="submit" value="Ubah"/>
            <a href="index.php">Kembali</a>
        </form>
    </body>
</html>