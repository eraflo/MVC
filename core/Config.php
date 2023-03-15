<?php
namespace Core;

class Config {
    private $settings = [];

    public function __construct($fichier) {
        $this->settings = require $fichier;
    }

    public function get($name) {
        if(!isset($this->settings[$name])) {
            return null;
        }
        return $this->settings[$name];
    }

    public function getSettings() {
        return $this->settings;
    }
}


?>