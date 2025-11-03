<?php 
// Memasukkan template header
include 'templates/header.php'; 
?>

<div class="container py-5">
  <h1 class="mb-4">Tambah Data Mahasiswa</h1>

  <form action="" method="POST">
    <div class="mb-3">
      <label for="nama" class="form-label">Nama Mahasiswa</label>
      <input type="text" class="form-control" id="nama" name="nama">
    </div>
    <div class="mb-3">
      <label for="npm" class="form-label">NPM</label>
      <input type="text" class="form-control" id="npm" name="npm">
    </div>
    <div class="mb-3">
      <label for="jurusan" class="form-label">Jurusan</label>
      <input type="text" class="form-control" id="jurusan" name="jurusan">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>

</div>

<?php 
// Memasukkan template footer
// Kita ubah sedikit agar tidak 'fixed-bottom' di halaman ini
?>
<footer class="footer mt-auto py-3 bg-light">
  <div class="container text-center">
    <span class="text-muted">© 2025 Bayu Pratama - PHP Native + Bootstrap</span>
  </div>
</footer>
</body>
</html>