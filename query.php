<?php
include "koneksi.php";
?>
<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "uas";
$con = new mysqli($localhost, $username, $password, $dbname);
if( $con->connect_error){
    die('Error: ' . $con->connect_error);
}
$sql = "SELECT * FROM siswa";
if( isset($_GET['search']) ){
    $name = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
    $sql = "SELECT * FROM siswa WHERE nama ='$name'";
}
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="table-wrapper">
<div class="container">
<form action="post" method="GET">
<input type="text" placeholder="ketik nama" name="search">&nbsp;
<input type="submit" value="Search" name="btn" class="btn btn-sm btn-primary">
</form>
    <table class="fl-table">
        <thead>
        <tr>
        <th>NPM</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>jenis kelamin</th>
        <th>alamat</th>
        <th>kode pos</th>
        <th>action</th>
        </tr>
        </thead>

 
<?php
 
// menampilkan seluruh isi database
$query ="select * from siswa";
$hasil = mysqli_query($koneksi, $query);
 
while($data = mysqli_fetch_array($hasil))
{
  ?>

  <tr>
  <td><?php echo $data['npm'] ?></td>
  <td><a href='form_edit.php?id=<?php echo $data['id']; ?> '> <?php echo $data['nama']; ?> </a></td>
  <td><?php echo $data['tempat_lahir'] ?></td>
  <td><?php echo $data['tanggal_lahir'] ?></td>
  <td><?php echo $data['jenis_kelamin'] ?></td>
  <td><?php echo $data['alamat'] ?></td>
  <td><?php echo $data['kode_pos'] ?></td>
  <td><a href='form_delete.php?siswa=<?php echo $data['id']; ?> ' onclick="javascript: return confirm('Anda yakin akan hapus data?')">Delete</a></td>
  </tr>
  </div>

  <?php } ?>
</table>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>