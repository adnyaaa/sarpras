<?php

$server	= 'localhost';
$user	= 'root';
$pwd	= '';
$db		= 'db_sarprass';

$conn = mysqli_connect($server,$user,$pwd,$db) or die ('Terjadi kesalahan saat menghubungkan ke database').mysqli_error();


?>