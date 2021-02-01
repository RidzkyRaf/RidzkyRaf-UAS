<!DOCTYPE html>
<html>
    <head>
        <title>Input</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
    <div class="container">
	<div class="row">
			<h1>Kelas</h1>
    </div>
    <div class="row">
			<h4 style="text-align:center">input data</h4>
    </div>
         <form method="post" action="simpan.php">
         <input type="hidden" value="<?php echo $data['id'];?>" name="id_mahasiswa">
            <table border="1">
                <tr><td>NPM : </td><td><input type="text" name="npm"></td></tr>
                <tr><td>Nama :</td><td><input type="text" name="nama"></td></tr>
                <tr><td>Tempat Lahir :</td><td><input type="text" name="tempat_lahir"></td></tr>
                <tr><td>Tanggal lahir :</td><td><input type="date" name="tanggal_lahir"></td></tr>
            
                <tr><td>Jenis Kelamin</td><td>
                        <input type="radio" name="jenis_kelamin" value="L" checked>Laki Laki
                        <input type="radio" name="jenis_kelamin" value="P">Perempuan
                    </td></tr>
 
                    <tr><td>Alamat :</td><td><input type="text" name="alamat"></td></tr>
                    <tr><td>Kode pos :</td><td><input type="text" name="kode_pos"></td></tr>
 
            <tr><td colspan="2"><button type="submit" value="simpan">Submit</button></td></tr>
            </table>
        </form>
     </body>
</html>