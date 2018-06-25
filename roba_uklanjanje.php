<?php

include_once ('Includes/dbconfig.php');
$ID = (int) @$_REQUEST['ID'];

$upit1 = "select * from Roba where ID=$ID";
$rezultat1 = mysqli_query($bp, $upit1);
if (!$rezultat1) die(mysqli_error($bp));

$Roba = mysqli_fetch_object($rezultat1);


$upit = "delete from Roba where ID=$ID";
$rezultat = mysqli_query($bp, $upit);
if (!$rezultat) die(mysqli_error($bp));



header("Location: roba_pregled.php?Magacin_ID=$Roba->Magacin_ID");