<?php
if (isset($_GET['url'])) {
	$url=$_GET['url'];

	switch ($url) {
		case 'verifikasi_pengaduan';
			include 'verifikasi_pengaduan.php';
			break;
		case 'info_pengaduan';
			include 'info_pengaduan.php';
			break;
		

			
	}
}

else {
	?>
	<h6>Anda Login Sebagai : </h6> <h2 class="text-uppercase font-weight-bold"><b> <?php echo $_SESSION['nama'];

	include '../koneksi.php';
	$sql=mysqli_query($conn, "SELECT * FROM pengaduan WHERE status='0'");
	if ($cek=mysqli_num_rows($sql)) {
	?> </b></h2>
	<br>

  <div class="row">
    <div class="col-xl-6 col-md-6 mb-4">
     <div class="card border-bottom-primary shadow h-100 py-2">
      <div class="card-body">
       <div class="row no-gutters align-items-center">
        <div class="col mr-2">
         <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Laporan Pengaduan : </div>
           <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $cek; ?> Pengaduan Dari Masyarakat Yang Belum Diverifikasi</div>
         </div>
         <div class="col-auto">
          <span class="badge badge-danger bagde-counter" style="height: 55px; width: 55px; padding-top: 5px;" ><h1><?php echo $cek; ?></h1>
        </div>
       </div>
      </div>
     </div>
    </div>

    <?php $sql=mysqli_query($conn, "SELECT * FROM pengaduan WHERE status='proses'");
    if ($proses=mysqli_num_rows($sql)) {
    ?> </b></h2>

    <div class="col-xl-6 col-md-6 mb-4">
     <div class="card border-bottom-success shadow h-100 py-2">
      <div class="card-body">
       <div class="row no-gutters align-items-center">
        <div class="col mr-2">
         <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Laporan Pengaduan : </div>
           <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $proses; ?> Pengaduan Dari Masyarakat Yang Sudah Diverifikasi</div>
         </div>
         <div class="col-auto">
          <span class="badge badge-danger bagde-counter" style="height: 55px; width: 55px; padding-top: 5px;" ><h1><?php echo $proses; ?></h1>
        </div>
       </div>
      </div>
     </div>
    </div>
  </div>




  <br>

  <div class="card shadow">
  <div class="card-header">
    <h3 class="font-weight-bold" style="margin-top: 10px;">Data Anda</h3>
  </div>
  <div class="card-body">
  <div class="form-group cols-sm-6">

    <?php 
    include '../koneksi.php';
    $sql=mysqli_query($conn, "SELECT * FROM petugas");
    if ($data=mysqli_fetch_array($sql)) {
    ?>

    <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
      <div class="form-group cols-sm-6">
        <b><label>ID Petugas</label>
        <input type="text" name="id_petugas" value="<?php echo $_SESSION['id_petugas']; ?>" class="form-control " readonly >
      </div>
      <div class="form-group cols-sm-6">
        <label>Nama Petugas</label>
        <input type="text" name="nama_petugas" value="<?php echo $_SESSION['nama']; ?>" class="form-control " readonly >
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
      <div class="form-group cols-sm-6">
        <label>Level</label></b>
        <input type="text" name="level" value="<?php echo $_SESSION['level']; ?>" class="form-control" readonly >
      </div>
  </div>

<?php
} } } }
?>