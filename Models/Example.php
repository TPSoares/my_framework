<?php

namespace Models;

use \Core\Model;

class Example extends Model {
    var $table = 'exemplo';
    
    public function create($data, $table = null) {
        return parent::create($data, $this->table);
    }
}