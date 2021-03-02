<?php

function GoToNoAccess()
{
    global $app_root;

    header("Location: " . $app_root . "/Oef1.3/no_access.php");
    exit;
}

function GoHome()
{
    global $app_root;

    header("Location: " . $app_root . "/Oef1.3/steden.php");
    exit;
}

function GoToPage( $page )
{
    global $app_root;

    header("Location: " . $app_root . "/Oef1.3/$page");
    exit;
}

