<?php 
include '../koneksi.php';
$nama=$_POST['nama_petugas'];
$username=$_POST['username'];
$password=$_POST['password'];
$telp=$_POST['telp'];
$lvl=$_POST['level'];


$sql=mysqli_query($conn, "INSERT INTO petugas(nama_petugas,username,password,telp,level) VALUES('$nama','$username','$password','$telp','$lvl')"); 

if ($sql) {
?>
	<script type="text/javascript">
		alert ('Data Berhasil Disimpan!');
		window.location='admin.php?url=cek_petugas';
	</script>
<?php
}
?>