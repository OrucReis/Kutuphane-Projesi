<?php
include"config.php";

	$sql=('select k.kelime_id,u.ad,k.kelime,k.kelime_tanim,k.kelime_ornek,k.eklenme_tarih ,ka.kategori_ad from kelimeler k, uyeler u,kategori ka,kategori_kelime kk where k.id=u.id and k.kelime_id=kk.kelime_idd and ka.kategori_id =kk.kategori_idd and u.id='.$_SESSION['id'].'');
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
		  if(empty($_SESSION))
		  {
			echo "
			<div class='w-100 mb-3 bg-light text-black rounded-2 p-2 text-center mx-auto'>
			<span>Giriş Yapmanız Lazım!</span>
			</div>
			";
		  }
		  else
		  {
			
			
			echo "
			<form action='kelime-duzenle.php' method='post'>
				<button name='düzenle' class='btn btn-dark w-100 me-3'>Düzenle</button>	
				<input type='hidden' name='duzenlemek' value='".$satir["kelime_id"]."'>					
			</form>
			";
			
			
		  }
		 "</td>";
		echo"<td>";
		  if(empty($_SESSION))
		  {
			echo "
			<div class='w-100 mb-3 bg-light text-black rounded-2 p-2 text-center mx-auto'>
			<span>Giriş Yapmanız Lazım!</span>
			</div>
			";
		  }
		  else
		  {
			echo "
			<form action='silme-islem2.php' method='post'>
			<button name='sil' value='SİL' class='btn btn-dark w-100'>Sil</button>
			<input type='hidden' name='silme' value='".$satir["kelime_id"]."'>
			</form>";
		  }
		 "</td>";

		echo"</tr>";
	}
?>