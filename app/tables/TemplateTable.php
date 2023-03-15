<?php 
namespace App\Tables;

use App\Tables\Table;

class TemplateTable extends Table {

    public function __construct() {
        parent::__construct();
        $this->table = "Template";
    }
}


?>