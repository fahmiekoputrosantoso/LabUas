<?= $this->extend('layout/template'); ?>
<?= $this->section('dasbord'); ?>

<div class="container">  
  <div class="row pt-5">
    <div class="col-12">
      <a href="/" class="btn border bg-gradient-warning w-100 text-light p-4"><h2>Menu Antrian</h2></a>
    </div>
  </div>
  <br>
  <div class="row text-center">
    <div class="col-md-6 py-3">
      <a href="/pelayanan/daftar_layanan" class="btn border bg-gradient-primary w-100 text-light p-4"><h2>Customer Service</h2></a>
    </div>
  
    <div class="col-md-6 py-3">
      <a href="/index" class="btn border bg-gradient-primary w-100 text-light p-4"><h2>Pengaduan</h2></a>
    </div>

    <div class="col-md-6">
      <a href="/index" class="btn border bg-gradient-primary w-100 text-light p-4"><h2>Permohonan Baru</h2></a>
    </div>

    <div class="col-md-6">
      <a href="/index" class="btn border bg-gradient-primary w-100 text-light p-4"><h2>Perpanjangan</h2></a>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>