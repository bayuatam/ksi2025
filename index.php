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