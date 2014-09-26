<?php

ini_set('display_errors', 1);
ERROR_REPORTING(E_ALL);

include_once 'MobileSniffer.php';

class Client
{
    private $mobSniff;

    public function __construct()
    {
        $this->mobSniff = new MobileSniffer();
        echo 'device: ' . $this->mobSniff->procuraDispositivo() . '<br>';
        echo 'browser: ' . $this->mobSniff->procuraBrowser() . '<br>';
    }
}

$trigguer = new Client();