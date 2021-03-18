<?php
//print json_encode($_SERVER); exit;
$request_uri = explode("/", $_SERVER['REQUEST_URI']);
$app_root = "/" . $request_uri[1] . "/" . $request_uri[2];
$logfile = $_SERVER['DOCUMENT_ROOT'] . $app_root . "/PHP/PHP2Oefeningen/Oef1.6/log/log.txt";
$dbconfig = [ "server" => "localhost", "user" => "root", "password" => "lars123", "database" => "steden" ];