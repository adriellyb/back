<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Republic extends Model
{
    // Adicionando metodos do relacionamento 1:N a model Student
    public function users(){
        return $this->hasMany('App\Student');
    }
}
