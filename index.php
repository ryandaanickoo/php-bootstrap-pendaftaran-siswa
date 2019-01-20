<!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<title>Pendaftaran Siswa Baru | SMK Telkom Malang</title>
	<meta name="viewport" content="widht=device-width, initial-scale=1">

	<!-- Menyisipkan bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/style.css" />
	<link rel="stylesheet" href="assets/fonts/font-awesome.min.css" />
</head>
<body>
	  <!-- navbar -->
		<nav class="navbar navbar-default navbar-static-top">
    <div class="container" id="navbar">
      <div class="navbar-header">
        <a href="#" class="navbar-brand navbar-link"><img src="assets/image/ts.png"></a>
        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      </div>
      <div class="navbar navbar default" id="navcol-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="asek"><a href="form-daftar.php">Daftar</a></li>
          <li class="asek"><a href="list-siswa.php">Pendaftar</a></li>
          <li role="presentation"><a href="#"><i class="glyphicon glyphicon-search"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar -->

  <!-- jumbotron -->
  <div id="background">
    <div class="jumbotron">
      <h1>Telkom School</h1>
      <p>Sekolah IT pertama dan terbaik di Indonesia</p>
      <p><a href="https://www.smktelkom-mlg.sch.id/" class="btn btn-default" role="button">SMK Telkom Malang</a></p>
    </div>
  </div>
  <!-- jumbotron -->

  <!-- container  -->
  <div class="container bawah">
    <h1>Jurusan di SMK Telkom Malang</h1>
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="rounded-circle" src="assets/image/coding.jpg" width="200px">
        <h3>RPL</h3>
        <p class="text-center"><strong>Rekayasa Perangkat Lunak</strong> Diajarkan cara membuat program, membuat aplikasi berbasis web, dekstop, dan mobile.</p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="rounded-circle	" src="assets/image/upacara.jpg" width="200px">
        <h3>Telkom School</h3>
        <p class="text-center"><strong>Telkom School</strong></p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="rounded-circle	" src="assets/image/crimping.jpg" width="200px">
        <h3>TKJ</h3>
        <p class="text-center"><strong>Teknik Komputer Jaringan</strong> Diajarkan crimping kabel, diajarkan tentang jaringan, dan lain lain yang bersifat hardware.</p>
      </div>	
    </div>
  </div>
  <!-- container bawah -->

  <!-- container news -->
  <div id="news">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="thumbnail"><img src="assets/image/event.jpg" width="250px" height="250px">
          <div class="caption">
            <h3></h3>
            <p class="text-justify">SMK Telkom Malang: Berkelahi, Siswa Dikeluarkan, Kepala Sekolah Dicopot</p>
            <button class="btn btn-default"tyoe="button">READ MORE</button>
          </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="thumbnail"><img src="assets/image/telkom.jpg" width="250px" height="250px">
          <div class="caption">
            <h3></h3>
            <p class="text-justify">SMK Telkom Malang dengan Jurusan Teknologi dan Informatika Terbaik di Indonesia</p>
            <button class="btn btn-default"tyoe="button">READ MORE</button>
          </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="thumbnail"><img src="assets/image/telkom2.jpg" width="250px" height="250px">
          <div class="caption">
            <h3></h3>
            <p class="text-justify">Siswa SMK Telkom Malang Borong Peringkat Terbaik Nilai Terbaik Unas SMK Jatim</p>
            <button class="btn btn-default"tyoe="button">READ MORE</button>
          </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="thumbnail"><img src="assets/image/wisuda.jpg" width="250px" height="250px">
          <div class="caption">
            <h3></h3>
            <p class="text-justify">Prestasi Terbaik, SMK Telkom Malang Kejar Kompetensi Internasional</p>
            <button class="btn btn-default"tyoe="button">READ MORE</button>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
	<?php if(isset($_GET['status'])): ?>
	<?php endif; ?>
</body>
</html>