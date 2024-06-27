
<?php
include "config.php";
session_start();

//<a href="arama_sonuc.php" name="arama" class="btn-sm btn btn-outline-dark ">ara</a>

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset ="UTF-8">
	<link rel="stylesheet" href="stil.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</head>
<body>
	<div class="navbar">
		<nav class="navbar navbar-light bg-light w-100 navbar-expand-sm" style="margin-top:-8px">
		<div class="container">
			<ul class="navbar-nav">
			<?php
			if(empty($_SESSION)){
					echo '
				<li class="nav-item"><a href="index.php" class="blogo" ><img src=".\resimler\baskent-logo.png" width="60" height="60" class="mt-1" ></a></li>
				<li class="nav-item"><a href="index.php" class="btn-sm btn btn-outline-dark ms-1 mt-3">Anasayfa</a></li>
				<li class="nav-item"><a href="hakkimizda.php" class="btn-sm btn btn-outline-dark ms-1 mt-3">Hakkımızda</a></li>
				<li class="nav-item"><a href="kelimeler.php" class="btn-sm btn btn-outline-dark ms-1 mt-3">Kelimeler</a></li>
				<li class="nav-item"><a href="iletisim.php" class="btn-sm btn btn-outline-dark ms-1 mt-3">İletisim</a></li>
				';
			}
				else{
					echo'
				<li class="nav-item"><a href="index.php" class="blogo" ><img src=".\resimler\baskent-logo.png" width="60" height="60" class="mt-1" ></a></li>
				<li class="nav-item"><a href="index.php" class="btn-sm btn btn-outline-dark ms-1 mt-3">Anasayfa</a></li>
				<li class="nav-item"><a href="hakkimizda.php" class="btn-sm btn btn-outline-dark ms-1 mt-3">Hakkımızda</a></li>
				<li class="nav-item"><a href="kelimeler.php" class="btn-sm btn btn-outline-dark ms-1 mt-3">Kelimeler</a></li>
				<li class="nav-item"><a href="kelime-ekle.php" class="btn-sm btn btn-outline-dark ms-1 mt-3">Kelime Ekle</a></li>
				<li class="nav-item"><a href="kelimelerin.php" class="btn-sm btn btn-outline-dark ms-1 mt-3">Kelimelerin</a></li>
				<li class="nav-item"><a href="iletisim.php" class="btn-sm btn btn-outline-dark ms-1 mt-3">İletisim</a></li>
				';
				}
				?>
			</ul>
			<ul class="navbar-nav">
				<li class="nav-item">
				
				<form action="listeleme_arama.php" method="post">
					<div class="input-group">
						<input type="text" name="aranan" id="aranan" placeholder="Arama" class="form-control form-control-sm">
						<button name="arama" class="btn-sm btn btn-outline-dark">Ara</button>
					</div>
					
				</form>
				</li>
				<?php 
				
				if(empty($_SESSION)){
					echo '	<li class="nav-item">
					<div class="btn-group ms-1">
						<a href="giris.php"class="btn-sm btn btn-outline-dark">Giriş</a>
						<a href="kayit.php"class="btn-sm btn btn-outline-dark">Kayıt Ol</a>
					</div>
				</li>';
				}
				else{
					echo '<span class=" ms-2 me-2 mt-1">'.$_SESSION['ad'].'</span>';
					
					echo'	<li class="nav-item">
					<div class="btn-group ms-1">
						<a href="cikis.php"class="btn-sm btn btn-outline-dark">Çıkış Yap</a>
					</div>
				</li>';
				}
				?>
			</ul>
		</div>
		</nav>
	</div>
	
</body>
</html>