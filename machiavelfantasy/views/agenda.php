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
        Event <?=$_GET['id'];?>
    </div>
<?php }else{ ?>
    <div>
        Tout les events
    </div>
<?php } ?>

<?php
include_once("views/overall_footer.html");
?>