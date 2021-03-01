<?php

function GoToNoAccess()
{
    global $app_root;

    header("Location: " . $app_root . "/Oef1.1/no_access.php");
    exit;
}

function GoHome()
{
    global $app_root;

    header("Location: " . $app_root . "/Oef1.1/steden.php");
    exit;
}

function GoToPage( $page )
{
    global $app_root;

    header("Location: " . $app_root . "/Oef1.1/$page");
    exit;
}

