<?php
include 'koneksi.php';

// jika proses interaksi dengan nama aksi
if (isset($_POST['aksi'])) {
  // jika button dengan name aksi value nya add maka :
  if ($_POST['aksi'] == 'add') {
    // akan data yang kita masukkan / kirimkan 
    // jadi kita akan memiliki post dan files
    // var_dump($_POST);

    // dia menampilkan data - data si files disini kita memasukkan foto.
    // var_dump($_FILES);
    // echo $_FILES['foto']['type'];
    // die();




    // kita ambil dari name yang ada di kelola.php
    // kita proses ini data bisa dimasukkan ke database dan disimpan ke tabel
    $nama_lengkap = $_POST['nama_lengkap'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    // nama dri file nya akan disimpan di database
    $foto = $_FILES['foto']['name'];
    $alamat = $_POST['alamat'];
    $universitas = $_POST['universitas'];
    $jurusan = $_POST['jurusan'];

    // darimana file temporary itu kita ambil , yaitu di folder temporary td
    $dir = "img/";
    $tmpFile = $_FILES['foto']['tmp_name'];

    // direktori itu kita isi dengan file apa
    // seharusnya foto yang kita upload sudah pindah ke folder img kita
    move_uploaded_file($tmpFile, $dir . $foto);

    // die();

    // file yang sudah diupload secara temporary kita akan move, kita harus tau filenamenya apa destinasi foldernya kemana.
    // kita memindah data yang ada di temporary file ke folder yang tempat kita inginkan

    // null ini ketika masuk ke id_siswa akan dia akan lanjut
    $query = "INSERT INTO tb_siswa VALUES (null, '$nama_lengkap', '$jenis_kelamin' , '$agama', '$foto','$alamat', '$universitas', '$jurusan')";

    $sql = mysqli_query($conn, $query);

    if ($sql) {
      // jika berhasil kita akan diarahkan ke index.php
      header("location: index.php");
      // echo "Data Berhasil Ditambahkan <a href='index.php'>[Home]</a> ";
    } else {
      echo $query;
    }

    // echo $nama_lengkap . " | " . $jenis_kelamin . " | " . $agama . " | " . $foto . " | " . $alamat . " | " . $universitas . " | " . $jurusan . " | " . '<br>';

    // echo "Tambah Data <a href='index.php'>[Home]</a> ";
  } elseif ($_POST['aksi'] == 'edit') {
    // echo "Edit Data <a href='index.php'>[Home]</a>";
    // var_dump($_POST);
    // kita akan menambahkan fungsi edit data

    $id_siswa = $_POST['id_siswa'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $universitas = $_POST['universitas'];
    $jurusan = $_POST['jurusan'];

    $queryShow = "SELECT * FROM tb_siswa WHERE id_siswa = '$id_siswa'";
    $sqlShow = mysqli_query($conn, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    // mana gambar yang kosong dan tidak kosong
    if ($_FILES['foto']['name'] == "") {
      $foto = $result['foto_siswa'];
    } else {
      $foto = $_FILES['foto']['name'];
      unlink("img/" . $result['foto_siswa']);

      // kita akan pindah datanya filenamnya dri si files foto
      move_uploaded_file($_FILES['foto']['tmp_name'], 'img/'.$_FILES['foto']['name']);
    }

    $query = "UPDATE tb_siswa SET nama_lengkap = '$nama_lengkap', jenis_kelamin='$jenis_kelamin', agama='$agama',  alamat = '$alamat', universitas = '$universitas', jurusan = '$jurusan' , foto_siswa = '$foto' WHERE id_siswa='$id_siswa';";

    $sql = mysqli_query($conn, $query);
    // foto yang sudah ada dihapus dan ditambahkan foto yang baru
    header("location: index.php");
  }
}

if (isset($_GET['hapus'])) {
  // id yang dikirimkan menggunakan method get
  $id_siswa = $_GET['hapus'];

  $queryShow = "SELECT * FROM tb_siswa WHERE id_siswa = '$id_siswa'";
  $sqlShow = mysqli_query($conn, $queryShow);
  $result = mysqli_fetch_assoc($sqlShow);

  // var_dump($result);
  // ketika dia dihapus kita menggunakan unlink
  // foto nya di folder akan dihapus juga
  unlink("img/" . $result['foto_siswa']);

  $query = "DELETE FROM tb_siswa WHERE id_siswa = '$id_siswa'";
  $sql = mysqli_query($conn, $query);

  if ($sql) {
    // jika berhasil kita akan diarahkan ke index.php
    header("location: index.php");
  } else {
    echo $query;
  }

  // echo "Hapus Data <a href='index.php'>[Home]</a>";
}

?>