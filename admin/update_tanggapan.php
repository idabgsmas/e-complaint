<?php 
include '../koneksi.php';
$id_tanggapan=$_POST['id_tanggapan'];
$id_pengaduan=$_POST['id_pengaduan'];
$tgl=date('Y/m/d');
$tanggapan=$_POST['tanggapan'];
$id_petugas=$_POST['id_petugas'];

$sql=mysqli_query($conn, "UPDATE tanggapan SET tanggapan='$tanggapan', tgl_tanggapan='$tgl' WHERE id_tanggapan='$id_tanggapan' "); 

if ($sql) {
?>
	<script type="text/javascript">
		alert ('Data Berhasil Diubah!');
		window.location='admin.php?url=cek_tanggapan';
	</script>
<?php
}
?>