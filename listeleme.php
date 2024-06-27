<?php
include"config.php";



	$sql=("select k.kelime_id,u.ad,k.kelime,k.kelime_tanim,k.kelime_ornek,k.eklenme_tarih ,ka.kategori_ad from kelimeler k, uyeler u,kategori ka,kategori_kelime kk where k.id=u.id and k.kelime_id=kk.kelime_idd and ka.kategori_id =kk.kategori_idd ");
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
		echo"</tr>";
	}

?>