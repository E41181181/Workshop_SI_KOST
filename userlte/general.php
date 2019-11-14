<?php 
include_once ('sidebar.php');
include_once ('rightbar.php');
include_once ('header.php');

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah KOST</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="tambahdatakos.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="namakost">Nama KOST</label>
                    <input type="text" class="form-control" id="namakost" name="namakost" placeholder="Masukan Nama Kost">
                  </div>
                  <div class="form-group">
                    <label for="alamatkostjl">Alamat KOST</label>
                    <input type="text" class="form-control" id="alamatkostjalan" name="alamatkostjalan"  placeholder="Jalan">
                  </div>
                  <div class="form-group">
                    <label for="alamatkostkec"> </label>
                    <input type="text" class="form-control" id="alamatkostkec" name="alamatkostkec" placeholder="Kecamatan">
                  </div>
                  <div class="form-group">
                    <label for="alamatkostkab"> </label>
                    <input type="text" class="form-control" id="alamatkostkab" name="alamatkostkab" placeholder="Kabupaten">
                  </div>
                  <div class="form-group">
                        <label>Jenis Kost</label>
                        <select class="form-control" id="jeniskost" name="jeniskost">
                        <option>Pilih Jenis Kost</option>
                          <option>Putra</option>
                          <option>Putri</option>
                          <option>Campur</option>                          
                        </select>
                      </div>
                  <div class="form-group">
                    <label for="jumlahkamar">Jumlah Kamar</label>
                    <input type="number" min="1" max="150" class="form-control" id="jumlahkamar" name="jumlahkamar" placeholder="Masukan Jumlah Kamar">
                  </div>
                  <div class="form-group">
                    <label for="fotobangunan">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="fotobangunan">
                        <label class="custom-file-label" for="fotobangunan">Foto Bangunan</label>
                      </div>                      
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="fotodapur"> </label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="fotodapur">
                        <label class="custom-file-label" for="fotodapur">Foto Dapur</label>
                      </div>                      
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="fotoparkiran"> </label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="fotoparkiran">
                        <label class="custom-file-label" for="fotoparkiran">Foto Parkiran</label>
                      </div>                      
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="fotolingkunan"> </label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="fotolingkungan">
                        <label class="custom-file-label" for="fotolingkungan">Foto Lingkungan</label>
                      </div>                      
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>                  
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="syaratdanketentuan">
                    <label class="form-check-label" for="syaratdanketentuan">Dengan ini saya menyetujuhi Syarat dan Ketentuan yang berlaku.</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- Form Element sizes -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Different Height</h3>
              </div>
              <div class="card-body">
                <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
                <br>
                <input class="form-control" type="text" placeholder="Default input">
                <br>
                <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Different Width</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-3">
                    <input type="text" class="form-control" placeholder=".col-3">
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" placeholder=".col-4">
                  </div>
                  <div class="col-5">
                    <input type="text" class="form-control" placeholder=".col-5">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- Input addon -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Input Addon</h3>
              </div>
              <div class="card-body">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Username">
                </div>

                <div class="input-group mb-3">
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                  </div>
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                  </div>
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                  </div>
                </div>

                <h4>With icons</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  </div>
                  <input type="email" class="form-control" placeholder="Email">
                </div>

                <div class="input-group mb-3">
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-check"></i></span>
                  </div>
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fas fa-dollar-sign"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <div class="input-group-text"><i class="fas fa-ambulance"></i></div>
                  </div>
                </div>

                <h5 class="mt-4 mb-2">With checkbox and radio inputs</h5>

                <div class="row">
                  <div class="col-lg-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <input type="checkbox">
                        </span>
                      </div>
                      <input type="text" class="form-control">
                    </div>
                    <!-- /input-group -->
                  </div>
                  <!-- /.col-lg-6 -->
                  <div class="col-lg-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><input type="radio"></span>
                      </div>
                      <input type="text" class="form-control">
                    </div>
                    <!-- /input-group -->
                  </div>
                  <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->

                <h5 class="mt-4 mb-2">With buttons</h5>

                <p>Large: <code>.input-group.input-group-lg</code></p>

                <div class="input-group input-group-lg mb-3">
                  <div class="input-group-prepend">
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                      Action
                    </button>
                    <ul class="dropdown-menu">
                      <li class="dropdown-item"><a href="#">Action</a></li>
                      <li class="dropdown-item"><a href="#">Another action</a></li>
                      <li class="dropdown-item"><a href="#">Something else here</a></li>
                      <li class="dropdown-divider"></li>
                      <li class="dropdown-item"><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <!-- /btn-group -->
                  <input type="text" class="form-control">
                </div>
                <!-- /input-group -->

                <p>Normal</p>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <button type="button" class="btn btn-danger">Action</button>
                  </div>
                  <!-- /btn-group -->
                  <input type="text" class="form-control">
                </div>
                <!-- /input-group -->

                <p>Small <code>.input-group.input-group-sm</code></p>
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control">
                  <span class="input-group-append">
                    <button type="button" class="btn btn-info btn-flat">Go!</button>
                  </span>
                </div>
                <!-- /input-group -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Horizontal Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">Remember me</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Sign in</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tipe Kamar</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post">
                <div class="card-body">
                  <div class="form-group">                    
                    <div class="form-group">
                        <label>Ukuran Kamar</label>
                        <select class="form-control">
                        <option>Pilih Ukuran Kamar</option>
                          <option>2 X 2</option>
                          <option>2 X 3</option>
                          <option>3 X 2</option>
                          <option>3 X 3</option>
                          <option>3 X 4</option>
                          <option>4 X 4</option>
                          <option>Lainya..</option>                          
                        </select>
                        <p></p>
                      

                        <div class="form-group">
                        <label for="fasilitaskamar">Fasilitas Kamar</label>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="faskamkasur" value="option1">
                          <label for="faskamkasur" class="custom-control-label">Kasur</label>
                        </div> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="faskamlemari" value="option1">
                          <label for="faskamlemari" class="custom-control-label">Lemari</label>
                        </div> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="faskammekur" value="option1">
                          <label for="faskammekur" class="custom-control-label">Meja Kursi</label>
                        </div> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="faskammanda" value="option1">
                          <label for="faskammanda" class="custom-control-label">Kamar Mandi Dalam</label>
                        </div> 
                        <p></p>
                      
                        <div class="form-group">
                        <label for="fasilitaskamar">Fasilitas Bersama</label>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox2" value="option2">
                          <label for="customCheckbox2" class="custom-control-label">Wifi</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox2" value="option2">
                          <label for="customCheckbox2" class="custom-control-label">Dapur</label>
                        </div>   
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox2" value="option2">
                          <label for="customCheckbox2" class="custom-control-label">Kamar Mandi</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox2" value="option2">
                          <label for="customCheckbox2" class="custom-control-label">Parkiran</label>
                        </div>   
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox2" value="option2">
                          <label for="customCheckbox2" class="custom-control-label">Jemuran</label>
                        </div>   
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox2" value="option2">
                          <label for="customCheckbox2" class="custom-control-label">Ruang Tamu</label>
                        </div>       
                        <P></P>    
                  <div class="form-group">
                    <label for="jumlahkamar">Jumlah Kamar</label>
                    <input type="number" min="1" max="150" class="form-control" id="jumlahkamar" placeholder="Masukan Jumlah Kamar">
                  </div>
                  <div class="form-group">
                    <label for="jumlahkamar">Kamar Tersedia</label>
                    <input type="number" min="0" max="150" class="form-control" id="jumlahkamar" placeholder="Masukan Jumlah Kamar">
                  </div>
                  <div class="form-group">
                        <label>Keterangan Lainnya</label>
                        <textarea class="form-control" rows="3" placeholder="(Peraturan atau informasi lainnya....) "></textarea>
                      </div>
                  <div class="form-group">
                    <label for="fotokamar">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="fotokamar">
                        <label class="custom-file-label" for="fotokamar">Foto Kamar</label>
                      </div>                      
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="fotokm"> </label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="fotokm">
                        <label class="custom-file-label" for="fotokm">Foto Kamar Mandi</label>
                      </div>                      
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>                                                   
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="syaratdanketentuan">
                    <label class="form-check-label" for="syaratdanketentuan">Dengan ini saya menyetujuhi Syarat dan Ketentuan yang berlaku.</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          <div class="col-md-6">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">General Elements</h3>
              </div>
              
                  
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
