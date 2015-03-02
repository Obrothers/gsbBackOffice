<?php

require_once("includes/fct.inc.php");
require_once ("includes/class.pdogsb.inc.php");
$pdo = PdoGsb::getPdoGsb();
include("view/includes/header.php");
if (empty($_REQUEST['uc'])) {
    $_REQUEST['uc'] = 'accueil';
}
$uc = $_REQUEST['uc'];
switch ($uc) {
    case 'accueil': {
            include("controller/c_accueil.php");
            break;
        }
    case 'theme': {
            include("controller/c_theme.php");
            break;
        }
    case 'mot': {
            include("controller/c_mot.php");
            break;
        }
}
include("view/includes/footer.php");
?>