<?php
session_start();
$sesnama = $_POST["txtNama"];
$sesemail = $_POST["txtEmail"];
$sespesan = $_POST["txtPesan"];
$_SESSION["sesnama"] = $sesnama;
$_SESSION["sesemail"] = $sesemail;
$_SESSION["sespesan"] = $sespesan;

$txtNim = $_POST["txtNim"];
$txtNmLengkap = $_POST["txtNmLengkap"];
$txtT4Lhr = $_POST["txtT4Lhr"];
$txtTglLhr = $_POST["txtTglLhr"];
$txtHobi = $_POST["txtHobi"];
$txtPasangan = $_POST["txtPasangan"];
$txtKerja = $_POST["txtKerja"];
$txtNmOrtu = $_POST["txtNmOrtu"];
$txtNmKakak = $_POST["txtNmKakak"];
$txtNmAdik = $_POST["txtNmAdik"];
header("location: index.php");
?>