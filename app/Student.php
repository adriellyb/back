<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // Adicionando metodos do relacionamento 1:N a model Student
    public function republic(){
        return $this->belongsTo('App\Republic');
    }
}
