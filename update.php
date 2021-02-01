<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id         = $_POST['siswa'];
$npm            = $_POST['npm'];
$nama           = $_POST['nama'];
$tempat_lahir      = $_POST['tempat_lahir'];
$tanggal_lahir     = $_POST['tanggal_lahir'];
$jenis_kelamin        = $_POST['jenis_kelamin'];
$alamat      = $_POST['alamat'];
$kode_pos  = $_POST['kode_pos'];
 
// query SQL untuk insert data ke dalam Mysql
$query="UPDATE siswa SET npm='$npm',nama='$nama',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',jenis_kelamin='$jenis_kelamin',alamat='$alamat', kode_pos='$kode_pos' where id='$id'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
echo "<script>alert('Data yang anda Update sukses');window.location='query.php'</script>";
?>