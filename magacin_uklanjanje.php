<?php

include_once ('Includes/dbconfig.php');


$ID = (int) @$_REQUEST['ID'];

$upit = "delete from Magacin where ID=$ID";
$rezultat = mysqli_query($bp, $upit);
if (!$rezultat){
    die(mysqli_error($bp));
}

header('Location: index.php');