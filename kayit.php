<?php

include "config.php";
if(isset($_POST['kayit'])){
		$ad= $_POST['adi'];
		$soyad=$_POST['soyadi'];
		$email=$_POST['email'];
		$sif=$_POST['parola'];
		$sif2=$_POST['parola2'];
		$ekle="INSERT INTO uyeler (ad,soyad,mail,parola) VALUES ('$ad','$soyad','$email','$sif')";
		
		if($conn->query($ekle)){
			if($sif!=$sif2){
				echo'<div class="alert alert-danger" role="alert">
					Şifreniz Birbiri ile aynı değil!
				</div>';
			}
			else{
			echo'<div class="alert alert-success" role="alert">
					Başarılı Bir Şekilde Kayıt Oldunuz.
				</div>';
			}
		}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Kayıt</title>
<link rel="stylesheet" type="text/css" href="stil.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</head>
<body>
		<?php
	include "navbar.php";
	?>
		
	<section class="kresim">
		<div class="container w-25 mx-auto">

			<form class="form kayitol" action="kayit.php" method="post">
			<div class="w-100 mb-3 bg-danger text-white rounded-2 p-2 text-center">
			<span>Aramıza Hoşgeldiniz</span>
			</div>
			<div class="w-100 mb-2">
			<label class="form-label">Adınız</label>
			<input name="adi" type="text" class="form-control border border-info" placeholder="Adınızı Giriniz"required>
			</div>
			<div class="w-100 mb-2">
			<label class="form-label">Soyadınız</label>
			<input name="soyadi" type="text" class="form-control border border-info" placeholder="Soyadınızı Giriniz"required>
			</div>
			<div class="w-100 mb-2">
				<label class="form-label">Email</label>
					<input name="email" type="email" class="form-control border border-info" placeholder="E-Mail Adresinizi Giriniz"required>
			
			</div>
			<div class="w-100 mb-2">
				<label class="form-label">Parola</label>
				<input name="parola" type="password" class="form-control border border-info" placeholder="Parolanızı Giriniz"required>
				
			</div>
			<div class="w-100 mb-2">
				<label class="form-label">Parola Tekrar Giriniz</label>
				<input name="parola2" type="password" class="form-control border border-info" placeholder="Parolanızı Tekrar Giriniz"required>
				
			</div>
			<div class="w-100 mb-2">
				<div class="form-check">
				<input type="checkbox" class="form-check-input border border-info" required>
				<label class="form-label">Kabul Ediyorum</label>
				</div>
			</div>
			<div class="w-25 mx-auto">
				<button name="kayit" class="btn btn-danger w-100">Kayıt Ol</button>
			</div>
			</form>
		</div>
	</section>
	
	<?php
	include "footer.php";
	?>
</body>
</html>