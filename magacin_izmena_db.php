<?php

include_once ('Includes/dbconfig.php');

$ID = (int) @$_REQUEST['ID'];
$Naziv = mysqli_real_escape_string($bp, @$_REQUEST['Naziv']);

$upit = "update Magacin set Naziv='$Naziv' where ID=$ID";
$rezultat = mysqli_query($bp, $upit);
if (!$rezultat) {
    die(mysqli_error($bp));
}

header('Location: index.php');