<?php

//print json_encode($_SERVER); exit;
$request_uri = explode("/", $_SERVER['REQUEST_URI']);
$app_root = "/" . $request_uri[1] . "/" . $request_uri[2];

require_once "connection_data.php";
require_once "pdo.php";
require_once "html_functions.php";
require_once "form_elements.php";
require_once "sanitize.php";
require_once "validate.php";
require_once "security.php";
require_once "routing.php";
require_once "strings.php";

//model classes
require_once $_SERVER['DOCUMENT_ROOT'] . "/PHP/PHP2Oefeningen/Oef1.3/models/Fruit.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/PHP/PHP2Oefeningen/Oef1.3/models/Aardbei.php";

require_once $_SERVER['DOCUMENT_ROOT'] . "/PHP/PHP2Oefeningen/Oef1.3/models/city.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/PHP/PHP2Oefeningen/Oef1.3/models/User.php";

//services
require_once $_SERVER['DOCUMENT_ROOT'] . "/PHP/PHP2Oefeningen/Oef1.3/services/MessageService.php";

session_start();

require_once "access_control.php";

//initialze MessageService
$ms = new MessageService();

//initialize $old_post
$old_post = [];

if ( key_exists( 'OLD_POST', $_SESSION ) AND is_array( $_SESSION['OLD_POST']) )
{
    $old_post = $_SESSION['OLD_POST'];
    $_SESSION['OLD_POST'] = [];
}
