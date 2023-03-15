<?php 
namespace Core\Controllers;

use \Smarty;

abstract class Controller {

    private $smarty;
    protected $viewPath;
    protected $template;



    //Afficher un résultat
    protected function render(string $fichier, array $data = []){
        $this->smarty = new Smarty();
        $this->smarty->setTemplateDir(ROOT.'/views/template/dir');
        $this->smarty->setConfigDir(ROOT.'/views/config/dir');
        $this->smarty->setCompileDir(ROOT.'/views/compile/dir');
        $this->smarty->setCacheDir(ROOT.'/views/cache/dir');

        //extract($data);


        $this->smarty->assign('title', 'MVC');
        $this->smarty->assign('data', $data);
        $this->smarty->assign('default', $this->viewPath.'layout/'.$this->template.'.tpl');
        $this->smarty->display($this->viewPath.str_replace('.', '/', $fichier).'.tpl');
    }
}
