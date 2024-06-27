<?php
include "config.php";

if(isset($_POST['iletisim_buton']))
{
		$ad= $_POST['ad'];
		$soyad=$_POST['soyad'];
		$email=$_POST['mail'];
		$mesaj=$_POST['mesaj'];
		$ekle="INSERT INTO iletisim (ad,soyad,mail,mesaj) VALUES ('$ad','$soyad','$email','$mesaj')";
		
		$conn->query($ekle);
		
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset ="UTF-8">
	<title>İletisim</title>
	<link rel="stylesheet" href="stil.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</head>
<body>
		<?php
	include "navbar.php";
	?>
	
	
	<section class=" iletisim" >
		<div class="container " >
			<form class="iletisimform " action="iletisim.php" method="post">
				<div class="w-25 mx-auto ">
					<div class="w-100 bg-danger mb-2 p-2 text-white rounded-2 text-center">
					<span>Bizimle İleşime Geçmek İçin</span>	
					</div>
					
					<div class="w-100 mb-2">
					<label class="form-label">Adınız</label>
					<input name="ad" type="text" placeholder="Adınız" required class="form-control border border-info">
					</div>
					<div class="w-100 mb-2">
					<label class="form-label">Soydınız</label>
					<input name="soyad" type="text" placeholder="Soydınız" required class="form-control border border-info">
					</div>
					<div class="w-100 mb-2">
					<label class="form-label">Mail Adresiniz</label>
					<input name="mail" type="email" placeholder="Mail Adresiniz" required class="form-control border border-info">
					</div>
					<div class="w-100 mb-2">
						<label class="form-label">Mesajınız</label>
						<textarea name="mesaj" cols="30" class="form-control" rows="10" required></textarea>
					</div>
					<div class="w-25 mx-auto ">
					<button name="iletisim_buton" class="btn btn-danger">Gönder</button>
					</div>
				</div>
			</form>
			<div class="sosyal float-end mt-3">
				<ul>
				<li class="footerli mb-2">Başkent Sözlük Sosyal Medya Hesapları</li>
				<li class="sosyalli me-3"><a href="https://www.baskent.edu.tr/tr/"><img src=".\resimler\baskent-logo.png" width="50" height="50"></a></li>
				<li class="sosyalli me-3"><a href="https://twitter.com/baskentunv"><img src=".\resimler\twitter.png" width="60" height="40"></a></li>
				<li class="sosyalli me-3"><a href="https://www.youtube.com/@Baskentunv"><img src=".\resimler\youtube.png"  width="55" height="40"></a></li>
				<li class="sosyalli me-3"><a href="https://www.instagram.com/baskentunv/"><img src=".\resimler\instagram.png"  width="40" height="40"></a></li>
				<li class="sosyalli me-3"><a href="https://www.facebook.com/BaskentUniv/?locale=tr_TR"><img src=".\resimler\Facebook.png"  width="40" height="40"></a></li>
				<li class="sosyalli me-3"><a href="https://tr.linkedin.com/school/baskentuniversitesi/"><img src=".\resimler\linkedin.png"  width="40" height="40"></a></li>
			
				</ul>
			</div>
		</div>
	</section>
	
	<?php
	include "footer.php";
	?>
</body>
</html>