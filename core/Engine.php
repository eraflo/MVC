<?php
namespace Core;

use Core\Config;

use \Smarty;


class Engine extends Smarty {

    public $smarty;
    private $config;


    public function __construct() {
        $this->smarty = new Smarty();
        $this->smarty->setTemplateDir(ROOT.'/app/views/template/dir');
        $this->smarty->setConfigDir(ROOT.'/app/views/config/dir');
        $this->smarty->setCompileDir(ROOT.'/app/views/compile/dir');
        $this->smarty->setCacheDir(ROOT.'/app/views/cache/dir');

        $this->config = new Config(ROOT.'/config/configSmarty.php');
        if($this->config->get("active")) {
            $this->activationConfig();
        }
    }


    private function activationConfig() {
        foreach($this->config->getSettings() as $key => $value) {
            if($value != false && $value != 0 && $key != "active") {
                $this->smarty->$key = $value;
            }
        }
    }



}

?>