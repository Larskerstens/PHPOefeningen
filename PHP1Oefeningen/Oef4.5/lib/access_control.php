<?php
CheckAccess();

function CheckAccess()
{
    global $public_access;

    if ( ! $public_access AND ! isset($_SESSION['user']) )
    {
        GoToNoAccess();
    }
}

function GoToNoAccess()
{
    global $app_root;

    header("Location: " . $app_root . "/Oef4.5/no_access.php");
    exit;
}

