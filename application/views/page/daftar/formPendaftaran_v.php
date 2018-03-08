

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
      <form action="<?= base_url('pendaftaran/siswa/2') ?>" method="POST">
        <p class="alert alert-info hover-shadow">Isilah Form Pendaftaran dengan lengkap, saat mengisi biasakan awalan huruf mengunakan huruf kapital.</p>
        <div class="form-group">
          <label>Alamat Email</label>
          <span class="text-danger">*</span>
          <input type="email" class="form-control" required>
          <small class="form-text text-muted">Email Siswa atau Orang tua Siswa</small>
        </div>
        <div class="form-group">
          <label>Nama Lengkap</label>
          <span class="text-danger">*</span>
          <input type="text" name="nama_lengkap" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Nama Wali</label>
          <input type="text" name="nama_wall" class="form-control" required>
          <small class="form-text text-muted">Untuk program tafizh anak</small>
        </div>
        <div class="form-group">
          <label>Jenis Kelamin</label>
          <span class="text-danger">*</span>
          <div class="form-check">
            <input class="form-check-input" type="radio" id="ikhwan" name="jenis_kelamin" value="ikhwan">
            <label class="form-check-label" for="ikhwan">
              Ikhwan
            </label>
            <br>
            <input class="form-check-input" type="radio" id="akhwat" name="jenis_kelamin" value="akhwat">
            <label class="form-check-label" for="akhwat">
              Akhwat
            </label>
          </div>
        </div>
        <div class="form-group">
          <label>Tanggal Lahir</label>
          <span class="text-danger">*</span>
          <input type="date" name="tanggal_lahir" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Pekerjaan</label>
          <span class="text-danger">*</span>
          <input type="text" name="pekerjaan" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Keahlian</label>
          <span class="text-danger">*</span>
          <input type="text" name="keahlian" class="form-control" required>
        </div>
        <div class="form-group">
          <label>No Handphone (WA/TELP)</label>
          <span class="text-danger">*</span>
          <input type="number" name="no_handphone" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Nomor Darurat</label>
          <span class="text-danger">*</span>
          <input type="number" name="no_darurat" class="form-control" required>
          <small>Nomor yang dapat dihubungi selain nomor pribadi</small>
        </div>
        <div class="form-group">
          <label>Pemilik Nomor Darurat</label>
          <span class="text-danger">*</span>
          <input type="text" name="pemilik_no_darurat" class="form-control" placeholder="Contoh: Orang Tua, Suami/Istri, Saudara" required>
        </div>
      
        <hr>
        <h3>Alamat Lengkap</h3>
        <p class="alert alert-info hover-shadow">Isilah alamat dengan lengkap, bukan alamat KTP namun alamat yang sedang ditinggali saat ini. Penulisan alamat lengkap dengan RT/RW.</p>
        <div class="form-group row">
          <div class="col-md-6">
            <label>Kota</label>
            <span class="text-danger">*</span>
            <input type="text" name="kota" class="form-control" required>
          </div>    
          <div class="col-md-6">
            <label>Kecamatan</label>
            <span class="text-danger">*</span>
            <input type="text" name="kecamatan" class="form-control" required>
          </div>       
          <div class="col-md-12">
            <label>Alamat</label>
            <span class="text-danger">*</span>
            <textarea name="alamat" class="form-control" required></textarea>
          </div>     
        </div>

        <hr>
        <h3>Program Pembelajaran PTTA</h3>
        <p class="alert alert-info hover-shadow">Pengisian program boleh lebih dari satu</p>
        <div class="form-group">
          <label>Program 1</label>
          <select class="form-control" name="program1">
            <option>Pilih</option>
            <option>Tahfizh Anak Pagi</option>
            <option>Tahsin Ikhwan</option>
            <option>Tahsin Akhwat</option>
          </select>
        </div>
        <div class="form-group">
          <label>Program 2</label>
          <select class="form-control" name="program2">
            <option>Pilih</option>
            <option>Tahfizh Anak Sore</option>
            <option>Bahasa Arab Ikhwan</option>
            <option>Bahasa Arab Akhwat</option>
          </select>
        </div>
        <hr>
        <div class="form-group">
          <label>Apakah sebelumnya sudah pernah belajar di PTTA Nurul Iman? *</label><br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pertanyaan1" id="ya1" value="1">
            <label class="form-check-label" for="ya1">Pernah</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pertanyaan1" id="tidak1" value="0">
            <label class="form-check-label" for="tidak1">Belum Pernah</label>
          </div>
        </div>
        <div class="form-group">
          <label>Apakah sebelumnya sudah pernah belajar Tahsin? *</label><br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pertanyaan2" id="ya2" value="1">
            <label class="form-check-label" for="ya2">Pernah</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pertanyaan2" id="tidak2" value="0">
            <label class="form-check-label" for="tidak2">Belum Pernah</label>
          </div>
        </div>
        <div class="form-group">
          <label>Apakah sebelumnya sudah pernah belajar Bahasa Arab? *</label><br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pertanyaan3" id="ya3" value="1">
            <label class="form-check-label" for="ya3">Pernah</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pertanyaan3" id="tidak3" value="0">
            <label class="form-check-label" for="tidak3">Belum Pernah</label>
          </div>
        </div>
        
        <button type="submit" class="btn btn-primary btn-block hover-shadow">Selanjutnya</button>
      </form>
      <br>
      <b class="float-right">Page 1 of 3</b>
    </div>
  </div>
</div><!-- /.container -->
</section>	


