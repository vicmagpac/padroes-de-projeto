<?php
// agente de usuário como proprieade do objeto
class MobileSniffer
{
    private $userAgent;
    private $dispositivo;
    private $browser;
    private $dispositivoQuantidade;
    private $browserQuantidade;

    public function __construct()
    {
        $this->userAgent = $_SERVER['HTTP_USER_AGENT'];
        $this->userAgent =  strtolower($this->userAgent);

        $this->dispositivo  = array('iphone', 'ipad', 'android', 'silk', 'blackberry', 'touch');
        $this->browser      = array('firefox', 'chrome', 'opera', 'msle', 'safari');
        $this->dispositivoQuantidade = count($this->dispositivo);
        $this->browserQuantidade     = count($this->browser);
    }

    public function procuraDispositivo()
    {
        for ($i = 0; $i < $this->dispositivoQuantidade; $i++) {
            if (strstr($this->userAgent, $this->dispositivo[$i])) {
                return $this->dispositivo[$i];
            }
        }
    }

    public function procuraBrowser()
    {
        for ($i = 0; $i < $this->browserQuantidade; $i++) {
            if (strstr($this->userAgent, $this->browser[$i])) {
                return $this->browser[$i];
            }
        }
    }
}