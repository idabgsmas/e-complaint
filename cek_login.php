<?php
require 'koneksi.php';
$user=$_POST['username'];
$pass=$_POST['password'];

$sql=mysqli_query($conn, "SELECT * FROM masyarakat WHERE username='$user' AND password='$pass' ");
$ceklogin=mysqli_num_rows($sql);

if ($ceklogin>0) {
	$data=mysqli_fetch_array($sql);
	session_start();
	$_SESSION['nama']=$user;
	$_SESSION['nik']=$data['nik'];
	$_SESSION['username']=$user;
	$_SESSION['password']=$pass;
	$_SESSION['telp']=$data['telp'];
	header('location:masyarakat.php');
}

else {
	?>
	<script type="text/javascript">
		alert ('Username atau Password Salah!');
		window.location="halamandepan.php";
	</script>
<?php
}
?>