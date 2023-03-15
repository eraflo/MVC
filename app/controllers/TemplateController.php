<?php 
namespace App\Controllers;

use App\Controllers\AppController;
use Core\Db;

class TemplateController extends AppController {

    public function __construct() {
        parent::__construct();
        $this->loadModel("Template");
    }

    public function index() {
        $table = $this->Template->getAll();
        $this->render("template/template", compact("table"));
    }
    
}
