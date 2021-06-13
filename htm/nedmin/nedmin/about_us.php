<?php
include 'header.php';

$check_about = $db -> prepare("SELECT * FROM about_me");
$check_about -> execute();
$control_about = $check_about->rowCount();

$fetch_about = $db->prepare("SELECT * FROM about_me WHERE about_id=1");
$fetch_about->execute();

$fetchabout = $fetch_about->fetch(PDO::FETCH_ASSOC);

?>

<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Hakkımda Sayfası</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                 
                  <div class="x_content">

                    <?php if(@$_GET['insertabout'] =='ok'){ 
			            	?>
				                <div class="alert alert-info alert-dismissible fade in" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                           </button>
                           <strong>Başarılı</strong> Veriler başarılı şekilde eklendi.
                        </div>
				            <?php } elseif(@$_GET['insertabout'] =='no'){ ?>
				                <div class="alert alert-info alert-dismissible fade in" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                           </button>
                           <strong>Hata</strong> Bir sorunla karşılaşıldı.
				                </div>
                    
                    <?php } elseif(@$_GET['updateabout'] =='ok'){ ?>
				                <div class="alert alert-info alert-dismissible fade in" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                           </button>
                           <strong>Başarılı</strong> Veriler başarılı şekilde güncellendi.
				                </div>
                    
                    <?php } elseif(@$_GET['updateabout'] =='no'){ ?>
				                <div class="alert alert-info alert-dismissible fade in" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                           </button>
                           <strong>Hata</strong> Bir sorunla karşılaşıldı.
				                </div>
                    <?php } ?>

                    <form class="form-horizontal form-label-left" action="process.php" method="POST">

                      
                      

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Sayfa Başlığı 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12"  name="about_title" value="<?php echo $fetchabout['about_title']; ?>"  required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Biyografi 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea id="textarea" required="required" name="biyografi"  class="form-control col-md-7 col-xs-12" rows="5"><?php echo $fetchabout['biyografi']; ?></textarea>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Github 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="github" value="<?php echo $fetchabout['github']; ?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Twitter 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="twitter" value="<?php echo $fetchabout['twitter']; ?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Youtube 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="youtube" value="<?php echo $fetchabout['youtube']; ?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">İnstagram 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="instagram" value="<?php echo $fetchabout['instagram']; ?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Facebook 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="facebook" value="<?php echo $fetchabout['facebook']; ?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Twitch 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="twitch" value="<?php echo $fetchabout['twitch']; ?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Profil Fotoğrafı
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file"  name="picturee" value="<?php echo $fetchabout['picturee']; ?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="reset" class="btn btn-round btn-danger">Temizle</button>
                          <?php
                          if($control_about == 1) { ?>
                             <button  type="submit" class="btn btn-round btn-primary" name="update_about">Güncelle</button>

                          <?php } else { ?>
                             <button  type="submit" class="btn btn-round btn-primary" name="insert_about">Ekle</button>
                          <?php } ?>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->







<?php
include 'footer.php';
?>