<?php
session_start();

$_SESSION=array();
session_destroy();


	echo'
		<div class="conteiner w-50 mx-auto p-3">
			<div class="alert alert-danger" role="alert">
					Çıkış işlemi başarılı bir şekilde gerçekleştirildi Yönlendiriliyorsunuz.
			</div>
		</div>';
		//header("Location: giris.php");
		header('Refresh: 2; url=http://localhost:8080/proje/giris.php');

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset ="UTF-8">
		<title>Giriş Yönlendrime</title>
		<link rel="stylesheet" href="stil.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

	</head>
	<body>
	
	
	</body>
</html>