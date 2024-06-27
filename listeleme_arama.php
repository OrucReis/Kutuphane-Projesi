<?php
include "config.php";


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset ="UTF-8">
	<title>Aranan Kelime</title>
	<link rel="stylesheet" href="stil.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</head>
<body>
	<?php
	include "navbar.php";
	?>
	

	
	<div class="mx-auto w-75 p-3">
		<div class"">
		<div class="w-25 mb-3 bg-light text-black rounded-2 p-2 text-center mx-auto">
			<span>Sözlük</span>
			</div>

			<table class="table table-striped">
			  <thead>
				<tr>
				  <th scope="col">İD</th>
				  <th scope="col">Ekleyen Kişi</th>
				  <th scope="col">Kelime</th>
				  <th scope="col">Kelime Tanımı</th>
				  <th scope="col">Kelime Örnek Cümlesi</th>
				  <th scope="col">Kelime Kategorisi</th>
				  <th scope="col">Eklenme Tarihi</th>
				  <th scope="col">Düzenleme</th>
				  <th scope="col">Silme</th>
				</tr>
			  </thead>
			  <tbody>
				<?php
						$aranan=$_POST["aranan"];

						if($aranan)
						{	
							
							$sql="select k.kelime_id,u.ad,u.id,k.kelime,k.kelime_tanim,k.kelime_ornek,k.eklenme_tarih ,ka.kategori_ad from kelimeler k, uyeler u,kategori ka,kategori_kelime kk where k.id=u.id and k.kelime_id=kk.kelime_idd and ka.kategori_id =kk.kategori_idd and k.kelime like '%$aranan%'";
							$getir=$conn->query($sql);

							while($satir=$getir->fetch_assoc())
							{
								echo "<tr>";
								echo"<td>".$satir["kelime_id"]."</td>";
								echo"<td>".$satir["ad"]."</td>";
								echo"<td>".$satir["kelime"]."</td>";
								echo"<td>".$satir["kelime_tanim"]."</td>";
								echo"<td>".$satir["kelime_ornek"]."</td>";
								echo"<td>".$satir["kategori_ad"]."</td>";
								echo"<td>".$satir["eklenme_tarih"]."</td>";		
								
								echo"<td>";
							    
								
								  if(!empty($_SESSION['id']))
								  {
									  if($_SESSION['id']==$satir["id"])
								  {
									
									echo "
									<form action='kelime-duzenle.php' method='post'>
										<button name='düzenle' class='btn btn-dark w-100 me-3'>Düzenle</button>
										<input type='hidden' name='duzenlemek' value='".$satir["kelime_id"]."'>											
									</form>
									";
								  }
							
								  else
								  {
									echo "
									<div class='w-100 mb-3 bg-light text-black rounded-2 p-2 text-center mx-auto'>
									<span>Bu kelimeyi düzenlemeye yetkiniz yok!</span>
									</div>
									";
								  }
								"</td>"; 
								  }
								  else{
									  	echo "
									<div class='w-100 mb-3 bg-light text-black rounded-2 p-2 text-center mx-auto'>
									<span>Bu kelimeyi düzenlemeye yetkiniz yok!</span>
									</div>
									";
								  }
								 echo"<td>";

								
							    if(!empty($_SESSION['id'])){
								  if($_SESSION['id']==$satir["id"])
								  {
									
									echo "
									<form action='silme-islem.php' method='post'>
									<button name='sil' value='SİL' class='btn btn-dark w-100'>Sil</button>
									<input type='hidden' name='silme' value='".$satir["kelime_id"]."'>
									</form>";
									
								  }
								  else
								  {
									echo "
									<div class='w-100 mb-3 bg-light text-black rounded-2 p-2 text-center mx-auto'>
									<span>Bu kelimeyi silmeye yetkiniz yok!</span>
									</div>
									";
								  }
								 "</td>";

								echo"</tr>";
								}
								else
								  {
									echo "
									<div class='w-100 mb-3 bg-light text-black rounded-2 p-2 text-center mx-auto'>
									<span>Bu kelimeyi silmeye yetkiniz yok!</span>
									</div>
									";
								  }
								
								
								
							}
						}
						else
						{
							echo "
									<div class='w-100 mb-3 bg-light text-black rounded-2 p-2 text-center mx-auto'>
									<span>Lütfen arama kısmına aramak istediğiniz kelimeyi yazınız.</span>
									</div>
									";
						}
					
					
				?>

			  </tbody>
			</table>
		</div>
	</div>
	
	<?php
	include "footer.php";
	?>
</body>
</html>