<?php
/**
 * Created by PhpStorm.
 * User: Maillard
 * Date: 06/01/2016
 * Time: 18:16
 */
include_once("includes/start.php");

/*-------------------lien de base------------------*/
$lien_site = "/types.php";
$jeux =array
(
    "lien" => $lien_site,
    "libelle" => "Jeux"
);
/*------------------------------------------------*/

if(isset($_GET['id']))
{
    $request->enable_super_globals();

    if($_GET['id']<=0)//On verifie que le types de jeu existe
    {
        /*-------------------------Message d'erreur----------------------*/
        $site_config['ERROR_PAGE']="Le type de jeu";
        include_once("views/error_page.php");
        /*--------------------------------------------------------------*/
    }
    else //Sinon on recherche tout les jeux de cette catégorie-------------------------
    {
        /*----------------------------------------------------------------*/
        //Script pour trouver tout les jeux du même type en base de donnée//
        $libelle_categorie = "Catégorie ".$_GET['id'];
        /*----------------------------------------------------------------*/

        /*------------------------liens-----------------------------------*/
        $categorie = array
        (
            //"lien" => $lien_site."?id=".$_GET['id'],
            "libelle" => $libelle_categorie,
        );
        /*---------------------------------------------------------------*/

        /*--------------------------Page courante------------------------*/
        $site_config['CURRENT_PAGE'] = $categorie;
        /*---------------------------------------------------------------*/

        /*----------------------Chemin pour le breadcrumps---------------*/
        $site_config['BREADCRUMBS'] = array($jeux, $categorie);
        /*---------------------------------------------------------------*/

        include_once("views/types.php");
    }

}
else
{
    $request->enable_super_globals();

    /*--------------------------------------------------------------*/
    //Script pour trouver tout les types de jeu de la base de donnée//
    /*--------------------------------------------------------------*/

    /*--------------------------Page courante----------------------*/
    $site_config['CURRENT_PAGE'] = $jeux;
    /*------------------------------------------------------------*/

    include_once("views/types.php");
}
