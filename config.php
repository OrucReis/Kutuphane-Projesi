<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="sozluk";
	$conn=new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error)
	{
		die("Veritabanı Baglantisi Basarisiz:".$conn->connect_error);
	}
		
?>