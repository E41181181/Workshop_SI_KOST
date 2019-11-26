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
            <h1>Input Data Kost</h1>
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
                    <label for="alamatkostket"> </label>
                    <input type="text" class="form-control" id="alamatkostkab" name="alamatkostket" placeholder="Keterangan Alamat">
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
                  <label>Fasilitas Kost</label>
                    <label for="fasilitaskos"> </label>
                    <input type="text" class="form-control" id="fasilitaskos" name="fasilitaskos" placeholder="fasilitas kos">
                  </div>   
                  <div class="form-group">
                    <label for="jumlahkamar">Jumlah Kamar</label>
                    <input type="number" min="1" max="150" class="form-control" id="jumlahkamar" name="jumlahkamar" placeholder="Masukan Jumlah Kamar">
                  </div>
                  <div class="form-group">
                    <label for="fotobangunan">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="fotokos" name="fotokos">
                        <label class="custom-file-label" for="fotobangunan">Foto Bangunan</label>                        
                      </div>                      
                      <div class="input-group-append">
                        <span class="input-group-text" id="uploadfotokos">Upload</span>
                      </div>
                    </div>
                  </div>                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
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
              <form role="form" method="post" action="prosesfasilitas.php">
                <div class="card-body">
                  <div class="form-group">                    
                    <div class="form-group">
                        <label>Ukuran Kamar</label>
                        <select class="form-control" id="ukurankamar" name="ukurankamar">
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
                      

                        <div class="form-group" id="fasilitas" name="fasilitas">
                        <label for="fasilitaskamar">Fasilitas Kamar</label>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="faskamkasur" name="check_list[]" value="option1">
                          <label for="faskamkasur" class="custom-control-label">Kasur</label>
                        </div> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="faskamlemari" name="check_list[]" value="option2">
                          <label for="faskamlemari" class="custom-control-label">Lemari</label>
                        </div> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="faskammekur" name="check_list[]" value="option3">
                          <label for="faskammekur" class="custom-control-label">Meja Kursi</label>
                        </div> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="faskammanda" name="check_list[]" value="option4">
                          <label for="faskammanda" class="custom-control-label">Kamar Mandi Dalam</label>
                        </div> 
                        <p></p>
                      
                        <div class="form-group">
                        <label for="fasilitaskamar">Fasilitas Bersama</label>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="faswifi" name="check_list[]" value="option5">
                          <label for="faswifi" class="custom-control-label">Wifi</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="fasdapur" name="check_list[]" value="option6">
                          <label for="fasdapur" class="custom-control-label">Dapur</label>
                        </div>   
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="faskaman" name="check_list[]" value="option7">
                          <label for="faskaman" class="custom-control-label">Kamar Mandi</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="faspar" name="check_list[]" value="option8">
                          <label for="faspar" class="custom-control-label">Parkiran</label>
                        </div>   
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="fasjem" name="check_list[]" value="option9">
                          <label for="fasjem" class="custom-control-label">Jemuran</label>
                        </div>   
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="fasrutam" name="check_list[]" value="option10">
                          <label for="fasrutam" class="custom-control-label">Ruang Tamu</label>
                        </div>       
                        <P></P>    
                        <div class="form-group">
                          <label for="jumlahkamar">Jumlah Kamar</label>
                          <input type="number" min="1" max="150" class="form-control" id="jumlahkamar" name="jmlkamar" placeholder="Masukan Jumlah Kamar">
                        </div>
                        <div class="form-group">
                          <label for="jumlahkamar">Kamar Tersedia</label>
                          <input type="number" min="0" max="150" class="form-control" id="jumlahkamartersedia" placeholder="Masukan Jumlah Kamar">
                        </div>
                        <div class="form-group">
                          <label>Keterangan Lainnya</label>
                          <textarea class="form-control" rows="3" id="ket_lainnya" name="ket_lainnya" placeholder="(Peraturan atau informasi lainnya....) "></textarea>
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
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              
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
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">PEMBAYARAN</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="tambah_pembayaran.php">
                <div class="card-body">                  
                  <div class="form-group">
                        <label>Pembayaran Setiap</label>
                        <select class="form-control" id="bayarsetiap" name="bayarsetiap">                        
                         <option>Perhari</option>
                          <option>Minggu</option>
                          <option>Bulan</option>
                          <option>3 Bulan</option>
                          <option>6 Bulan</option>
                          <option>1 Bulan</option>                            
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Dihuni</label>
                        <select class="form-control" id="dihuni" name="dihuni">                        
                         <option>Seorang</option>
                          <option>2 Orang</option>
                                                    
                        </select>
                      </div>
                  <div class="form-group">
                    <label for="jumlahkamar">Harga Kamar Rp.</label>
                    <input type="number" min="1000" max="10000000" class="form-control" id="hargakamar" name="hargakamar" placeholder="Masukan Jumlah Kamar">                  
                  </div>
                  
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>            
            <!-- /.card --> 
          </div>
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
<script src="../../plugins/jquery/jquery.mask.min.js"></script>
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
