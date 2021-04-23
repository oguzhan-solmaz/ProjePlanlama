<?php
include 'header.php';

$check_skill = $db -> prepare("SELECT * FROM skills");
$check_skill -> execute();
$control_skill = $check_skill->rowCount();

$fetch_skill = $db->prepare("SELECT * FROM skills WHERE skill_id=1");
$fetch_skill->execute();

$fetch = $fetch_skill->fetch(PDO::FETCH_ASSOC);

?>

<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Yetenek Sayfası</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                 
                  <div class="x_content">

                    <?php if(@$_GET['insert'] =='ok'){ 
			            	?>
				                <div class="alert alert-info alert-dismissible fade in" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                           </button>
                           <strong>Başarılı</strong> Veriler başarılı şekilde eklendi.
                        </div>
				            <?php } elseif(@$_GET['insert'] =='no'){ ?>
				                <div class="alert alert-info alert-dismissible fade in" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                           </button>
                           <strong>Hata</strong> Bir sorunla karşılaşıldı.
				                </div>
                    
                    <?php } elseif(@$_GET['update'] =='ok'){ ?>
				                <div class="alert alert-info alert-dismissible fade in" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                           </button>
                           <strong>Başarılı</strong> Veriler başarılı şekilde güncellendi.
				                </div>
                    
                    <?php } elseif(@$_GET['update'] =='no'){ ?>
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
                            <input class="form-control col-md-7 col-xs-12" value="<?php echo $fetch['title']; ?>" name="title"  required="required" type="text">
                        </div>
                      </div>
                     

                      <hr>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">1.yetenek
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text"  name="first_skill" value="<?php echo $fetch['first_skill']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                     
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">2.yetenek
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="second_skill" value="<?php echo $fetch['second_skill']; ?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">3.yetenek
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="third_skill" value="<?php echo $fetch['third_skill']; ?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">4.yetenek
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="forth_skill" value="<?php echo $fetch['forth_skill']; ?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">5.yetenek
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="fifth_skill" value="<?php echo $fetch['fifth_skill']; ?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">6.yetenek
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="sixth_skill" value="<?php echo $fetch['sixth_skill']; ?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <hr>

                      
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">1.yetenek sayaç
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text"  name="first_counter" value="<?php echo $fetch['first_counter']; ?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                     
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">2.yetenek sayaç
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="second_counter" value="<?php echo $fetch['second_counter']; ?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">3.yetenek sayaç
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="third_counter" value="<?php echo $fetch['third_counter']; ?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">4.yetenek sayaç
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="forth_counter" value="<?php echo $fetch['forth_counter']; ?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">5.yetenek sayaç
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="fifth_counter" value="<?php echo $fetch['fifth_counter']; ?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">6.yetenek sayaç
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="sixth_counter" value="<?php echo $fetch['sixth_counter']; ?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="reset" class="btn btn-round btn-danger">Temizle</button>

                          <?php
                          if($control_skill == 1) { ?>
                             <button  type="submit" class="btn btn-round btn-primary" name="update_skills">Güncelle</button>

                          <?php } else { ?>
                             <button  type="submit" class="btn btn-round btn-primary" name="insert_skills">Ekle</button>
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