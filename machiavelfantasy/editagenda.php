<?php
/**
 * Created by PhpStorm.
 * User: Maillard
 * Date: 06/01/2016
 * Time: 18:16
 */
include_once("includes/start.php");
$lien_site = "/editagenda.php";

if(isset($_GET['id']))
{
    $request->enable_super_globals();

    if($_GET['id']<=0)//On vérifie que le jeu existe
    {
        /*-------------------------Message d'erreur----------------------*/
        $site_config['ERROR_PAGE']="L'événement";
        include_once("views/error_page.php");
        /*---------------------------------------------------------------*/
    }
    else
    {
        /*----------------------------------------------------------------*/
        //-------Script pour trouver l'événement en base de donnée--------//
        /*----------------------------------------------------------------*/

        /*-------------------------liens----------------------------------*/
        $editagenda =array
        (
            //"lien" => $lien_site."?id=".$_GET['id'],
            "libelle" => "Modifier un événement",
        );

        /*--------------------------Page courante------------------------*/
        $site_config['CURRENT_PAGE'] = $editagenda;
        /*---------------------------------------------------------------*/

        /*----------------------Chemin pour le breadcrumps---------------*/
        $site_config['BREADCRUMBS'] = array($editagenda);
        /*---------------------------------------------------------------*/

        include_once("views/editagenda.php");
    }
}
else
{
    /*-------------------------liens----------------------------------*/
    $editagenda =array
    (
        //"lien" => $lien_site,
        "libelle" => "Ajouter un événement",
    );
    /*----------------------------------------------------------------*/

    /*--------------------------Page courante------------------------*/
    $site_config['CURRENT_PAGE'] = $editagenda;
    /*----------------------------------------------------------------*/

    /*----------------------Chemin pour le breadcrumps---------------*/
    $site_config['BREADCRUMBS'] = array($editagenda);
    /*---------------------------------------------------------------*/

    include_once("views/editagenda.php");
}