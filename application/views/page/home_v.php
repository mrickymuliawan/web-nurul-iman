<header class="">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <?php $slider = array('img-1.jpg','img-2.jpg','img-3.jpg' ); ?>
    <?php foreach ($slider as $key => $value): ?>
      <div class="carousel-item <?php if ($key==0): ?> active <?php endif ?>">
        <div class="row">
          <div class="col-md-12 carousel-column">
            <img class="d-block w-100" src="<?=base_url("assets/images/big/$value") ?>" alt="First slide">
              
          </div><!-- /.col -->
          <div class="col-lg-10">
            <div class="carousel-caption text-justify px-2">
              <h3><?="Title"?></h3>
              <h5><?="Sub Title"?></h5>
              <p><?= "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident" ?></p>
              <?php if (true): ?>
                <a href="<?="#"?>" class="btn btn-primary"><?="See More"?></a>
              <?php endif ?>
              
            </div>
          </div> <!-- /.col-md-8-->
        </div><!-- /.row -->
      </div>
    <?php endforeach ?>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="fa fa-angle-left fa-2x" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="fa fa-angle-right fa-2x" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</header>	

<section class="bg-light py-5">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      
      <h3>Lorem ipsum dolor sit amet</h3>
      <b>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</b>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
      <a href="<?= base_url('about') ?>" class="btn btn-primary">Tentang Kami</a href="">
    </div>
  </div>
</div><!-- /.container -->
</section>	

<section class="bg-primary text-white mb-5 py-5">
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto text-center">
      <h2 class="">Pendidikan di Masjid Nurul Iman</h2>
      <p>Ada beberapa kelas pendidikan yang kami tawarkan</p>
    </div>
  </div>
</div><!-- /.container -->
</section>	

<section class="mb-5">
<div class="container">
  <h2 class="text-center">KELAS</h2>
  <div class="row">

    <?php for ($i=3; $i <= 5; $i++) { ?>
    <div class="col-md-4">
      <div class="card hover-shadow">
        <a href="<?=base_url("#") ?>"> <img class="card-img-top" src="<?=base_url("assets/images/small/img-$i.jpg") ?>" alt="Card image cap"></a>
        <div class="card=block p-2">
          <h4 class="card-title"><?= ucwords("Kelas") ?></h4>
          <?= "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident" ?>
        </div>
        <div class="card-block">
          <a href="<?=base_url("#") ?>" class="btn btn-info btn-block ">Find Out More</a>
        </div><!-- /.card-block -->
      </div>
    </div><!-- /.col-md-4 -->
    <?php } ?>
    
  </div><!-- /.row -->
</div><!-- /.container -->
</section>	

<section class="bg-light p-4">
<div class="container">
  <div class="row">
    <div class="col-md-6">
    <h2 class="text-center">LATEST KEGIATAN</h2>
      
      
      <div class="card hover-shadow">
        <a href="<?= base_url("#") ?>">
          <img class="card-img-top" src="<?=base_url("assets/images/small/img-3.jpg") ?>" alt="Card image cap" >
        </a>	
        <div class="card-block p-2">
          <h4 class="card-title"><?= ucwords("Kegiatan Futsal Masjid Nurul Iman") ?></h4>
          <p>
          <?= date('d F Y',strtotime("2018/03/10"))." by <b>Admin</b>" ?>			    	
          </p>
          <?= "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident" ?>
          
          <br /><br />
          <a href="<?= base_url("#") ?>" class="btn float-right">Read More</a>
        </div>
      </div>
      
      <br />
      <a href="<?=base_url("news")?>" class="btn btn-info float-right">Show All Kegiatan</a>
    </div><!-- /.col-md-6 -->
    <div class="col-md-6">
      <h2 class="text-center">LATEST MATERI</h2>
      <ul class="list-group">
        <?php for ($i=1; $i <=10 ; $i++) { ?>
          <li class="list-group-item">
            <a href="<?= base_url("#") ?>">
              <?= "Bahasa Arab Dasar 1: Nahwu Shorof" ?>
            </a>
          </li>
          
        <?php } ?>
      </ul>
      <br />
      <a href="<?=base_url("regulation")?>" class="btn btn-info float-right">Show All Materi</a>
    </div><!-- /.col-md-6 -->
  </div><!-- /.row -->
</div><!-- /.container -->
</section>

<section class="bg-info text-white p-5">
<div class="container">
  <h2 class="">PENDAFTARAN</h2>
  <!-- <p>Jobs Offer</p> -->
  <hr />
  <div class="row">
    <div class="col-md-6 p-4 bg-light text-dark">
      <h4><?= ucwords("siswa") ?></h4>
      <p class="text-muted">
        <?= "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident" ?>
      </p>
      <a href="<?=base_url("#")?>" class="btn btn-primary">Daftar</a>
    </div>
    <div class="col-md-6 p-4 bg-light text-dark">
      <h4><?= ucwords("pengajar") ?></h4>
      <p class="text-muted">
        <?= "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident" ?>
      </p>
      <a href="<?=base_url("#")?>" class="btn btn-primary">Daftar</a>
    </div>
  </div>
</div><!-- /.container -->
</section>	