<?php  
include '../koneksi.php';
$nik=$_GET['nik'];

$sql=mysqli_query($conn, "DELETE FROM masyarakat WHERE nik='$nik' ");

if ($sql) {
?>
	<script type="text/javascript">
		alert ('Data Berhasil Dihapus!');
		window.location='admin.php?url=cek_masyarakat'
	</script>

	<?php
}
?>