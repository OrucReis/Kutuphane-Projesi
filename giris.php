<?php
include "config.php";
?>
	

<!DOCTYPE html>
<html>
<head>
	<meta charset ="UTF-8">
	<title>Giris Yap</title>
	<link rel="stylesheet" href="stil.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</head>
<body>
	<?php
	include "navbar.php";
	?>

	<section class="gresim">
		<div class="conteiner w-25 mx-auto">	
		<form class="girisyap" action="giris-islem.php" method="post">
			<div class="w-100 mb-3 bg-danger text-white rounded-2 p-2 text-center">
				<span>Merhaba</span>
			</div>
			<div class="w-100 mb-3">
				<label class="form-label text-dark">E Mail Adresiniz</label>
				<input name="mail" type="text" class="form-control border border-info" placeholder="E-Mail Adresinizi Giriniz." required>
			</div>
			<div class="w-100 mb-3">
				<label class="form-label text-dark">Şifre</label>
				<input name="sifre" type="password" class="form-control border border-info" placeholder="Şifrenizi Giriniz." required>
			</div>
			<div class="w-25 mx-auto">
				<button name="girisyap" class="btn btn-danger">Giriş Yap</button>
			</div>
		</form>
		</div>
	</section>
	
	<?php
	include "footer.php";
	?>
</body>
</html>
