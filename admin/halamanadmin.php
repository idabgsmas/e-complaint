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

		case 'tanggapi_pengaduan';
			include 'tanggapi_pengaduan.php';
			break;

		case 'cek_petugas';
			include 'cek_petugas.php';
			break;

		case 'tambah_pemin';
			include 'tambah_pemin.php';
			break;

		case 'edit_pemin';
			include 'edit_pemin.php';
			break;	

		case 'cek_masyarakat';
			include 'cek_masyarakat.php';
			break;

		case 'cek_pengaduan';
			include 'cek_pengaduan.php';
			break;

		case 'cek_tanggapan';
			include 'cek_tanggapan.php';
			break;			

		case 'edit_tanggapan';
			include 'edit_tanggapan.php';
			break;	

		case 'tampil_cetakpetugas';
			include 'tampil_cetakpetugas.php';
			break;	

		case 'tampil_cetakmasyarakat';
			include 'tampil_cetakmasyarakat.php';
			break;	

		case 'tampil_cetakpengaduan';
			include 'tampil_cetakpengaduan.php';
			break;	

		case 'tampil_cetaktanggapan';
			include 'tampil_cetaktanggapan.php';
			break;													

	}
}



else {
	?>
  <br>
	<h6>Anda Login Sebagai : </h6> <h2 class="font-weight-bold"><b class="text-uppercase"> <?php echo $_SESSION['nama'];

	include '../koneksi.php';
	$sql=mysqli_query($conn, "SELECT * FROM pengaduan");
	if ($cek=mysqli_num_rows($sql)) {
	?> </b></h2>

	 <br>
   <div class="row">
    <div class="col-xl-6 col-md-6 mb-4">
     <div class="card border-bottom-primary shadow h-100 py-2">
      <div class="card-body">
       <div class="row no-gutters align-items-center">
        <div class="col mr-2">
         <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><b>Total Laporan Pengaduan : </b></div>
           <div class="h5 mb-0 font-weight-bold text-gray-800"><b>Ada <?php echo $cek; ?> Pengaduan Dari Masyarakat</b></div>
         </div>
         <div class="col-auto">
          <span class="badge badge-danger bagde-counter" style="height: 55px; width: 55px; padding-top: 5px;" ><h1><?php echo $cek; ?></h1></span>
        </div>
       </div>
      </div>
     </div>
    </div>

  <?php $sql=mysqli_query($conn, "SELECT * FROM pengaduan WHERE status='0'");
  if ($nol=mysqli_num_rows($sql)) {
  ?> </b></h2>

    <div class="col-xl-6 col-md-6 mb-4">
     <div class="card border-bottom-primary shadow h-100 py-2">
      <div class="card-body">
       <div class="row no-gutters align-items-center">
        <div class="col mr-2">
         <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><b>Jumlah Laporan Pengaduan Belum Diverifikasi : </b></div>
           <div class="h5 mb-0 font-weight-bold text-gray-800"><b>Ada <?php echo $nol; ?> Pengaduan Dari Masyarakat Yang Belum Diverifikasi "0"</b></div>
         </div>
         <div class="col-auto">
          <span class="badge badge-danger bagde-counter" style="height: 55px; width: 55px; padding-top: 5px;" ><h1><?php echo $nol; ?></h1></span>
        </div>
       </div>
      </div>
     </div>
    </div>

  <?php $sql=mysqli_query($conn, "SELECT * FROM pengaduan WHERE status='proses'");
  if ($proses=mysqli_num_rows($sql)) {
  ?> </b></h2>
    
    <div class="col-xl-6 col-md-6 mb-4">
     <div class="card border-bottom-primary shadow h-100 py-2">
      <div class="card-body">
       <div class="row no-gutters align-items-center">
        <div class="col mr-2">
         <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><b>Jumlah Laporan Pengaduan Sudah Diverifikasi : </b></div>
           <div class="h5 mb-0 font-weight-bold text-gray-800"><b>Ada <?php echo $proses; ?> Pengaduan Dari Masyarakat Yang Sudah Diverifikasi dan Belum Ditanggapi "Proses"</b></div>
         </div>
         <div class="col-auto">
          <span class="badge badge-danger bagde-counter" style="height: 55px; width: 55px; padding-top: 5px;" ><h1><?php echo $proses; ?></h1></span>
        </div>
       </div>
      </div>
     </div>
    </div>

  <?php $sql=mysqli_query($conn, "SELECT * FROM pengaduan WHERE status='selesai'");
  if ($selesai=mysqli_num_rows($sql)) {
  ?> </b></h2>

    <div class="col-xl-6 col-md-6 mb-4">
     <div class="card border-bottom-primary shadow h-100 py-2">
      <div class="card-body">
       <div class="row no-gutters align-items-center">
        <div class="col mr-2">
         <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><b>Jumlah Laporan Pengaduan Sudah Ditanggapi : </b></div>
           <div class="h5 mb-0 font-weight-bold text-gray-800"><b>Ada <?php echo $selesai; ?> Pengaduan Dari Masyarakat Yang Sudah Ditanggapi "Selesai"</b></div>
         </div>
         <div class="col-auto">
          <span class="badge badge-danger bagde-counter" style="height: 55px; width: 55px; padding-top: 5px;" ><h1><?php echo $selesai; ?></h1></span>
        </div>
       </div>
      </div>
     </div>
    </div>

  <?php $sql=mysqli_query($conn, "SELECT * FROM petugas");
  if ($petugas=mysqli_num_rows($sql)) {
  ?> </b></h2>

    <div class="col-xl-6 col-md-6 mb-4">
     <div class="card border-bottom-primary shadow h-100 py-2">
      <div class="card-body">
       <div class="row no-gutters align-items-center">
        <div class="col mr-2">
         <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><b>Jumlah Petugas :</b></div>
           <div class="h5 mb-0 font-weight-bold text-gray-800"><b>Ada <?php echo $petugas; ?> Petugas/Admin Yang Terdata</b></div>
         </div>
         <div class="col-auto">
          <span class="badge badge-danger bagde-counter" style="height: 55px; width: 55px; padding-top: 5px;" ><h1><?php echo $petugas; ?></h1></span>
        </div>
       </div>
      </div>
     </div>
    </div>

  <?php $sql=mysqli_query($conn, "SELECT * FROM masyarakat");
  if ($masyarakat=mysqli_num_rows($sql)) {
  ?> </b></h2>

    <div class="col-xl-6 col-md-6 mb-4">
     <div class="card border-bottom-primary shadow h-100 py-2">
      <div class="card-body">
       <div class="row no-gutters align-items-center">
        <div class="col mr-2">
         <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><b>Jumlah Masyarakat : </b></div>
           <div class="h5 mb-0 font-weight-bold text-gray-800"><b>Ada <?php echo $petugas; ?> Masyarakat Yang Terdata/Terdaftar</b></div>
         </div>
         <div class="col-auto">
          <span class="badge badge-danger bagde-counter" style="height: 55px; width: 55px; padding-top: 5px;" ><h1><?php echo $petugas; ?></h1></span>
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
        <label>ID Petugas</label>
        <input type="text" name="id_petugas" value="<?php echo $_SESSION['id_petugas']; ?>" class="form-control" readonly>
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
        <label>Level</label>
        <input type="text" name="level" value="<?php echo $_SESSION['level']; ?>" class="form-control" readonly >
      </div>
  </div>
    

<?php    
} } } } } } } }
?>