<?php
include 'server.php';
$query = "SELECT * FROM mahasiswa;";
$sql = mysqli_query($conn, $query);
$no = 1;
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Tugas PBO CRUD OOP</title>

  <!--Style-->
  <style>
    .container-fluid {
      width: 1450px;
      background-color: #FFFAFA;
      margin: 40px auto;
      padding: 15px;
      border: 4px solid #eaeaea;
      border-radius: 20px;
      box-sizing: border-box;
      position: relative;
    }

    table thead {
      background-color: #F5F5F5;
    }

    .btn {
      margin: 2px;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <h1 class="text-center">TUGAS 5 - OOP CRUD Dengan PHP dan Database (MySQL, MariaDB, PostgreSQL)</h1>
    <h2 class="text-center"><i>Created Muhammad Nizam Setiawan</i></h2>
    <br>

    <!-- Awal Card Tabel -->
    <div class="card-header bg-primary text-white mb-1">
      <b>Tabel Data Mahasiswa</b>
    </div>

    <div class="table-responsive">
      <table class="table align-middle table-bordered table-hover">
        <thead>
          <tr class="text-center">
            <th>No.</th>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Prodi</th>
            <th>Email</th>
            <th>Foto</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($result = mysqli_fetch_assoc($sql)): ?>
          <tr>
            <td class="text-center">
              <?= $no++; ?>.
            </td>
            <td class="text-center">
              <?= $result['nim']; ?>
            </td>
            <td>
              <?= $result['namamhs']; ?>
            </td>
            <td class="text-center">
              <?= $result['jk']; ?>
            </td>
            <td>
              <?= $result['alamat']; ?>
            </td>
            <td>
              <?= $result['prodi']; ?>
            </td>
            <td>
              <?= $result['email']; ?>
            </td>
            <td class="text-center">
              <img src="img/<?= $result['foto']; ?>" style="width: 70px">
            </td>
            <td class="text-center">
              <a href="mengelola.php?edit=<?= $result['id']; ?>" type="button" class="btn btn-warning btn-sm">Edit</a>
              <a href="proses.php?hapus=<?= $result['id']; ?>" type="button" class="btn btn-danger btn-sm"
                onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
            </td>
            <?php endwhile; ?>
          </tr>
        </tbody>
      </table>
      <a href="mengelola.php" type="button" class="btn btn-success mb-4 text-right" style="float: right;">Tambahkan
        Data</a>
      <!-- Akhir Card Tabel -->

    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
      integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>