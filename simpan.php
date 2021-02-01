<?php
include 'koneksi.php';
 
// menyimpan data kedalam variabel
$npm            = $_POST['npm'];
$nama           = $_POST['nama'];
$tempat_lahir        = $_POST['tempat_lahir'];
$tanggal_lahir       = $_POST['tanggal_lahir'];
$jenis_kelamin      = $_POST['jenis_kelamin'];
$alamat        = $_POST['alamat'];
$kode_pos       = $_POST['kode_pos'];
 
if($npm=="")
{
  // echo "NPM kosong belum diisi, ";
  echo "<script>alert('NIM Belum diisi');history.go(-1);</script>";
}
 
if($nama=="")
{
  echo "<script>alert('Nama Belum diisi');history.go(-1);</script>";
}
 
if($tempat_lahir=="")
{
  echo "<script>alert('Tempat Lahir Belum diisi');history.go(-1);</script>";
}
  else
{
 
/* cek input NIM apakah sudah ada nim yang digunakan */
   $pilih="select * from data_mahasiswa where nim='$nim'";
   $cek=mysqli_query($koneksi, $pilih);
 
   $jumlah_data = mysqli_num_rows($cek);
   if ($jumlah_data >= 1 ) 
   {
 
  echo "<script>alert('NIM yang sama sudah digunakan');history.go(-1);</script>";
    }
   else
{
 
// query untuk insert data mahasiswa
   $query="INSERT INTO siswa SET  npm='$npm',nama='$nama',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',jenis_kelamin='$jenis_kelamin',alamat='$alamat',kode_pos='$kode_pos'";
mysqli_query($koneksi, $query);
 
// echo " Input Data yang anda masukkan sukses berhasil";
// header("location:query.php");
 
echo "<script>alert('Data yang anda Input sukses');window.location='query.php'</script>";
    }
 }
?>