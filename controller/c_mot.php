<?php
$action = $_REQUEST['action'];
switch ($action) {
    case 'ajouter': {
            include("view/Mot/v_ajouter.php");
            break;
        }
    case 'modifier': {
            include("view/Mot/v_modifier.php");
            break;
        }
    case 'supprimer': {
            include("view/Mot/v_supprimer.php");
            break;
        }
    default :{
        include("view/Mot/v_gerer.php");
    }
}
?>