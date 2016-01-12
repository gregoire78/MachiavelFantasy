<?php

/**
 * Created by PhpStorm.
 * User: Maillard
 * Date: 08/01/2016
 * Time: 12:36
 */
class page_site
{
    private $_lien;
    private $_nom;

    public function __construct($lien, $nom)
    {
        $this->_lien = $lien;
        $this->_nom = $nom;
    }

    public function getLien()
    {
        return $this->_lien;
    }

    public function getNom()
    {
        return $this->_nom;
    }
    public function afficherNom()
    {
        echo $this->_nom;
    }
    public function afficherLien()
    {
        echo $this->_lien;
    }
}