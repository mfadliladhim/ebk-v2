<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <link href="css/custom.css" rel="stylesheet">



</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <?php
    switch ($_GET['page']) {
      case 'identitas':
      case 'identitas-rumah':
      case 'pelanggaran':
        include $_GET['page'].'.php';
        break;

      default:
        // code...
        break;
    } ?>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- identitas Modal-->
  <div class="modal fade" id="editIdentitasModal" tabindex="-1" role="dialog" aria-labelledby="editIdentitasModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Identitas</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="">Nama Lengkap</label>
                <input name="nama_lengkap" type="text" class="form-control" id="nama_lengkap" placeholder="James Bone">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="">Nama Panggilan</label>
                <input name="panggilan" type="text" class="form-control" id="panggilan" placeholder="James">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <label for="">Tempat</label>
                <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir" placeholder="Kendal">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label for="">Tanggal lahir</label>
                <input name="tgl_lahir" type="date" class="form-control" id="tgl_lahir" placeholder="12-02-1999">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label for="">Jenis kelamin</label>
                <select class="form-control" name="jk" id="jk">
                  <option value="">-- Pilih --</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-2">
              <div class="form-group">
                <label for="">Agama</label>
                <select class="form-control" name="agama" id="agama">
                  <option value="">-- Pilih --</option>
                  <option value="Islam">Islam</option>
                  <option value="HIndu">HIndu</option>
                  <option value="Budha">Budha</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Khatolik">Khatolik</option>
                </select>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label for="">No. Telepon</label>
                <input name="telp" type="text" class="form-control" id="telp" placeholder="0987654321">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="">Email</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="james.bone@gmail.com">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <label for="">Asal SMP</label>
                <input name="asal_smp" type="text" class="form-control" id="asal_smp" placeholder="SMPN 1 Weleri">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label for="">Tanggal Masuk Sekolah</label>
                <input name="tgl_masuk_sekolah" type="date" class="form-control" id="tgl_masuk_sekolah" placeholder="16-07-2020">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label for="">Status Siswa</label>
                <select name="status_siswa" id="status_siswa" class="form-control">
                  <option value="">-- Pilih --</option>
                  <option value="Siswa Baru">Siswa Baru</option>
                  <option value="Pindahan">Pindahan</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat">Jl Bung Tomo Weleri No.40</textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-primary">Update</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- ibu siswa -->
  <div class="modal fade" id="ortuModal" tabindex="-1" role="dialog" aria-labelledby="ibuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ortuModalLabel"></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form class="ibu" action="" method="post">
          <div id="tinggalBody" class="modal-body d-none">
            <div class="form-group row">
              <label for="nama" class="col-sm-5 col-form-label">Siswa Tinggal dengan</label>
              <div class="col-sm-7">
                <select class="form-control" name="nama">
                  <option value="">-- Pilih --</option>
                  <option value="Ayah dan Ibu kanding">Ayah dan Ibu kanding</option>
                  <option value="Ayah tiri, Ibu kandung">Ayah tiri, Ibu kandung</option>
                  <option value="Ayah kandung, Ibu tiri">Ayah kandung, Ibu tiri</option>
                  <option value="Ayah kandung">Ayah kandung</option>
                  <option value="Ibu kandung">Ibu kandung</option>
                  <option value="Saudara/Keluarga/Wali">Saudara/Keluarga/Wali</option>
                  <option value="Menumpang/Kost">Menumpang/Kost</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="nama" class="col-sm-5 col-form-label">Rumah</label>
              <div class="col-sm-7">
                <select class="form-control" name="nama">
                  <option value="">-- Pilih --</option>
                  <option value="Milik orang tua sendiri">Milik orang tua sendiri</option>
                  <option value="Warisan">Warisan</option>
                  <option value="Rumah dinas/ Instansi dalam satu komplek/ sendiri">Rumah dinas/ Instansi dalam satu komplek/ sendiri</option>
                  <option value="Menyewa/ kontrak">Menyewa/ kontrak</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="nama" class="col-sm-5 col-form-label">Transportasi</label>
              <div class="col-sm-7">
                <select class="form-control" name="nama">
                  <option value="">-- Pilih --</option>
                  <option value="Diantar">Diantar</option>
                  <option value="Jalan Kaki">Jalan Kaki</option>
                  <option value="angkutan Umum">angkutan Umum</option>
                  <option value="Sepeda">Sepeda</option>
                  <option value="Sepeda motor">Sepeda motor</option>
                  <option value="Mobil">Mobil</option>
                </select>
              </div>
            </div>
          </div>
          <div id="ortuBody" class="modal-body">
            <div class="form-group row">
              <label for="nama" class="col-sm-4 col-form-label">Nama</label>
              <div class="col-sm-8">
                <input name="nama" type="text" class="form-control" id="nama" placeholder="Nama Orang tua">
              </div>
            </div>
            <div class="form-group row">
              <label for="pekerjaan" class="col-sm-4 col-form-label">Pekerjaan</label>
              <div class="col-sm-8">
                <input name="pekerjaan" type="password" class="form-control" id="pekerjaan" placeholder="Petani">
              </div>
            </div>
            <div class="form-group row">
              <label for="umur" class="col-sm-4 col-form-label">Umur</label>
              <div class="col-sm-8">
                <input name="umur" type="number" class="form-control" id="umur" placeholder="55">
              </div>
            </div>
            <div class="form-group row">
              <label for="agama" class="col-sm-4 col-form-label">Agama</label>
              <div class="col-sm-8">
                <select class="form-control" name="agama">
                  <option value="">-- Pilih --</option>
                  <option value="Islam">Islam</option>
                  <option value="HIndu">HIndu</option>
                  <option value="Budha">Budha</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Khatolik">Khatolik</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="pendidikan" class="col-sm-4 col-form-label">Pendidikan</label>
              <div class="col-sm-8">
                <input name="pendidikan" type="password" class="form-control" id="pendidikan" placeholder="S3">
              </div>
            </div>
            <div class="form-group row">
              <label for="telp" class="col-sm-4 col-form-label">No. Telepon</label>
              <div class="col-sm-8">
                <input name="telp" type="password" class="form-control" id="telp" placeholder="098765432123">
              </div>
            </div>
            <div class="form-group row">
              <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
              <div class="col-sm-8">
                <input name="alamat" type="password" class="form-control" id="alamat" placeholder="Jl. Sultan Agung Weleri Kendal No. 45">
              </div>
            </div>

          </div>
        </form>
        <div class="modal-footer">
          <button class="btn btn-outline-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-primary"><i class="fas fa-save fa-sm text-white-50"></i> Update</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script src="js/custom.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>

</body>

</html>
