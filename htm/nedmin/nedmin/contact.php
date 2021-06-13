<?php
include 'header.php';

$check_contact = $db -> prepare("SELECT * FROM contact_info");
$check_contact -> execute();
$control_contact = $check_contact->rowCount();

$fetch_contact = $db->prepare("SELECT * FROM contact_info WHERE contact_id=1");
$fetch_contact->execute();

$fetchcontact = $fetch_contact->fetch(PDO::FETCH_ASSOC);

?>

<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>İletişim Sayfası</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                 
                  <div class="x_content">

                  <?php if(@$_GET['insertcontact'] =='ok'){ 
			            	?>
				                <div class="alert alert-info alert-dismissible fade in" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                           </button>
                           <strong>Başarılı</strong> Veriler başarılı şekilde eklendi.
                        </div>
				            <?php } elseif(@$_GET['insertcontact'] =='no'){ ?>
				                <div class="alert alert-info alert-dismissible fade in" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                           </button>
                           <strong>Hata</strong> Bir sorunla karşılaşıldı.
				                </div>
                    
                    <?php } elseif(@$_GET['updatecontact'] =='ok'){ ?>
				                <div class="alert alert-info alert-dismissible fade in" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                           </button>
                           <strong>Başarılı</strong> Veriler başarılı şekilde güncellendi.
				                </div>
                    
                    <?php } elseif(@$_GET['updatecontact'] =='no'){ ?>
				                <div class="alert alert-info alert-dismissible fade in" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                           </button>
                           <strong>Hata</strong> Bir sorunla karşılaşıldı.
				                </div>
                    <?php } ?>

                    <form class="form-horizontal form-label-left" action="process.php" method="POST">

                      
                      

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Sayfa Açıklaması
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" value="<?php echo $fetchcontact['content']; ?>" name="content"  required="required" type="text">
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Eposta
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email"  name="email" value="<?php echo $fetchcontact['email']; ?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Copyright
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="copyright" value="<?php echo $fetchcontact['copyright']; ?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">GSM
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="gsm" value="<?php echo $fetchcontact['gsm']; ?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Adres
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="adress" value="<?php echo $fetchcontact['adress']; ?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="reset" class="btn btn-round btn-danger">Temizle</button>
                          <?php
                          if($control_contact == 1) { ?>
                             <button  type="submit" class="btn btn-round btn-primary" name="update_contact">Güncelle</button>

                          <?php } else { ?>
                             <button  type="submit" class="btn btn-round btn-primary" name="insert_contact">Ekle</button>
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