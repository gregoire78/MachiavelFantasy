<?php
/**
 * Created by PhpStorm.
 * User: Maillard
 * Date: 03/01/2016
 * Time: 13:59
 */
include_once("includes/start.php");
$lien_site = "/edittype.php";

if(isset($_GET['id']))
{
    $request->enable_super_globals();

    if($_GET['id']<=0)//On vérifie que le jeu existe
    {
        /*-------------------------Message d'erreur----------------------*/
        $site_config['ERROR_PAGE']="Le type de jeu";
        include_once("views/error_page.php");
        /*---------------------------------------------------------------*/
    }
    else
    {
        /*----------------------------------------------------------------*/
        //-----Script pour trouver le type de jeu en base de donnée-------//
        /*----------------------------------------------------------------*/

        /*-------------------------liens----------------------------------*/
        $edittype =array
        (
            //"lien" => $lien_site."?id=".$_GET['id'],
            "libelle" => "Modifier un type de jeu",
        );

        /*--------------------------Page courante------------------------*/
        $site_config['CURRENT_PAGE'] = $edittype;
        /*---------------------------------------------------------------*/

        /*----------------------Chemin pour le breadcrumps---------------*/
        $site_config['BREADCRUMBS'] = array($edittype);
        /*---------------------------------------------------------------*/

        include_once("views/edittype.php");
    }
}
else
{
    /*-------------------------liens----------------------------------*/
    $edittype =array
    (
        //"lien" => $lien_site,
        "libelle" => "Ajouter un type de jeu",
    );
    /*----------------------------------------------------------------*/

    /*--------------------------Page courante------------------------*/
    $site_config['CURRENT_PAGE'] = $edittype;
    /*----------------------------------------------------------------*/

    /*----------------------Chemin pour le breadcrumps---------------*/
    $site_config['BREADCRUMBS'] = array($edittype);
    /*---------------------------------------------------------------*/

    include_once("views/edittype.php");
}
