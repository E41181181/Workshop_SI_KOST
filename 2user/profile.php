<?php
include_once ('sidebar.php');
include_once ('rightbar.php');
include_once ('header.php');
include_once ('config.php');

?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Profile</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">User Profile</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">

              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg"
                      alt="User profile picture">
                  </div>
                  <?php $data = mysqli_query($koneksi,"SELECT nama_pemilik, no_hp_pemilik, email_pemilik, ket_alamat_pemilik FROM tb_pemilik where id_pemilik = '".$_SESSION['username']."' ");
		while($d = mysqli_fetch_array($data)){
			?>
                  <h3 class="profile-username text-center"><?php echo $d['nama_pemilik']; ?></h3> 
                              

                  <p class="text-muted text-center">Pemilik Kost</p>

                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>No HP</b> <a class="float-right"><?php echo $d['no_hp_pemilik']; ?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Email</b> <a class="float-right"><?php echo $d['email_pemilik']; ?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Alamat</b> <a class="float-right"><?php echo $d['ket_alamat_pemilik']; ?></a>
                    </li>
                  </ul>
                  <?php            }?>
                  <a href="#settings" class="btn btn-primary btn-block"><b>Edit Profil</b></a>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->


              <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
              <div class="card">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Kost Saya</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Info</a></li>
                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Edit Data User</a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                      <!-- Post -->
                      <?php $datakos = mysqli_query($koneksi,"SELECT * FROM tb_datakos where id_pemilik = '".$_SESSION['username']."' ");
		                  while($dk = mysqli_fetch_array($datakos)){
			                ?>
                      <div class="post">
                        <div class="user-block">
                          <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg"
                            alt="user image">
                          <span class="username">
                            <a href="#">
                            <?php echo $dk['NAMA_KOS']; ?>
                            </a>
                            <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                          </span>
                          <span class="description">Shared publicly - 7:30 PM today</span>
                        </div>
                        <!-- /.user-block -->
                        <?php echo $dk['JENIS_KOS']; ?></br>
                        <?php echo $dk['FASILITAS_KOS']; ?></br>
                        <?php echo $dk['JALAN_KOS']; ?></br>
                        <?php echo $dk['KEC_KOS']; ?></br>
                        <?php echo $dk['KAB_KOS']; ?></br>
                        <?php echo $dk['KET_ALAMAT_KOS']; ?></br>                        
                        <?php echo $dk['JUMLAH_KAMAR']; ?></br>

                        <p>
                          <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                          <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                          <span class="float-right">
                            <a href="#" class="link-black text-sm">
                              <i class="far fa-comments mr-1"></i> Comments (5)
                            </a>
                          </span>
                        </p>

                        <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                      </div>
                      <!-- /.post --><?php } ?>

                      <!-- Post -->
                      <div class="post clearfix">
                        <div class="user-block">
                          <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg"
                            alt="User Image">
                          <span class="username">
                            <a href="#">Sarah Ross</a>
                            <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                          </span>
                          <span class="description">Sent you a message - 3 days ago</span>
                        </div>
                        <!-- /.user-block -->
                        <p>
                          Lorem ipsum represents a long-held tradition for designers,
                          typographers and the like. Some people hate it and argue for
                          its demise, but others ignore the hate as they create awesome
                          tools to help create filler text for everyone from bacon lovers
                          to Charlie Sheen fans.
                        </p>

                        <form class="form-horizontal">
                          <div class="input-group input-group-sm mb-0">
                            <input class="form-control form-control-sm" placeholder="Response">
                            <div class="input-group-append">
                              <button type="submit" class="btn btn-danger">Send</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /.post -->

                      <!-- Post -->
                      <div class="post">
                        <div class="user-block">
                          <img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg"
                            alt="User Image">
                          <span class="username">
                            <a href="#">Adam Jones</a>
                            <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                          </span>
                          <span class="description">Posted 5 photos - 5 days ago</span>
                        </div>
                        <!-- /.user-block -->
                        <div class="row mb-3">
                          <div class="col-sm-6">
                            <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-6">
                            <div class="row">
                              <div class="col-sm-6">
                                <img class="img-fluid mb-3" src="../../dist/img/photo2.png" alt="Photo">
                                <img class="img-fluid" src="../../dist/img/photo3.jpg" alt="Photo">
                              </div>
                              <!-- /.col -->
                              <div class="col-sm-6">
                                <img class="img-fluid mb-3" src="../../dist/img/photo4.jpg" alt="Photo">
                                <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
                              </div>
                              <!-- /.col -->
                            </div>
                            <!-- /.row -->
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <p>
                          <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                          <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                          <span class="float-right">
                            <a href="#" class="link-black text-sm">
                              <i class="far fa-comments mr-1"></i> Comments (5)
                            </a>
                          </span>
                        </p>

                        <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                      </div>
                      <!-- /.post -->
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="timeline">
                      <!-- The timeline -->
                      <div class="timeline timeline-inverse">
                        <!-- timeline time label -->
                        <div class="time-label">
                          <span class="bg-danger">
                            10 Feb. 2014
                          </span>
                        </div>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <div>
                          <i class="fas fa-envelope bg-primary"></i>

                          <div class="timeline-item">
                            <span class="time"><i class="far fa-clock"></i> 12:05</span>

                            <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                            <div class="timeline-body">
                              Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                              weebly ning heekya handango imeem plugg dopplr jibjab, movity
                              jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                              quora plaxo ideeli hulu weebly balihoo...
                            </div>
                            <div class="timeline-footer">
                              <a href="#" class="btn btn-primary btn-sm">Read more</a>
                              <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </div>
                          </div>
                        </div>
                        <!-- END timeline item -->
                        <!-- timeline item -->
                        <div>
                          <i class="fas fa-user bg-info"></i>

                          <div class="timeline-item">
                            <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                            <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend
                              request
                            </h3>
                          </div>
                        </div>
                        <!-- END timeline item -->
                        <!-- timeline item -->
                        <div>
                          <i class="fas fa-comments bg-warning"></i>

                          <div class="timeline-item">
                            <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                            <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                            <div class="timeline-body">
                              Take me to your leader!
                              Switzerland is small and neutral!
                              We are more like Germany, ambitious and misunderstood!
                            </div>
                            <div class="timeline-footer">
                              <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                            </div>
                          </div>
                        </div>
                        <!-- END timeline item -->
                        <!-- timeline time label -->
                        <div class="time-label">
                          <span class="bg-success">
                            3 Jan. 2014
                          </span>
                        </div>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <div>
                          <i class="fas fa-camera bg-purple"></i>

                          <div class="timeline-item">
                            <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                            <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                            <div class="timeline-body">
                              <img src="http://placehold.it/150x100" alt="...">
                              <img src="http://placehold.it/150x100" alt="...">
                              <img src="http://placehold.it/150x100" alt="...">
                              <img src="http://placehold.it/150x100" alt="...">
                            </div>
                          </div>
                        </div>
                        <!-- END timeline item -->
                        <div>
                          <i class="far fa-clock bg-gray"></i>
                        </div>
                      </div>
                    </div>
                    <!-- /.tab-pane -->

                    <div class="tab-pane" id="settings">
                    <?php 
                    $datapemilik = mysqli_query($koneksi,"SELECT NAMA_PEMILIK, NO_HP_PEMILIK, EMAIL_PEMILIK, JALAN_PEMILIK, KEC_PEMILIK, KAB_PEMILIK, KET_ALAMAT_PEMILIK FROM tb_pemilik WHERE ID_PEMILIK='".$_SESSION['username']."' ");
                    while($c = mysqli_fetch_array($datapemilik)){
                    ?>
                      <form class="form-horizontal" action="editdatapemilik.php" method="POST">
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Nama </label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName" name="Ednama" value="<?php echo $c['NAMA_PEMILIK']; ?>">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" name="Edemail" value="<?php echo $c['EMAIL_PEMILIK']; ?>" placeholder="Email">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputName2" class="col-sm-2 col-form-label">No Telp</label>
                          <div class="col-sm-10">
                            <input type="number" class="form-control" id="inputName2" name="Ednohp" value="<?php echo $c['NO_HP_PEMILIK']; ?>" placeholder="No Telepon Baru">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputSkills" class="col-sm-2 col-form-label">Alamat Jalan</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputSkills" name="Edjal" value="<?php echo $c['JALAN_PEMILIK']; ?>" placeholder="Alamat(Jalan)">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputSkills" class="col-sm-2 col-form-label">Kecamatan</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputSkills" name="Edkec" value="<?php echo $c['KEC_PEMILIK']; ?>" placeholder="Alamat(Kecamatan)">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputSkills" class="col-sm-2 col-form-label">Kabupaten</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputSkills" name="Edkab" value="<?php echo $c['KAB_PEMILIK']; ?>" placeholder="Alamat(Kabupaten)">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputExperience" name="Edalamat" value="<?php echo $c['KET_ALAMAT_PEMILIK']; ?>"></input>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputSkills" class="col-sm-2 col-form-label">Password</label>
                          <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputSkills" name="Edpass" placeholder="Password Baru">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                              </label>
                            </div>
                          </div>
                        </div>
                        <?php 
                        }        
                        ?>
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-info">Submit</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
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
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
</body>

</html>
