<?php
//print json_encode($_SERVER); exit;

$logfile = $_SERVER['DOCUMENT_ROOT'] . $app_root . "/log/log.txt";
$debuglogfile = $_SERVER['DOCUMENT_ROOT'] . $app_root . "/log/debug.txt";
$dbconfig = [ "server" => "localhost", "user" => "root", "password" => "lars123", "database" => "steden" ];