<?php
include 'koneksi.php';

try {
  $query = "SELECT * FROM mahasiswa";
  $statement = $koneksi->query($query);

  // Mengambil semua data
  $mahasiswa = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  die("Query gagal: " . $e->getMessage());
}

// Memasukkan template header
include 'templates/header.php';
?>

<div class="container py-5">
  <h1 class="mb-4">Data Mahasiswa</h1>

  <table class="table table-striped table-bordered">
    <thead class="table-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Mahasiswa</th>
        <th scope="col">NPM</th>
        <th scope="col">Jurusan</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php foreach ($mahasiswa as $mhs) : ?>
        <tr>
          <th scope="row"><?= $i; ?></th>

          <td><?= htmlspecialchars($mhs["nama"]); ?></td>
          <td><?= htmlspecialchars($mhs["npm"]); ?></td>
          <td><?= htmlspecialchars($mhs["jurusan"]); ?></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </tbody>
  </table>

</div>

<?php
// Memasukkan template footer
include 'templates/footer.php';
?>