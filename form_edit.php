<?php
include 'koneksi.php';
 
$id         = $_GET['id'];
 
$uas  = mysqli_query($koneksi, "select * from siswa where id='$id'");
$row        = mysqli_fetch_array($uas);

function active_radio_button($value,$input){
    // apabilan value dari radio sama dengan yang di input
    $result =  $value==$input?'checked':'';
    return $result;
}
?>
 
<!DOCTYPE html>
<html>
    <head>
        <title>Form Edit Data Mahasiswa</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
    div class="container">
	<div class="row">
			<h1>Kelas</h1>
    </div>
    <div class="row">
			<h4 style="text-align:center">input data</h4>
    </div>
        <form method="post" action="update.php">
            <input type="hidden" value="<?php echo $row['id'];?>" name="siswa">
            <input type="hidden" value="<?php echo $row['npm'];?>" name="npm">
            <table border="1">
                <tr><td>NIM</td><td><input type="text" value="<?php echo $row['npm'];?>" name="npm"></td></tr>
                 
                <tr><td>NAMA</td><td><input type="text" value="<?php echo $row['nama'];?>" name="nama"></td></tr>

                <tr><td>Tempat Lahir</td><td><input value="<?php echo $row['tempat_lahir'];?>" type="text" name="tempat_lahir"></td></tr>

                <tr><td>Tanngal lahir</td><td><input value="<?php echo $row['tanggal_lahir'];?>" type="date" name="tanggal_lahir"></td></tr>
 
                  <tr><td>JENIS KELAMIN</td><td>
                        <input type="radio" name="jenis_kelamin" value="L" <?php echo active_radio_button("L", $row['jenis_kelamin'])?>>Laki Laki
                        <input type="radio" name="jenis_kelamin" value="P" <?php echo active_radio_button("P", $row['jenis_kelamin'])?>>Perempuan
                    </td></tr>
                    
                    <tr><td>alamat</td><td><input value="<?php echo $row['alamat'];?>" type="text" name="alamat"></td></tr>
                    <tr><td>kode pos</td><td><input value="<?php echo $row['kode_pos'];?>" type="text" name="kode_pos"></td></tr>
 
                
                              
                <tr><td colspan="2"><button type="submit" value="simpan">Update Data</button></td></tr>
 
            </table>
        </form>
    </body>
</html>