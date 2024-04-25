<?php
include 'koneksi.php';

// mengakses mysql menggunakan query
$query = "SELECT * FROM tb_siswa;";
$sql = mysqli_query($conn, $query);
$no = 0;

// untuk menghasilkan dari query yang dijalankan
// isinya array yang ada di tabel
// $result = mysqli_fetch_row($sql);
// var_dump($result);

// tinggal kita panggil nama kolomnya saja

// kita masukkan ke perulangan while selama result masih ada isinya
// while ($result = mysqli_fetch_assoc($sql)) {
//   echo $result['nama_lengkap'] . "<br>";
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Latihan_CRUD</title>
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css" />
</head>

<body>
  <nav class="navbar navbar-light bg-dark">
    <div class="container-fluid">
      <h1 class="m-auto py-3 text-white">
        Data Anggota Kelompok 4 (Marabunta Team)
      </h1>
    </div>
  </nav>

  <div class="container-fluid mt-4">
    <figure>
      <blockquote class="blockquote">
        <p>Berisi data yang disimpan di Database</p>
      </blockquote>
      <figcaption class="blockquote-footer">
        CRUD <cite title="Source Title">Create Read Update Delete</cite>
      </figcaption>
    </figure>
    <a href="kelola.php" type="button" class="btn btn-primary">
      <i class="fa fa-plus"></i>
      Tambah Data
    </a>
    <div class="table-responsive mt-3">
      <table class="table align-middle table-bordered table-hover">
        <thead>
          <tr>
            <th class="text-center">No.</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Foto</th>
            <th>Alamat</th>
            <th>Universitas</th>
            <th>Jurusan</th>
            <th class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($result = mysqli_fetch_assoc($sql)) {
            ?>
            <tr>
              <td class="text-center">
                <?php echo ++$no; ?>
                .
              </td>
              <td>
                <?php echo $result['nama_lengkap']; ?>
              </td>
              <td>
                <?php echo $result['jenis_kelamin']; ?>
              </td>
              <td>
                <?php echo $result['agama']; ?>
              </td>
              <td class="text-center">
                <img src="img/<?php echo $result['foto_siswa']; ?>" width="150px" />
              </td>
              <td>
                <?php echo $result['alamat']; ?>
              </td>
              <td>
                <?php echo $result['universitas']; ?>
              </td>
              <td>
                <?php echo $result['jurusan']; ?>
              </td>
              <td class="text-center">
                <a href="kelola.php?ubah=<?php echo $result['id_siswa']; ?>" type="button" class="btn btn-success">
                  <i class="fa fa-pencil"></i>
                </a>
                <a href="proses.php?hapus=<?php echo $result['id_siswa']; ?>" type="button" class="btn btn-danger"
                  onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut???')">
                  <i class="fa fa-trash"></i>
                </a>
              </td>
            </tr>
            <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>