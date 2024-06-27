<?php
include "config.php";
include "navbar.php";


if(isset($_POST['kayit'])){
	   
		$kelime= $_POST['kelime'];
		$kelime_tanim=$_POST['kelime-tanim'];
		$kelime_ornek=$_POST['kelime-ornek'];
		$kategorisi=$_POST['kategorisi'];
		$kID=$_SESSION['id'];
		$ekle="INSERT INTO kelimeler (kelime,kelime_tanim,kelime_ornek,id) VALUES ('$kelime','$kelime_tanim','$kelime_ornek','$kID')";
		if ($conn->query($ekle) === TRUE) 
			{
				$last_id = $conn->insert_id;
		        $sorgum="INSERT INTO kategori_kelime (kelime_idd,kategori_idd) VALUES ('$last_id','$kategorisi')";
			    $conn->query($sorgum);

			echo'<div class="alert alert-success" role="alert">
					Kelimeniz Başarılı Bir Şekilde Eklendi.
				</div>';

			} 
			
			else 
			{
				echo "Hata: " . $ekle . "<br>" . $conn->error;
			}

}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset ="UTF-8">
	<title>Kelime Ekle</title>
	<link rel="stylesheet" href="stil.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</head>
<body>
	
	
	<section class="kelimeresim">
		<div class="container w-25 mx-auto p-3">
			<form class="form kelimeekle" action="kelime-ekle.php" method="post">
			<div class="w-100 mb-3 bg-danger text-white rounded-2 p-2 text-center">
			<span>Kelime ekleme</span>
			</div>
			<div class="w-100 mb-2">
			<label class="form-label">Kelimeniz</label>
			<input name="kelime" type="text" class="form-control border border-info" placeholder="Kelimenizi Giriniz."required>
			</div>
			<div class="w-100 mb-2">
			<label class="form-label">Kelimenizin Tanımı</label>
			<input name="kelime-tanim" type="text" class="form-control border border-info" placeholder="Kelimenizin Tanımını Giriniz."required>
			</div>
			<div class="w-100 mb-2">
				<label class="form-label">Kelimenize Örnek Cümle</label>
					<input name="kelime-ornek" type="text" class="form-control border border-info" placeholder="Kelimenize Örnek Cümle Giriniz"required>
			</div>
			<div class="w-100 mb-2">
				<label class="form-label">Kelimenizin Kategorisini Seçiniz</label>
				<select  name="kategorisi" class="form-select" aria-label="Default select example">
				  <option selected>Kategori Seçiniz</option>
				<?php
					$sorgu = $conn->query("select kategori_id as ID,kategori_ad as AD from kategori");
					$cikti = $sorgu->fetch_all();
					foreach ($cikti as $ciktim) {
						echo '<option value='.$ciktim[0].'>' .$ciktim[1]. '</option>';
						}					
					?>	
				</select>
			</div>
			<div class="w-50 mx-auto">
				<button name="kayit" class="btn btn-danger w-100">Kelimeyi Ekle</button>
			</div>
			</form>
		</div>
	</section>
	
	<div>
			
	</div>
	
	<?php
	include "footer.php";
	?>
</body>
</html>