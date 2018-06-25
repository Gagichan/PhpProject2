<?php

include_once ('Includes/dbconfig.php');

$ID = (int) @$_REQUEST['ID'];

$rezultat = mysqli_query($bp, "select * from Roba where ID=$ID");
if (!$rezultat) die(mysqli_error($bp));

$Roba = mysqli_fetch_object($rezultat);
if (!$Roba) die('Ne postoji taj magacin');
?>
<html>
    <body>
        <form action="roba_izmena_db.php" method="post">
            <input type="hidden" name="ID" value="<?php echo $Roba->ID; ?>" />
            <input type="hidden" name="Magazin_ID" value="<?php echo $Roba->Magacin_ID; ?>" />
            
            Naziv: <input type="text" name="Naziv" value="<?php echo $Roba->Naziv; ?>" /><br />
            Jed. mere:
            <select name="JedinicaMere">
                <option value="kom" <?php if ($Roba->JedinicaMere == 'kom') echo 'selected'; ?>>Komad</option>
                <option value="kg" <?php if ($Roba->JedinicaMere == 'kg') echo 'selected'; ?>>Kilogram</option>
            </select><br />
            Kolicina: <input type="number" name="Kolicina" value="<?php echo $Roba->Kolicina; ?>" /><br />
            <button type="submit">
                Izmena
            </button>
        </form>
    </body>
</html>