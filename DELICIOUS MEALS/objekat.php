<?php

require_once 'includes/required.scripts.incl.php';

$id = $_REQUEST['id']; 

$lokal = $db->rawQueryOne('SELECT * FROM delicious_meals.ugostiteljski_objekat WHERE id_ugostiteljskog = '.$id.';');

$menuitem = $db->rawQuery('SELECT * FROM delicious_meals.meni WHERE id_ugostiteljskog = '.$id.';');

$comments = $db->rawQuery('SELECT * FROM delicious_meals.komentari_i_ocene WHERE id_ugostiteljskog = '.$id.';');


$smarty = new Smarty;

$smarty->assign('lokal', $lokal);
$smarty->assign('menuitem', $menuitem);
$smarty->assign('comments', $comments);

$smarty->assign('APS_PATH_TEMPLATES', APS_PATH_TEMPLATES);
$smarty->assign('URL', URL);
$smarty->display("objekat.tpl");

?>