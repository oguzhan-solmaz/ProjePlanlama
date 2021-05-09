<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Proje Planlama Giriş</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="./css/nunito-font.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="./css/style.css"/>
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
<body class="form-v9">
	<div class="page-content">
		<div class="form-v9-content" style="background-image: url('images/form-v9.jpg')">
			<form class="form-detail" action="./process.php" method="POST">
				<h2>Kayıt Ol</h2>
				<?php if(@$_GET['register'] == 'no'){ ?>
				  <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Hata!</strong> Bizimle iletişime geçin.
                  </div>

			    <?php }elseif(@$_GET['register'] == 'hasadmin'){ ?>
				  <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Hata!</strong> Kayıtlı Admin Mevcut.
                  </div>

				<?php }elseif(@$_GET['register'] == 'lowchar'){ ?>
				  <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Hata!</strong> Şifre en az 6 karakter olmalıdır.
                  </div>

				<?php }elseif(@$_GET['register'] == 'inequal'){ ?>
				  <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Hata!</strong> Girilen şifreler eşleşmemektedir.
                  </div>

				<?php } ?>
			
				
				<div class="form-row-total">
					<div class="form-row">
						<input type="text" name="user_name" id="full-name" class="input-text" placeholder="Kullanıcı Adı" required>
					</div>
					<div class="form-row">
						<input type="text" name="email" id="your-email" class="input-text" placeholder="Eposta" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					</div>
				</div>
				<div class="form-row-total">
					<div class="form-row">
						<input type="password" name="password_1" id="password" class="input-text" placeholder="Şifre" required>
					</div>
					<div class="form-row">
						<input type="password" name="password_2" id="comfirm-password" class="input-text" placeholder="Şifre Tekrarı" required>
					</div>
				</div>
				<div class="form-row-last" >
				<button class="register" onclick="window.location.href='login.php';" name="login">
     				Giriş
   				</button>
				   <?php
				   $control = $db -> prepare('SELECT * FROM user');
				   $control -> execute();

				   $has_admin = $control -> rowCount();

				   if($has_admin == 0){ ?>
				    <button class="register" onclick="window.location.href='index.html';" name="signup">
     				   Kayıt Ol
   				    </button>   
			   

				   <?php } ?>
			   

					
				</div>
			</form>
		</div>
	</div>
	
	
</body>

<!-- jQuery -->
<script src="./vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="./vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    

</html>