<?php

function GoToNoAccess( $app_root )
{
    header("Location: " . $app_root . "/Oef2.1/no_access.php");
    exit;
}

function GoHome( $app_root )
{
    header("Location: " . $app_root . "/Oef2.1/steden.php");
    exit;
}

function GoToPage( $app_root, $page )
{
    header("Location: " . $app_root . "/Oef2.1/$page");
    exit;
}

