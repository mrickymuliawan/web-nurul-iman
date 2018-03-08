

<section class="bg-gradient text-white mb-5 py-5">
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto text-center">
      <h2 class="">Pendaftaran PTTA Nurul Iman</h2>
    </div>
  </div>
</div><!-- /.container -->
</section>	

<section class="">
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <form action="<?=base_url('pendaftaran/siswa/3')?>" method="POST">
        <h3>Test Teori</h3>
        <p class="alert alert-info hover-shadow">
        Jawablah test dengan cepat dan tepat tanpa mencontek <br>
        Calon peserta Tahsin hanya menjawab pertanyaan nomor 1. <br>
        Calon peserta Bahasa Arab hanya menjawab pertanyaan nomor 2. <br>
        Calon peserta Tahsin dan Bahasa Arab maka jawab keduanya.
        </p>
        
        <p class="alert alert-primary">Soal untuk peserta Tahsin</p>
        <div class="form-group">
          <label>1. Apa saja yang termasuk dari Madd Ashliy?</label>
          <span class="text-danger">*</span>
          <div class="form-check">
            <input class="form-check-input" type="radio" id="1a" name="soal1" value="a">
            <label class="form-check-label" for="1a">
              Madd Shilah Kubra
            </label>
            <br>
            <input class="form-check-input" type="radio" id="1b" name="soal1" value="b">
            <label class="form-check-label" for="1b">
              Madd Far'i
            </label>
            <br>
            <input class="form-check-input" type="radio" id="1c" name="soal1" value="c">
            <label class="form-check-label" for="1c">
              Madd Iwad
            </label>
            <br>
            <input class="form-check-input" type="radio" id="1d" name="soal1" value="d">
            <label class="form-check-label" for="1d">
              Madd Wajib Muttashil
            </label>
          </div>
        </div>
        <p class="alert alert-warning">
          Silahkan calon peserta tahsin merekam suara dan upload, bacalah ayat sesuai dengan kemampuan.test ini wajib untuk peserta calon peserta tahsin
        </p>
        <div class="form-group">
          <label>Bacalah surat AL-MUZZAMMIL ayat 1 - 9</label><br>
          <input type="file" name="suara">
        </div>

        <hr>
        <p class="alert alert-primary">Soal untuk peserta Bahasa Arab</p>
        <div class="form-group">
          <label>2. Terjemahkan kedalam Bahasa Arab (Ini adalah sekolah)</label>
          <span class="text-danger">*</span>
          <div class="form-check">
            <input class="form-check-input" type="radio" id="2a" name="soal2" value="a" required>
            <label class="form-check-label" for="2a">
            هذا مدرسة 
            </label>
            <br>
            <input class="form-check-input" type="radio" id="2b" name="soal2" value="b" required>
            <label class="form-check-label" for="2b">
            ذلك مدرسة
            </label>
            <br>
            <input class="form-check-input" type="radio" id="2c" name="soal2" value="c" required>
            <label class="form-check-label" for="2c">
            هذه مدرسة
            </label>
            <br>
            <input class="form-check-input" type="radio" id="2d" name="soal2" value="d" required>
            <label class="form-check-label" for="2d">
            تلك مدرسة
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block hover-shadow">Selanjutnya</button>
      </form>
      <br>
      <b class="float-right">Page 2 of 3</b>
    </div>
  </div>
</div><!-- /.container -->
</section>	


