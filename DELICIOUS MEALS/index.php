<?php

require_once 'includes/required.scripts.incl.php';

$smarty = new Smarty;

function prosecnaOcena($idUgostiteljskog) {
    global $db;
    
   
    $ocenaRez = $db->rawQueryOne('SELECT
                        FLOOR(SUM(ocena) / COUNT(*)) as prosecna_ocena
                            from komentari_i_ocene
                            WHERE id_ugostiteljskog = '.((int) $idUgostiteljskog) . " GROUP BY id_ugostiteljskog");
    
    return $ocenaRez['prosecna_ocena'] ? $ocenaRez['prosecna_ocena'] : 0;
    
}


$rezUgostiteljskiObjekti = $db->get('ugostiteljski_objekat');
$ugostiteljskiObjekti = []; 


foreach($rezUgostiteljskiObjekti as $v) {
   
    $v['pocetna_slika'] = URL_HOME_IMAGES . $v['pocetna_slika'] . "?t=".time();
    $v['ocena'] = prosecnaOcena($v['id_ugostiteljskog']);
   
    $ugostiteljskiObjekti[$v['tip']][] = $v;
}

$restorani = $ugostiteljskiObjekti['restoran']; 
$picerije = $ugostiteljskiObjekti['picerija'];
$poslasticare = $ugostiteljskiObjekti['poslasticara'];
$kafici = $ugostiteljskiObjekti['kafic'];

$smarty->assign('restorani', $restorani);
$smarty->assign('picerije', $picerije);
$smarty->assign('poslasticare', $poslasticare);
$smarty->assign('kafici', $kafici);
$smarty->assign('APS_PATH_TEMPLATES', APS_PATH_TEMPLATES);
$smarty->assign('URL', URL); 


$smarty->display("home.tpl");
//$parser->setParams(['var_TEST' => 'test parser']);

//echo $parser->parsePage("home.html");

?>