<title>Form Input Barang</title>
<h3 align="center" class="mt-5">Form Input Barang</h3>
<form method="POST" action="<?php echo site_url('/barang/add_barang')?>" class="mt-4" novalidate>
    <div class="mb-2 container">
      <label for="" class="form-label">Kode Barang</label>
      <input type="text" class="form-control" name="kode_barang" id="" placeholder="Cth: BRG1" maxlength="4" required>
    </div>
    <div class="mb-2 container">
      <label for="" class="form-label">Nama Barang</label>
      <input type="text" name="nama_barang" class="form-control" id="" placeholder="Cth: Printer" required>
    </div>
    <div class="mb-2 container">
      <label for="" class="form-label">Satuan</label>
      <input type="text" name="satuan" class="form-control" id="" placeholder="Kg" required>
    </div>
    <div class="mb-2 container">
      <label for="" class="form-label">Harga Beli</label>
      <input type="text" name="harga_beli" class="form-control" id="" placeholder="Rp.0" required>
    </div>
    <div class="mb-2 container">
      <label for="" class="form-label">Harga Jual</label>
      <input type="text" name="harga_jual" class="form-control" id="" placeholder="Rp.0" required>
    </div>
    <div class="mb-2 container">
      <label for="" class="form-label">Kategori</label>
      <select class="form-select" name="kategori" required>
      <option selected>Pilih Kategori</option>
      <option value="Elektronik">Elektronik</option>
      <option value="Furniture">Furniture</option>
      </select>
    </div>
    <div class="mb-2 container">
      <label for="" class="form-label">Deskripsi Barang</label>
      <textarea class="form-control" name="deskripsi" placeholder="Barang ini adalah ..." id="" required></textarea>
    </div>
    
    <div class="mb-2 container">
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="reset" class="btn btn-danger">Reset</button>
    </div>
</form>
