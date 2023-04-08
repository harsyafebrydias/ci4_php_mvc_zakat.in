<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
		body {
			font-family: Arial, sans-serif;
		}
		
		h1 {
			font-family: Verdana, Geneva, sans-serif;
		}
		
		p {
			font-family: Verdana, Geneva, sans-serif;
		}
	</style>
    <title>Zakat-in | Report PDF Infaq</title>
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <i class="fas fa-globe"></i> Zakat-in
          <small class="float-right">Aplikasi Web Zakat Modern</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
      Tanggal : <?php $tanggal_sekarang = tgl_indo(date("Y-m-d")); echo $tanggal_sekarang; ?>
      <br></br>
        From
        <address>
          <strong>Zakat-in</strong><br>
          Jl. Raya Pondok Petir rt.003/001, Pondok Petir, Bojongsari<br>
          Depok, Jawa Barat 16524<br>
          Phone: +62 815-1308-7967<br>
          Email: harsya142@gmail.com
        </address>
      </div>
      
    </div>

<center><h1>Report PDF Infaq</h1></center>
<center><p>Data berupa NIK, Nama, Alamat, Tanggal dan Jumlah Infaq</p></center>
<div class="row">
      <div class="col-12 table-responsive">
<table id="example" class="table table-striped table-bordered" style="width:100%" table border="2">
        <thead>    
        <tr>
            <td>NIK</td>
            <td>NAMA</td>
            <td>ALAMAT</td>
            <td>TANGGAL</td>
            <td>JUMLAH INFAQ</td>

        </tr>
        </thead>
        <?php
            foreach ($hasil as $row){

        ?>
        <tr>
            <td><?php echo $row->nik; ?></td>
            <td><?php echo $row->nama; ?></td>
            <td><?php echo $row->alamat; ?></td>
            <td><?php echo tgl_indo($row->tanggal); ?></td>
            <td><?php echo rupiah($row->jml_infaq); ?></td>
          
        </tr>
        <?php
        }
        ?>
        
    </table>
    </div>
    </div>
    <br></br>
    <style>
   #my-text {
      position: absolute;
      bottom: 0;
      left: 0;
   }
</style>

<div id="my-text">
   Invoice Resmi Dari : Zakat-in by Harsya Febrydias
</div>
</body>
</html>