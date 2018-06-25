<?php
include_once ('Includes/dbconfig.php');

$Magacin_ID = mysqli_real_escape_string($bp, @$_REQUEST['Magacin_ID']);
$Naziv = mysqli_real_escape_string($bp, @$_REQUEST['Naziv']);
$JedinicaMere = mysqli_real_escape_string($bp, @$_REQUEST['JedinicaMere']);
$Kolicina = mysqli_real_escape_string($bp, @$_REQUEST['Kolicina']);


/**$check="select * from Magacin where Magacin_ID='$Magacin_ID' and Naziv=$Naziv ";
$query1=mysqli_query($bp, $check);
if (!$query1){
    echo "Nema tog naziva";
    die(mysqli_error($bp));
} else {
    $upit = "insert into Roba (Magacin_ID, Naziv, JedinicaMere, Kolicina) values ('$Magacin_ID','$Naziv','$JedinicaMere','$Kolicina')";

    $rezultat = mysqli_query($bp, $upit);
    if (!$rezultat){
        die(mysqli_error($bp));
    }
}**/

$upit = "insert into Roba (Magacin_ID, Naziv, JedinicaMere, Kolicina) values ('$Magacin_ID','$Naziv','$JedinicaMere','$Kolicina')";

$rezultat = mysqli_query($bp, $upit);
if (!$rezultat){
    die(mysqli_error($bp));
}
header("Location: roba_pregled.php?Magacin_ID=$Magacin_ID");

/**$upit = "if ($Naziv == $Naziv and $Magacin_ID == $Magacin_ID )"
        . "{update Roba set JedinicaMere='$JedinicaMere', Kolicina='$Kolicina' where Naziv = $Naziv and Magacin_ID = $Magacin_ID}"
        ."else {insert into Roba (Magacin_ID, Naziv, JedinicaMere, Kolicina)"
	."values ('$Magacin_ID','$Naziv','$JedinicaMere','$Kolicina')}";**/