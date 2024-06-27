<?php
include "config.php";
extract($_POST);
extract($_GET);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset ="UTF-8">
	<title>Anasayfa</title>
	<link rel="stylesheet" href="stil.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</head>
<body>
	<?php
	include "navbar.php";
	?>
	<div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5 ">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0 " src=".\resimler\giris-resmi.png" alt="..." /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">Başkent sözlük </h1>
                    <p>Başkent sözlük sitesi istediğiniz kelimeyi ekleyip kelimelere örnek cümleler ve kelimelerin tanımlarını içeren bir sitedir.</p>
                    <a class="btn btn-primary" href="kelimeler.php">Kelimeleri Görmek için Tıklayınız.</a>
                </div>
            </div>
            <!-- Call to Action-->
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body"><p class="text-white m-0">İstediğiniz Kelimeyi Güvenle Bulabilirsiniz.</p></div>
            </div>
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title ">Kelime</h2>
                            <p class="card-text">Bu Sözlük sitesinde istediğiniz kelimeyi aratabilirsiniz. Uyfun olan Kelimeyi İstediğiniz yerde kullanabilirsiniz.Uye olduktan sonra kelime ekleyebilir ve eklediğiniz kelimeyi düzenleyip silebilirsiniz. </p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">Başkent Sözlük</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Kelimelere Örnek</h2>
                            <p class="card-text">Arayıp bulduğunuz kelimeye ait uygun örnek cümleler de bulabilirsiniz.</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">Başkent Sözlük</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Kelimenin Tanımı</h2>
                            <p class="card-text">Kelimelerin kendinerine ait özel nerden geldiği ve tanımları da yer almaktadır.</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">Başkent Sözlük</a></div>
                    </div>
                </div>
            </div>
        </div>
	
	<?php
	include "footer.php";
	?>
</body>
</html>