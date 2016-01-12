<?php
/**
 * Created by PhpStorm.
 * User: Maillard
 * Date: 03/01/2016
 * Time: 13:59
 */
include_once("includes/start.php");

/*-------------------lien de base-----------------*/
$lien_site = "/agenda.php";
$agenda = array
(
    "lien" => $lien_site,
    "libelle" => "Agenda"
);
/*------------------------------------------------*/


if(isset($_GET["id"]))
{
    $request->enable_super_globals();

    if($_GET["id"]<=0)//On verifie que l'événement existe
    {
        /*-------------------------Message d'erreur----------------------*/
        $site_config['ERROR_PAGE']="L'événement";
        include_once("views/error_page.php");
        /*--------------------------------------------------------------*/
    }
    else //Sinon on recherche les donnée de l'événement------------------
    {
        /*----------------------------------------------------------------*/
        //-------Script pour trouver l'événement en base de donnée--------//
        $title_event = "Evénement ".$_GET['id'];
        /*----------------------------------------------------------------*/

        /*-------------------------liens----------------------------------*/
        $event = array
        (
            "libelle" => $title_event,
        );
        /*---------------------------------------------------------------*/

        /*-------------------------Page courante-------------------------*/
        $site_config['CURRENT_PAGE'] = $event;
        /*---------------------------------------------------------------*/

        /*----------------------Chemin pour le breadcrumps---------------*/
        $site_config['BREADCRUMBS'] = array($agenda, $event);
        /*---------------------------------------------------------------*/

        include_once("views/agenda.php");
    }

}
else //On recherche tout les évenements en base de donnée------------------*/
{
    /*---------------------------------------------------------------------*/
    //---Script pour trouver les événements non passé en base de donnée----//
    /*---------------------------------------------------------------------*/

    /*-------------------------Page courante-------------------------*/
    $site_config['CURRENT_PAGE'] = $agenda;
    /*---------------------------------------------------------------*/

    include_once("views/agenda.php");
}
