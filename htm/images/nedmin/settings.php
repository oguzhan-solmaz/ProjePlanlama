<?php
include 'header.php';

$check_settings = $db -> prepare("SELECT * FROM site_settings");
$check_settings -> execute();
$control_settings = $check_settings->rowCount();

$fetch_settings = $db->prepare("SELECT * FROM site_settings WHERE settings_id=1");
$fetch_settings->execute();

$fetchsettings = $fetch_settings->fetch(PDO::FETCH_ASSOC);

?>

<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ayarlar Sayfası</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                 
                  <div class="x_content">

                  <?php if(@$_GET['insertsettings'] =='ok'){ 
			            	?>
				                <div class="alert alert-info alert-dismissible fade in" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                           </button>
                           <strong>Başarılı</strong> Veriler başarılı şekilde eklendi.
                        </div>
				            <?php } elseif(@$_GET['insertsettings'] =='no'){ ?>
				                <div class="alert alert-info alert-dismissible fade in" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                           </button>
                           <strong>Hata</strong> Bir sorunla karşılaşıldı.
				                </div>
                    
                    <?php } elseif(@$_GET['updatesettings'] =='ok'){ ?>
				                <div class="alert alert-info alert-dismissible fade in" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                           </button>
                           <strong>Başarılı</strong> Veriler başarılı şekilde güncellendi.
				                </div>
                    
                    <?php } elseif(@$_GET['updatesettings'] =='no'){ ?>
				                <div class="alert alert-info alert-dismissible fade in" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                           </button>
                           <strong>Hata</strong> Bir sorunla karşılaşıldı.
				                </div>
                    <?php } ?>



                    <form class="form-horizontal form-label-left" action="process.php" method="POST">
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Sayfa Başlığı
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="site_title" value="<?php echo $fetchsettings['site_title']; ?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Başlık
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="title" value="<?php echo $fetchsettings['title']; ?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Alt Başlık
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="subtitle" value="<?php echo $fetchsettings['subtitle']; ?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      

                      
                      

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Şifre
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="page content"  required="required" type="password">
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Şifre Tekrarı
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password"  name="xadad"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      
                      
                     
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="reset" class="btn btn-round btn-danger">Temizle</button>
                          <?php
                          if($control_settings == 1) { ?>
                             <button  type="submit" class="btn btn-round btn-primary" name="update_settings">Güncelle</button>

                          <?php } else { ?>
                             <button  type="submit" class="btn btn-round btn-primary" name="insert_settings">Ekle</button>
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