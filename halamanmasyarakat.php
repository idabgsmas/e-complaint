<?php
if (isset($_GET['url'])) {
	$url=$_GET['url'];

	switch ($url) {
		case 'buat_pengaduan';
			include 'buat_pengaduan.php';
			break;
		
		case 'cek_pengaduan';
			include 'cek_pengaduan.php';
			break;

		case 'info_pengaduan';
			include 'info_pengaduan.php';
			break;

		case 'cek_tanggapan';
			include 'cek_tanggapan.php';
			break;

			
	}
}



else {
	?>
	<h6>Anda Login Sebagai : </h6> <h2  class="text-uppercase font-weight-bold" ><b> <?php echo $_SESSION['nama']; ?> </b></h2>
  <br>
  
  <div class="card shadow">
  <div class="card-header">
    <h3 class="font-weight-bold" style="margin-top: 10px;">Data Anda</h3>
  </div>
  <div class="card-body">
  <div class="form-group cols-sm-6">

    <?php 
    include 'koneksi.php';
    $sql=mysqli_query($conn, "SELECT * FROM masyarakat");
    if ($data=mysqli_fetch_array($sql)) {
    ?>

    <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
      <div class="form-group cols-sm-6">
        <label>NIK</label>
        <input type="text" name="nik" value="<?php echo $_SESSION['nik']; ?>" class="form-control" readonly>
      </div>      
      <div class="form-group cols-sm-6">
        <label>Nama</label>
        <input type="text" name="nama" value="<?php echo $_SESSION['nama']; ?>" class="form-control " readonly >
      </div>
      <div class="form-group cols-sm-6">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $_SESSION['username']; ?>" class="form-control"readonly >
      </div>
      <div class="form-group cols-sm-6">
        <label>Password</label>
        <input type="text" name="password" value="<?php echo $_SESSION['password']; ?>" class="form-control"readonly >
      </div>
      <div class="form-group cols-sm-6">
        <label>Telepon</label>
        <input type="text" name="telp" value="<?php echo $_SESSION['telp']; ?>" class="form-control"readonly >
      </div>        
  </div>

<?php
} } 
?>