<?php
include 'header.php';

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
                    <form class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Lise</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <input type="text" class="form-control" name="lise">
                          
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Üniversite</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <input type="text" class="form-control" name="üniversite">

                        </div>
                      </div>
                      
                      
                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="reset" class="btn btn-round btn-danger">Temizle</button>
                          <button  type="submit" class="btn btn-round btn-primary" name="education_save">Gönder</button>
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