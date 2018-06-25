<?php

include_once ('Includes/dbconfig.php');

$Naziv = mysqli_real_escape_string($bp, @$_REQUEST['Naziv']);

$upit = "insert into Magacin (Naziv) values ('$Naziv')";
$rezultat = mysqli_query($bp, $upit);
if (!$rezultat) {
    die(mysqli_error($bp));
}

header('Location: index.php');