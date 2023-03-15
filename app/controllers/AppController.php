<?php 
namespace App\Controllers;

use Core\Controllers\Controller;
use Core\Controllers\IController;
use Core\Db;

abstract class AppController extends Controller implements IController {

    protected $template = 'default';

    public function __construct() {
        $this->viewPath = ROOT.'/app/views/';
    }
    
    protected function loadModel($model_name) {
        $this->$model_name = Db::getTable($model_name);
        $this->$model_name->getPDO();
    }

}
