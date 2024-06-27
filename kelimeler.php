<?php
include "config.php";

extract($_POST);
extract($_GET);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset ="UTF-8">
	<title>Kelimeler</title>
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
				</tr>
			  </thead>
			  <tbody>
				<?php
					include"listeleme.php";
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