<?php 
namespace Core\Controllers;

use \Smarty;
use Core\Engine;

abstract class Controller {

    private $engine;
    protected $viewPath;
    protected $template;



    //Afficher un résultat
    protected function render(string $fichier, array $data = []){
        $this->engine = new Engine();

        //extract($data);


        $this->engine->smarty->assign('title', 'MVC');
        $this->engine->smarty->assign('data', $data);
        $this->engine->smarty->assign('default', $this->viewPath.'layout/'.$this->template.'.tpl');
        $this->engine->smarty->display($this->viewPath.str_replace('.', '/', $fichier).'.tpl');
    }
}
