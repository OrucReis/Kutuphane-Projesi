<?php
include "config.php";
extract($_POST);
extract($_GET);

?>
<!DOCTYPE HTML>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	
</head>
<body>
<div class="container d-flex justify-content-center">
	<form>

	<div class="mx-auto my-3">
    <label for="exampleInputEmail1" class="form-label">Kullanıcı Adı</label>
    <input type="k_ad" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Kullaıcı adınınızı ve Şifrenizi kimsyelye paylaşmayınız.</div>
	</div>
	<div class="mx-auto my-2">
    <label for="exampleInputPassword1" class="form-label">Şifre</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
	</div>
	<div class="mx-auto my-3">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Beni Hatırla</label>
	</div>
	<div class="d-flex justify-content-end mr-1"><button type="submit" class="btn btn-primary">Giriş</button></div>
	
	</form>
</div>
</body>
</html>