<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.css')?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
  
    <title>Zakat-in | Menu Data Muzakki Zakat Mal</title>
</head>
<body>
<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #00E676;">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <img
        src="https://cdn-icons-png.flaticon.com/512/2645/2645700.png"
        height="50"
        alt="MDB Logo"
        loading="lazy"
      />
      <li class="nav-item">
          <a class="navbar-brand" href="<?= base_url('data')?>">Data Zakat Fitrah</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="<?= base_url('datamal')?>">Data Zakat Mal</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="<?= base_url('datainfaq')?>">Data Infaq</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="<?= base_url('data/insertData')?>">Baru Zakat Fitrah</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="<?= base_url('datamal/insertDataMal')?>">Baru Zakat Mal</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="<?= base_url('dataInfaq/insertDataInfaq')?>">Baru Infaq</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="<?= base_url('Home')?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="<?= base_url('login/logout')?>">Log Out</a>
        </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Background image -->
  <div
    class="p-5 text-center bg-image"
    style="
      background-image: url('https://images.hukumonline.com/frontend/lt5eafc120ad93a/lt5eafc21e6c521.jpg');
      height: 400px;
      margin-top: 58px;
    "
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3">Selamat Datang Di Zakat-in</h1>
          <h4 class="mb-3">Aplikasi Web Zakat Modern</h4>
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
</header>

<div class="d-grid gap-3">
</div>
<div class="container">
<?php
//$nama = 'user_name';
//echo "<script>alert('Halo, $nama');</script>";
//?>
<br></br>
<h1>Halaman Data Muzakki Zakat Mal</h1>
<p>Data Muzakki Berupa NIK, Nama, Tanggal Pembayaran, Jumlah Penghasilan dan Zakat 2,5%</p>

<td></td>

        <table class="table table-bordered table-striped">
        <thead>    
        <tr>
            <td>NIK</td>
            <td>NAMA</td>
            <td>ALAMAT</td>
            <td>TANGGAL</td>
            <td>PENGHASILAN</td>
            <td>JUMLAH ZAKAT</td>
            <td>AKSI <a href='/ReportMal/tampilPdfMal' button type="button" class="btn btn-link" data-mdb-ripple-color="dark">Report PDF</button></td>
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
            <td><?php echo rupiah($row->jml_hasil); ?></td>
            <td><?php echo rupiah($row->jml_zakat); ?></td>
            <td> 
                <a href="datamal/editDataMal/<?php echo $row->nik; ?>" class="btn btn-rounded" style="background-color: #90CAF9;">Edit</a>
                <a href="datamal/hapusDataMal/<?php echo $row->nik; ?>" class="btn btn-rounded" style="background-color: #F06292">Hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
    
    <br></br>    
</div>

<footer class="text-center text-lg-start" style="background-color: #E0E0E0">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">About Writter</h5>

        <p>
          Saya Harsya Febrydias NIM 12001007. 
          Mahasiswa Universitas Cendekia Abditama. 
          Website ini sebagai nilai UTS Pemrograman Web.
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">About This Page</h5>

        <p>
          Web ini berisi tabel data Zakat Fitrah, Zakat Mal dan Infaq. 
          Form input dan edit data Zakat Fitrah,Zakat Mal dan Infaq.
        </p>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: #e3f2fd;">
    © 2023 Copyright:
    <a class="text-dark" >Zakat-in by Harsya Febrydias</a>
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>