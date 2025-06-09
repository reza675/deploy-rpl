<?php

$hostname = "db.be-mons1.bengt.wasmernet.com" ;
$port     = 3306;
$username = "6c7f9d1d7f7780007ba0869b593c" ;
$password = "06846c7f-9d1e-710b-8000-8f3601b18f89" ;
$database = "simaber" ;

$conn = mysqli_connect($hostname, $username, $password, $database,$port);
if (!$conn) {
    die("Gagal terhubung ke database. " . mysqli_connect_error());
}
