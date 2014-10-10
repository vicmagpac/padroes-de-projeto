<?php

interface IConnectInfo
{
    const HOST = "localhost";
    const UNAME = "root";
    const DBNAME = "nomeDoBanco";
    const PW = "senha";
    
    function testConnection();
}