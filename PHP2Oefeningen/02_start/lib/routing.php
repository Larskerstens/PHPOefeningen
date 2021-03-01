<?php

function GoToNoAccess()
{
    global $app_root;

    header("Location: " . $app_root . "/02_start/no_access.php");
    exit;
}

function GoHome()
{
    global $app_root;

    header("Location: " . $app_root . "/02_start/steden.php");
    exit;
}

function GoToPage( $page )
{
    global $app_root;

    header("Location: " . $app_root . "/02_start/$page");
    exit;
}

