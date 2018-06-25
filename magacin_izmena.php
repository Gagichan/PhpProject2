<?php

include_once ('Includes/dbconfig.php');

$ID = (int) @$_REQUEST['ID'];
$upit="select * from Magacin where ID=$ID";

$rezultat = mysqli_query($bp, $upit);
if (!$rezultat) die(mysqli_error($bp));

$Magacin = mysqli_fetch_object($rezultat);
if (!$Magacin){
    die('Ne postoji taj magacin');
}
?>
<html>
    <body>
        <form action="magacin_izmena_db.php" method="post">
            <input type="hidden" name="ID" value="<?php echo $Magacin->ID; ?>" />
            <input type="text" placeholder="Naziv Magacina" name="Naziv" value="<?php echo $Magacin->Naziv; ?>" />
            <button type="submit">Izmeni</button>
        </form>
    </body>
</html>