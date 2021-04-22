<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LAPORKAN PENGADUAN</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

<div class="card shadow">
  <div class="card-header">
    DETAIL PENGADUAN
  </div>
  <div class="card-body">
  <div class="form-group cols-sm-6">
  <a href="?url=cek_pengaduan" class="btn btn-primary btn-icon-split">
    <span class="icon tex-white-50">
      <i class="fas fa-arrow-left"></i>
    </span>
    <span class="text"> Kembali</span>
  </a>
</div> 
  
    <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">

      <?php
      include 'koneksi.php';
      $sql=mysqli_query($conn, "SELECT * FROM pengaduan, tanggapan WHERE tanggapan.id_pengaduan='$_GET[id]' AND tanggapan.id_pengaduan=pengaduan.id_pengaduan");
      $cek=mysqli_num_rows($sql);
      if ($cek<1) //data tidak ada 
      {
        echo "<font color='red'>Mohon bersabar, pengaduan belum ditanggapi!</font>";
      }
      else {
      
      if ($data=mysqli_fetch_array($sql))  
        {
         ?>

      <div class="form-group cols-sm-6">
        <label>Tanggal Tanggapan</label>
        <input type="text" name="tgl_tanggapan" value="<?php echo $data['tgl_tanggapan']; ?>" class="form-control" readonly>
      </div>
      <div class="form-group cols-sm-6">
        <label>Isi Pengaduan Anda</label>
        <textarea class="form-control" rows="14" name="isi_laporan" readonly=""><?php echo $data['isi_laporan']; ?>          
      </textarea>
      </div>
      <div class="form-group cols-sm-6">
        <label>Isi Tanggapan</label>
        <textarea class="form-control" rows="14" name="tanggapan" readonly=""><?php echo $data['tanggapan']; ?>          
      </textarea>
      </div> 

    <?php } } ?>

    </form>
  </div>
</div>
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin Untuk Keluar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih "Keluar" jika ingin keluar dari akun anda.</div>
        <div class="modal-footer">
          <button class="btn btn-danger" type="button" data-dismiss="modal">BATAL</button>
          <a class="btn btn-success" href="keluar.php">KELUAR</a>
        </div>
      </div>
    </div>
  </div>

</body>

</html>