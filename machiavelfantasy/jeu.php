<?php
/**
 * Created by PhpStorm.
 * User: Maillard
 * Date: 06/01/2016
 * Time: 18:16
 */
include_once("includes/start.php");
/*------------------lien de base--------------------*/
$jeux =array
(
    "lien" => "/types.php",
    "libelle" => "Jeux"
);
/*-------------------------------------------------*/

if(isset($_GET["id"]))
{
    $request->enable_super_globals();


    if($_GET['id']<=0)//On vérifie que le jeu existe-------------------------
    {
        /*-------------------------Message d'erreur----------------------*/
        $site_config['ERROR_PAGE']="Le jeu";
        /*--------------------------------------------------------------*/

        include_once("views/error_page.php");
    }
    else
    {
        /*-----------------------------------------------------------------------------*/
        //Script pour récupérer toutes les donnée du jeu du même type en base de donnée//

        $libelle_jeu = "Jeu ".$_GET['id'];

        $lien_categorie = 1;
        $libelle_categorie = "Catégorie 1";
        /*-----------------------------------------------------------------------------*/

        /*-------------------------------liens----------------------------*/
        $categorie =array
        (
            "lien" => "/types.php?id=".$lien_categorie,
            "libelle" => $libelle_categorie,
        );
        $jeu =array
        (
            //"lien" => "jeu.php?id=".$_GET['id'],
            "libelle" => $libelle_jeu,
        );
        /*---------------------------------------------------------------*/

        /*--------------------------Page courante------------------------*/
        $site_config['CURRENT_PAGE'] = $jeu;
        /*---------------------------------------------------------------*/

        /*----------------------Chemin pour le breadcrumps---------------*/
        $site_config['BREADCRUMBS'] = array($jeux, $categorie, $jeu);
        /*---------------------------------------------------------------*/

        include_once("views/jeu.php");
    }
}
else
{
    header("location:types.php");
}