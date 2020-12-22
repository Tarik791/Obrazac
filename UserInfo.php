<?php 
include_once('insert.php');


$brojfirme = $_POST['brojfirme'];
$nazivfirme = $_POST['nazivfirme'];
$adresafirme = $_POST['adresafirme'];
$gradfirme = $_POST['gradfirme'];
$postanskibrojfirme = $_POST['postanskibrojfirme'];
$prijavaosiguranja = $_POST['gender'];
$telefonfirme = $_POST['telefonfirme'];
$emailfirme = $_POST['emailfirme'];
$licnibroj = $_POST['licnibroj'];
$imeiprezimekorisnika = $_POST['imeiprezimekorisnika'];
$datumrodjenjakorisnika = $_POST['datumrodjenjakorisnika'];
$spol = $_POST ['gender1'];
$licnaadresa = $_POST['licnaadresa'];
$licniemail = $_POST['licniemail'];
$strucnasprema = $_POST['gender2'];
$sati = $_POST['sati'];
$minute = $_POST['minute'];
//$strucnaspremanaradnom = $_POST['gender3'];
//$datumprijave = $_POST['datumprijave'];

$sql = "INSERT INTO prijava (broj_firme, naziv_firme, adresa_firme, grad_firme, postanskibroj_firme, vrsta_prijave, telefon_firme, email_firme, licni_broj, imei_prezime_korisnika, datum_korisnika, spol, licna_adresa , licni_email , strucna_sprema, sati, minute) VALUES ('$brojfirme', '$nazivfirme','$adresafirme','$gradfirme','$postanskibrojfirme','$prijavaosiguranja', '$telefonfirme', '$emailfirme', '$licnibroj', '$imeiprezimekorisnika', '$datumrodjenjakorisnika', '$spol', '$licnaadresa', '$licniemail', '$strucnasprema', '$sati', '$minute')";

if(!mysqli_query($con, $sql)){
    echo 'Not insered';
}else {
    echo 'Inserted';
}

header ("header: index.php");

?>