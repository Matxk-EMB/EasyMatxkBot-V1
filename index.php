<?php

require 'requests.php';

$api = $_GET['api'];
$idadmin = $_GET['admin'];
$adminID = $idadmin;
$userbot = $_GET['userbot'];


$content = file_get_contents("php://input");
$update = json_decode($content, true);


require 'config.php';
require 'comandi.php';



foreach($plugins as $plugin => $active)
{
if($active) include($plugin);
}









?>