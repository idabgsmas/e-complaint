<?php  
include '../koneksi.php';
$id=$_GET['id'];

$sql=mysqli_query($conn, "DELETE FROM tanggapan WHERE id_tanggapan='$id' ");

if ($sql) {
?>
	<script type="text/javascript">
		alert ('Data Berhasil Dihapus!');
		window.location='admin.php?url=cek_tanggapan'
	</script>

	<?php
}
?>