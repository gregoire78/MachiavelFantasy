<?php
/**
 * Created by PhpStorm.
 * User: Maillard
 * Date: 03/01/2016
 * Time: 14:48
 */
include_once("models/connect.php");
include_once("includes/config_site.php");

$user->session_begin();
$auth->acl($user->data);
$user->setup('');

$site_config=site_config();
echo $site_config['ROOT_PATH'];
