<?php 
namespace Core;

use \PDO;
use \PDOException;

use Core\Config;

class Db extends PDO {
    private $config;

    protected $_connexion;

    public function __construct(){
        $this->config = new Config(ROOT.'/config/config.php');
    }  

    public function getPDO() {
        if(!isset($this->config)) {
            $this->config = new Config(ROOT.'/config/config.php');
        }
        try {
            $this->_connexion = new PDO('mysql:host='.$this->config->get('db_host').';dbname='.$this->config->get('db_name').'', $this->config->get('username'), $this->config->get('password'));
        } catch(PDOException $e) {
            echo "Erreur de connexion : ".$e->getMessage();
        }
    }

    public static function getTable($name) {
        $class_name = '\\App\\Tables\\'.ucfirst($name).'Table';
        return new $class_name();
    }

    protected function PDObackquote($value)
    {
        if( is_array($value) )
            return implode(', ', array_map('PDObackquote', $value));
        
        return '`'.str_replace(array('`', '.'), array('``', '`.`'), $value).'`';
    }
}
