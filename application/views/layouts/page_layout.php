<!doctype html>
<html lang="en">
  <head>
    <title>Masjid Nurul Iman</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- bootstrap css -->
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- font awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/page-style.css') ?>" />
    
	</head>
	<body>


    <div class="container py-2">
      <div class="row">
        <div class="col-md-8">
          <a class="text-primary" href="<?= base_url('') ?>"> <span class="fa fa-envelope"></span> admin@nuruliman.co.id</a>
        </div><!-- /.col-md-3 -->
        <!-- /.col-md-7 -->
        <div class="offset-md-1 col-md-3 text-md-right">
          <a class="mr-3 text-primary" href="<?= base_url('') ?>"> <span class="fa fa-facebook"></span></a>
        
        
          <a class="mr-3 text-primary" href="<?= base_url('') ?>"> <span class="fa fa-instagram"></span></a>
       
        </div><!-- /.col-sm-2 -->
      </div><!-- /.row -->
          
    </div>
 

	<nav class="navbar navbar-expand-lg navbar-light bg-primary sticky-top pl-5 mb-1 hover-shadow">
   
      <a class="navbar-brand text-white" href="<?= base_url('') ?>"><strong>Masjid Nurul Iman Srengseng</strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link text-white" href="<?= base_url('') ?>">Home</a>
          </li>
           <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('#') ?>">Daftar Siswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('#') ?>">Daftar Pengajar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('#') ?>">Materi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('#') ?>">Galeri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('#') ?>">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('#') ?>">Kontak Kami</a>
          </li>
          <li class="nav-item ml-2">
            <a class="nav-link btn bg-white px-3 box-shadow" href="<?= base_url('admin') ?>">Login</a>
          </li>
        </ul>
        
       <!--  <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn bg-white my-2 my-sm-0" type="submit">Search</button>
        </form> -->

      </div>
  </nav>

  
  <?php $this->load->view("$view") ?>

<section class="p-5 bg-light">
  <div class="container">
    <div class="row">
    	<div class="col-md-6">
    		<ul class="list-inline">
          <li class="list-inline-item"><a href="<?=base_url('#')?>">Daftar Siswa</a></li>
    			<li class="list-inline-item"><a href="<?=base_url('#')?>">Daftar Pengajar</a></li>
    			<li class="list-inline-item"><a href="<?=base_url('#')?>">Materi</a></li>
    			<li class="list-inline-item"><a href="<?=base_url('#')?>">Galeri</a></li>
    			<li class="list-inline-item"><a href="<?=base_url('#')?>">Tentang Kami</a></li>
          <li class="list-inline-item"><a href="<?=base_url('#')?>">Kontak Kami</a></li>
    		</ul>
    		
    	</div><!-- /.col-md-6 -->
    	<div class="col-md-6">
				<p class="text-muted float-right">Copyright © 2018 Masjid Nurul Iman. All Rights Reserved.</p>
    	</div><!-- /.col-md-6 -->
    </div><!-- /.row -->
  </div>
</section>
		<!-- jquery -->
		<script
		src="https://code.jquery.com/jquery-3.2.1.min.js"
		integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		crossorigin="anonymous"></script>
		<!-- popper.js -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<!-- bootsrap js -->
		<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
	</body>
</html>