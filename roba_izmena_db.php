<?php

include_once ('Includes/dbconfig.php');

$Magacin_ID = (int)$_REQUEST['Magazin_ID'];
$ID = (int) @$_REQUEST['ID'];
$Naziv = mysqli_real_escape_string($bp, @$_REQUEST['Naziv']);
$JedinicaMere = mysqli_real_escape_string($bp, @$_REQUEST['JedinicaMere']);
$Kolicina = mysqli_real_escape_string($bp, @$_REQUEST['Kolicina']);

$upit = "update Roba set Naziv='$Naziv', JedinicaMere='$JedinicaMere', Kolicina='$Kolicina' where ID=$ID";
$rezultat = mysqli_query($bp, $upit);
if (!$rezultat) die(mysqli_error($bp));

header("Location: roba_pregled.php?Magacin_ID=$Magacin_ID");