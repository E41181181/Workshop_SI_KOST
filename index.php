<?php            
session_start();

if(isset($_GET['st'])){
    if($_GET['st'] == "1"){
        include 'navbarLoginPemilik.php';
    }else if($_GET['st'] == "3"){
        include 'navbarAwal.php';
    }else if($_GET['st'] == "2"){
        include 'navbarAwal.php';
    }
}else include 'navbarAwal.php';


  
?>
<section class="engine"><a href="#">website templates</a></section><section class="mbr-slider mbr-section mbr-section--no-padding carousel slide" data-ride="carousel" data-wrap="true" data-interval="5000" id="slider-7" data-rv-view="29" style="background-color: rgb(255, 255, 255);">
    <div class="mbr-section__container">
        <div>
            <ol class="carousel-indicators">
                <li data-app-prevent-settings="" data-target="#slider-7" class="active" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#slider-7" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--bg-adapted item dark center mbr-section--full-height active" style="background-image: url(assets/images/kostpremium.jpg);">
                    <div class="mbr-box__magnet mbr-box__magnet--center-right mbr-box__magnet--sm-padding mbr-after-navbar">
                                            
                        <div class=" container">
                            
                            <div class="row">
                                <div class=" col-md-6 col-md-offset-5">  

                                <div class="mbr-hero">
                                    <h1 class="mbr-hero__text">Mau Cari Kost?</h1>

                                    <p class="mbr-hero__subtext">Tapi binggung?<br><br></p>
                                </div>
                                <div class="mbr-buttons btn-inverse mbr-buttons--left mbr-buttons--right"><a class="mbr-buttons__btn btn btn-lg btn-danger" href="#">Cari Kost</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><div class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--bg-adapted item dark center mbr-section--full-height" style="background-image: url(assets/images/kostbali.jpg);">
                    <div class="mbr-box__magnet mbr-box__magnet--center-left mbr-box__magnet--sm-padding mbr-after-navbar">
                                            
                        <div class=" container">
                            
                            <div class="row">
                                <div class=" col-md-offset-1 col-md-6">  

                                <div class="mbr-hero">
                                    <h1 class="mbr-hero__text">Tawarin kost bunda</h1>

                                    <p class="mbr-hero__subtext">Gratis Simple dan cepat</p>
                                </div>
                                <div class="mbr-buttons btn-inverse mbr-buttons--left"><a class="mbr-buttons__btn btn btn-lg btn-danger" href="register01.php">Daftar</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <a data-app-prevent-settings="" class="left carousel-control" role="button" data-slide="prev" href="#slider-7">
                <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a data-app-prevent-settings="" class="right carousel-control" role="button" data-slide="next" href="#slider-7">
                <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="form2-9" data-rv-view="38" style="background-color: rgb(124, 112, 107);">
    
    <div class="mbr-section__container mbr-section__container--sm-padding container" style="padding-top: 27.2px; padding-bottom: 27.2px;">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2" data-form-type="formoid">
                        <div class="mbr-header mbr-header--center mbr-header--std-padding">
                            <h2 class="mbr-header__text">Cari Kost&nbsp;</h2>
                        </div>
                        <div data-form-alert="true">
                            <div class="hide" data-form-alert-success="true"></div>
                        </div>
                        <form class="mbr-form" action="#" method="post" data-form-title="Cari Kost&amp;nbsp;">
                            <input type="hidden" value="wrHoCDP4BwIdAfATOj9V0xkfQCFdAKdsKN7zi8+lG3dWDB1gV+fEW/d9Gt9ezad4zPToOd+Ufmx1t7WCS01fzPvr23aOvsdjLa/NlXNavBLUwHSB5vTX+5us9qLhJUvp" data-form-email="true">
                            <div class="mbr-form__left">
                                <input type="email" class="form-control" name="email" required="" placeholder="Cari" data-form-field="Email">
                            </div>
                            <div class="mbr-form__right mbr-buttons mbr-buttons--no-offset mbr-buttons--right"><button type="submit" class="mbr-buttons__btn btn btn-lg btn-danger"><span class="mbri-search mbr-iconfont mbr-iconfont-btn"></span>Cari</button></div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="features1-8" data-rv-view="44" style="background-color: rgb(255, 255, 255);">            
    <div class="mbr-section__container container mbr-section__container--std-top-padding" style="padding-top: 93px;">
        <div class="mbr-section__row row">

        <?php $ambil=$koneksi->query("SELECT * FROM tb_datakos INNER JOIN tb_tipekamar ON tb_datakos.ID_KOS = tb_tipekamar.ID_KOS");?>

        <?php while($perkos= $ambil->fetch_assoc()){ ?>
            <div class="mbr-section__col col-xs-12 col-md-4 col-sm-6">
                <div class="mbr-section__container mbr-section__container--center mbr-section__container--middle">
                    <figure class="mbr-figure"><img src="assets/images/dijual-murah-kost-elite-dewi-sri-12-kamar-kuta-bali-badung-indonesia-600x450.jpg" class="mbr-figure__img"></figure>
                </div>
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-article mbr-article--wysiwyg">
                    <!-- " DISINI NAMA 4 -->
                    <h4><?php echo $perkos['NAMA_KOS'];?></h4>
                    <?php echo 'Harga : Rp.'; ?><?php echo $perkos['HARGA'];?></br>
                    <?php echo 'Alamat Kost :'; ?><?php echo $perkos['KET_ALAMAT_KOS'];?></br>
                    <?php echo 'Jenis Kost : '; ?><?php echo $perkos['JENIS_KOS'];?></br>
                    <?php echo 'Kamar Tersedia : '; ?><?php echo $perkos['STOK_KAMAR'];?></br>
                                             
                    </div>
                </div>
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-article mbr-article--wysiwyg">
                        
                            <br>
							<div><a href="page2.php?id=<?php echo $perkos['ID_KOS']; ?>" class="btn btn-info">Lihat Lebih Lengkap</a><p></p></div>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="contacts1-3" data-rv-view="47" style="background-color: rgb(60, 60, 60);">
    
    <div class="mbr-section__container container">
        <div class="mbr-contacts mbr-contacts--wysiwyg row" style="padding-top: 45px; padding-bottom: 45px;">
            <div class="col-sm-4">
                <div><a href="https://mobirise.com" class="mbri-globe mbr-iconfont mbr-iconfont-contacts1"></a></div>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-4">
                        <p class="mbr-contacts__text"><strong>ADDRESS</strong><br>
Jl.Teratai 3 No 1<br>
Jember</p>
                    </div>
                    <div class="col-sm-4">
                        <p class="mbr-contacts__text"></p><p><strong>CONTACTS</strong><br>
Email: ulala@gmail.com&nbsp;&nbsp;&nbsp;&nbsp;<br>
Phone: 081333693785<br><br></p><p></p>
                    </div>
                    <div class="col-sm-4"><p class="mbr-contacts__text"><strong>LINKS</strong></p><ul class="mbr-contacts__list"><li><a class="mbr-contacts__link text-gray" href="https://mobirise.com/">F</a>acebook</li><li><a class="mbr-contacts__link text-gray" href="https://mobirise.com/mobirise-free-win.zip">T</a>witter</li><li>Discord</li></ul></div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="mbr-section mbr-section--relative mbr-section--fixed-size" id="footer1-4" data-rv-view="49" style="background-color: rgb(68, 68, 68);">
    
    <div class="mbr-section__container container">
        <div class="mbr-footer mbr-footer--wysiwyg row" style="padding-top: 36.9px; padding-bottom: 36.9px;">
            <div class="col-sm-12">
                <p class="mbr-footer__copyright">Copyright (c) 2015 Company Name. <a class="mbr-footer__link text-gray" href="https://mobirise.com/">Terms of Use</a>  | <a class="mbr-footer__link text-gray" href="https://mobirise.com/">Privacy Policy</a></p>
            </div>
        </div>
    </div>
</footer>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <!--[if lte IE 9]>
    <script src="assets/jquery-placeholder/jquery.placeholder.min.js"></script>
  <![endif]-->
  <script src="assets/mobirise/js/script.js"></script>
  <script src="assets/dropdown-menu/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
</body>
</html>