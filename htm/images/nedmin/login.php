<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Proje Planlama Giriş</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="./images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./vendors/bootstrapp/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./vendors/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="./vendors/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./vendors/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./vendors/select22/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="./vendors/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./css/util.css">
	<link rel="stylesheet" type="text/css" href="./css/main.css">
<!--===============================================================================================-->
<!-- Bootstrap -->
    <link href="./vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
    <link href="./vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- NProgress -->
    <link href="./vendors/nprogress/nprogress.css" rel="stylesheet">
<!-- iCheck -->
    <link href="./vendors/iCheck/skins/flat/green.css" rel="stylesheet">
 <!-- bootstrap-progressbar -->
    <link href="./vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
 <!-- PNotify -->
    <link href="./vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="./vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="./vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" action="process.php" method="POST">
				<span class="login100-form-title p-b-37">
					Giriş
				</span>

				<?php if(@$_GET['status'] =='ok'){ 
				?>
				  <div class="alert alert-info alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Hoşgeldin
					  <?php 
					  echo $user = @$_GET['user_name'];

					  ?> </strong> Başarılı şekilde kayıt oldunuz.
                  </div>
				  
				  

			    <?php }elseif(@$_GET['login'] =='no'){ ?>
				  <div class="alert alert-info alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Hata</strong> Girilen bilgiler yanlış.
				  </div>
			    <?php } elseif(@$_GET['logout'] =='ok'){ ?>
				  <div class="alert alert-info alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Başarılı şekilde çıkış yapıldı.</strong> 
				  </div>
			    <?php } ?>
				
				
				
				
				
				

				<div class="wrap-input100 validate-input m-b-20" data-validate="Kullanıcı Adı">
					<input class="input100" type="text" name="user_name" placeholder="Kullanıcı Adı">
					<span class="focus-input100"></span>
				</div>
				

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Şifre">
					<input class="input100" type="password" name="password" placeholder="Şifre">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn" >
				<button class="container-login100-form-btn"  name="login">
     				Giriş
   				</button>
			    </div>

				<div class="text-center p-t-57 p-b-20">
					
				</div>

				

				<div class="text-center">
					<a href="register.php" class="txt2 hov1">
						Kaydol
					</a>
				</div>
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="./vendors/jqueryy/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="./vendors/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="./vendors/bootstrapp/js/popper.js"></script>
	<script src="./vendors/bootstrapp/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="./vendors/select22/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="./vendors/daterangepicker/moment.min.js"></script>
	<script src="./vendors/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="./vendors/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="./js/main.js"></script>

</body>
</html>
