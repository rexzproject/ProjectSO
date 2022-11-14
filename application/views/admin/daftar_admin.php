<title>Form Pendaftaran Admin</title>
<h3 align="center" class="mt-5">Form Pendaftaran Admin </h3>
<form method="POST" action="<?php echo site_url('/admin/simpan_data')?>" class="mt-5" novalidate>
    <div class="mb-2 container">
      <label for="" class="form-label">Kode Admin</label>
      <input type="text" class="form-control" name="kode_admin" id="" placeholder="Cth: ADMB" maxlength="4" required>
    </div>
    <div class="mb-2 container">
      <label for="" class="form-label">Nama Admin</label>
      <input type="text" name="nama_admin" class="form-control" id="" placeholder="Cth: Asep" required>
    </div>
    <div class="mb-2 container">
      <label for="" class="form-label">Jenis Kelamin</label>
      <select class="form-select" name="jenis_kelamin" required>
      <option selected>Pilih Jenis Kelamin</option>
      <option value="Laki-Laki">Laki-Laki</option>
      <option value="Perempuan">Perempuan</option>
      </select>
    </div>
    <div class="mb-2 container">
      <label for="" class="form-label">Agama</label>
      <select class="form-select" name="agama" required>
      <option selected>Pilih Agama</option>
      <option value="Islam">Islam</option>
      <option value="Protestan">Kristen</option>
      <option value="Katholik">Khatolik</option>
      <option value="Hindu">Hindu</option>
      <option value="Buddha">Buddha</option>
      <option value="Konghucu">Konghucu</option>
      </select>
    </div>
    <div class="mb-2 container">
      <label for="" class="form-label">Tempat Lahir</label>
      <input type="text" class="form-control" name="tempat_lahir" id="" placeholder="Cth: Pontianak" required>
    </div>
    <div class="mb-2 container">
      <label for="" class="form-label" name="tanggal_lahir">Tanggal Lahir</label>
      <input type="date" class="form-control" name="tanggal_lahir" id="" required>
    </div>
    <div class="mb-2 container">
      <label for="" class="form-label">Alamat Lengkap</label>
      <textarea class="form-control" name="alamat" placeholder="Alamat Lengkap" id="" required></textarea>
    </div>
    <div class="mb-2 container">
      <label for="" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" placeholder="cth: katon@gmail.com" id="" required>
    </div>
    <div class="mb-2 container">
      <label for="" class="form-label">No Handphone</label>
      <input type="text" class="form-control" name="no_hp" placeholder="08xxxxxxx" id="" required>
    </div>
    
    <div class="mb-2 container">
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="reset" class="btn btn-danger">Reset</button>
    </div>
</form>
