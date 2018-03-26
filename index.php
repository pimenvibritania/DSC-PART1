<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
            include 'koneksi.php';
            $query = "select * from tbl_mahasiswa";
            //untuk menjalankan perinta sql
            $result = $mysqli->query($query);
            //untuk mendapatkan jumlah bari dari table
            $num_results = $result->num_rows;
            echo "<div><a href='form.php'>Tambah Data</a></div>";
            //cek jika data tidak 0
            if( $num_results > 0){
                echo "<table border='1'>";
                echo "<tr>";
                echo "<th>NIM</th>";
                echo "<th>NAMA</th>";
                echo "<th>NOMOR TELEPON</th>";
                echo "<th>ALAMAT</th>";
                echo "<th>Action</th>";
                echo "</tr>";
                while( $row = $result->fetch_assoc() ){
                    //untuk mengektrak data
                    extract($row);
                    echo "<tr>";
                    echo "<td>{$nim}</td>";
                    echo "<td>{$nama}</td>";
                    echo "<td>{$no_tlp}</td>";
                    echo "<td>{$alamat}</td>";
                    echo "<td>";
                    echo "<a href='edit.php?id={$nim}'>Edit</a>";
                    echo " / ";
                    echo "<a href='delete.php?id={$nim}'>Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }else{
                //jika data kosong maka akan menampilkan data berikutnya
                echo "Data Kosong";
            }

            //menutup koneksi ke database
            $result->free();
            $mysqli->close();
        ?>
    </body>
</html>