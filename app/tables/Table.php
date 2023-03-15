<?php 
namespace App\Tables;

use Core\Models\IModel;
use Core\Models\Model;

class Table extends Model implements IModel {
    

    public function __construct() {
        if(is_null($this->table)) {
            $parts = explode('\\', get_class($this));
            $class_name = end($parts);
            $this->table = strtolower(str_replace('Table', '', $class_name));
        }
    }

}


?>