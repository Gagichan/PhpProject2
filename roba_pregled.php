<?php

include_once ('Includes/dbconfig.php');

$ID = (int) @$_REQUEST['Magacin_ID'];
$rezultat = mysqli_query($bp, "select * from Magacin where ID=$ID");
if (!$rezultat) die(mysqli_error($bp));

$Magacin = mysqli_fetch_object($rezultat);
if (!$Magacin) die('Ne postoji taj magacin');
?>
<html>
    <body>
        <h1><?php echo $Magacin->Naziv; ?> - dodavanje robe</h1>
        <table border=1>
            <tr>
                <td>ID</td>
                <td>Naziv</td>
                <td>JedinicaMere</td>
                <td>Kolicina</td>
            </tr>
            <?php
            $rezultat = mysqli_query($bp, "select * from Roba where Magacin_ID={$Magacin->ID} order by Naziv asc");
            if (!$rezultat) die(mysqli_error($bp));
            while ($red = mysqli_fetch_object($rezultat))
            {
                echo "<tr>";
                echo "<td>{$red->ID}</td>";
                echo "<td>{$red->Naziv}</td>";
                echo "<td>{$red->JedinicaMere}</td>";
                echo "<td>{$red->Kolicina}</td>";
                echo "<td><a href='roba_izmena.php?ID={$red->ID}'>Izmena</a></td>";
                echo "<td><a href='roba_uklanjanje.php?ID={$red->ID}'  onclick = 'if(!confirm(\"Da li ste sigurni\")) return false;'>Uklanjanje</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
        <a href="roba_dodavanje.php?Magacin_ID=<?php echo $Magacin->ID; ?>">Dodavanje robe</a>
        <a href="index.php">Magacini</a>
    </body>
</html>