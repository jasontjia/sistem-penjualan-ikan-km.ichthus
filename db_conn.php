<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "Akun";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Koneksi Gagal!";
}
