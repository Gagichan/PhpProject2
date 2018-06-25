<?php

include_once ('Includes/dbconfig.php');

$ID = (int) @$_REQUEST['Magacin_ID'];
$upit="select * from Magacin where ID=$ID";

$rezultat = mysqli_query($bp, $upit);
if (!$rezultat){
    die(mysqli_error($bp));
}

$Magacin = mysqli_fetch_object($rezultat);
if (!$Magacin) {
    die('Ne postoji taj magacin');
}
?>
<html>
    <body>
        <h1><?php echo $Magacin->Naziv; ?> - dodavanje robe</h1>
        <form action="roba_dodavanje_db.php" method="post">
            <input type="hidden" name="Magacin_ID" value="<?php echo $Magacin->ID; ?>" />
            Naziv: <input type="text" name="Naziv" /><br />
            Jed. mere:
            <select name="JedinicaMere">
                <option value="kom">Komad</option>
                <option value="kg">Kilogram</option>
            </select><br />
            Kolicina: <input type="number" name="Kolicina" /><br />
            <button type="submit">Dodaj</button>
        </form>
    </body>
</html>