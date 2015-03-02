<?php
$action = $_REQUEST['action'];
switch ($action) {
    case 'ajouter': {
            include("view/Theme/v_ajouter.php");
            break;
        }
    case 'modifier': {
            include("view/Theme/v_modifier.php");
            break;
        }
    case 'supprimer': {
            include("view/Theme/v_supprimer.php");
            break;
        }
    default: {
        header("view/v_accueil.php");
    }
}
?>