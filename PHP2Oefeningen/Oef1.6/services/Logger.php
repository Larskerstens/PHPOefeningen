<?php

class Logger
{
    private $fp;
    private $logfile;

    public function __construct()
    {
        global $app_root;

        $this->logfile = $_SERVER['DOCUMENT_ROOT'] . $app_root . "/PHP/PHP2Oefeningen/Oef1.5/log/log.txt";
        $this->fp = fopen( $this->logfile, "a+");
    }

    public function Log( $msg )
    {
        fwrite( $this->fp, $msg . "\r\n" );
    }

    public function ShowLog()
    {
        return file_get_contents( $this->logfile );
    }
}