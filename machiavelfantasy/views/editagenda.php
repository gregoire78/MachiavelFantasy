<?php
/**
 * Created by PhpStorm.
 * User: Maillard
 * Date: 12/01/2016
 * Time: 07:19
 */
include_once("views/overall_header.html");
?>
<div>
    <?php if(isset($_GET['id'])) { ?>
        modif event
    <?php }else{ ?>
        create event
    <?php } ?>
</div>
<?php
include_once("views/overall_footer.html");
?>