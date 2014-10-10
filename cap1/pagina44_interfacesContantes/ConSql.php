<?php

require_once './IConnectInfo.php';

class ConSql implements IConnectInfo
{
    private $server = IConnectInfo::HOST;
    private $currentDB = IConnectInfo::DBNAME;
    private $user = IConnectInfo::UNAME;
    private $pass = IConnectInfo::PW;
    
    public function testConnection()
    {
        $hookup = new mysqli($this->server, $this->user, $this->pass, $this->currentDB);
        
        if (mysqli_connect_error()) {
            die("bad mojo");
        }
        
        print "You are hooked up ace! <br>" . $hookup->host_info;
        $hookup->close();
    }
}

$useConstant = new ConSql();
$useConstant->testConnection();