<?php
$host = mysqli_connect("localhost","root","");
if ($host){
    echo "koneksi host berhasil", "<br>";
} else {
    echo "koneksi gagal","<br>";
}
$db = mysqli_select_db($host,"vefresh_ukl");
if($db){
    echo "koneksi database berhasil.";
} else {
    echo "koneksi database gagal.";
}
?>
