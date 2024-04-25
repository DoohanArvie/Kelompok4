<!DOCTYPE html>
<?php
include 'koneksi.php';

$id_siswa = '';
$nama_lengkap = '';
$jenis_kelamin = '';
$agama = '';
$alamat = '';
$universitas = '';
$jurusan = '';

// Get ini akan tampil di halaman web
// jika ada perubahan disana atau URL nya
if (isset($_GET['ubah'])) {
  $id_siswa = $_GET['ubah'];

  $query = "SELECT * FROM tb_siswa WHERE id_siswa = '$id_siswa';";
  $sql = mysqli_query($conn, $query);

  $result = mysqli_fetch_assoc($sql);

  $nama_lengkap = $result['nama_lengkap'];
  $jenis_kelamin = $result['jenis_kelamin'];
  $agama = $result['agama'];
  $alamat = $result['alamat'];
  $universitas = $result['universitas'];
  $jurusan = $result['jurusan'];

  // var_dump($result);
  // die();
}
?>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Latihan_CRUD</title>
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <script src="js/bootstrap.bundle.min.js"></script>
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
  <div class="container mt-4">
    <!-- data yang ada disini akan kita kirimkan ke program php
  dan datanya akan diproses -->
    <!-- data disini akan dikirim ke proses.php -->
    <!-- kita perlu memproseskan untuk si file td,menggunakan enkripsi data di form -->
    <!-- diizinkan di form ini file  -->
    <form method="post" action="proses.php" enctype="multipart/form-data">
      <input type="hidden" name="id_siswa" value="<?php echo $id_siswa; ?>">

      <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
        <div class="col-sm-10">
          <input required type="text" name="nama_lengkap" class="form-control" id="nama" placeholder="Ex: Bintang"
            value="<?php echo $nama_lengkap; ?>" />
        </div>
      </div>

      <div class="mb-3 row">
        <label for="jkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-10">
          <select required id="jkel" name="jenis_kelamin" class="form-select">
            <!-- maka pilihan laki-lakinya di selected -->
            <option <?php if ($jenis_kelamin == 'Laki-laki') {
              echo "selected";
            } ?> value="Laki-laki">Laki-laki
            </option>
            <option <?php if ($jenis_kelamin == 'Perempuan') {
              echo "selected";
            } ?> value="Perempuan">
              Perempuan</option>
          </select>
        </div>
      </div>

      <div class="mb-3 row">
        <label for="agama" class="col-sm-2 col-form-label">Agama</label>
        <div class="col-sm-10">
          <select required id="agama" name="agama" class="form-select" value="<?php echo $agama; ?>">
            <option <?php if ($agama == 'Islam') {
              echo "selected";
            } ?> value="Islam" selected>Islam</option>
            <option <?php if ($agama == 'Kristen') {
              echo "selected";
            } ?> value="Kristen">Kristen</option>
            <option <?php if ($agama == 'Hindu') {
              echo "selected";
            } ?> value="Hindu">Hindu</option>
            <option <?php if ($agama == 'Buddha') {
              echo "selected";
            } ?> value="Buddha">Buddha</option>
            <option <?php if ($agama == 'Konghucu') {
              echo "selected";
            } ?> value="Konghucu">Konghucu</option>
            <option <?php if ($agama == 'Atheis') {
              echo "selected";
            } ?> value="Atheis">Atheis</option>
          </select>
        </div>
      </div>

      <div class="mb-3 row">
        <label for="foto" class="col-sm-2 form-label">Foto Anggota</label>
        <div class="col-sm-10">
          <!-- kita hanya memasukkan iamge tidak boleh yang lain -->
          <!-- kalau bukan ubah dia required, kalau tambah data foto harus diisi kalau ubah data foto ga harus diisi -->
          <input <?php if (!isset($_GET['ubah'])) {
            echo "required";
          } ?>class="form-control" name="foto"
            type="file" id="foto" accept="image/*" />
        </div>
      </div>

      <div class="mb-3 row">
        <label for="alamat" class="col-sm-2 form-label">Alamat Lengkap</label>
        <div class="col-sm-10">
          <textarea required class="form-control" id="alamat" name="alamat" rows="3"><?php echo $alamat; ?></textarea>
        </div>
      </div>

      <div class="mb-3 row">
        <label for="univ" class="col-sm-2 col-form-label">Universitas</label>
        <div class="col-sm-10">
          <input required type="text" class="form-control" name="universitas" id="univ"
            placeholder="Ex: Universitas Indonesia" value="<?php echo $universitas; ?>" />
        </div>
      </div>

      <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
        <div class="col-sm-10">
          <input required type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Ex: Industri"
            value="<?php echo $jurusan; ?>" />
        </div>
      </div>

      <div class="mb-3 row">
        <div class="col">
          <?php
          // Get ini akan tampil di halaman web
          // jika ada perubahan disana atau URL nya
          if (isset($_GET['ubah'])) {
            ?>
            <button type="submit" name="aksi" value="edit" class="btn btn-primary">
              <i class="fa fa-floppy-o" aria-hidden="true"></i>
              Simpan Perubahan
            </button>
            <?php
          } else {
            ?>
            <button type="submit" name="aksi" value="add" class="btn btn-primary">
              <i class="fa fa-floppy-o" aria-hidden="true"></i>
              Tambahkan
            </button>
            <?php
          }
          ?>
          <a href="index.php" type="button" class="btn btn-danger">
            <i class="fa fa-reply" aria-hidden="true"></i>
            Batal
          </a>
        </div>
      </div>
    </form>
  </div>
</body>

</html>