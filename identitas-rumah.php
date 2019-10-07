<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Topbar -->
    <?php include 'topbar.php'; ?>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800">Identitas Rumah</h1>

      <!-- Content -->
      <div class="row">
        <div class="col-lg-4">
          <div class="row">
            <div class="col-sm-12">
              <div class="card shadow mb-4">
                <div class="card-header d-sm-flex align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Siswa Tinggal</h6>
                  <button id="tinggalModal" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-user-edit fa-sm text-white-50"></i> Edit</button>
                </div>
                <div class="card-body">
                  <div class="row">
                    <label class="col-sm-12 col-form-label" for="">Siswa Tinggal dengan</label>
                    <div class="col-sm-12">
                      <p>: Ayah dan Ibu kandung</p>
                    </div>

                    <label class="col-sm-5 col-form-label" for="">Rumah</label>
                    <div class="col-sm-7">
                      <p>: Warisan</p>
                    </div>

                    <label class="col-sm-5 col-form-label" for="">Transportasi</label>
                    <div class="col-sm-7">
                      <p>: Sepeda</p>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="card shadow mb-4">
                <div class="card-header d-sm-flex align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Saudara</h6>
                  <button id="saudaraModal" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah</button>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="table-responsive">
                        <table class="table">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Umur</th>
                              <th scope="col">Agama</th>
                              <th scope="col">Pekerjaan</th>
                              <th scope="col">Pendidikan</th>
                              <th scope="col">Alamat</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>Otto</td>
                              <td>Otto</td>
                              <td>Otto</td>
                              <td>Otto</td>
                              <td>
                                <a class="action-icon" href="#"><i class="fas fa-info"></i></a>
                                <a class="action-icon" href="#"><i class="far fa-edit"></i></a>
                                <a class="action-icon" href="#"><i class="far fa-trash-alt"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Jacob</td>
                              <td>Jacob</td>
                              <td>Jacob</td>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>
                                <a class="action-icon" href="#"><i class="fas fa-info"></i></a>
                                <a class="action-icon" href="#"><i class="far fa-edit"></i></a>
                                <a class="action-icon" href="#"><i class="far fa-trash-alt"></i></a>
                              </td>
                            </tr>
                            </tr>
                          </tbody>
                        </table>
                      </div>

                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="col-lg-4">
          <div class="card shadow mb-4">
            <div class="card-header d-sm-flex align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Ayah Siswa</h6>
              <button id="ayahModal" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-user-edit fa-sm text-white-50"></i> Edit Ayah</button>
            </div>
            <div class="card-body">
              <div class="text-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 10rem;" src="img/ayah.png" alt="">
                <h5>Heri Pramono</h5>
                <p>Petani</p>
              </div>
              <div class="row border-top pt-3">

                <label class="col-sm-4 col-form-label" for="">Umur</label>
                <div class="col-sm-8">
                  <p>: 55 th</p>
                </div>

                <label class="col-sm-4 col-form-label" for="">Agama</label>
                <div class="col-sm-8">
                  <p>: Islam</p>
                </div>

                <label class="col-sm-4 col-form-label" for="">Pendidikan</label>
                <div class="col-sm-8">
                  <p>: S2</p>
                </div>

                <label class="col-sm-4 col-form-label" for="">No.Telp</label>
                <div class="col-sm-8">
                  <p>: 0987654321234</p>
                </div>

                <label class="col-sm-4 col-form-label" for="">Alamat</label>
                <div class="col-sm-8">
                  <p>: Jl. Sultan Agung Weleri Kendal No. 45</p>
                </div>

              </div>

            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow mb-4">
            <div class="card-header d-sm-flex align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Ibu Siswa</h6>
              <button id="ibuModal" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-user-edit fa-sm text-white-50"></i> Edit Ibu</button>
            </div>
            <div class="card-body">
              <div class="text-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 10rem;" src="img/ibu.png" alt="">
                <h5>Sulastri</h5>
                <p>Guru</p>
              </div>
              <div class="row border-top pt-3">

                <label class="col-sm-4 col-form-label" for="">Umur</label>
                <div class="col-sm-8">
                  <p>: 45 th</p>
                </div>

                <label class="col-sm-4 col-form-label" for="">Agama</label>
                <div class="col-sm-8">
                  <p>: Islam</p>
                </div>

                <label class="col-sm-4 col-form-label" for="">Pendidikan</label>
                <div class="col-sm-8">
                  <p>: S3</p>
                </div>

                <label class="col-sm-4 col-form-label" for="">No.Telp</label>
                <div class="col-sm-8">
                  <p>: 0987654321234</p>
                </div>

                <label class="col-sm-4 col-form-label" for="">Alamat</label>
                <div class="col-sm-8">
                  <p>: Jl. Sultan Agung Weleri Kendal No. 45</p>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>



    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->

  <!-- Footer -->
  <?php include 'footer.php'; ?>
  <!-- End of Footer -->

</div>
