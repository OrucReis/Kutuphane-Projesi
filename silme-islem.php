<?php
include"config.php";

session_start();

$kelimeid=$_POST['silme'];

if(isset($_POST['sil']))
					
{
	$sql_silme2='DELETE FROM kategori_kelime WHERE `kategori_kelime`.`kelime_idd` = '.$kelimeid.'';
	$sql_silme='DELETE FROM kelimeler WHERE `kelimeler`.`kelime_id` ='.$kelimeid.'';
	$conn->query($sql_silme2);
	$conn->query($sql_silme);
	header("Location: kelimeler.php");

	

}

?>