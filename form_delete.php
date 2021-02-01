<?php
include 'koneksi.php';
 
// menyimpan data id kedalam variabel
$siswa   = $_GET['siswa'];
// query SQL untuk delete data
$query="DELETE from siswa where id='$siswa'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
echo "<script>alert('Data yang anda Hapus Sukses');window.location='query.php'</script>";
?>