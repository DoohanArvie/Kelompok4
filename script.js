document.addEventListener("DOMContentLoaded", function () {
  tampilkanDaftarPasien();
});

document
  .getElementById("form-pasien")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    var indexToEdit = document.getElementById("index-edit").value;
    if (indexToEdit === "") {
      tambahPasien();
    } else {
      bukaFormEdit(indexToEdit); // Memanggil fungsi untuk membuka form edit dengan indeks yang telah diset
    }
  });

function tambahPasien() {
  var nama = document.getElementById("nama").value;
  var alamat = document.getElementById("alamat").value;
  var penyakit = document.getElementById("penyakit").value;
  var nomorRuang = document.getElementById("nomor-ruang").value;
  var bpjs = document.getElementById("bpjs").value;
  var tanggalMasuk = document.getElementById("tanggal-masuk").value;

  var pasienBaru = {
    nama: nama,
    alamat: alamat,
    penyakit: penyakit,
    nomorRuang: nomorRuang,
    bpjs: bpjs,
    tanggalMasuk: tanggalMasuk,
    tanggalKeluar: "",
  };

  var daftarPasien = JSON.parse(sessionStorage.getItem("daftarPasien")) || [];
  daftarPasien.push(pasienBaru);
  sessionStorage.setItem("daftarPasien", JSON.stringify(daftarPasien));

  tampilkanDaftarPasien();
  resetForm();
  alert("Data pasien berhasil ditambahkan");
}

function resetForm() {
  document.getElementById("nama").value = "";
  document.getElementById("alamat").value = "";
  document.getElementById("penyakit").value = "";
  document.getElementById("nomor-ruang").value = "";
  document.getElementById("bpjs").value = "Tidak menggunakan";
  document.getElementById("tanggal-masuk").value = "";
  document.getElementById("index-edit").value = "";
}

function bukaFormEdit(index) {
  isiFormEdit(index); // Memanggil fungsi untuk mengisi form edit dengan data pasien yang dipilih
  document.getElementById("edit-form").style.display = "block";
}

function closeForm() {
  document.getElementById("edit-form").style.display = "none";
}

// Fungsi untuk menampilkan data pasien dalam form edit
function isiFormEdit(index) {
  var daftarPasien = JSON.parse(sessionStorage.getItem("daftarPasien")) || [];
  var pasien = daftarPasien[index];
  document.getElementById("nama-edit").value = pasien.nama;
  document.getElementById("alamat-edit").value = pasien.alamat;
  document.getElementById("penyakit-edit").value = pasien.penyakit;
  document.getElementById("nomor-ruang-edit").value = pasien.nomorRuang;
  document.getElementById("bpjs-edit").value = pasien.bpjs;
  document.getElementById("tanggal-masuk-edit").value = pasien.tanggalMasuk;
  document.getElementById("tanggal-keluar-edit").value = pasien.tanggalKeluar;
}

// Mengirim data edit pasien
document
  .getElementById("edit-pasien-form")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    var indexToEdit = document.getElementById("index-edit").value;
    editPasien(indexToEdit);
  });

// Fungsi untuk edit pasien
function editPasien(index) {
  var daftarPasien = JSON.parse(sessionStorage.getItem("daftarPasien")) || [];
  var nama = document.getElementById("nama-edit").value;
  var alamat = document.getElementById("alamat-edit").value;
  var penyakit = document.getElementById("penyakit-edit").value;
  var nomorRuang = document.getElementById("nomor-ruang-edit").value;
  var bpjs = document.getElementById("bpjs-edit").value;
  var tanggalMasuk = document.getElementById("tanggal-masuk-edit").value;
  var tanggalKeluar = document.getElementById("tanggal-keluar-edit").value;

  daftarPasien[index].nama = nama;
  daftarPasien[index].alamat = alamat;
  daftarPasien[index].penyakit = penyakit;
  daftarPasien[index].nomorRuang = nomorRuang;
  daftarPasien[index].bpjs = bpjs;
  daftarPasien[index].tanggalMasuk = tanggalMasuk;
  daftarPasien[index].tanggalKeluar = tanggalKeluar;

  sessionStorage.setItem("daftarPasien", JSON.stringify(daftarPasien));

  tampilkanDaftarPasien();
  closeForm(); // Menutup form setelah selesai mengedit
  resetForm(); // Mereset form setelah selesai mengedit
  alert("Data pasien berhasil diubah");
}

function ubahDataPasien(index) {
  isiFormEdit(index); // Memanggil fungsi untuk mengisi form edit dengan data pasien yang dipilih
  document.getElementById("index-edit").value = index; // Menyimpan indeks pasien yang diedit
  bukaFormEdit(index); // Memanggil fungsi untuk membuka form edit dengan indeks yang dipilih
}

// Menghapus data pasien
function hapusPasien(index) {
  var daftarPasien = JSON.parse(sessionStorage.getItem("daftarPasien")) || [];
  daftarPasien.splice(index, 1);
  sessionStorage.setItem("daftarPasien", JSON.stringify(daftarPasien));

  tampilkanDaftarPasien();
  resetForm();
  alert("Data pasien berhasil dihapus");
}

function tampilkanDaftarPasien() {
  var tabelPasien = document.getElementById("tabel-pasien");
  tabelPasien.innerHTML = "";

  var daftarPasien = JSON.parse(sessionStorage.getItem("daftarPasien")) || [];

  daftarPasien.forEach(function (pasien, index) {
    var newRow = tabelPasien.insertRow();

    newRow.innerHTML = `
            <td>${index + 1}</td>
            <td>${pasien.nama}</td>
            <td>${pasien.alamat}</td>
            <td>${pasien.penyakit}</td>
            <td>${pasien.nomorRuang}</td>
            <td>${pasien.bpjs}</td>
            <td>${pasien.tanggalMasuk}</td>
            <td>${pasien.tanggalKeluar}</td>
            <td>
              <button class="ubah" onclick="ubahDataPasien(${index})">Ubah</button>
              <button class="hapus" onclick="hapusPasien(${index})">Hapus</button>
            </td>
          `;
  });
}
