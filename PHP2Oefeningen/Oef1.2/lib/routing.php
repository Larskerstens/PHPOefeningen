<?php

function GoToNoAccess()
{
    global $app_root;

    header("Location: " . $app_root . "/Oef1.2/no_access.php");
    exit;
}

function GoHome()
{
    global $app_root;

    header("Location: " . $app_root . "/Oef1.2/steden.php");
    exit;
}

function GoToPage( $page )
{
    global $app_root;

    header("Location: " . $app_root . "/Oef1.2/$page");
    exit;
}

