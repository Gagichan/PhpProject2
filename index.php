<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table border=1>
            <tr>
                <td>ID</td>
                <td>Magacin</td>
                <td></td>
                <td></td>
            </tr>
            <?php
            include_once ('Includes/dbconfig.php');

            $rezultat = mysqli_query($bp, 'select * from Magacin order by Naziv asc');
            if (!$rezultat) die(mysqli_error($bp));
            

            while ($red = mysqli_fetch_object($rezultat))
            {
                echo "<tr>";
                echo "<td>{$red->ID}</td>";
                echo "<td>{$red->Naziv}</td>";
                echo "<td><a href='magacin_izmena.php?ID={$red->ID}'>Izmena</a></td>";
                echo "<td><a href='magacin_uklanjanje.php?ID={$red->ID}'  onclick = 'if(!confirm(\"da li ste sigurni\")) return false;'>Uklanjanje</a></td>";
                echo "<td><a href='roba_dodavanje.php?Magacin_ID={$red->ID}'>Dodavanje robe</a></td>";
                echo "<td><a href='roba_pregled.php?Magacin_ID={$red->ID}'>Pregled robe</a></td>";
                echo "</tr>";
            }
            echo "<a href = 'dodavanje_magacin.html'>Dodavanje magacina</a>";
        ?>
    </body>
</html>
