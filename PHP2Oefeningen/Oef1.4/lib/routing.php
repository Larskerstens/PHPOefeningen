<?php

function GoToNoAccess()
{
    global $app_root;

    header("Location: " . $app_root . "/Oef1.4/no_access.php");
    exit;
}

function GoHome()
{
    global $app_root;

    header("Location: " . $app_root . "/Oef1.4/steden.php");
    exit;
}

function GoToPage( $page )
{
    global $app_root;

    header("Location: " . $app_root . "/Oef1.4/$page");
    exit;
}

