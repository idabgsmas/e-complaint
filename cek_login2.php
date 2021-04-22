<?php
require 'koneksi.php';
$user=$_POST['username'];
$pass=$_POST['password'];

$sql=mysqli_query($conn, "SELECT * FROM petugas WHERE username='$user' AND password='$pass' ");
$ceklogin=mysqli_num_rows($sql);

if ($ceklogin>0) 
{
	$data=mysqli_fetch_array($sql);
	if ($data['level']=="admin") {
	session_start();
	$_SESSION['id_petugas']=$data['id_petugas'];
	$_SESSION['username']=$user;
	$_SESSION['password']=$pass;
	$_SESSION['telp']=$data['telp'];
	$_SESSION['nama']=$data['nama_petugas'];
	$_SESSION['level']=$data['level'];

	header('location:/admin/admin.php');
	}
	else if ($data['level']=="petugas") {
	session_start();
	$_SESSION['id_petugas']=$data['id_petugas'];
	$_SESSION['username']=$user;
	$_SESSION['password']=$pass;
	$_SESSION['telp']=$data['telp'];
	$_SESSION['nama']=$data['nama_petugas'];
	$_SESSION['level']=$data['level'];

	header('location:/petugas/petugas.php');
	}

}

else {
	?>
	<script type="text/javascript">
		alert ('Username atau Password Salah!');
		window.location="login_pemin.php";
	</script>
<?php
}
?>