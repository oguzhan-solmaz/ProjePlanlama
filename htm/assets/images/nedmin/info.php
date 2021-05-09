<?php
include 'header.php';

$check_info = $db -> prepare("SELECT * FROM education_info");
$check_info -> execute();
$control_info = $check_info->rowCount();

$fetch_info = $db->prepare("SELECT * FROM education_info WHERE edu_id=1");
$fetch_info->execute();

$fetchinfo = $fetch_info->fetch(PDO::FETCH_ASSOC);

?>

<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Bilgiler Sayfası</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>

            

               <!-- education info -->
               <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Eğitim Bilgileri</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <?php if(@$_GET['insertinfo'] =='ok'){ 
			            	?>
				                <div class="alert alert-info alert-dismissible fade in" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                           </button>
                           <strong>Başarılı</strong> Veriler başarılı şekilde eklendi.
                        </div>
				            <?php } elseif(@$_GET['insertinfo'] =='no'){ ?>
				                <div class="alert alert-info alert-dismissible fade in" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                           </button>
                           <strong>Hata</strong> Bir sorunla karşılaşıldı.
				                </div>
                    
                    <?php } elseif(@$_GET['updateinfo'] =='ok'){ ?>
				                <div class="alert alert-info alert-dismissible fade in" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                           </button>
                           <strong>Başarılı</strong> Veriler başarılı şekilde güncellendi.
				                </div>
                    
                    <?php } elseif(@$_GET['updateinfo'] =='no'){ ?>
				                <div class="alert alert-info alert-dismissible fade in" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                           </button>
                           <strong>Hata</strong> Bir sorunla karşılaşıldı.
				                </div>
                    <?php } ?>

                    
                    <form class="form-horizontal form-label-left" action="process.php" method="POST" >
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Sayfa Başlığı</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <input type="text" class="form-control" name="edu_title" value="<?php echo $fetchinfo['edu_title']; ?>" required="required">
                          
                        </div>
                    </div>    

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Lise</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <input type="text" class="form-control" name="high_school" value="<?php echo $fetchinfo['high_school']; ?>" required="required">
                          
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Üniversite</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <input type="text" class="form-control" name="universty" value="<?php echo $fetchinfo['universty']; ?>" required="required">

                        </div>
                      </div>
                      
                      
                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="reset" class="btn btn-round btn-danger">Temizle</button>
                          <?php
                          if($control_info == 1) { ?>
                             <button  type="submit" class="btn btn-round btn-primary" name="update_info">Güncelle</button>

                          <?php } else { ?>
                             <button  type="submit" class="btn btn-round btn-primary" name="insert_info">Ekle</button>
                          <?php } ?>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
              <!-- /form input mask -->

            
             
            </div>

            
          </div>
        </div>
        <!-- /page content -->







<?php
include 'footer.php';
?>