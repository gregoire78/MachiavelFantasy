<?php
/**
 * Created by PhpStorm.
 * User: Maillard
 * Date: 12/01/2016
 * Time: 07:19
 */
$site_config['CURRENT_PAGE']=array("libelle" => $site_config['L_INFORMATION']);
include_once("views/overall_header.html");
?>
<p><?=sprintf("%s que vous avez tenté d’atteindre n'existe pas.",$site_config['ERROR_PAGE']);?></p>
<?php
include_once("views/overall_footer.html");
?>