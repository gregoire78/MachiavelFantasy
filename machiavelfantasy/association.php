<?php
/**
 * Created by PhpStorm.
 * User: Maillard
 * Date: 06/01/2016
 * Time: 18:16
 */
include_once("includes/start.php");

/*-----lien------*/

$association =array
(
    //"lien" => "/association.php",
    "libelle" => "Association",
);
$site_config['CURRENT_PAGE']=$association;

/*----------------------Chemin pour le breadcrumps---------------*/
$site_config['BREADCRUMBS'] = array($association);
/*---------------------------------------------------------------*/

include_once("views/association.php");