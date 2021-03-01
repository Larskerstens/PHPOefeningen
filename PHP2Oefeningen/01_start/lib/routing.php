<?php

function GoToNoAccess()
{
    global $app_root;

    header("Location: " . $app_root . "/01_start/no_access.php");
    exit;
}

function GoHome()
{
    global $app_root;

    header("Location: " . $app_root . "/01_start/steden.php");
    exit;
}

function GoToPage( $page )
{
    global $app_root;

    header("Location: " . $app_root . "/01_start/$page");
    exit;
}

