<!DOCTYPE html>
<html>
    <head>
        <title>Form Input Mahasiswa</title>
    </head>
    <body>
        <form method="POST" action="simpan.php">
	        NIM<br>
	        <input type="number" min="0" name="nim_mhs"/><br>
	        NAMA<br>
	        <input type="text" name="nama"/><br>
	        No Telepon<br>
	        <input type="number" name="no_tlp"/><br>
	        Alamat<br>
	        <textarea name="alamat"></textarea><br>
	        <input type="submit" value="Simpan"/>
        </form>
    </body>
</html>