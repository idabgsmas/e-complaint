<?php 
include '../koneksi.php';
$nama=$_POST['nama_petugas'];
$username=$_POST['username'];
$password=$_POST['password'];
$telp=$_POST['telp'];
$lvl=$_POST['level'];
$id=$_POST['id_petugas'];

$sql=mysqli_query($conn, "UPDATE petugas SET nama_petugas='$nama', username='$username', password='$password', telp='$telp', level='$lvl' WHERE id_petugas='$id' "); 

if ($sql) {
?>
	<script type="text/javascript">
		alert ('Data Berhasil Diubah!');
		window.location='admin.php?url=cek_petugas';
	</script>
<?php
}
?>