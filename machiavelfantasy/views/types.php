<?php
/**
 * Created by PhpStorm.
 * User: Maillard
 * Date: 12/01/2016
 * Time: 07:19
 */
include_once("views/overall_header.html");
?>
<?php if(isset($_GET['id'])) { ?>
    <div>
        Un type de jeu
    </div>
<?php }else{ ?>
    <div>
        Tout les catégories
    </div>
<?php } ?>
<?php
include_once("views/overall_footer.html");
?>