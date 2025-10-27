<?php
// Data dummy mahasiswa (array asosiatif)
$mahasiswa = [
    [
        "nama" => "Bayu Pratama",
        "npm" => "22312001",
        "jurusan" => "Manajemen Informatika"
    ],
    [
        "nama" => "Andi Setiawan",
        "npm" => "22312002",
        "jurusan" => "Manajemen Informatika"
    ],
    [
        "nama" => "Citra Lestari",
        "npm" => "22312003",
        "jurusan" => "Manajemen Informatika"
    ]
];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa - KSI 2025</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="#">KSI 2025</a>
      </div>
    </nav>

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

    <footer class="footer mt-auto py-3 bg-light fixed-bottom">
      <div class="container text-center">
        <span class="text-muted">© 2025 Bayu Pratama - PHP Native + Bootstrap</span>
      </div>
    </footer>

  </body>
</html>