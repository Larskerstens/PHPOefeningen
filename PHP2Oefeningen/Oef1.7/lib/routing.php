<?php

function GoToNoAccess( $app_root )
{
    header("Location: " . $app_root . "/Oef1.7/no_access.php");
    exit;
}

function GoHome( $app_root )
{
    header("Location: " . $app_root . "/Oef1.7/steden.php");
    exit;
}

function GoToPage( $app_root, $page )
{
    header("Location: " . $app_root . "/Oef1.7/$page");
    exit;
}

