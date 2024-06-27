<?php
include "config.php";
include "navbar.php";
	
	
	$kelimeid=$_POST['duzenlemek'];
	
	
	
	$kelimee;
	$kelime_tan;
	$kelime_ornk;
	$kat_id;
	
	$sql="select k.kelime_id,u.ad,k.kelime,k.kelime_tanim,k.kelime_ornek,k.eklenme_tarih ,ka.kategori_id from kelimeler k, uyeler u,kategori ka,kategori_kelime kk where k.id=u.id and k.kelime_id=kk.kelime_idd and ka.kategori_id =kk.kategori_idd and k.kelime_id = '$kelimeid'";
	$getir=$conn->query($sql);
	while($satir=$getir->fetch_assoc())
	{
		$kelimee=$satir["kelime"];
		$kelime_tan=$satir["kelime_tanim"];
		$kelime_ornk=$satir["kelime_ornek"];
		$kat_id=$satir["kategori_id"];

	}
	
if(isset($_POST['duzenle'])){
	   

	   
		$kelime= $_POST['kelime'];
		$kelime_tanim=$_POST['kelime-tanim'];
		$kelime_ornek=$_POST['kelime-ornek'];
		$kategorisi=$_POST['kategorisi'];

		$duzen="update kelimeler set kelime='$kelime' , kelime_tanim='$kelime_tanim' ,  kelime_ornek='$kelime_ornek' where kelime_id = '$kelimeid' ";
		
		if ($conn->query($duzen) === TRUE) 
			{
		        $sorgum="update kategori_kelime set  kategori_idd='$kategorisi' where kelime_idd= '$kelimeid'";
			    $conn->query($sorgum);
				
				

			echo'<div class="alert alert-success" role="alert">
					Kelimeniz Başarılı Bir Şekilde Düzenlendi.
				</div>';
				

			} 
			
			else 
			{
				echo'<div class="alert alert-success" role="alert">
					Kelimeniz Bir Hatadan Dolayı Düzenlenemedi.
				</div>';
				echo "Hata: " . $duzen . "<br>" . $conn->error;
			}
									
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset ="UTF-8">
	<title>Kelime Düzenle</title>
	<link rel="stylesheet" href="stil.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</head>
<body>
	
	
	<section class="kelimeresim">
		<div class="container w-25 mx-auto p-3">
			<form class="form kelimeekle" action="kelime-duzenle.php" method="post">
			<div class="w-100 mb-3 bg-danger text-white rounded-2 p-2 text-center">
			<span>Kelime Düzenleme</span>
			</div>
			<div class="w-100 mb-2">
			<label class="form-label">Kelimeniz</label>
			<input name="kelime" type="text" class="form-control border border-info" value="<?php echo $kelimee ?>" placeholder="Kelimenizi Giriniz." required>
			</div>
			<div class="w-100 mb-2">
			<label class="form-label">Kelimenizin Tanımı</label>
			<input name="kelime-tanim" type="text" class="form-control border border-info" value="<?php echo $kelime_tan?>" placeholder="Kelimenizin Tanımını Giriniz." required>
			</div>
			<div class="w-100 mb-2">
				<label class="form-label">Kelimenize Örnek Cümle</label>
					<input name="kelime-ornek" type="text" class="form-control border border-info" value="<?php echo $kelime_ornk?>" placeholder="Kelimenize Örnek Cümle Giriniz" required>
			</div>
			<div class="w-100 mb-2">
				<label class="form-label">Kelimenizin Kategorisini Seçiniz</label>
				<select  name="kategorisi" class="form-select"  aria-label="Default select example">
				  <option selected>Kategori Seçiniz</option>
				<?php
					$sorgu = $conn->query("select kategori_id as ID,kategori_ad as AD from kategori");
					$cikti = $sorgu->fetch_all();
					foreach ($cikti as $ciktim) {
						if($kat_id== $ciktim[0])
						{
					     	echo '<option value='.$ciktim[0].' selected>' .$ciktim[1]. '</option>';

						}
						else{
						   echo '<option value='.$ciktim[0].' >' .$ciktim[1]. '</option>';
	
						}
						}					
					?>	
				</select>
			</div>
			<div class="w-50 mx-auto">
				<button name="duzenle" class="btn btn-danger w-100">Kelimeyi Düzenle</button>
			</div>

			<?php
			echo"
			<input type='hidden' name='duzenlemek' value='$kelimeid'>		
			";
			?>

			
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