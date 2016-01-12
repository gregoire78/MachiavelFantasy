<?php
/**
 * Created by PhpStorm.
 * User: Maillard
 * Date: 06/01/2016
 * Time: 18:16
 */
include_once("includes/start.php");
$lien_site = "/editjeu.php";

if(isset($_GET['id']))
{
    $request->enable_super_globals();

    if($_GET['id']<=0)//On vérifie que le jeu existe
    {
        /*-------------------------Message d'erreur----------------------*/
        $site_config['ERROR_PAGE']="Le jeu";
        include_once("views/error_page.php");
        /*---------------------------------------------------------------*/
    }
    else
    {
        /*----------------------------------------------------------------*/
        //----------Script pour trouver le jeu en base de donnée----------//
        /*----------------------------------------------------------------*/

        /*-------------------------liens----------------------------------*/
        $editjeu =array
        (
            //"lien" => $lien_site."?id=".$_GET['id'],
            "libelle" => "Modifier un jeu",
        );

        /*--------------------------Page courante------------------------*/
        $site_config['CURRENT_PAGE'] = $editjeu;
        /*---------------------------------------------------------------*/

        /*----------------------Chemin pour le breadcrumps---------------*/
        $site_config['BREADCRUMBS'] = array($editjeu);
        /*---------------------------------------------------------------*/

        include_once("views/editjeu.php");
    }
}
else
{
    /*-------------------------liens----------------------------------*/
    $editjeu =array
    (
        //"lien" => $lien_site,
        "libelle" => "Ajouter un jeu",
    );
    /*----------------------------------------------------------------*/

    /*--------------------------Page courante------------------------*/
    $site_config['CURRENT_PAGE'] = $editjeu;
    /*----------------------------------------------------------------*/

    /*----------------------Chemin pour le breadcrumps---------------*/
    $site_config['BREADCRUMBS'] = array($editjeu);
    /*---------------------------------------------------------------*/

    include_once("views/editjeu.php");
}