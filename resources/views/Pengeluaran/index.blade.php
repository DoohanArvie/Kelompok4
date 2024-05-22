<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard - Admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

  <!-- Sidebar -->
  @include('admin.sidebar')
  <!-- End of Sidebar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

      <!-- Topbar -->
      @include('admin.navbar')
      <!-- End of Topbar -->

      <!-- Begin Page Content -->
      <div class="container-fluid">

        <!-- Content Row -->
        <div class="row">

          <!-- Content Column -->
          <div class="col-lg-6 mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">PengeluaranKu</h6>
              </div>
              <div class="card-body">

                <!-- Collapsable Card Example -->
                <div class="col-lg-6">
                  <div class="card shadow mb-4">
                    <a href="#collapseCardExample1" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample1">
                      <h6 class="m-0 font-weight-bold text-primary">Catatan 1</h6>
                    </a>
                    <div class="collapse show" id="collapseCardExample1">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="card shadow mb-4">
                    <a href="#collapseCardExample2" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample2">
                      <h6 class="m-0 font-weight-bold text-primary">Catatan 2</h6>
                    </a>
                    <div class="collapse show" id="collapseCardExample2">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <!-- DataTales Example -->
          <div class="col-xl-8 col-lg-7">
            <button type="button" class="btn btn-success" style="margin:5px" data-toggle="modal" data-target="#myModalTambah"><i class="fa fa-plus"> Pengeluaran</i></button><br>

            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Transaksi Keluar</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Jumlah</th>
                        <th>Sumber</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($pengeluarans as $pengeluaran)
                          
                     
                      <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$pengeluaran->tgl_pengeluaran}}</td>
                        <td>Rp.{{number_format($pengeluaran->jumlah)}}</td>
                        <td>{{$pengeluaran->sumber_pengeluaran}}</td>
                        <td>
                          <!-- Button untuk modal -->
                          <a href="#" type="button" class="fa fa-edit btn btn-primary btn-md" data-toggle="modal" data-target="#myModal{{$pengeluaran->id_pengeluaran}}"></a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      @include('admin.footer')

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  @include('admin.logoutModal')

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>


  <!-- Modal Edit Pemasukan -->
  @foreach($pengeluarans as $pengeluaran)
  <div class="modal fade" id="myModal{{$pengeluaran->id_pengeluaran}}" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Ubah Data Pengeluaran</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
          {{-- form edit data pemasukan --}}
          
          <form role="form" action="{{route('updatePengeluaran', ['id' =>$pengeluaran->id_pengeluaran] ) }}" method="post">
            @csrf
            <input type="hidden" name="id_pengeluaran" value="{{$pengeluaran->id_pengeluaran}}">
            <div class="form-group">
              <label>Tanggal</label>
              <input type="date" name="tgl_pengeluaran" id="tgl_pengeluaran" class="form-control" value="{{ $pengeluaran->tgl_pengeluaran}}">
            </div>
            <div class="form-group">
              <label>Jumlah</label>
              <input type="text" name="jumlah" id="jumlah" class="form-control" value="{{ $pengeluaran->jumlah}}">
            </div>
            <div class="form-group">
              <label>Sumber Pengeluaran</label>
              <input type="text" name="sumber_pengeluaran" id="sumber_pengeluaran" class="form-control" value="{{$pengeluaran->sumber_pengeluaran}}">
            </div>
            
            <div class="modal-footer">
              <button type="submit" class="btn btn-success">Ubah</button>
              <a href="{{route('deletePengeluaran', ['id' =>$pengeluaran->id_pengeluaran] ) }}" onclick="confirm('Anda Yakin Ingin Menghapus?')" class="btn btn-danger">Hapus</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach

  <!-- Modal Tambah Pendapatan -->
  <div id="myModalTambah" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- konten modal-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Pengeluaran</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          {{-- form tambah data --}}
          <form action="{{route('storePengeluaran')}}" method="POST">
            @csrf
            <div class="form-group">
              <label>Tanggal</label>
              <input type="date" class="form-control" name="tgl_pengeluaran" id="tgl_pengeluaran">
            </div>
            <div class="form-group">
              <label>Jumlah</label>
              <input type="number" class="form-control" name="jumlah" id="jumlah">
            </div>
            <div class="form-group">
              <label>Sumber pengeluaran</label>
              <input type="text" class="form-control" name="sumber_pengeluaran" id="sumber_pengeluaran">
            </div>
            
            <div class="modal-footer">
              <button type="submit" class="btn btn-success">Tambah</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
